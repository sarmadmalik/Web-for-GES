<?php
if(isset($_POST['submit']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "gsarmadmalik@gmail.com";
$headers = "From: $name<$email>";
$message = "Name: $name \n\nEmail: $email \n\nMessage: $message";

if(mail($to, $name, $message, $headers))
{echo "Email sent";}
else
{
echo "error please try again";
}

}
?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/tab-logo.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Global Emerging Solutions</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/materialdesignicons.min.css" rel="stylesheet">
        
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="vendors/animate-css/animate.css" rel="stylesheet">
        <link href="vendors/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link href="css/contact.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrapValidator.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/contact.css">
        
       <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
       

    </head>
    <body>
       
      
        <!--================Header Area =================-->
       <div class="contact-main" >
        <header class="main_header_area transparent_menu">
             <div class="header_top_area">
                <div class="container">
                    <div class="pull-left">
                        <a href="#"><i class="fa fa-phone"></i>+1626-235-9542</a>
                        <a href="#"><i class="fa fa-map-marker"></i>Los Angeles, California, USA</a>
                        <a href="#"><i class="mdi mdi-clock"></i>08 AM - 05 PM</a>
                    </div>
                    <div class="pull-right">
                        <ul class="header_social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="main_menu_area">
                <div class="container main-navbar-ges">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""><img src="img/logo.png" alt=""></a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
<!--
                                <li class="dropdown submenu">
                                    <a href="index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                                    
                                </li>
-->
<!--
                                <li class="dropdown submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="project-full-width.html">Project Full Width</a></li>
                                        <li><a href="project-grid-three-column.html">Project Grid 01</a></li>
                                        <li><a href="project-grid-two-column.html">Project Grid 02</a></li>
                                        <li><a href="project-three-column.html">Project Grid 03</a></li>
                                        <li><a href="project-single.html">Single Project</a></li>
                                    </ul>
                                </li>
-->
<!--
                                <li><a href="#">about us</a></li>
                                <li><a href="team.html">Team Member</a></li>
-->
                                 <li><a href="index.html">Home</a></li>
                                 <li class=""><a href="ourteam.html">Our Team</a></li>
                                <li class="active"><a href="contact2.html">Contact</a></li>
                                
<!--                                <li class="icon_search"><a href="#"><i class="mdi mdi-cart"></i></a></li>-->
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
        </header>
        <!--================Header Area =================-->
 
 <div class="container">
<section id="support" class="support animated bounceInLeft">
     <h2 class="text-center text-uppercase" >Contact Us</h2>
     <p class="text-center"></p>
     <div class="container">
         <div class="row">
              <div class="col-md-6 col-md-offset-3">
                <form id="form" method="post" action="" class="form-horizontal">
                    <div class="form-group">
                     <input class="form-control" type="text" placeholder="Name" name="name" required>
                     </div>
                     <div class="form-group">
                     <input class="form-control" type="email" placeholder="Email" name="email" required>
                     </div>
                     <div class="form-group">
                     <textarea class="form-control" placeholder="Message" name="message" required></textarea>
                     </div>
                     <div class="form-group">
                     <input class="btn btn-default" type="submit" value="Send" name="submit" >
                         </div>

                 </form>
                 
             </div>
         </div>
     </div>
 </section>
       </div>
        <!--================Footer Area =================-->
        <footer class="footer_area">
            <div class="footer_widgets_area footer_bg">
                <div class="container">
                    <div class="row footer_widgets_inner">
                        <div class="col-md-4 col-sm-6">
                            <aside class="f_widget about_widget" style="top: 20px;position: relative;">
                                <img src="img/logo-blue.png" alt="" style="width: 243px">
                                <p>Global Emerging Solutions provides web based solutions to small and large scale organizations. We provide Enterprise Solutions built by our team of industry experts.</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-offset-1 col-md-4 col-sm-6">
                            <aside class="f_widget address_widget">
                                <div class="f_w_title">
                                    <h3>Office Address</h3>
                                </div>
                                <div class="address_w_inner">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>Loss Angles California, USA</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>+1625-235-9542</p>
                                           
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>info@globalemergingsolutions.com</p>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <aside class="f_widget give_us_widget">
                                <h5>Give Us A Call</h5>
                                <h4>+1626-235-9542</h4>
                                <h5>or</h5>
                                <a class="get_bg_btn" href="contact2.html">GET A QUOTE</a>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_copy_right">
                <div class="container">
                    <div class="copy_right_inner">
                    	<div class="pull-left">
                    		<h4><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with by <a href="https://www.globalemergingsolutions.com" target="_blank">GES</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></h4>
                    	</div>
                    	<div class="pull-right">
                    		<ul class="footer_menu">
                    			<li><a href="index.html">Home</a></li>
                    			<li><a href="ourteam.html">Our Team</a></li>
                    			<li class="active"><a href="contact2.html">Contact</a></li>
                    		</ul>
                    	</div>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        </div>

        
  
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-2.2.4.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
       
        
       
      
        <!--gmaps Js-->
<!--
        <script src="js/bootstrapValidator.min.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
-->
        
        <script src="js/theme.js"></script>
        <script src="js/custom-animation.js"></script>
    </body>
</html>
