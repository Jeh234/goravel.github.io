<?php

?>
<style>
.nav-item {
  border: none;
  outline: none;
  color:yellow;
  cursor: pointer;
}

/* Style the active class (and buttons on mouse-over) */
.active, .nav-item:hover {

  color: white;
}
</style>
<script>
  var btnContainer = document.getElementById("navItems");


var btns = btnContainer.getElementsByClassName("nav-item");

for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
<div id="navItems">
<nav class="navbar navbar-expand-lg fixed-top" style="background:#003366;">
  <div class="container">
    <a class="navbar-brand" href="#">Goravel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          
            <li class="nav-item">
            <a class="nav-link"  href="index.php">Home</a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="destinations.php
          ">Destinations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blogs.php">Blogs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <?php if(isset($_SESSION['auth_user'])) : ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?= $_SESSION['auth_user']['user_name'];?>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="admin/index.php">My Profile</a></li>
              <li>
                <form action="accManagement/logoutcode.php" method="POST">
                <button type="submit" name="logout_btn"  class="dropdown-item">Logout</button>
                </form>
              </li>
            </ul>
            <?php else: ?>
            <li class="nav-item">
              <a class="nav-link" href="accManagement/login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="accManagement/register.php">Register</a>
            </li>
          <?php endif;?>
        </ul>
      </div>
      </div>
  </div>
</nav>