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
</style>
<div class="banner-image">
  <?php 
    $display_image1 ="SELECT * FROM blog WHERE blog_name='banner_img' ";
    $query_run = mysqli_query($con, $display_image1);
      if(mysqli_num_rows($query_run)>0){
        foreach($query_run as $display_img1)
          {?>
            <img src="uploads/posts/<?= $display_img1['image'] ?>" width="100%"/>
            </div>
          <?php
          }
        }
  ?>
</div>
<!--end of banner image-->

<!--start of blogs with picture-->
<section>

</section>
<!--end of blogs with pictures-->

<!--Owl Carousel For Destinations-->
<section>
    <div class="container my-5">
        <h1 class="text-center fw-bold display-6">Latest Articles</h1>
          <div class="row">
            <div class="owl-carousel owl-theme">
              <div class="item mb-4">
                <div class="card border-0 shadow">
                <!--for 1st image-->
                <?php  
                  $display_image1 ="SELECT * FROM blog WHERE id='4' ";
                  $query_run = mysqli_query($con, $display_image1);
                  if(mysqli_num_rows($query_run)>0){
                  foreach($query_run as $display_img1)
                  {?>
                    <img src="uploads/posts/<?=$display_img1['image'] ?>" class="card-img-top" width="100%"/>
                    <?php
                  }
                  }
              ?>
                  <div class="card-body">
                    <!--for 1st description-->
                    <?php 
                      $display_text3 = "SELECT blog_name FROM blog WHERE id='4' ";
                      $res = $con->query($display_text3);
                        if($res->num_rows > 0){
                          while($row = $res->fetch_assoc()){?>
                          <h4 class="text-center"><a style="text-decoration:none;" href="article1.php"><?= $row["blog_name"] ?></a></h4>
                          <?php
                          }
                        }
                      ?>
                  </div>
                </div>
              </div>
              <!--First item ends-->
              <div class="item mb-4">
                <div class="card border-0 shadow">
                <!--for 2nd image-->
                <?php  //img2
                $display_image2 ="SELECT * FROM blog WHERE id='5' ";
                $query_run = mysqli_query($con, $display_image2);
                if(mysqli_num_rows($query_run)>0){
                foreach($query_run as $display_img2)
                {?>
                    <img src="uploads/posts/<?= $display_img2['image'] ?>" class="card-img-top" width="100%"/>
                    <?php
                }
                }
              ?>
                  <div class="card-body">
                    <!--for second description-->
                    <?php 
                      $display_text3 = "SELECT blog_name FROM blog WHERE id='5' ";
                      $res = $con->query($display_text3);
                        if($res->num_rows > 0){
                          while($row = $res->fetch_assoc()){?>
                          <h4 class="text-center"><a style="text-decoration:none;" href="article2.php"><?= $row["blog_name"] ?></a></h4>
                          <?php
                          }
                        }
                      ?>
                  </div>
                </div>
              </div>
              <!--second item ends-->
              <div class="item mb-4">
                <div class="card border-0 shadow">
                <!--third picture image-->
                <?php  //img2
                 $display_image2 ="SELECT * FROM blog WHERE id='6' ";
                  $query_run = mysqli_query($con, $display_image2);
                  if(mysqli_num_rows($query_run)>0){
                  foreach($query_run as $display_img2)
                  {?>
                    <img src="uploads/posts/<?= $display_img2['image'] ?>" class="card-img-top" width="100%"/>
                    <?php
                  }
                  }
              ?>
                  <div class="card-body">
                    <!--for third description-->
                  <?php 
                      $display_text3 = "SELECT blog_name FROM blog WHERE id='6' ";
                      $res = $con->query($display_text3);
                        if($res->num_rows > 0){
                          while($row = $res->fetch_assoc()){?>
                          <h4 class="text-center"><a style="text-decoration:none;" href="article3.php"><?= $row["blog_name"] ?></a></h4>
                          <?php
                          }
                        }
                      ?>
                  </div>
                </div>
              </div>
              <!--third item ends-->
              <div class="item mb-4">
                <div class="card border-0 shadow">
                <!--fourth image-->
                <?php  //img2
                 $display_image2 ="SELECT * FROM blog WHERE id='7' ";
                  $query_run = mysqli_query($con, $display_image2);
                  if(mysqli_num_rows($query_run)>0){
                  foreach($query_run as $display_img2)
                  {?>
                    <img src="uploads/posts/<?= $display_img2['image'] ?>" class="card-img-top" width="100%"/>
                    <?php
                  }
                  }
              ?>
                  <div class="card-body">
                    <!--fourth description-->
                    <?php 
                      $display_text3 = "SELECT blog_name FROM blog WHERE id='7' ";
                      $res = $con->query($display_text3);
                        if($res->num_rows > 0){
                          while($row = $res->fetch_assoc()){?>
                          <h4 class="text-center"><a style="text-decoration:none;" href="article4.php"><?= $row["blog_name"] ?></a></h4>
                          <?php
                          }
                        }
                      ?>
                  </div>
                </div>
              </div>
              <!--fourth item ends-->
              <div class="item mb-4">
                <div class="card border-0 shadow">
                <!--fifth image-->
                <?php  //img2
                 $display_image2 ="SELECT * FROM blog WHERE id='8' ";
                  $query_run = mysqli_query($con, $display_image2);
                  if(mysqli_num_rows($query_run)>0){
                  foreach($query_run as $display_img2)
                  {?>
                    <img src="uploads/posts/<?= $display_img2['image'] ?>" class="card-img-top" width="100%"/>
                    <?php
                  }
                  }
              ?>
                  <div class="card-body">
                  <?php 
                      $display_text3 = "SELECT blog_name FROM blog WHERE id='8' ";
                      $res = $con->query($display_text3);
                        if($res->num_rows > 0){
                          while($row = $res->fetch_assoc()){?>
                          <h4 class="text-center"><a style="text-decoration:none;" href="article5.php"><?= $row["blog_name"] ?></a></h4>
                          <?php
                          }
                        }
                      ?>
                  </div>
                </div>
              </div>
              <!--fifth item ends-->
              <div class="item mb-4">
                <div class="card border-0 shadow">
                <!--sixth image-->
                <?php  //img2
                 $display_image2 ="SELECT * FROM blog WHERE id='9' ";
                  $query_run = mysqli_query($con, $display_image2);
                  if(mysqli_num_rows($query_run)>0){
                  foreach($query_run as $display_img2)
                  {?>
                    <img src="uploads/posts/<?= $display_img2['image'] ?>" class="card-img-top" width="100%"/>
                    <?php
                  }
                  }
              ?>
                  <div class="card-body">
                    <!--sixth description-->
                    <?php 
                      $display_text3 = "SELECT blog_name FROM blog WHERE id='9' ";
                      $res = $con->query($display_text3);
                        if($res->num_rows > 0){
                          while($row = $res->fetch_assoc()){?>
                          <h4 class="text-center"><a style="text-decoration:none;" href="article6.php"><?= $row["blog_name"] ?></a></h4>
                          <?php
                          }
                        }
                      ?>
                  </div>
                </div>
              </div>
              <!--sixth item ends-->
          </div>
    </div>
