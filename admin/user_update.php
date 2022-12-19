<?php
    include('role_auth.php');

    //delete post
    if(isset($_POST['delete_post_btn']))
    {
        $post_id = $_POST['delete_post_btn'];
        $check_img_query = "SELECT * FROM posts WHERE id='$post_id' LIMIT 1";
        $img_res = mysqli_query($con, $check_img_query);
        $result_data = mysqli_fetch_array($img_res);
        $image = $result_data['image'];

        $query = "DELETE FROM posts WHERE id='$post_id' LIMIT 1";
        $query_run = mysqli_query($con, $query);
        
        
        if($query_run)
        {
            if(file_exists('../uploads/posts/'.$old_filename))
                {
                    unlink("../uploads/posts/".$image);
                }
            $_SESSION['message'] ="Post Deleted Successfully";
            header('Location: view_post.php');
            exit(0);
        }
        else{
            $_SESSION['message'] ="Something Went Wrong";
            header('Location: view_post.php');
            exit(0);
        }
    }
    //delete blog 
    if(isset($_POST['delete_blog_btn']))
    {
        $blog_id = $_POST['delete_blog_btn'];
        $check_img_query = "SELECT * FROM blog WHERE id='$blog_id' LIMIT 1";
        $img_res = mysqli_query($con, $check_img_query);
        $result_data = mysqli_fetch_array($img_res);
        $image = $result_data['image'];

        $query = "DELETE FROM blog WHERE id='$blog_id' LIMIT 1";
        $query_run = mysqli_query($con, $query);
        
        
        if($query_run)
        {
            if(file_exists('../uploads/posts/'.$old_filename))
                {
                    unlink("../uploads/posts/".$image);
                }
            $_SESSION['message'] ="Post Deleted Successfully";
            header('Location: view_blog.php');
            exit(0);
        }
        else{
            $_SESSION['message'] ="Something Went Wrong";
            header('Location: view_blog.php');
            exit(0);
        }
    }
    //update post admin dashboard 
    if(isset($_POST['update_post_btn']))
    {
        $post_id = $_POST['post_id'];
        $name = $_POST['name'];
        $description = $_POST['description'];

        $old_filename = $_POST['old_image'];
        $image = $_FILES['image']['name'];

        $update_filename ="";
        if($image != NULL)
        {
            $image_extension = pathinfo($image, PATHINFO_EXTENSION);
            $filename = time().'.'.$image_extension;
            $update_filename = $filename;
        }
        else 
        {
            $update_filename = $old_filename;
        }
        

        $query = "UPDATE posts SET name='$name',description='$description',image='$update_filename' WHERE id='$post_id'";

        $query_run = mysqli_query($con, $query);

        if($query_run)
        {
            if($image != NULL)
            {
                if(file_exists('../uploads/posts/'.$old_filename))
                {
                    unlink("../uploads/posts/".$old_filename);
                }
                move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/posts/'.$update_filename);
            }
            $_SESSION['message'] ="Post Updated Successfully";
            header('Location: edit_post.php?id='.$post_id);
            exit(0);
        }
        else
        {
            $_SESSION['message'] ="Post Created Successfully";
            header('Location: edit_post.php?id='.$post_id);
            exit(0);
        }
    }
    //update blog post
    if(isset($_POST['update_blog_btn']))
    {
        $blog_id = $_POST['blog_id'];
        $blog_name = $_POST['blog_name'];
        $blog_description = $_POST['blog_description'];

        $old_filename = $_POST['old_image'];
        $image = $_FILES['image']['name'];

        $update_filename ="";
        if($image != NULL)
        {
            $image_extension = pathinfo($image, PATHINFO_EXTENSION);
            $filename = time().'.'.$image_extension;
            $update_filename = $filename;
        }
        else 
        {
            $update_filename = $old_filename;
        }
        

        $query = "UPDATE blog SET blog_name='$blog_name',blog_description='$blog_description',image='$update_filename' WHERE id='$blog_id'";

        $query_run = mysqli_query($con, $query);

        if($query_run)
        {
            if($image != NULL)
            {
                if(file_exists('../uploads/posts/'.$old_filename))
                {
                    unlink("../uploads/posts/".$old_filename);
                }
                move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/posts/'.$update_filename);
            }
            $_SESSION['message'] ="Blog Updated Successfully";
            header('Location: edit_blog.php?id='.$blog_id);
            exit(0);
        }
        else
        {
            $_SESSION['message'] ="Blog Created Successfully";
            header('Location: edit_blog.php?id='.$blog_id);
            exit(0);
        }
    }
    //add blog post
    if(isset($_POST['add_blog_btn']))
    {
        //$category_id = $_POST['category_id'];
        $blog_name = $_POST['blog_name'];
        $blog_description = $_POST['blog_description'];

        $image = $_FILES['image']['name'];
        $image_extension = pathinfo($image, PATHINFO_EXTENSION);
        $filename = time().'.'.$image_extension;

        $query = "INSERT INTO blog (blog_name,blog_description,image) VALUES ('$blog_name','$blog_description','$filename')";

        $query_run = mysqli_query($con, $query);

        if($query_run){
            move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/posts/'.$filename);
            $_SESSION['message'] ="Blog Created Successfully";
            header('Location: add_blog.php');
            exit(0);
        }
        else{
            $_SESSION['message'] ="Something Went Wrong";
            header('Location: add_blog.php');
            exit(0);
        }
    }
    //To add post in admin dashboard
    if(isset($_POST['add_post_btn']))
    {
        //$category_id = $_POST['category_id'];
        $name = $_POST['name'];
        $description = $_POST['description'];

        $image = $_FILES['image']['name'];
        $image_extension = pathinfo($image, PATHINFO_EXTENSION);
        $filename = time().'.'.$image_extension;
        $query = "INSERT INTO posts (name,description,image) VALUES ('$name','$description','$filename')";

        $query_run = mysqli_query($con, $query);

        if($query_run){
            move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/posts/'.$filename);
            $_SESSION['message'] ="Post Created Successfully";
            header('Location: add_post.php');
            exit(0);
        }
        else{
            $_SESSION['message'] ="Something Went Wrong";
            header('Location: add_post.php');
            exit(0);
        }
    }
    //to be remove, November 29 12:36 pm
    /*if(isset($_POST['category_delete_btn']))
    {
        $category_id = $_POST['category_delete_btn'];
        $query = "UPDATE categories SET status='2' WHERE id='$category_id' LIMIT 1";
        $query_run = mysqli_query($con, $query);

        if($query_run){
            $_SESSION['message'] ="Category Deleted Successfully";
            header('Location: view_category.php');
            exit(0);
        }
        else{
            $_SESSION['message'] ="Something Went Wrong";
            header('Location: view_category.php');
            exit(0);
        }
    }*/
    //to be removed November 29 12:35 pm
    /*if(isset($_POST['update_category_btn']))
    {   
        $category_id = $_POST['category_id'];
        $name = $_POST['name'];
        $description = $_POST['description'];


        $navbar_status = $_POST['navbar_status'] == true ? '1' : '0';
        $status = $_POST['status']== true ? '1' : '0';

        $query = "UPDATE categories SET name='$name', description='$description',
        navbar_status = '$navbar_status', status='$status' WHERE id='$category_id'";
        $query_run = mysqli_query($con, $query);

        if($query_run){
            $_SESSION['message'] ="Category Updated Successfully";
            header('Location: edit_category.php?id='.$category_id);
            exit(0);
        }
        else
        {
            $_SESSION['message'] ="Updated Successfully";
            header('Location: edit_category.php?id='.$category_id);
            exit(0);
        }
    }*/  
    //to be removed November 29, 12:32 PM
    /*if(isset($_POST['category_add']))
    {
        $name = $_POST['name'];
        $description = $_POST['description'];

        $navbar_status = $_POST['navbar_status'] == true ? '1' : '0';
        $status = $_POST['status']== true ? '1' : '0';

        $query = "INSERT INTO categories(name,description,navbar_status,status) VALUES ('$name','$description','$navbar_status','$status')";

        $query_run = mysqli_query($con, $query);

        if($query_run){
            $_SESSION['message'] ="Category Added Successfully";
            header('Location: add_category.php');
            exit(0);
        }
        else{
            $_SESSION['message'] ="Something Went Wrong";
            header('Location: add_category.php');
            exit(0);
        }
    }*/

    //Delete user in admin dashboard
    if(isset($_POST['delete_btn']))
    {
        $user_id = $_POST['delete_btn'];
        $query = "DELETE FROM users WHERE id='$user_id'";
        $query_run = mysqli_query($con, $query);

        if($query_run){
            $_SESSION['message'] ="User Successfully Deleted";
            header('Location: display_register_users.php');
            exit(0);
        }
        else{
            $_SESSION['message'] ="Something Went Wrong";
            header('Location: display_register_users.php');
            exit(0);
        }
    }

    //not add admin, it should be add user. ADD USER
    if(isset($_POST['add_admin']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role_as = $_POST['role_as'];
        $status = $_POST['status'] == true ? '1' : '0';

        $query = "INSERT INTO users(fname,lname,email,password,role_as,status) VALUES ('$fname','$lname','$email','$password','$role_as','$status')";

        $query_run = mysqli_query($con, $query);

        if($query_run){
            $_SESSION['message'] ="Added Successfully";
            header('Location: display_register_users.php');
            exit(0);
        }
        else{
            $_SESSION['message'] ="Something Went Wrong";
            header('Location: display_register_users.php');
            exit(0);
        }
    }

    //update user to display in admin dashboard
    if(isset($_POST['user_update_btn']))
    {
        $user_id = $_POST['user_id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = md5($password);
        $role_as = $_POST['role_as'];
        $status = $_POST['status'] == true ? '1' : '0';

        $query = "UPDATE users SET fname='$fname',lname='$lname', email='$email', password='$password',
        role_as='$role_as', status='$status' WHERE id='$user_id'";
        $query_run = mysqli_query($con, $query);

        if($query_run){
            $_SESSION['message'] ="Updated Successfully";
            header('Location: display_register_users.php');
            exit(0);
        }
    }
?>