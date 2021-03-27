<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends Admin_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_blog');
    }


    public function index()
    {
        $data['blog'] = $this->Model_blog->get_all_blog();
        $this->load->view('include/header');
        $this->load->view('home', $data);
        $this->load->view('include/footer');

    }
}
	