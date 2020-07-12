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

<section class="site-section" id="index">
	
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
          
         
 <div class="col-md-2">
            <h1 style="font-family: Agency FB; font-size: 67px; background-color: white;" >EJUKA</h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
  <nav class="site-navigation position-relative text-right" role="navigation">
 
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#index" class="nav-link">Home</a></li>  
                <li><a href="notifications.php" class="nav-link">Notification</a></li>          
              
                <li><a href="#event-section" class="nav-link">Events</a></li> <!-- ivide maaati href -->
                <li>
                  <a href="#services-section" class="nav-link">Services</a></li>
                <li class="has-children">
               <a class="nav-link">Gallery</a> <!-- ivide maaaati -->
                <ul class="dropdown">
                    <li><a href="#gallery-section" class="nav-link">Images</a></li>
                    <li><a href="#video-section" class="nav-link">Videos</a></li>
                </ul>
                </li>
                
                 <!-- ivide href and  ul maati -->
 <!-- <?php
       
          $qry_n="SELECT * FROM services "; 
          
             $result_not1=mysqli_query($link,$qry_n);
          if(mysqli_num_rows($result_not1) > 0) 
            {
                while($not1 = mysqli_fetch_assoc($result_not1))
                {
            ?>
                    <a href="services.php?id=<?php echo $not1['S_id']; ?>" class="nav-link"><?php echo $not1['Sevices']; ?></a>
                    
                 <?php
                 }
                 }?>   -->
                   
                
                                              
                
                
                
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
  <li><a href="adminindex.php" class="nav-link">Login</a></li>
  <?php
}
    ?>          </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

  
    <section class="site-blocks-cover overflow-hidden">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 align-self-center">

            <div class="row">
              <div class="col-lg-11">

                <h1>We are <span class="typed-words"></span></h1>
                <p>Elite Journey to the Universe of Knowledge and Adventure</p>
              </div>
              
            </div>
          </div>
          
        </div>
      </div>
    </section> 

    <section>
      <div class="container">
        <div class="row">
          <div class="col-12" style="margin-top: -7%;">
            <div class="slide-one-item home-slider owl-carousel">
              <img src="images/coach_hero_1.jpg" alt="Free Website Template by Free-Templat.co" class="img-fluid img">
              <img src="images/coach_hero_2.jpg" alt="Free Website Template by Free-Templat.co" class="img-fluid img">
              <img src="images/coach_hero_3.jpg" alt="Free Website Template by Free-Templat.co" class="img-fluid img">
            </div>
          </div>
        </div>
      </div>
    </section>
