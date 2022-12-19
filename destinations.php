<?php
  include('webIncludes/header.php');
  include('webIncludes/navbar.php');
  include('admin/config/dbcon.php');
?>
<style>
  .banner-image{
    position:relative;
    opacity:0.8;
  }
  .banner-image .overlay-text{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size:3vw;
    color:yellow;
    font-weight: 700;
  }
  
</style>
<div class="banner-image">
  <?php 
    $display_image1 ="SELECT * FROM posts WHERE name='destination_banner_img' ";
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

<!--Owl Carousel For Destinations-->

<!--End of Owl Carousel For Destinations-->

<!--start of featured package tours with activities-->
<section class="container" style="padding-top:40px; padding-bottom:30px;">
<h3 class="text-center fw-bold display-6">Local Travel Tours</h3>
  <div class="row g-3">
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card">
        <div class="card-body">  
          <?php  //img1
            $display_image1 ="SELECT * FROM posts WHERE id='31' ";
            $query_run = mysqli_query($con, $display_image1);
              if(mysqli_num_rows($query_run)>0){
                  foreach($query_run as $display_img1)
                  {?>
                    <img src="uploads/posts/<?= $display_img1['image'] ?>" class="card-img-top" width="100%"/>
                    <?php
                  }
                  }
          ?>
          <!--h5 class="card-title">Card 1</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis qui dolor mollitia! Nostrum quo, porro molestiae modi consequatur facilis et.</p-->
            <?php 
              $display_text3 = "SELECT * FROM posts WHERE id='31' ";
              $res = $con->query($display_text3);
                if($res->num_rows > 0){
                  while($row = $res->fetch_assoc()){?>
                    <h4 class="text-center"><a style="text-decoration:none;" href="#"><?= $row["name"] ?></a></h4>
                    <?php
                    }
                  }
                ?>
          </div>
        </div>
      </div>
    <div class="col-12 col-md-6 col-lg-4">
    <div class="card">
          <div class="card-body">
          <?php  //img2
            $display_image2 ="SELECT * FROM posts WHERE id='32' ";
            $query_run = mysqli_query($con, $display_image2);
              if(mysqli_num_rows($query_run)>0){
                  foreach($query_run as $display_img2)
                  {?>
                    <img src="uploads/posts/<?= $display_img2['image'] ?>" class="card-img-top" width="100%"/>
                    <?php
                  }
                  }
            ?>
            <?php 
              $display_text3 = "SELECT * FROM posts WHERE id='32' ";
              $res = $con->query($display_text3);
                if($res->num_rows > 0){
                  while($row = $res->fetch_assoc()){?>
                    <h4 class="text-center"><a style="text-decoration:none;" href="#"><?= $row["name"] ?></a></h4>
                    <?php
                    }
                  }
                ?>
          </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
    <div class="card">
      <div class="card-body">
      <?php  //img5
        $display_image5 ="SELECT * FROM posts WHERE id='33' ";
        $query_run = mysqli_query($con, $display_image5);
          if(mysqli_num_rows($query_run)>0){
            foreach($query_run as $display_img5)
            {?>
              <img src="uploads/posts/<?= $display_img5['image'] ?>" class="card-img-top" width="100%"/>
                    <?php
            }
          }
          ?>
          <?php 
              $display_text3 = "SELECT * FROM posts WHERE id='33' ";
              $res = $con->query($display_text3);
                if($res->num_rows > 0){
                  while($row = $res->fetch_assoc()){?>
                    <h4 class="text-center"><a style="text-decoration:none;" href="#"><?= $row["name"] ?></a></h4>
                    <?php
                    }
                  }
                ?>
          </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
    <div class="card">
          <div class="card-body">
          <?php  //img4
            $display_image2 ="SELECT * FROM posts WHERE id='34' ";
            $query_run = mysqli_query($con, $display_image2);
              if(mysqli_num_rows($query_run)>0){
                  foreach($query_run as $display_img2)
                  {?>
                    <img src="uploads/posts/<?= $display_img2['image'] ?>" class="card-img-top" width="100%"/>
                    <?php
                  }
                  }
            ?>
            <?php 
              $display_text3 = "SELECT * FROM posts WHERE id='34' ";
              $res = $con->query($display_text3);
                if($res->num_rows > 0){
                  while($row = $res->fetch_assoc()){?>
                    <h4 class="text-center"><a style="text-decoration:none;" href="#"><?= $row["name"] ?></a></h4>
                    <?php
                    }
                  }
                ?>
          </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
    <div class="card">
          <div class="card-body">
          <?php  //img5
            $display_image2 ="SELECT * FROM posts WHERE id='35' ";
            $query_run = mysqli_query($con, $display_image2);
              if(mysqli_num_rows($query_run)>0){
                  foreach($query_run as $display_img2)
                  {?>
                    <img src="uploads/posts/<?= $display_img2['image'] ?>" class="card-img-top" width="100%"/>
                    <?php
                  }
                  }
            ?>
            <?php 
              $display_text3 = "SELECT * FROM posts WHERE id='35' ";
              $res = $con->query($display_text3);
                if($res->num_rows > 0){
                  while($row = $res->fetch_assoc()){?>
                    <h4 class="text-center"><a style="text-decoration:none;" href="#"><?= $row["name"] ?></a></h4>
                    <?php
                    }
                  }
                ?>
          </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
    <div class="card">
          <div class="card-body">
          <?php  //img6
            $display_image2 ="SELECT * FROM posts WHERE id='36' ";
            $query_run = mysqli_query($con, $display_image2);
              if(mysqli_num_rows($query_run)>0){
                  foreach($query_run as $display_img2)
                  {?>
                    <img src="uploads/posts/<?= $display_img2['image'] ?>" class="card-img-top" width="100%"/>
                    <?php
                  }
                  }
            ?>
            <?php 
              $display_text3 = "SELECT * FROM posts WHERE id='36' ";
              $res = $con->query($display_text3);
                if($res->num_rows > 0){
                  while($row = $res->fetch_assoc()){?>
                    <h4 class="text-center"><a style="text-decoration:none;" href="#"><?= $row["name"] ?></a></h4>
                    <?php
                    }
                  }
                ?>
          </div>
      </div>
    </div>
</div>
</section>
<!--end of featured package tours with activities-->

<!--start of Travel blog-->
<section class="container">
<h3 class="text-center fw-bold display-6" style="padding-top:40px; padding-bottom:30px;">Check Out Our New Blog!</h3>
<div class="container text-center">
  <div class="row">
    <div class="col-sm">
      <?php
        $display_image2 ="SELECT * FROM blog WHERE id='3' ";
          $query_run = mysqli_query($con, $display_image2);
          if(mysqli_num_rows($query_run)>0){
          foreach($query_run as $display_img2)
          {?>
          <img src="uploads/posts/<?= $display_img2['image'] ?>" class="card-img-top" width="100%"/>
          <?php
          }
        }
      ?>
    </div>
  <div class="col">
    <?php //first card title
      $display_text1 = "SELECT * FROM blog WHERE id='3'";
      $res = $con->query($display_text1);
      if($res->num_rows > 0){
      while($row = $res->fetch_assoc()){
      echo "<p>" . $row["blog_description"]. "<p>";?>
      <a href="blogs.php">Read More</a>
    <?php
      }
    }
    ?>
  </div>
</div>
</div>
</section>
<!--end of travel blog-->

<!--footer-->
<?php
  include('webIncludes/footer.php');
?>
<!--end of footer-->


</body>
</html>