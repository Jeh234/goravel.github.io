<?php
include('role_auth.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">
        <div class="row mt-4">
            <div class="class-col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Add Blog
                            <a href="view_blog.php" class="btn btn-danger float-end">Back</a>
                        </h1>
                    </div>
                    <div class="card-body">
                    <?php include('message.php'); ?>
                    <form action="user_update.php" method="POST" enctype="multipart/form-data">

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="">Blog Title</label>
                                    <input type="text" name="blog_name" required class="form-control">
                                </div>
                                
                                <div class="col-md-12 mb-3">
                                    <label for="">Blog Description</label>
                                    <textarea name="blog_description" id="summernote" required class="form-control"  rows="4"></textarea>
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <label for="">Image</label>
                                    <input type="file" name="image" 
                                    class="form-control">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <button type="submit" name="add_blog_btn" class="btn btn-primary">Save Post</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include('includes/footer.php');
include('includes/scripts.php');
?>