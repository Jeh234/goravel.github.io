<?php
  include('webIncludes/header.php');
  include('webIncludes/navbar.php');
  include('admin/config/dbcon.php');
?>
<style>
  .banner-image{
    position: relative;
  }
  .banner-image .overlay-text{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }
.blogtitle{
    margin-top:30px;
}
</style>
<div class="banner-image">
  <?php 
    $display_image1 ="SELECT * FROM blog WHERE blog_name='banner_img' ";
    $query_run = mysqli_query($con, $display_image1);
      if(mysqli_num_rows($query_run)>0){
        foreach($query_run as $display_img1)
          {?>
            <img src="uploads/posts/<?= $display_img1['image'] ?>" width="100%"/>
            <h1 class="overlay-text" style="color:yellow; height=100vh;">Unleashed Your Wanderlust,<br>Gora na beh with Goravel!</h1>
            </div>
          <?php
          }
        }
  ?>
</div>
<!--end of banner image-->

<!--Content for blog-->
<section class="container">
<div class="blogtitle">
<?php //first card title
      $display_text1 = "SELECT * FROM blog WHERE id='6'";
      $res = $con->query($display_text1);
        if($res->num_rows > 0){
          while($row = $res->fetch_assoc()){
          echo "<h1><center>" . $row["blog_name"]. "</center></h1>";
          }
        }
    ?>
</div>
  <div class="container text-center">
    <div class="row">
    <div class="col-md">
    <?php  //img2
                $display_image2 ="SELECT * FROM blog WHERE id='6' ";
                $query_run = mysqli_query($con, $display_image2);
                if(mysqli_num_rows($query_run)>0){
                foreach($query_run as $display_img2)
                {?>
                    <img src="uploads/posts/<?= $display_img2['image'] ?>" class="card-img-top" width="100%" max-height="80vh"/>
                    <?php
                }
                }
              ?>
      </div>
    <div class="col"><p class="text-justify">
    <?php //first card title
      $display_text1 = "SELECT * FROM blog WHERE id='3'";
      $res = $con->query($display_text1);

        if($res->num_rows > 0){
          while($row = $res->fetch_assoc()){
          echo "" . $row["blog_description"]. " ";
          }
        }
    ?>
    </div>
  </div>

</div>

</section>
<!--end of content for blog-->


<!--footer-->
<?php include('webIncludes/footer.php');?>
<!--end of footer-->
</body>
</html>