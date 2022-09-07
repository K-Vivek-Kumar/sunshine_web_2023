<?php 
$a0="";$a1="";$a2="";$a3="";$a4="";$a5="active";$a6="";


$title="Events-Sunshine";
include_once ('header.php'); 
?>
<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>

<style type="text/css">
  .container{
    margin:auto;
    /*background-color: #e7e8e7;
    color: #4d4848;*/
    margin-top: 30px;
  }
  .event-name{
    text-align:center;
    font-weight:bold;
    font-family: roboto;
    font-size: 25px;
  }
  .event-desc{
    font-family:Arial, Helvetica, sans-serif;
    font-size:18px;
    font-weight:350;
    text-align: center;
  }
  .img-responsive{
    width:80%;
    position:relative;
    margin-bottom:20px;
  }
  p {
    margin-left: 5%;
    margin-right: 5%;
  }
  @media (min-width: 1200px){
    .container{
    width:80%;
    }
  }
  .events-images-slick img{
    height: auto;
    width: auto;
    max-height: 500px;
   max-width: 100%;
  }
  .slick-prev:before,.slick-next:before{
   color:#000!important;
   }
</style>
<div class="container">
  <div class="row">
    <div class="col-md-12 col-sm-12">
      <h3 class="event-name"> Orientation & First mentor-mentee interaction</h3>
      <div class="event-desc">
        <!-- <p> It's always difficult to break the ice and strike a conversation. But Sunshine helps you do this in the most fun way possible.
          Icebreakers is an event full of games and fun activities in which the freshers get to know each other.
        </p> -->
        <center>
            <div class="events-images-slick orientation-images">
          <div><img src="images/latest_events/orientation2k19/1-comp.jpg" class="img-responsive img-thumbnail"></div>
          <div><img src="images/latest_events/orientation2k19/2-comp.jpg" class="img-responsive img-thumbnail"></div>
          <div><img src="images/latest_events/orientation2k19/3-comp.jpg" class="img-responsive img-thumbnail"></div>
          <div><img src="images/latest_events/orientation2k19/5-comp.jpg" class="img-responsive img-thumbnail"></div>
          <div><img src="images/latest_events/orientation2k19/6-comp.jpg" class="img-responsive img-thumbnail"></div>
          <div><img src="images/latest_events/orientation2k19/8-comp.jpg" class="img-responsive img-thumbnail"></div>
          <div><img src="images/latest_events/orientation2k19/13-comp.jpg" class="img-responsive img-thumbnail"></div>
          <div><img src="images/latest_events/orientation2k19/16-comp.jpg" class="img-responsive img-thumbnail"></div>
          <div><img src="images/latest_events/orientation2k19/20-comp.jpg" class="img-responsive img-thumbnail"></div>
          </div> 
          <p> 26.07.2019 </p>         
        <center>
        <script>
          slideshow_slick = {
                     dots: true,
                     speed: 500,
                     infinite: true,
                     slidesToShow: 1,
                     arrows: true,
                     //adaptiveHeight: true,
                     //fade: true,
                     cssEase: 'linear',
                     responsive: [
                         {
                           breakpoint: 960,
                           settings: {
                             arrows: true,
                             dots:true,
                           }
                         },
                         {
                           breakpoint: 580,
                           settings: {
                             arrows: false,
                             dots: true,
                           }
                         }
                    ]
                  };
          $(".orientation-images").slick(slideshow_slick);
        </script>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 col-sm-12">
      <br>
      <h3 class="event-name"> Ice Breakers </h3>
      <div class="event-desc">
        <p> It's always difficult to break the ice and strike a conversation. But Sunshine helps you do this in the most fun way possible.
          Icebreakers is an event full of games and fun activities in which the freshers get to know each other.
          <center>
           <div class="events-images-slick icebreakers-images">
          <div><img src="images/latest_events/ice19/1-comp.jpg" class="img-responsive img-thumbnail"></div>
          <div><img src="images/latest_events/ice19/3-comp.jpg" class="img-responsive img-thumbnail"></div>
          <div><img src="images/latest_events/ice19/5-comp.jpg" class="img-responsive img-thumbnail"></div>
          <div><img src="images/latest_events/ice19/6-comp.jpg" class="img-responsive img-thumbnail"></div>
          <div><img src="images/latest_events/ice19/7-comp.jpg" class="img-responsive img-thumbnail"></div>
          <div><img src="images/latest_events/ice19/8-comp.jpg" class="img-responsive img-thumbnail"></div>
          <div><img src="images/latest_events/ice19/10-comp.jpg" class="img-responsive img-thumbnail"></div>
          <div><img src="images/latest_events/ice19/14-comp.jpg" class="img-responsive img-thumbnail"></div>
          <div><img src="images/latest_events/ice19/15-comp.jpg" class="img-responsive img-thumbnail"></div>
          </div>
    </center>
    <p>28.09.2019</p>
     <script>
          $(".icebreakers-images").slick(slideshow_slick);
        </script>
        </p><br>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 col-sm-12">
      <br>
      <h3 class="event-name"> Second mentor mentee meeting </h3>
      <div class="event-desc">
        <p> <center>
           <div class="events-images-slick second-menter-mentee-images">
          <div><img src="images/latest_events/second/1-comp.jpg" class="img-responsive img-thumbnail"></div>
          <div><img src="images/latest_events/second/2-comp.jpg" class="img-responsive img-thumbnail"></div>
          <div><img src="images/latest_events/second/3-comp.jpg" class="img-responsive img-thumbnail"></div>
          </div>
    </center>
     <script>
          $(".second-menter-mentee-images").slick(slideshow_slick);
        </script>
        </p><br>
      </div>
    </div>
  </div>
  <div class = "row">
    <div class = "col-md-12 col-sm-12">
        <br>
        <h3 class="event-name">Mental Health Awareness Walkathon</h3>
        <div class="event-desc">
            <p> There is 'NO' health without mental health. And yet, it remains one of the most stigmatized aspects of day-to-day life. So, a walkathon was organized for awareness towards the same on 15th October 2019.
            <center>
            <div class="events-images-slick walkathon-images">
            <div><img class="img-responsive img-thumbnail" src="images/events/walkathon2-comp.jpg"/></div>
            <div><img class="img-responsive img-thumbnail" src="images/events/walkathon3-comp.jpg"/></div>
            <div><img class="img-responsive img-thumbnail" src="images/events/walkathon4-comp.jpg"/></div>
            <div><img class="img-responsive img-thumbnail" src="images/events/walkathon19.jpg"/></div>
          </div>
    </center>
     <script>
          $(".walkathon-images").slick(slideshow_slick);
        </script>
            </p>
        </div>
    </div>
  </div>
  <div class = "row">
    <div class = "col-md-12 col-sm-12">
      <br>
      <h3 class="event-name">Pre Placement Talk</h3>
      <div class="event-desc">
        <p>November 2019</p>
        <img class="img-responsive img-thumbnail" src="images/latest_events/pre-placement-nov-19.jpg" />
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 col-sm-12">
      <h3 class="event-name"> Treasure Hunt </h3>
      <div class="event-desc">
        <p> Each one of us is fond of treasure maps. No matter what the age is, solving clues for a hidden treasure is always
          enjoyed. This is a unique treasure hunt across the campus to discover the Sherlock Holmes in you.
          <center>
           <div class="events-images-slick treasure-hunt-images">
          <div><img src="images/latest_events/treasure-hunt/1-comp.jpg" class="img-responsive img-thumbnail"></div>
          <div><img src="images/latest_events/treasure-hunt/2-comp.jpg" class="img-responsive img-thumbnail"></div>
          <div><img src="images/latest_events/treasure-hunt/3-comp.jpg" class="img-responsive img-thumbnail"></div>
          <div><img src="images/latest_events/treasure-hunt/5-comp.jpg" class="img-responsive img-thumbnail"></div>
          <div><img src="images/latest_events/treasure-hunt/6-comp.jpg" class="img-responsive img-thumbnail"></div>
          <div><img src="images/latest_events/treasure-hunt/7-comp.jpg" class="img-responsive img-thumbnail"></div>
          <div><img src="images/latest_events/treasure-hunt/8-comp.jpg" class="img-responsive img-thumbnail"></div>
          </div>
    </center>
     <script>
          $(".treasure-hunt-images").slick(slideshow_slick);
        </script>
        </p><br>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 col-sm-12">
      <h3 class="event-name"> Mother Language Vlogathon </h3>
      <div class="event-desc">
        <p> On the occasion of International Mother Language Day observed on 21st February, declared by the United Nations. We at Sunshine organized a Vlogathon. Participants shot a video of themselves speaking about IIT Hyderabad in their mother language. Following are some entries:
          <center>
           <div class="events-images-slick vlogathon-posts">
            <div> 
              <div class="hidden-xs hidden-sm">
                <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fsunshineiith%2Fposts%2F2811620982263210&show_text=true&width=350&height=500&appId" width="350" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
              </div>
              <div class="hidden-md hidden-lg hidden-xl">
                <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fsunshineiith%2Fposts%2F2811620982263210&show_text=true&width=250&height=400&appId" width="250" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
              </div>
            </div>
            <div>
              <div class="hidden-xs hidden-sm">
                <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fsunshineiith%2Fposts%2F2811623782262930&show_text=true&height=400&appId" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
              </div>
              <div class="hidden-md hidden-lg hidden-xl">
                <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fsunshineiith%2Fposts%2F2811623782262930&show_text=true&width=auto&height=400&appId" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
              </div>
            </div>
            <div>
              <div class="hidden-xs hidden-sm">
                <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fsunshineiith%2Fposts%2F2825915354167106&show_text=true&width=250&height=400&appId" width="250" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
              </div>
              <div class="hidden-md hidden-lg hidden-xl">
                <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fsunshineiith%2Fposts%2F2825915354167106&show_text=true&width=auto&height=400&appId" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
              </div>
            </div>            
          </div>
    </center>
     <script>
          $(".vlogathon-posts").slick(slideshow_slick);
        </script>
        </p>
        <br><br>
      </div>
    </div>
  </div>
</div>
<?php include_once ('footer.php'); ?>
