
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
        </div>
    </div>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Class</h3>
                    </div>
                    <?php echo form_open_multipart('Blog/edit/'.$post['blog_id']); ?>
                    <div class="card-body">
                        <div class="row container-fluid">

                            <div class="col-md-8">
                                <label for="classroom" class="control-label">Title</label>
                                <div class="form-group">
                                    <input type="text" name="post_title"
                                        value="<?php echo ($this->input->post('title') ? $this->input->post('title') : $post['title']); ?>"
                                        class="form-control" id="title" />
                                    <span style="color:red"><?php echo form_error('post_title'); ?></span>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <label for="category" class="control-label">Category</label>
                                <div class="form-group">
                                    <select class="form-control" name="post_category">
                                        <option disabled>Select a category</option>
                                        <option value="Programming">Programming</option>
                                        <option value="Sports">Sports</option>
                                        <option value="Science">Science</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <label for="description" class="control-label">description</label>
                                <div class="form-group">
                                    <input type="text" name="post_description"
                                        value="<?php echo ($this->input->post('description') ? $this->input->post('description') : $post['description']); ?>"
                                        class="form-control" id="description" />
                                    <span style="color:red"><?php echo form_error('post_description'); ?></span>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <label for="image" class="control-label">file</label>
                                <div class="form-group">
                                    <input type="file" accept="image/*" name="image" />
                                    <span style="color:red"><?php echo form_error('image'); ?></span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary" style="margin-left:20px; margin-bottom:10px">
                            <i class="fa fa-check"></i> Save
                        </button>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>

    </section>




</div>