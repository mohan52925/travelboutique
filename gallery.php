<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Traveler Boutique | gallery</title>
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
        <!-- Flaticon CSS-->
        <link rel="stylesheet" type="text/css" href="css/font2/flaticon.css">        
        <!-- Owl Caousel CSS -->
        <link rel="stylesheet" href="vendor/OwlCarousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendor/OwlCarousel/owl.theme.default.min.css">        
        <!-- Main Menu CSS -->      
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <!-- nivo slider CSS -->
        <link rel="stylesheet" href="vendor/slider/css/nivo-slider.css" type="text/css" />
        <link rel="stylesheet" href="vendor/slider/css/preview.css" type="text/css" media="screen" />
        <!-- Switch Style CSS -->
        <link rel="stylesheet" href="css/switch-style.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="style.css">
        <!-- Modernizr Js -->
        <script src="js/modernizr-2.8.3.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            .recipe-box2 {
                margin: 0;
                border: 1px solid transparent;
            }
        </style>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="wrapper">
            <!-- Header Area Start Here -->
           <?php include('header.php'); ?>
            <!-- Header Area End Here -->
            <!-- Inner Page Banner Area Start Here -->
            <div class="inner-page-banner-area">
                <div class="container">
                    <div class="pagination-area">
                        <h2> <span>Gallery </span></h2><br>
                        <h4 class="mt-30"> <span>Crafting Unforgettable Journeys</span></h4>   
                    </div>
                </div>  
            </div> 
            <!-- Inner Page Banner Area End Here -->
            <!-- Food Menu 2 Area Start Here -->  
            <div class="food-menu2-area bg-gray">
                <div class="container-fluid" id="inner-isotope">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="isotop-classes-tab myisotop"> 
                                <a href="#" data-filter="*" class="current">Videos and images</a>
                                 <?php
                                    include("wadmin/config.php");
                                    $con = new mysqli($host, $user,$pass,$db_name);	
                                    $cat_id = array();
                                    $select_cat = "SELECT * FROM $gallery_categories WHERE status='A'";
                                    $result_cat = $con->query($select_cat) or die(mysqli_error($con));
                                  
                                    while($data_cat = $result_cat->fetch_array())
                                    {
                                       $cat_id[] = $data_cat['id'];
                                ?>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row featuredContainer">
                       <?php
                            $con = new mysqli($host, $user,$pass,$db_name);	
                            $select = "select * from $videos_table where status='A'";
                            $result = $con->query($select) or die(mysqli_error($con));
                            $video_count = $result->num_rows;
                            if($video_count > 0)
							{
                                while($data = $result->fetch_array())
                                {
                                   $video = str_replace('watch?v=','embed/',$data['video'])
                        ?>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="food-menu2-box">
                              <div class="embed-responsive embed-responsive-16by9">
                                <iframe width="560" height="315" src="<?php echo $video; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              </div>
                            </div>
                        </div>    
                        <?php
                                }
                            }
                        ?>
                      
                    </div>
                    <div class="row featuredContainer">
                       <?php
                            $con = new mysqli($host,$user,$pass,$db_name);
                            foreach($cat_id as $category_id)
                            {
                                $select = "select * from $gallery_images where gcat_id='".$category_id."' and status='A'";
                                $result = $con->query($select) or die(mysqli_error($con));
                                while($data = $result->fetch_array())
                                {
                        ?> 
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 <?php echo $category_id; ?>">
                           <div class="food-menu2-box recipe-box2">
                                <ul class="recipe-box2-social">
                                    <li><a href="img/<?php echo $data['file_name'] ; ?>" data-fancybox="gallery"><i class="fa fa-search-plus" aria-hidden="true"></i></a></li>
                                </ul>                               
                                <div class="food-menu2-more-holder">                                   
                                    <a href="#"><img src="img/<?php echo $data['file_name'] ; ?>" alt="<?php echo $data['name'] ; ?>," class="img-responsive"></a>
                                </div>                               
                            </div>
                        </div>
                        <?php
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
            <!-- Food Menu 2 Area End Here -->
            <!-- Footer Area Start Here -->
           <?php include('footer.php'); ?>
    </body>
</html>
