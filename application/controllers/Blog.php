<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends Admin_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_blog');
        $this->load->library('upload');
    }
    public function index()
    {
        $data['blog'] = $this->Model_blog->getblogby_userid();
        $this->load->view('userblog/index', $data);
    }
    function add()
    {
        date_default_timezone_set('Asia/Kolkata');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('desc', 'Description', 'required');

        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'jpg|png|JPEG|jpeg|JPG|PNG';
        $config['encrypt_name'] = true;
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('image')) {
            $error = ['error' => $this->upload->display_errors('<p>', '</p>')];
        $this->load->view('include/header');

            $this->load->view('userblog/add', $error);
        $this->load->view('include/footer');

        } else {
            if ($this->form_validation->run() == true) {
                $this->upload->do_upload('image');
                $data = $this->upload->data();
                $image = base_url(
                    'images/' . $data['raw_name'] . $data['file_ext']
                );
                $params = [
                    'title' => $this->input->post('title'),
                    'category' => $this->input->post('category'),
                    'created' => date('d-m-Y H:i:s a'),
                    'description' => $this->input->post('desc'),
                    'attachment' => $image,
                    'user_id' => $this->session->userdata('id'),
                ];
                $this->Model_blog->add_blog($params);
                $this->session->set_flashdata(
                    'success',
                    '<div class="alert alert-success">Blog Added successfully. </div>'
                );
                redirect('Welcome/index');
            } else {
        $this->load->view('include/header');
                $this->load->view('userblog/add');
        $this->load->view('include/footer');
                
            }
        }
    }
    function userindex()
    {
        $data['blog'] = $this->Model_blog->getblogby_userid();
        $this->load->view('include/header');
        $this->load->view('userblog/index', $data);
        $this->load->view('include/footer');

    }

    // code for edit post
    function edit($blog_id)
    {
        $this->form_validation->set_rules('post_title', 'Title', 'required');
        $this->form_validation->set_rules(
            'post_category',
            'Category',
            'required'
        );
        $this->form_validation->set_rules(
            'post_subject',
            'Subject',
            'required'
        );
        $this->form_validation->set_rules(
            'post_description',
            'Description',
            'required|min_length[50]|max_length[2000]'
        );

        // check if the post exists before trying to edit it

        $data['post'] = $this->Model_blog->get_post($blog_id);

        if (isset($data['post']['blog_id'])) {
                          

            if (isset($_POST) && count($_POST) > 0) {
				$config['upload_path'] = './images/';
        $config['allowed_types'] = 'jpg|png|JPEG|jpeg|JPG|PNG';
        $config['encrypt_name'] = true;
        $this->upload->initialize($config);
                if (!$this->upload->do_upload('image')) {
                    $error = [
                        'error' => $this->upload->display_errors('<p>', '</p>'),
                    ];
                    show_error($error);
                } else {
                    $this->upload->do_upload('image');
                    $data = $this->upload->data();
                    $images = base_url(
                        'images/' . $data['raw_name'] . $data['file_ext']
                    );
                    $params = [
                        'title' => $this->input->post('post_title'),
                        'category' => $this->input->post('post_category'),
                        'description' => $this->input->post('post_description'),
                        'attachment' => $images,
                        'user_id' => $this->session->userdata('id'),
                    ];

                    $this->Model_blog->update_post($blog_id, $params);
                    $this->session->set_flashdata(
                        'success',
                        '<div class="alert alert-success">post edited successfully  </div>'
                    );
                    redirect('Blog/userindex');
                }
            } else {
                $this->load->view('include/header');
                $data['_view'] = 'userblog/edit';
                $this->load->view('userblog/edit', $data);
                $this->load->view('include/footer');
         
            }
        } else {
            show_error('The post you are trying to edit does not exist.');
        }
    }

    // function for blog remove
    function remove($blog_id)
    {
        $blog = $this->Model_blog->get_post($blog_id);

        // check if the notice exists before trying to delete it
        if (isset($blog['blog_id'])) {
            $this->Model_blog->delete_post($blog_id);
            $this->session->set_flashdata(
                'danger',
                '<div class="alert alert-danger ">post removed successfully</div>'
            );
            redirect('welcome/index');
        } else {
            show_error('The post you are trying to delete does not exist.');
        }
    }
}