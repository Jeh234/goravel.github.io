<?php
  //session_start(); /*originally here but will be transfered in webIncludes/navbar.php together with database configuration (not technically here,, just got added recently Nov24 12:06 PM)*/
  //include('admin/config/dbcon.php');
  include('webIncludes/header.php');
  include('webIncludes/navbar.php');
?>
<!--Start of banner image-->
<div class="banner-image">
  <img src="images/Straberry Farm1.jpeg" style="width: 100%;">
</div>
<!--end of banner image-->

<!--section for top 3 popular tours-->
<section>
<div class="container"> <br>
  <h1 class="text-center">Our Top 3 Popular Tours</h1> <br>
  <div class="row g-3">
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card">
        <!--<img src="images/img-3.jpg" class="card-img-top">-->
          <div class="card-body">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/img-6.jpg" class="d-block w-100" alt="...">
              </div>
                <div class="carousel-item">
                  <img src="images/img-3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/img-4.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
            </div>
              <h5 class="card-title">Card 1</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis qui dolor mollitia! Nostrum quo, porro molestiae modi consequatur facilis et.</p>
          </div>
        </div>
      </div>
    <div class="col-12 col-md-6 col-lg-4">
    <div class="card">
          <div class="card-body">
          <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/img-6.jpg" class="d-block w-100" alt="...">
              </div>
                <div class="carousel-item">
                  <img src="images/img-3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/img-4.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
            </div>
            <h5 class="card-title">Card 2</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis qui dolor mollitia! Nostrum quo, porro molestiae modi consequatur facilis et.</p>
          </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
    <div class="card">
          <div class="card-body">
          <div id="carouselExampleControls3" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/img-6.jpg" class="d-block w-100" alt="...">
              </div>
                <div class="carousel-item">
                  <img src="images/img-3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/img-4.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
            </div>
            <h5 class="card-title">Card 3</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis qui dolor mollitia! Nostrum quo, porro molestiae modi consequatur facilis et.</p>
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
      <h4>Affordable Price</h4>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa aperiam neque consectetur eligendi a ullam earum sed sint incidunt unde, repellat itaque similique molestias nulla ipsam.</p>
    </div>
    <div class="col">
        <h4>Local Travels</h4>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa aperiam neque consectetur eligendi a ullam earum sed sint incidunt unde, repellat itaque similique molestias nulla ipsam.</p>
    </div>
    <div class="col">
      <h4>Fast and Secure</h4>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa aperiam neque consectetur eligendi a ullam earum sed sint incidunt unde, repellat itaque similique molestias nulla ipsam.</p>
    </div>
    <div class="col">
      <h4>Customer Service</h4>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa aperiam neque consectetur eligendi a ullam earum sed sint incidunt unde, repellat itaque similique molestias nulla ipsam.</p>
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