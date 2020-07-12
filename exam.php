<?php

session_start();
//Connect to mysql server
	$link = mysqli_connect("localhost","root","","ejuka");
	//$link = mysqli_connect('localhost','root',"");
	if(!$link) {
		die('Failed to connect to server: ' . mysqli_connect_error());
	}
  if(isset($_POST['name']))
  {
    $next=$_POST['cat']+1;
    $cat=$_POST['cate'];
    $totq=$_POST['last'];
    $user=$_SESSION['SESS_MEMBER_ID'];
    for($j=1;$j<$totq;$j++)
    {
      $qid=$_POST['q'.$j];
      $ans=$_POST['qp'.$j];
      $sq="INSERT INTO exam(E_user_fk,Q_id,score,Q_cid_fk) values ('$user','$qid','$ans','$cat')";
      mysqli_query($link,$sq);
    }
    if($_POST['name']=="Next")
    {
    header("Location:exam.php?start=$next");
    }
    else
    {
      header("Location:result.php?msg=1");
    }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <style>
      ol {
        background: #ff9999;
        padding: 20px;
      }
      ol li {
        background: #ffe5e5;
        padding: 5px;
        margin-left: 30px;
      }
      p {
        text-indent: 50px;
        text-align: justify;
        letter-spacing: 2px;
      }
      h2 {
        color: black;
        font-family: verdana;
        font-size: 300%;
      }
    </style>
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
            <h1 style="font-family: Agency FB; font-size: 67px; background-color: white;" >EJUKA</h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
  <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.php" class="nav-link">Home</a></li>                
                <!-- <li><a href="notifications.php" class="nav-link">Notification</a></li>
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
                                              
                
                
    <li><a href="request.php" class="nav-link">Request for council</a></li>             
<?php if(isset($_SESSION['SESS_MEMBER_ID']))
{
?>
<li><a href="ask.php" class="nav-link">Ask a Doubt</a></li>
<li><a href="feedback.php" class="nav-link">Feedback</a></li>

<li><a href="exam.php" class="nav-link">Start Exam</a></li> -->
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

  
   <!--  <section class="site-blocks-cover overflow-hidden">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 align-self-center">

            <div class="row">
              <div class="col-lg-11">

                <h1>We are <span class="typed-words"></span></h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum modiblanditiis error. <a href="#">Contact us</a></p>
              </div>
              
            </div>
          </div>
          
        </div>
      </div>
    </section>  -->
<?php  if(!isset($_GET['start']))
  {
?>
   <br/> <section class="site-section" id="about-section">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-3">
            <h2>Who am I ?</h2><br/>
            <p> Do you want to find out In which  intelligence you come first?</p>
            <p>    Carefully read and mark yourself in every categories, based on following instructions </p>
          </div>
          <div class="col-8 mb-5">
          <ol>
          <?php
            $qry_rules="SELECT * FROM rules order by Rid";  
            $rules=mysqli_query($link,$qry_rules);
            if(mysqli_num_rows($rules) > 0) 
            {
              while($not_rules = mysqli_fetch_assoc($rules))
              { ?>
                <li> <?php echo $not_rules['Rule']; ?></li>
              <?php 
              }
            } 
          ?>
          </ol>
          <p> We add your marks in every category and the top scored category will be your Best Intelligence</p>
            <div class="form-group row">
                <div class="col-md-12 mr-auto">
          <a href="?start=1"><input type="button" class="btn btn-block btn-primary" value="Start Exam"></a>
          </div>

        </div>
      </div>
    </section>
  <?php } ?>



<?php 
  if(isset($_GET['start']))
  {
 
?>

     <section class="site-section" id="blog-section">
      <div class="container">
 
        <div class="row">
        <div class="col-lg-12 mb-5">
  <?php  
    $qry_cat="SELECT * FROM category order by C_ID ";  
    $category=mysqli_query($link,$qry_cat);
    
    if(mysqli_num_rows($category) > 0) 
    {
      $norow=mysqli_num_rows($category);
      $cat=1;
      while($not_category = mysqli_fetch_assoc($category))
      { 
        echo '<form method="post" >'; 
        if(isset($_GET['start']) && $_GET['start'] == $cat )
        { 
          echo '<h2 class="text-black mb-2">'.$not_category['C_Name'].'</h2>';
          $cid=$not_category['C_ID'];
          $qry_ques="SELECT * FROM questions where Q_Cid_fk =  $cid ORDER BY RAND() LIMIT 8 ";  
          $ques=mysqli_query($link,$qry_ques);
          $ch=1;
          $i=1;
          while($not_ques = mysqli_fetch_assoc($ques))
          { 
          ?>
<br/>
         <br/> <div class="col-md-6 mb-4" data-aos="fade-up"  <?php if ($ch % 2 == 0) { echo "data-aos-delay='100'"; } else { echo "data-aos-delay=''"; }  ?>>
            </div><div class="d-lg-flex blog-entry">              
              <div class="blog-entry-text">
                <h3><?php echo $i .".". $not_ques['Question']; ?></h3>
                <input type="hidden" value="<?php echo $not_ques['Q_id']; ?>" name="<?php echo 'q'.$i;?>" > 
                <input type="hidden" value="<?php echo $cid; ?>" name="cate" > 
                <input type="radio" value="3" name="<?php echo 'qp'.$i;?>" >&nbspStrongly Agree 
                <br/><input type="radio" value="2" name="<?php echo 'qp'.$i;?>" >&nbspAgree 
                <br/><input type="radio" value="1" name="<?php echo 'qp'.$i;?>" >&nbspPartially Agree  
                 <br/><input type="radio" value="0" name="<?php echo 'qp'.$i;?>" >&nbspDisagree            
              </div>
            </div>
         
          <?php
          $ch++;
          $i++;

          }
          if($cat==$norow)
          {
            echo '<input type="submit" value="Finish" name="name" class="btn btn-block btn-primary">';
          }
          else
          {
          echo '<input type="submit" value="Next" name="name" class="btn btn-block btn-primary">';
          } 
          echo  ' <input type="hidden" value="'.$i.'" name="last">';
          echo  ' <input type="hidden" value="'.$cat.'" name="cat">';
        } 
        $cat++;
      } 
    } 
  ?>

</div>
        </div>
      </div>
    </section>
    <?php } ?>

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
        </div> <!--
        <div class="row">
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
          </div>
          
        </div>
      </div>
    </div> -->

    
    <!-- 
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2 class="footer-heading mb-4">About Us</h2>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
          </div>


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

          <div class="col-md-4">
            <div class="mb-5">
              <h2 class="footer-heading mb-4">Follow Us</h2>
              <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </div>

            <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
            <form action="#" method="post" class="footer-subscribe">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-black" type="button" id="button-addon2">Send</button>
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
    </footer> -->

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