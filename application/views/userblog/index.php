<div class="content-wrapper">
    <div class="content-header">
    </div>

    <section class="content">
        <div class="container-fluid">
            <!-----flash messages--->
            <div class="container-fluid">
                <div id="mydivs">
                    <?php echo $this->session->flashdata('success'); ?>

                    <script>
                    setTimeout(function() {
                        $('#mydivs').hide('fast');
                    }, 3000);
                    </script>
                </div>
                <div id="mydiv1">
                    <?php echo $this->session->flashdata('danger'); ?>

                    <script>
                    setTimeout(function() {
                        $('#mydiv1').hide('fast');
                    }, 3000);
                    </script>
                </div>
            </div>
            <!-----flash messages end--->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                      

                        <div class="card-body">
                            <table id="post" class=" ">
                                <thead>
                                    <tr>

                                        <th></th>
                                        <th></th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($blog as $b) { ?>
                                    <tr>
                                        <td style="padding-left:40px;"> <img class="mr-4 img-fluid " src="<?php echo $b['attachment']; ?>"
                                                alt="image">
                                                
                                                <br><br><br> 
                                                </td>

                                                <td style="padding-left:40px;"><?php echo'<b> Title :</b>'; echo $b['title']; ?><br>
                                            <?php echo'<b> Category :</b>'; echo $b['category']; ?><br>
                                            <?php echo'<b> Description :</b>'; echo $b['description']; ?><br>
                                            <?php echo'<b> Date :</b>'; echo $b['created']; ?><br>
                                            <p>
                                                <a href="<?php echo site_url('Blog/edit/' . $b['blog_id']); ?>"><span
                                                        class="fas fa-pen fa-fw mr-2" title="Edit post"></span></a>
                                                |
                                                <a href="<?php echo site_url('Blog/remove/' . $b['blog_id']); ?>"><span
                                                        style="color:#f77;" class="fas fa-trash fa-fw mr-2"
                                                        title="Delete post"></span></a>
                                            </p>
                                            <br><br><br> 
                                        </td>



                                    </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>