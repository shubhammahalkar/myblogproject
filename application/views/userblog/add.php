<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

            </div>
        </div>
    </div>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Post</h3>
                    </div>
                    <?php echo form_open_multipart('Blog/add'); ?>

                    <div class="card-body">
                        <div class="row container-fluid">
                            <div class="col-md-8">
                                <label for="title" class="control-label">Title</label>
                                <div class="form-group">
                                    <input type="text" placeholder="Enter title" name="title" class="form-control"
                                        id=" title" />
                                    <span style="color:red"><?php echo form_error('title'); ?></span>

                                </div>
                            </div>

                            <div class="col-md-8">
                                <label for="category" class="control-label">Category</label>
                                <div class="form-group">
                                    <select class="form-control" name="category">
                                        <option disabled>Select a category</option>
                                        <option value="Programming">Programming</option>
                                        <option value="Sports">Sports</option>
                                        <option value="Science">Science</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <label for="description" class="control-label">Description</label>
                            <div class="form-group">
                                <input type="text" placeholder="Enter description " name="desc" class="form-control" />
                                <span style="color:red"><?php echo form_error('desc'); ?></span>

                            </div>
                        </div>
                        <div class="col-md-8">
                            <label for="image" class="control-label">file</label>
                            <div class="form-group">
                                <input type="file" name="image" />
                                <span style="color:red"><?php echo form_error('image'); ?></span>

                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary" style="margin-left:20px; margin-bottom:10px">
                            Submit
                        </button>
                    </div>
                    <?php echo form_close(); ?>

                </div>
            </div>

        </div>
</div>

</section>
</div>