</section>
    <section class="site-section" id="about-section">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-3">
            <h2 class="text-black">Hey there, Welcome to EJUKA Educational Council</h2>
          </div>
          <div class="col-md-6 mb-5">
            <p>The team EJUKA(Elite Journey to the Universe of Knowledge and Adventure) is a fellowship of a group of youths which got formed in the village of olavattur near kondotty of Malappuram district, with a goal to create a new generation by strengthening the opportunities and possibilities in higher studies of our students.</p>
            <p>The main motive of our team is to make avaiable the tremendous opportunities available in the educational field to our students at free of cost.</p>
            <p>As a part of it,we are conducting somany programmes over all.</p>
            <p class="mt-5"><img src="images/signature.jpg" alt="Free website template by Free-Template.co" class="img-fluid w-25"></p>
          </div>
          <div class="col-md-5 ml-auto">
          <marquee direction="left">  <h2 class="text-black mb-4 h6">Notifications </h2> </marquee>
             <marquee direction="up">
            <ul class="list-unstyled">
           <?php
       		$qry_not="SELECT * FROM notification order by N_id";	
			$result_not=mysqli_query($link,$qry_not);
			if(mysqli_num_rows($result_not) > 0) 
			{
				while($not = mysqli_fetch_assoc($result_not))
				{
            ?>
            <a href="notifications.php?id=<?php echo $not['N_id'];?>">  <li class="mb-4">
                <h3 class="text-black m-0"><?php echo $not['Title'];?></h3>
                <span class="text-muted"><?php echo substr($not['Description'],0,20)."....";?></span>
              </li>
              </a>
             <?php
         		}
         	}
             ?>
            </ul>
            </marquee>
          </div>
        </div>

        
      </div>
    </section>
  

    <section class="site-section bg-light" id="event-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="text-black">Our Events</h2>
            <p>The main motive of our team is to make avaiable the tremendous opportunities available in the educational field to our students at free of cost.
                As a part of it,we are conducting some state level programmes as given below.</p>
          </div>
        </div>

        <div class="nonloop-block-13 owl-style owl-carousel">
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
            <a href="events.php?id=<?php echo $not_envts['E_ID'];?>">  
               <div class="training">
	            <figure class="mb-4"><img src="main/events/<?php echo $img;?>" alt="Free website template by Free-Template.co" class="img-fluid"></figure>
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
    


    <section class="site-section" id="services-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="text-black">Our Services</h2>
            <p>We provide some Services like..</p>
          </div>
        </div>

        <div class="nonloop-block-13 owl-style owl-style-md owl-carousel">

        <?php
       		$qry_envts="SELECT * FROM services ";	
			$result_envts=mysqli_query($link,$qry_envts);
			if(mysqli_num_rows($result_envts) > 0) 
			{
				while($not_envts = mysqli_fetch_assoc($result_envts))
				{
					
            ?>
          <div class="service">
            
            <h3 class="text-black mb-3"><?php echo $not_envts['Sevices']; ?></h3>
            <p><?php echo $not_envts['Description']; ?></p>
          </div>
          <?php
            }
          }
          ?>

         
        </div>

      </div>
    </section>

    <section class="site-section" id="gallery-section">
      <div class="container-fluid">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="text-black">Image Gallery</h2>
            <p>EJUKA Images</p>
          </div>
        </div>
        
        <div class="row">
         <?php
       		$qry_envts="SELECT * FROM gallery where G_type='image' order by G_ID";	
			$result_envts=mysqli_query($link,$qry_envts);
			if(mysqli_num_rows($result_envts) > 0) 
			{
				while($not_envts = mysqli_fetch_assoc($result_envts))
				{
					$img=$not_envts['G_url'];
            ?>
            <a class="col-6 col-md-6 col-lg-4 col-xl-3 gal-item d-block" data-aos="fade-up" data-aos-delay="100" href="main/gallery/<?php echo $img;?>" data-fancybox="gal"><img src="main/gallery/<?php echo $img;?>"  class="img-fluid"></a>

           
             <?php
         		}
         	}
             ?>
          
            



        </div>
      </div>
    </section>  <!-- ivide kondu vannu -->
  <section class="site-section" id="video-section">
      <div class="container-fluid">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="text-black">Video Gallery</h2>
            <p>Here are some videos from our youtube</p>
          </div>
        </div>
        
        <div class="row">
         <?php
          $qry_envts="SELECT * FROM gallery where G_type='video' order by G_ID";  
      $result_envts=mysqli_query($link,$qry_envts);
      if(mysqli_num_rows($result_envts) > 0) 
      {
        while($not_envts = mysqli_fetch_assoc($result_envts))
        {
          $img=$not_envts['G_url'];
            ?>
 <div class="service">         
<video width="540" height="310" controls>
  <source src="<?php echo $img;?>" type="video/mp4">
</video>
  </div>         
             <?php
            }
          }
             ?>     
            



        </div>
      </div>
    </section>

  

  <!--  <section class="site-section" id="testimonials-section" data-aos="fade">
      <div class="container">
        
        <div class="row justify-content-center" data-aos="fade-up">
          <div class="col-lg-6 text-center mb-5">
            <h2 class="text-black mb-2">Happy Customers</h2>
          </div>
        </div>
        <div  data-aos="fade-up" data-aos-delay="200">
          <div class="owl-carousel owl-style owl-carousel-one no-owl-nav">
            <div>
              <div class="block-testimony-1 text-center">
                
                <blockquote class="mb-4">
                  <p>&ldquo;The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.&rdquo;</p>
                </blockquote>

                <figure>
                  <img src="images/person_4.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
                </figure>
                <h3 class="font-size-20 text-black">Ricky Fisher</h3>
              </div>
            </div>

            <div>
              <div class="block-testimony-1 text-center">

                

                <blockquote class="mb-4">
                  <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
                </blockquote>

                <figure>
                  <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
                </figure>
                <h3 class="font-size-20 mb-4 text-black">Ken Davis</h3>

                
              </div>
            </div>

            <div>
              <div class="block-testimony-1 text-center">
                

                <blockquote class="mb-4">
                  <p>&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
                </blockquote>

                <figure>
                  <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
                </figure>
                <h3 class="font-size-20 text-black">Mellisa Griffin</h3>

                
              </div>
            </div>

            <div>
              <div class="block-testimony-1 text-center">


                <blockquote class="mb-4">
                  <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                </blockquote>

                <figure>
                  <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
                </figure>
                <h3 class="font-size-20 mb-4 text-black">Robert Steward</h3>

                
              </div>
            </div>


          </div>
        </div>
      </div>
    </section>

     <section class="site-section" id="blog-section">
      <div class="container">
        <div class="row justify-content-center" data-aos="fade-up">
          <div class="col-lg-6 text-center mb-5">
            
            <h2 class="text-black mb-2">Our Blog</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-4" data-aos="fade-up"  data-aos-delay="">
            <div class="d-lg-flex blog-entry">
              <figure class="mr-4">
                <a href="single.html"><img src="images/coach_1_sm.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid rounded"></a>
              </figure>
              <div class="blog-entry-text">
                <h3><a href="single.html">Unleash Your Potential With These 5 Tips</a></h3>
                <span class="post-meta mb-3 d-block">April 17, 2019</span>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p><a href="#" class="">Read More..</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4" data-aos="fade-up"  data-aos-delay="100">
            <div class="d-lg-flex blog-entry">
              <figure class="mr-4">
                <a href="single.html"><img src="images/coach_2_sm.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid rounded"></a>
              </figure>
              <div class="blog-entry-text">
                <h3><a href="single.html">Unleash Your Potential With These 5 Tips</a></h3>
                <span class="post-meta mb-3 d-block">April 17, 2019</span>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p><a href="#" class="">Read More..</a></p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-4" data-aos="fade-up"  data-aos-delay="">
            <div class="d-lg-flex blog-entry">
              <figure class="mr-4">
                <a href="single.html"><img src="images/coach_3_sm.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid rounded"></a>
              </figure>
              <div class="blog-entry-text">
                <h3><a href="single.html">Unleash Your Potential With These 5 Tips</a></h3>
                <span class="post-meta mb-3 d-block">April 17, 2019</span>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p><a href="#" class="">Read More..</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4" data-aos="fade-up"  data-aos-delay="100">
            <div class="d-lg-flex blog-entry">
              <figure class="mr-4">
                <a href="single.html"><img src="images/coach_2_sm.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid rounded"></a>
              </figure>
              <div class="blog-entry-text">
                <h3><a href="single.html">Unleash Your Potential With These 5 Tips</a></h3>
                <span class="post-meta mb-3 d-block">April 17, 2019</span>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p><a href="#" class="">Read More..</a></p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section> -->

    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <h2 class="text-black">Contact Us</h2>
          </div>
        </div>
        <div class="row mb-5">
          <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
            <p class="mb-0 font-weight-bold">Address</p>
            <p class="mb-4">Olavattur, Kondotty, Malappuram, Kerala, India
          </div>
          <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
            <p class="mb-0 font-weight-bold">Phone</p>
            <p class="mb-4"><a href="#">+91 9400 344 947</a></p>
          </div>
          <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
            <p class="mb-0 font-weight-bold">Email Address</p>
            <p class="mb-0"><a href="#">ejuka2k18@gmail.com</a></p>
          </div>
        </div>
        <!-- <div class="row">
          <div class="col-lg-12 mb-5">
            <form action="#" method="post">
              <div class="form-group row">
                <div class="col-md-6 mb-3 mb-md-0">
                  <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="First name">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Email address">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="" id="" class="form-control" placeholder="Write your message." cols="30" rows="10"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 mr-auto">
                  <input type="submit" class="btn btn-block btn-primary text-white py-2 px-5" value="Send Message">
                </div>
              </div>
            </form>
         -->  </div>
          
        </div>
      </div>
    </div>

    
    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2 class="footer-heading mb-4">About Us</h2>
            <p>The team EJUKA(Elite Journey to the Universe of Knowledge and Adventure) is a fellowship of a group of youths which got formed in the village of olavattur near kondotty of Malappuram district, with a goal to create a new generation by strengthening the opportunities and possibilities in higher studies of our students</p>
          </div>

<!-- 
          <div class="col-md-3 ml-auto">
            <h2 class="footer-heading mb-4">Quick Links</h2>
            <ul class="list-unstyled">
              <li><a href="#about-section" class="smoothscroll">About Us</a></li>
              <li><a href="#training-section" class="smoothscroll">Our Training</a></li>
              <li><a href="#services-section" class="smoothscroll">Services</a></li>
              <li><a href="#testimonials-section" class="smoothscroll">Testimonials</a></li>
              <li><a href="#contact-section" class="smoothscroll">Contact Us</a></li>
            </ul>
          </div>
 -->
          <div class="col-md-4">
            <div class="mb-5">
               <div class="col-md-4">
            <div class="mb-5">
              <h2 class="footer-heading mb-4">Follow Us</h2>
              <a href="https://www.facebook.com/ejuka2k18" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
              <a href="https://www.instagram.com/ejuka2k18/" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
             
            </div>

            <!-- <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
            <form action="#" method="post" class="footer-subscribe">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-black" type="button" id="button-addon2">Send</button> -->
                </div>
              </div>
            </form>

          </div>
        </div>

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
            strings: ["Social Reformers","Kingmakers","EJUKA", "Professional Life Coach"],
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