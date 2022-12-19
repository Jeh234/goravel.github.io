<?php 
  include('webIncludes/header.php');
  include('webIncludes/navbar.php');
  include('admin/config/dbcon.php');
?>

<!--Start of banner image-->
<!--Start of banner image-->
<div class="banner-image">
    <?php 
        $display_image1 ="SELECT * FROM posts WHERE id='56' ";
        $query_run = mysqli_query($con, $display_image1);
        if(mysqli_num_rows($query_run)>0){
        foreach($query_run as $display_img1)
        {?>
            <img src="uploads/posts/<?= $display_img1['image'] ?>" width="100%"/>
        <?php
        }
        }
    ?>
</div>
<!--end of banner image-->
<!--end of banner image-->

<!--start of contact form-->
<section class="container"style="margin-top: 45px;">
<form action="">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Name</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Name">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
</div>
<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Message</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
</form>
<div class="container d-grid gap-2 d-md-flex justify-content-md-end">
<button type="button" class="btn btn-primary">Submit</button></div>
</section>
<!--end of contact form-->

<!--footer-->
<?php 
  include('webIncludes/footer.php'); 
?>
<!--end of footer-->
</body>
</html>