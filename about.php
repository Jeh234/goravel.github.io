<?php 
    include('webIncludes/header.php');
    include('webIncludes/navbar.php');
    include('admin/config/dbcon.php');
?>
<style>
.card-img-top {
  max-width: 100%;

}
</style>
<!--Start of banner image-->
<div class="banner-image">
    <?php 
        $display_image1 ="SELECT * FROM blog WHERE id='11' ";
        $query_run = mysqli_query($con, $display_image1);
        if(mysqli_num_rows($query_run)>0){
        foreach($query_run as $display_img1)
        {?>
            <img src="uploads/posts/<?= $display_img1['image'] ?>" width="100%"/>
            <!--p class="overlay-text">Unleashed Your Wanderlust<br>Gora na beh with Goravel!
            </p-->
        <?php
        }
        }
    ?>
</div>
<!--end of banner image-->

<!--Start of about-->
<section><div class="blogtitle" style="margin-top:40px;">
<?php //first card title
    $display_text1 = "SELECT * FROM blog WHERE id='10'";
    $res = $con->query($display_text1);
    if($res->num_rows > 0){
    while($row = $res->fetch_assoc()){
    echo "<h1><center>" . $row["blog_name"]. "</center></h1>";
    }
    }
?>
</div>
<div class="container text-center" style="margin-top:40px;">
    <div class="row">
        <div class="col-sm">
        <?php //about
            $display_text1 = "SELECT * FROM blog WHERE id='10'";
            $res = $con->query($display_text1);
            if($res->num_rows > 0){
            while($row = $res->fetch_assoc()){
            echo "" . $row["blog_description"]. " ";
            }
        }
        ?>
</div>
    <div class="col"><p class="text-justify">
        <?php  //img
            $display_image2 ="SELECT * FROM blog WHERE id='10' ";
            $query_run = mysqli_query($con, $display_image2);
            if(mysqli_num_rows($query_run)>0){
            foreach($query_run as $display_img2){?>
                <img src="uploads/posts/<?= $display_img2['image'] ?>" class="card-img-top"/>
            <?php
                }
            }
        ?>
    </div>
</div>  
</section>
<!--End of about-->

<section>
<div class="container"> <br>
<h1 class="text-center">Our Team</h1> <br>
    <div class="row g-3">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active"> <!--first carousel picture 1-->
                            <?php 
                                $display_image1 ="SELECT * FROM blog WHERE id='12' ";
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
                    $display_text1 = "SELECT * FROM blog WHERE id='12' ";
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
<div class="col-12 col-md-6 col-lg-4">
    <div class="card">
        <div class="card-body">
            <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner"> 
                    <div class="carousel-item active"><!--2nd carousel picture 1-->
                    <?php 
                        $display_image2 ="SELECT * FROM blog WHERE id='13' ";
                        $query_run = mysqli_query($con, $display_image2);
                        if(mysqli_num_rows($res)>0){
                        foreach($query_run as $display_img2)
                        {?>
                        <img src="uploads/posts/<?= $display_img2['image'] ?>" width="100%"/>
                        <?php
                        }
                    }
                    ?>
                    </div>
                </div>
            </div>
            <?php //second card title
                $display_text2 = "SELECT * FROM blog WHERE id='13' ";
                $res = $con->query($display_text2);
                if($res->num_rows > 0){
                    while($row = $res->fetch_assoc()){
                    echo "" . $row["blog_description"]. " ";
                    }
                }
            ?>
        </div>
    </div>
</div>
<div class="col-12 col-md-6 col-lg-4">
    <div class="card">
        <div class="card-body">
            <div id="carouselExampleControls3" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <?php //third carousel picture 1
                        $display_image3 ="SELECT * FROM blog WHERE id='14' ";
                        $query_run = mysqli_query($con,$display_image3);
                        if(mysqli_num_rows($query_run)>0){
                        while($row = mysqli_fetch_array($query_run)){ ?>
                        <img src="uploads/posts/<?= $row['image'] ?>" width='100%'> <?php
                        }
                    }
                    ?>
                    </div>
                
                </div>
            </div>
            <?php //third card title
                $display_text3 = "SELECT * FROM blog WHERE id='14'";
                $res = $con->query($display_text3);
                if($res->num_rows > 0){
                while($row = $res->fetch_assoc()){
                echo "" . $row["blog_description"]. " ";
                }
            }
            ?>
        </div>
    </div>
    </div>
</div>
</section>
<!--start of about developers-->

<!--end of of about developers-->

<!--footer-->
<?php include('webIncludes/footer.php'); ?>
<!--end of footer-->
</body>
</html>