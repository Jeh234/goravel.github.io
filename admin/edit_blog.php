<?php
include('role_auth.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">
        <div class="row mt-4">
            <div class="class-col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Edit Blog
                            <a href="view_blog.php" class="btn btn-danger float-end">Back</a>
                        </h1>
                    </div>
                    <div class="card-body">
                    <?php include('message.php'); ?>
                    <?php
                        if(isset($_GET['id']))
                        {
                            $blog_id = $_GET['id'];
                            $blog_query = "SELECT * FROM blog WHERE id='$blog_id' LIMIT 1 ";
                            $blog_query_res = mysqli_query($con, $blog_query);

                            if(mysqli_num_rows($blog_query_res) > 0)
                            {
                                $blog_row = mysqli_fetch_array($blog_query_res);
                                ?>
                                    
                                
                    <form action="user_update.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="blog_id" value="<?= $blog_row['id']?>">
                            <div class="row">
                                
                                <div class="col-md-6 mb-3">
                                    <label for="">Blog Name</label>
                                    <input type="text" name="blog_name" value="<?= $blog_row['blog_name'] ?>" required class="form-control">
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="">Blog Description</label>
                                    <textarea name="blog_description" id="summernote" required class="form-control"  rows="4"><?= $blog_row['blog_description'] ?></textarea>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="">Image</label>
                                    <input type="hidden" name="old_image" value="<?= $blog_row['image'] ?>"/>
                                    <input type="file" name="image" 
                                    class="form-control">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <button type="submit" name="update_blog_btn" class="btn btn-primary">Update  Blog</button>
                                </div>
                            </div>
                        </form>
                        <?php
                            }
                            else
                            {
                                ?>
                                <h4>No Record Found</h4>
                                <?php
                            }
                        }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include('includes/footer.php');
include('includes/scripts.php');
?>