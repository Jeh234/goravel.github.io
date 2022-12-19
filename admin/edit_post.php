<?php
include('role_auth.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">
        <div class="row mt-4">
            <div class="class-col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Edit Post
                            <a href="view_post.php" class="btn btn-danger float-end">Back</a>
                        </h1>
                    </div>
                    <div class="card-body">
                    <?php include('message.php'); ?>
                    <?php
                        if(isset($_GET['id']))
                        {
                            $post_id = $_GET['id'];
                            $post_query = "SELECT * FROM posts WHERE id='$post_id' LIMIT 1 ";
                            $post_query_res = mysqli_query($con, $post_query);

                            if(mysqli_num_rows($post_query_res) > 0)
                            {
                                $post_row = mysqli_fetch_array($post_query_res);
                                ?>
                                    
                                
                    <form action="user_update.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="post_id" value="<?= $post_row['id']?>">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="">Name</label>
                                    <input type="text" name="name" value="<?= $post_row['name'] ?>" required class="form-control">
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="">Description</label>
                                    <textarea name="description" id="summernote" required class="form-control"  rows="4"><?= $post_row['description'] ?></textarea>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="">Image</label>
                                    <input type="hidden" name="old_image" value="<?= $post_row['image'] ?>"/>
                                    <input type="file" name="image" 
                                    class="form-control">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <button type="submit" name="update_post_btn" class="btn btn-primary">Update  Post</button>
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