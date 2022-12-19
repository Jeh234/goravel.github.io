<?php
session_start();

if(isset($_POST['logout_btn']))
{
    session_destroy();
    //unset($_SESSION['auth']);
    //unset($_SESSION['auth_role']);
    //unset($_SESSION['auth_user']);
    //ayaw gumana ng session  message na to, bahala na si Lord.
    $_SESSION['message'] = "Logout Successfully";
    header("Location: login.php");
}

?>