<?php
  include('admin/config/dbcon.php'); 
  include('webIncludes/header.php');
  include('webIncludes/navbar.php');
?>
<style>
  .banner-image{
    position: relative;
    opacity:0.8;
  }
  .banner-image .overlay-text{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }
</style>
<!--Start of banner image-->
<div class="banner-image">
  <?php 
    $display_image1 ="SELECT * FROM posts WHERE name='home_banner_img' ";
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

<!--section for top 3 popular tours-->
<section>
<div class="container"> <br>
  <h1 class="text-center">Our Top 3 Popular Tours</h1> <br>
  <div class="row g-3">
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card">
          <div class="card-body">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active"> <!-- picture 1-->
              <?php 
                  $display_image1 ="SELECT * FROM posts WHERE id='5' ";
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
            </div>
            </div> 
                <?php //first card title
                  $display_text1 = "SELECT * FROM posts WHERE id='8' ";
                  $res = $con->query($display_text1);

                  if($res->num_rows > 0){
                    while($row = $res->fetch_assoc()){
                      echo "" . $row["description"]. " ";
                    }
                  }
                ?><!-- Button trigger modal -->
                <div class="container text-center">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >
                  See More
                </button></div>
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel"><?php //modal title
                        $display_text1 = "SELECT * FROM posts WHERE id='5' ";
                        $res = $con->query($display_text1);

                        if($res->num_rows > 0){
                        while($row = $res->fetch_assoc()){
                        echo "" . $row["name"]. " ";
                        }
                      }
                ?></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                          <div class="modal-body">
                            <?php //first card title
                              $display_text1 = "SELECT * FROM posts WHERE id='5' ";
                              $res = $con->query($display_text1);

                              if($res->num_rows > 0){
                              while($row = $res->fetch_assoc()){
                              echo "" . $row["description"]. " ";
                              }
                            }
                            ?>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                              <button type="button" class="btn btn-primary">Book Now</button>
                          </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div> <!--second-->
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card">
          <div class="card-body">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active"> 
              <?php 
                  $display_image1 ="SELECT * FROM posts WHERE id='10'";
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
            </div>
            </div> 
                <?php //first card title
                  $display_text1 = "SELECT * FROM posts WHERE id='12' ";
                  $res = $con->query($display_text1);

                  if($res->num_rows > 0){
                    while($row = $res->fetch_assoc()){
                      echo "" . $row["description"]. " ";
                    }
                  }
                ?><!-- Button trigger modal -->
                <div class="container text-center">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop0" >
                  See More
                </button></div>
                <!-- Modal --><!--modal 2-->
                <div class="modal fade" id="staticBackdrop0" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel0" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel0"><?php //modal title
                        $display_text1 = "SELECT * FROM posts WHERE id='10' ";
                        $res = $con->query($display_text1);

                        if($res->num_rows > 0){
                        while($row = $res->fetch_assoc()){
                        echo "" . $row["name"]. " ";
                        }
                      }
                ?></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                          <div class="modal-body">
                            <?php //first card title
                              $display_text1 = "SELECT * FROM posts WHERE id='10'";
                              $res = $con->query($display_text1);

                              if($res->num_rows > 0){
                              while($row = $res->fetch_assoc()){
                              echo "" . $row["description"]. "";
                              }
                            }
                            ?>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                              <button type="button" class="btn btn-primary">Book Now</button>
                          </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
    <!---->
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card">
          <div class="card-body">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active"> <!--third photo-->
              <?php 
                  $display_image1 ="SELECT * FROM posts WHERE id='13' ";
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
            </div>
            </div> 
                <?php //third card title
                  $display_text1 = "SELECT * FROM posts WHERE id='21' ";
                  $res = $con->query($display_text1);

                  if($res->num_rows > 0){
                    while($row = $res->fetch_assoc()){
                      echo "" . $row["description"]. " ";
                    }
                  }
                ?><!-- Button trigger modal -->
                <div class="container text-center">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop1" >
                  See More
                </button></div>
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel1" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel1"><?php //first card title
                  $display_text1 = "SELECT * FROM posts WHERE id='13' ";
                  $res = $con->query($display_text1);

                  if($res->num_rows > 0){
                    while($row = $res->fetch_assoc()){
                      echo "" . $row["name"]. " ";
                    }
                  }
                ?></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                          <div class="modal-body">
                          <?php //third modal body
                              $display_text1 = "SELECT * FROM posts WHERE id='13'";
                              $res = $con->query($display_text1);

                              if($res->num_rows > 0){
                              while($row = $res->fetch_assoc()){
                              echo "" . $row["description"]. "";
                              }
                            }
                            ?>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                              <button type="button" class="btn btn-primary">Book Now</button>
                          </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
                </div>
    </div>
  
</div>
</section> <br>
<!--end of section for top 3 popular tours-->

<!--section for our services-->
<section>
<div class="container text-center" style="margin-top:60px;">
  <h1>Our Services</h1> <br>
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
    <div class="col">
        <?php //servie 1 text
          $display_text3 = "SELECT description FROM posts WHERE name='our_services1'";
          $res = $con->query($display_text3);

          if($res->num_rows > 0){
            while($row = $res->fetch_assoc()){
              echo "" . $row["description"]. " ";
            }
          }
        ?>
    </div>
    <div class="col"> <!--service 2 Local travels-->
        <?php //servie 1 text
          $display_text3 = "SELECT description FROM posts WHERE name='our_services2'";
          $res = $con->query($display_text3);

          if($res->num_rows > 0){
            while($row = $res->fetch_assoc()){
              echo "" . $row["description"]. " ";
            }
          }
        ?>
    </div>
    <div class="col"> <!--service 3 Fast and Secure-->
      <?php //servie 1 text
          $display_text3 = "SELECT description FROM posts WHERE name='our_services3' ";
          $res = $con->query($display_text3);

          if($res->num_rows > 0){
            while($row = $res->fetch_assoc()){
              echo "" . $row["description"]. " ";
            }
          }
        ?>
    </div>
    <div class="col"> <!--service 4 Customer Service-->
      <?php //servie 1 text
          $display_text3 = "SELECT description FROM posts WHERE name='our_services4'";
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
</section>
<!--end of section for our services--> <br>
<!--register or log-in start-->
<section class="container" style="margin-top:60px;">
  <h2 class="text-center">Not a Member Yet?</h2>
    <p class="text-center">Join us to book more travel and get more discount up to 50%</p>
    <div class="container text-center">
      <a href="#" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Register Account</a>
      <a href="#" class="btn btn-secondary" tabindex="-1" role="button">Log in</a>
    </div>
</section>
<!--end of register or log-in-->

<!--footer-->
<?php include('webIncludes/footer.php'); ?>
<!--end of footer-->
</body>
</html>