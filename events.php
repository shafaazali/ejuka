<?php

session_start();
//Connect to mysql server
	$link = mysqli_connect("localhost","root","","ejuka");
	//$link = mysqli_connect('localhost','root',"");
	if(!$link) {
		die('Failed to connect to server: ' . mysqli_connect_error());
	}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>EJUKA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700, 900|Playfair+Display:400,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" id="home-section">
  

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner" >

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="h2 mb-0">EJUKA<span class="text-primary">.</span> </a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.php" class="nav-link">Home</a></li>                
                <li><a href="notifications.php" class="nav-link">Notification</a></li>
                <li><a href="events.php" class="nav-link">Events</a></li>
                <li class="has-children">
               <a href="#services-section" class="nav-link">Gallary</a>
                <ul class="dropdown">
                    <li><a href="gallary.php" class="nav-link">Images</a></li>
                    <li><a href="videos.php" class="nav-link">Videos</a></li>
                </ul>
                </li>
                <li class="has-children">
                  <a href="#about-section" class="nav-link">Services</a>
                  <ul class="dropdown">
 <?php
       
          $qry_n="SELECT * FROM services "; 
          
             $result_not1=mysqli_query($link,$qry_n);
          if(mysqli_num_rows($result_not1) > 0) 
            {
                while($not1 = mysqli_fetch_assoc($result_not1))
                {
            ?>
                    <li><a href="services.php?id=<?php echo $not1['S_id']; ?>" class="nav-link"><?php echo $not1['Sevices']; ?></a></li>
                    
                 <?php
                 }
                 }?>  
                   
                  </ul>
                                              
                
                
                
<?php if(isset($_SESSION['SESS_MEMBER_ID']))
{
?>
<li><a href="ask.php" class="nav-link">Ask a Doubt</a></li>
<li><a href="feedback.php" class="nav-link">Feedback</a></li>
<li><a href="request.php" class="nav-link">Request for council</a></li> 
<li><a href="exam.php" class="nav-link">Start Exam</a></li>
<li><a href="logout.php" class="nav-link">Logout</a></li>
<?php
}else{
  ?>
  <li><a href="adminindex.php" class="nav-link">login</a></li>
  <?php
}
    ?>          </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
   <section class="site-section" id="gallery-section">
      <div class="container-fluid">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="text-black">Our Events</h2>
            
          </div>
        </div>
<div class="row">
        
         <?php
          $qry_envts="SELECT * FROM events order by E_ID";  
      $result_envts=mysqli_query($link,$qry_envts);
      if(mysqli_num_rows($result_envts) > 0) 
      {
        while($not_envts = mysqli_fetch_assoc($result_envts))
        {
          $e=$not_envts['E_ID'];
          $img_not="SELECT * from event_images where E_ID_FK=$e limit 1";               
              $result_img=mysqli_query($link,$img_not);
              $img="";
          if(mysqli_num_rows($result_img) > 0) 
          {
            $img1=mysqli_fetch_assoc($result_img);
            $img=$img1['Image'];
          }
            ?>
            <a href="events_details.php?id=<?php echo $not_envts['E_ID'];?>">  
               <div class="service">
              <figure class="mb-4"><img src="main/events/<?php echo $img;?>" height="100" width="150" alt="Free website template by Free-Template.co" class="img-fluid"></figure>
              <h3 class="text-black mb-3"><?php echo $not_envts['E_Name'];?></h3>
              <p><?php echo $not_envts['E_Description'];?></p>
             </div>
              </a>
             <?php
            }
          }
             ?>
    </div>
      </div>
    </section>

    

        <div class="row pt-5 mt-5 text-left">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p class="copyright"><small>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small></p>
        
            </div>
          </div>
          
        </div>

      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  
  <script src="js/typed.js"></script>
            <script>
            var typed = new Typed('.typed-words', {
            strings: ["Motivational Speakers","Professional Speakers","Business Speakers", "Professional Life Coach"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            </script>
  
  <script src="js/main.js"></script>

  </body>
</html>