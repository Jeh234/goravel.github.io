<?php
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
                <div class="card">
                    <div class="card-header">
                        <h1>Edit User</h1>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $user_id = $_GET['id'];
                            $users = "SELECT * FROM users WHERE id='$user_id'"; 
                            $users_run=mysqli_query($con, $users);

                            if(mysqli_num_rows($users_run) > 0)
                            {
                                    foreach($users_run as $user)
                                    {
                                    
                                    ?>
    
                        <form action="user_update.php" method="POST">
                            <input type="hidden" name="user_id" value="<?= $user['id'];?>" name="user_ID">

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="">First Name</label>
                                    <input type="text" name="fname" value="<?= $user['fname']; ?>" class="form-control" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Last Name</label>
                                    <input type="text" name="lname" value="<?= $user['lname']; ?>"
                                    class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Email</label>
                                    <input type="text" name="email" value="<?= $user['email']; ?>" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Password</label>
                                    <input type="password" value="<?= $user['password']; ?>" name="password" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Role As</label>
                                    <select name="role_as" required class="form-control">
                                        <option value="">--Select Role--</option>
                                        <option value="1" value="1" <?=$user['role_as'] == '1' ? 'selected':'' ?> >Admin</option>
                                        <option value="0" <?=$user['role_as'] == '0' ? 'selected':'' ?> >User</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Status</label>
                                    <input type="checkbox" name="status" <?=$user['status'] == '1' ? 'checked':'' ?> width="70px" height="70px" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <button type="submit" name="user_update_btn" class="btn btn-primary">Update User</button>
                                </div>
                            </div>
                        </form>

                        <?php
                                }   
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