<?php
$a0="active";$a1="";$a2="";$a3="";$a4="";$a5="";$a6="";
$title="About Us | Sunshine, IIT Hyderabad";
include_once ('header.php');
 ?>

<style>
   .slick-prev:before,.slick-next:before{
   color:#000!important;
   }
</style>
<div class="text-inter">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-12" style="width:100%;">
            <h1 align="center">
            <b>About Us</b>
            </h1>
         </div>
      </div>
      <div class = "row" style="text-align: center;">
               <div class="col-md-offset-2 col-md-8 col-sm-12 abt-slider">
                  <img src="images/about-slider/1.png" style="max-width:10%; vertical-align: middle">
                  <img src="images/about-slider/2.jpg" style="max-width:10%">
                  <img src="images/about-slider/3.JPG" style="max-width:10%">
                  <img src="images/about-slider/4.JPG" style="max-width:10%">
                  <img src="images/about-slider/5.jpg" style="max-width:10%">
                  <img src="images/about-slider/6.JPG" style="max-width:10%">
               </div>
               <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
               <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
               <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
               <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
               <script type="text/javascript" src="slick/slick.min.js"></script>
               <script>
                  $('.abt-slider').slick({
                     dots: true,
                     speed: 500,
                     infinite: true,
                     //speed: 300,
                     slidesToShow: 1,
                     //adaptiveHeight: true,
                     //fade: true,
                     responsive: true,
                     cssEase: 'linear'
                  });
               </script>
         </div>
         <div class="row">
            <div class="col-md-12 col-sm-12">
            <p>
               <font size="4pm">
            <ul> 
            Since its inception on January 12, 2012, Sunshine- the counselling cell at IIT- H, has been committed to
            helping the student community. The dedicated <a href="./team.php">team</a>  of Sunshine comprises of a Faculty in- Charge, three Psychological Counsellors,
            eighteen faculty representatives, twelve student heads and thirty three management team members</a>.<br><br>
            </ul>
            </ul>
            </font></p>
            <h1 align="center">
            <b>Student Mentorship Programme</b>
            </h1>
            <p>
               <font size="4pm">
            <ul> 
            The Student Mentor Program is run by Sunshine, the counseling cell of IITH. The student mentors are
            selected by the Sunshine counsellors through an interview and are trained in basic counselling skills
            thereby, making them competent to help other students in an unbiased manner and enabling them to
            run the program in an efficient way.<br><br>
            The student mentorship program is aimed at offering the incoming students, an interface to understand and interact with the diverse student community at IITH. With the institute having a strict anti-ragging policy, the program also doubles up as an excellent ice-breaker.<br><br>
            <b>The objectives of the student mentor program include:</b><br>
            <ul>    
            <li>Welcoming and orienting the new students of IITH.</li>
            <li>Guiding the new students about life at IITH campus, the Student Gymkhana and its activities, college fests, etc.</li>
            <li>Providing academic guidance to the students.</li>
            <li> Enforcing the anti-ragging rule.</li>
            </ul><br>
            On the whole, the
            program aims to provide the incoming students with a cordial environment to make their transition to
            the IITH way of life as smooth and fun-filled as possible.
            </ul>
            <ul>Have some queries? Visit our <a href="/faq.php">FAQ</a> page. </ul> 
            </font>
            </p>
         </div>
         </div>
      </div>
   </div>
</div>

<?php include_once ('footer.php'); ?>
