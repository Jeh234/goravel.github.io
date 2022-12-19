<?php
include('config/dbcon.php');
include('role_auth.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">
    <h4 class="mt-4">Users</h4>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item active">Users</li>
        </ol>
        <div class="row">
            <div class="class-col-md-12">
                <?php include('message.php');?>
                <div class="card">
                    <div class="card-header">
                        <h1>Register User
                        <a href="add_admin.php" class="btn btn-primary float-end">Add User</a><h1>
                    </div>
                    <div class="class-card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM users";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $row)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $row['id']; ?></td>
                                                <td><?= $row['fname']; ?></td>
                                                <td><?= $row['lname']; ?></td>
                                                <td><?= $row['email']; ?></td>
                                                <td>
                                                <?php 
                                                    if($row['role_as'] == '1')
                                                    {
                                                        echo 'Admin';

                                                    }elseif($row['role_as'] == '0')
                                                    {
                                                        echo 'User';
                                                    }
                                                ?>
                                                </td>
                                                <td><a href="edit_register_user.php?id=<?= $row['id'];?>" type="button" class="btn btn-success">Edit</a></td>
                                                <td>
                                                    <form action="user_update.php" method="POST">
                                                    <button type="submit" name="delete_btn" value="<?= $row['id']; ?>" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                    ?>
                                        <tr>
                                            <td colspan="6">
                                            No Record Found
                                            </td>
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
<?php
include('includes/footer.php');
include('includes/scripts.php');
?>