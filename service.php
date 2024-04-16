<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Traveler Boutique | packages</title>
        <meta name="description" content="We,shubhamangalam wedding Caters Proud to introduce ourselves that we are one of the leading wedding caterers in Chennai, Tamilnadu.">
        <meta name="keywords" content="best catering service in chennai,best wedding event organiser in chennai,Specialist in Marriage Caterers,both budgetwise and qualitywise service">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Normalize CSS --> 
        <link rel="stylesheet" href="css/normalize.css">
        <!-- Main CSS -->         
        <link rel="stylesheet" href="css/main.css">
        <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Animate CSS --> 
        <link rel="stylesheet" href="css/animate.min.css">
        <!-- Font-awesome CSS-->
        <link rel="stylesheet" href="css/font-awesome.min.css">        
        <!-- Owl Caousel CSS -->
        <link rel="stylesheet" href="vendor/OwlCarousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendor/OwlCarousel/owl.theme.default.min.css">        
        <!-- Main Menu CSS -->      
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <!-- nivo slider CSS -->
        <link rel="stylesheet" href="vendor/slider/css/nivo-slider.css" type="text/css" />
        <link rel="stylesheet" href="vendor/slider/css/preview.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
        <!-- Switch Style CSS -->
        <link rel="stylesheet" href="css/switch-style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="style.css">
        <!-- Modernizr Js -->
        <script src="js/modernizr-2.8.3.min.js"></script>
        <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class="wrapper">
           <?php
		   include "header.php";
		   ?>
            <!-- Header Area End Here -->
             <!-- Inner Page Banner Area Start Here -->
            <div class="inner-page-banner-area">
                <div class="container">
                    <div class="pagination-area">
                        <h2> <span>Packages </span></h2><br>
                        <h4 class="mt-30"> <span>Crafting Unforgettable Journeys</span></h4>
                      
                    </div>
                </div>  
            </div> 
            <!-- Inner Page Banner Area End Here -->
            <!-- our-recipes-area Start Here -->
            <div class="our-recipes-area section-space bg-gray">
                <div class="container">
                    <div style="padding-left: 20px;padding-bottom: 20px;" class="btn-group" role="group" aria-label="Basic example" >
                          <form action="" method="get">
                          <input type="submit" name ="selectall" class="btn btn-outline-danger" value="All" />
                            <input type="submit" name ="selectdom" class="btn btn-outline-danger" value="Domestic" />
                            <input type="submit" name ="selectnternational" class="btn btn-outline-danger" value = "International" />
                          </form>
                    </div>
                    <div class="row">
                        <?php
                        include './wadmin/config.php';
                        if(isset($_GET['selectall'])){
                            $query = 'SELECT * FROM packages where gcat_id = "6" and status ="A"';
                            $result = $con->query($query) or die(mysqli_error($con));
                            while($row = mysqli_fetch_assoc($result)){
                            ?>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6  wow fadeInLeft">
                                <div class="recipe-box2">
                                    <ul class="recipe-box2-social">
                                        <li><a href="./img/flyer/<?php echo $row['file_name'] ?>" data-fancybox="gallery"><i class="fa fa-search-plus" aria-hidden="true"></i></a></li>
                                    </ul>                               
                                    <div class="recipe-box2-img-holder">                                   
                                        <a href="#"><img src="./img/flyer/<?php echo $row['file_name'] ?>" alt="Traveler Boutique" class="img-responsive"></a>
                                    </div>
                                    <div class="recipe-box2-bottom-content-holder">
                                        <h3>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Enquery Now</button>
                                            <br>
                                        </h3>
                                        <a href="https://wa.me/918778640593"><i class="fab fa-whatsapp"> Contact Now</i></a>
                                    </div>
                                </div>
                            </div> 
                            <?php
                            }
                        }elseif(isset($_GET['selectdom'])){
                            $query = 'SELECT * FROM packages where gcat_id = "6" and pcategory = "domestic" and status ="A"';
                            $result = $con->query($query) or die(mysqli_error($con));
                            while($row = mysqli_fetch_assoc($result)){
                            ?>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6  wow fadeInLeft">
                                <div class="recipe-box2">
                                    <ul class="recipe-box2-social">
                                        <li><a href="./img/flyer/<?php echo $row['file_name'] ?>" data-fancybox="gallery"><i class="fa fa-search-plus" aria-hidden="true"></i></a></li>
                                    </ul>                               
                                    <div class="recipe-box2-img-holder">                                   
                                        <a href="#"><img src="./img/flyer/<?php echo $row['file_name'] ?>" alt="Traveler Boutique" class="img-responsive"></a>
                                    </div>
                                    <div class="recipe-box2-bottom-content-holder">
                                        <h3><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Enquery Now</button></h3>
                                        <a href="https://wa.me/918778640593"><i class="fab fa-whatsapp"> Contact Now</i></a>
                                    </div>
                                </div>
                            </div> <?php
                        }
                    }elseif(isset($_GET['selectnternational'])){
                        $query = 'SELECT * FROM packages where gcat_id = "6" and pcategory = "international" and status ="A"';
                        $result = $con->query($query) or die(mysqli_error($con));
                        while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6  wow fadeInLeft">
                            <div class="recipe-box2">
                                <ul class="recipe-box2-social">
                                    <li><a href="./img/flyer/<?php echo $row['file_name'] ?>" data-fancybox="gallery"><i class="fa fa-search-plus" aria-hidden="true"></i></a></li>
                                </ul>                               
                                <div class="recipe-box2-img-holder">                                   
                                    <a href="#"><img src="./img/flyer/<?php echo $row['file_name'] ?>" alt="Traveler Boutique" class="img-responsive"></a>
                                </div>
                                <div class="recipe-box2-bottom-content-holder">
                                    <h3><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Enquery Now</button></h3>
                                    <a href="https://wa.me/918778640593"><i class="fab fa-whatsapp"> Contact Now</i></a>
                                </div>
                            </div>
                        </div> <?php
                    }
                }else{
                    $query = 'SELECT * FROM packages where gcat_id = "6" and status ="A"';
                    $result = $con->query($query) or die(mysqli_error($con));
                    while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6  wow fadeInLeft">
                        <div class="recipe-box2">
                            <ul class="recipe-box2-social">
                                <li><a href="./img/flyer/<?php echo $row['file_name'] ?>" data-fancybox="gallery"><i class="fa fa-search-plus" aria-hidden="true"></i></a></li>
                            </ul>                               
                            <div class="recipe-box2-img-holder">                                   
                                <a href="#"><img src="./img/flyer/<?php echo $row['file_name'] ?>" alt="Traveler Boutique" class="img-responsive"></a>
                            </div>
                            <div class="recipe-box2-bottom-content-holder">
                                <h3>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Enquery Now</button></h3>
                                    <a href="https://wa.me/918778640593"><i class="fab fa-whatsapp"> Contact Now</i></a>
                                </div>
                        </div>
                    </div> 
                    <?php
                    }
                }
                            ?>
                    </div>
                   
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <span aria-hidden="true" class="close" data-dismiss="modal" aria-label="Close">&times;</span>
                        </div>
                        <div class="modal-body">
                            <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Your Name:</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Mobile No:</label>
                                <input type="text" class="form-control" name="mobile" id="mobile" maxlength="10" >
                            </div>
                            </form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Email:</label>
                                <input type="email" class="form-control" name="email" id="email" required >
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">From Date:</label>
                                <input type="date" class="form-control" name="fromdate" id="fromdate">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">To Date:</label>
                                <input type="date" class="form-control" name="todate" id="todate">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">No of Adults:</label>
                                <input type="number" class="form-control" name="apackages" id="apackages">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">No of children:</label>
                                <input type="number" class="form-control" name="cpackages" id="cpackages">
                            </div>
                            </form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Remarks:</label>
                                <input type="textarea" class="form-control" name="remarks" id="remarks">
                            </div> 
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" onclick="gotowhatsapp()" >Send message</button>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <!-- our-recipes-area End Here -->
            <!-- Footer Area Start Here -->
             <?php 	include ("footer.php");	?>
       

    </body>
    <script>
        function gotowhatsapp() {

            let name = document.getElementById("name").value;
            let mobile = document.getElementById("mobile").value;
            let email = document.getElementById("email").value;
            let fromdate = document.getElementById("fromdate").value;
            let todate = document.getElementById("todate").value;
            let apackages = document.getElementById("apackages").value;
            let cpackages = document.getElementById("cpackages").value;
            let remarks = document.getElementById("remarks").value;

            let url = "https://wa.me/8778640593?text="
                + "Name: " + name + "%0a"
                + "Phone: " + mobile + "%0a"
                + "Email: " + email + "%0a"
                + "Fromdate: " + fromdate + "%0a"
                + "Todate: " + todate + "%0a"
                + "adult packages: " + apackages + "%0a"
                + "Children packages: " + cpackages + "%0a"
                + "Remarks: " + remarks + "%0a";

            window.open(url, '_blank').focus();
        }
      


    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