</div>
</section>
<!--End of Owl Carousel For blogs-->
<!--practice-->

<!--end of practice-->

<!---->
<div class="container text-center" style="margin-top:60px;">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
    <div class="col">
    <?php //num 1 text
      $display_text3 = "SELECT description FROM posts WHERE id='2'";
      $res = $con->query($display_text3);
        if($res->num_rows > 0){
          while($row = $res->fetch_assoc()){
            echo "" . $row["description"]. " ";
            }
          }
        ?>
    </div>
    <div class="col">
    <?php //num 2 text
      $display_text3 = "SELECT description FROM posts WHERE id='2'";
      $res = $con->query($display_text3);
        if($res->num_rows > 0){
          while($row = $res->fetch_assoc()){
            echo "" . $row["description"]. " ";
            }
          }
        ?>
    </div>
    <div class="col">
    <?php //servie 1 text
          $display_text3 = "SELECT description FROM posts WHERE id='2'";
          $res = $con->query($display_text3);

          if($res->num_rows > 0){
            while($row = $res->fetch_assoc()){
              echo "" . $row["description"]. " ";
            }
          }
        ?>
    </div>
  </div>
</div>
<!---->


<!--start of Travel blog-->
<section>
</section>
<!--end of travel blog-->

<!--footer-->
<?php include('webIncludes/footer.php');?>
<!--end of footer-->
</body>
</html>