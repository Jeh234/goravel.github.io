<?php
include('role_auth.php');
include('includes/header.php');
?>
<div class="container-fluid px-4">
        <div class="row mt-4">
            <div class="class-col-md-12">
            <?php include('message.php'); ?>
                <div class="card">
                    <div class="card-header">
                        <h1>View Post
                            <a href="add_post.php" class="btn btn-primary float-end">Add Post</a>
                        </h1>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        //$posts = "SELECT * FROM posts where status!='2'";
                                        $posts = "SELECT * FROM posts";
                                        $posts_run = mysqli_query($con, $posts);
                                        if(mysqli_num_rows($posts_run) > 0)
                                        {
                                            foreach($posts_run as $post)
                                            {
                                                ?>
                                            <tr>
                                            <td><?= $post['id'] ?></td>
                                            <td><?= $post['name'] ?></td>
                                            <td><img src="../uploads/posts/<?= $post['image'] ?>" width="60px" height="60px"/></td>    

                                            <td><a href="edit_post.php?id=<?= $post['id'] ?>" class="btn btn-success">Edit</a></td>
                                            <td><form action="user_update.php" method="POST"> <button type="submit" name="delete_post_btn" value="<?= $post['id'] ?>" class="btn btn-danger">Delete</button></form></td>                                   </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                        ?>
                                        <tr>
                                        <td colspan="6">No Record Found</td>
                                    </tr>
                                        <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include('includes/footer.php');
include('includes/scripts.php');
?>