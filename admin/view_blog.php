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
                        <h1>View Blog
                            <a href="add_blog.php" class="btn btn-primary float-end">Add Blog</a>
                        </h1>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Blog Name</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        //$posts = "SELECT * FROM posts where status!='2'";
                                        $blogs = "SELECT * FROM blog";
                                        $blogs_run = mysqli_query($con, $blogs);
                                        if(mysqli_num_rows($blogs_run) > 0)
                                        {
                                            foreach($blogs_run as $blogs)
                                            {
                                                ?>
                                            <tr>
                                            <td><?= $blogs['id'] ?></td>
                                            <td><?= $blogs['blog_name'] ?></td>
                                            <td><?= $blogs['blog_description'] ?></td>
                                            <td><img src="../uploads/posts/<?= $blogs['image'] ?>" width="60px" height="60px"/></td>
                                            <td><a href="edit_blog.php?id=<?= $blogs['id'] ?>" class="btn btn-success">Edit</a></td>
                                            <td><form action="user_update.php" method="POST"> <button type="submit" name="delete_blog_btn" value="<?= $blogs['id'] ?>" class="btn btn-danger">Delete</button></form></td>                                   </tr>
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