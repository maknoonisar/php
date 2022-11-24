<!--logout session-->
<?php
        session_start();
        
        if($_SESSION["status"] != true){
                header("Location: index.php");
        }
?><!--logout session end-->
<?php
        if(isset($_SESSION["username"]))
        {
                //echo "my name is:".$_SESSION["username"];
        }
?><!--a href='includes/logout.php'>logout</a-->
<!DOCTYPE html>
<html lang="en">
<!--===head=====-->
<head>
  <?php include "fonts/font_link.php" ?><?php include "headers/header.php" ?>
  <title>VISUAL INTELLIGENCE</title>
  <style>
  .container-fluid {
    margin-top:4px !important;
  }
  body {
  background-color: blue;
  }


  html.touch *:hover {
    all:unset!important;
  }
  h5 {
  text-justify: inter-word;

  font-weight:100;
  font-family: fantasy; 

  }


  .profile-card-1 .btn{
    border-radius:2px;
    text-transform:uppercase;
    font-size:12px;
    padding:7px 20px;
  }
  .profile-card-1 .card-img-block {
    width: 91%;
    margin: 0 auto;
    position: relative;
    top: -20px;
    
  }
  .profile-card-1 .card-img-block img{
    border-radius:10px;
    box-shadow:0 0 10px rgba(0,0,0,0.63);
  }
  .profile-card-1 h5{
    color:#4E5E30;
    font-weight:600;
  }
  .profile-card-1 p{
    font-size:18px;
    font-weight:300;
  }
  .profile-card-1 .btn-primary{
    background-color:#4E5E30;
    border-color:#4E5E30;
  }
  * {
  box-sizing: border-box;
  }


  body {
  font-family: Arial, Helvetica, sans-serif;
  }

  /* Float four columns side by side */
  .column {
  float: left;
  width: 25%;
  padding: 0 10px;
  }

  /* Remove extra left and right margins, due to padding in columns */
  .row {margin: 0 -5px;}

  /* Clear floats after the columns */
  .row:after {
  content: "";
  display: table;
  clear: both;
  }
  .container {
  width: 100%;/*whatever size you want your container*/
  border: 3px solid teal;
  display: flex; /*Make sure to call this on your container*/
  align-items: stretch; /*stretches all cards same height*/
  justify-content: space-around; /*some space between cards*/
  border-radius: 45px;
  }


  .card-img-top {
    width: 100%;
    height: 15vw;
    object-fit: cover;
  }

  /* Style the counter cards */
  /*.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);  this adds the "card" effect 
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
  }*/
  .image {
  width:100%; 
  clip-path: polygon(0 0, 100% 0, 100% 42%, 0 23%);
  }
  /* Responsive columns - one column layout (vertical) on small screens */
  @media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
  }
  </style>
</head><?php include "headers/case_header.php" ?><!--end head====-->
<!--style of conatiner fluid==========-->
<!---end =============================-->
<body>
  <div style="background-color: #262633 ;">
    <!--==== cases container ======================-->
    <div class="container-fluid">
      <!-- row start===========-->
      <div class="row">
        <!--column one-->
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 col-xxl-1 columntop">
          <div class="box0">
            <a href="imgdataset_select_dataset.php" class="" style="cursor:pointer; text-decoration:none;">
            <div class="profile-card-1" style="width:18rem; border:2px solid #787878; border-radius:10px;">
              <img src="images/person_reid/person4.png" class="card-img-top" alt="..."> <!--card body==-->
               <!--card body end==--><!--card body==-->
              <div class="card-body">
                <h5 class="card-title text-center" style="font-family:'Heebo', sans-serif; font-size:22px; font-weight:600; color:#ffffff; letter-spacing:3px;">PERSON TRACKING</h5>
              </div><!--card body end==--><!--card body==-->
              <!--             <div class="card-body">
                <p class="card-text" style="margin-top:-24px; margin-bottom:-6px; font-size:18px; color:#c7c7c7; font-family:'Heebo', sans-serif;">Person ReIdentification is a problem of matching people across disjoint camer view in a multi-camera system.</p>
              </div> --><!--card body end==--><!--card body==-->
              <!--card body end==--><!--card body==-->
            </div></a>
          </div>
        </div><!--column one end-->
        <!--column two-->
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 col-xxl-1 columntop">
          <div class="box0">
            <a href="crime_scene_detect.php" style="cursor:pointer; text-decoration:none;">
            <div class="profile-card-1" style="width:18rem; border:2px solid #787878; border-radius:10px;">
              <img src="images/crime_detection/crime1.png" class="card-img-top" alt="..."> <!--card body==-->
               <!--card body end==--><!--card body==-->
              <div class="card-body">
                <h5 class="card-title text-center" style="font-family:'Heebo', sans-serif; font-size:22px; font-weight:600; color:#ffffff; letter-spacing:3px;">CRIME DETECTION</h5>
              </div><!--card body end==--><!--card body==-->
              <!--       <div class="card-body">
                <p class="card-text" style="margin-top:-18px; margin-bottom:7px; font-size:18px; color:#c7c7c7; font-family:'Heebo', sans-serif;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div> --><!--card body end==--><!--card body==-->
              <!--card body end==--><!--card body==-->
              <!--card body end==-->
            </div></a>
          </div>
        </div><!--column two end--><!--column three-->
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 col-xxl-1 columntop">
          <div class="box0">
            <a href="select_media_analytic.php" style="cursor:pointer; text-decoration:none;">
            <div class="profile-card-1" style="width:18rem; border:2px solid #787878; border-radius:10px;">
              <img src="images/media_analytics_case.PNG" class="card-img-top" alt="..."> <!--card body==-->
               <!--card body end==--><!--card body==-->
              <div class="card-body">
                <h5 class="card-title text-center" style="font-family:'Heebo', sans-serif; font-size:22px; font-weight:600; color:#ffffff; letter-spacing:3px;">MEDIA ANALYTICS</h5>
              </div><!--card body end==--><!--card body==-->
              <!--       <div class="card-body">
                <p class="card-text" style="margin-top:-18px; margin-bottom:7px; font-size:18px; color:#c7c7c7; font-family:'Heebo', sans-serif;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div> --><!--card body end==--><!--card body==-->
              <!--card body end==--><!--card body==-->
              <!--card body end==-->
            </div></a>
          </div>
        </div><!--column three end--><!--column four-->
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 col-xxl-1 columntop">
          <div class="box0">
            <a href="upload_face.php" style="cursor:pointer; text-decoration:none;">
            <div class="profile-card-1" style="width:18rem; border:2px solid #787878; border-radius:10px;">
              <img src="images/face.jpg" class="card-img-top" alt="..."> <!--card body==-->
               <!--card body end==--><!--card body==-->
              <div class="card-body">
                <h5 class="card-title text-center" style="font-family:'Heebo', sans-serif; font-size:22px; font-weight:600; color:#ffffff; letter-spacing:3px;">FACE DETECTION</h5>
              </div><!--card body end==--><!--card body==-->
              <!-- <div class="card-body">
                <p class="card-text" style="margin-top:-24px; margin-bottom:14px; font-size:18px; color:#c7c7c7; font-family:'Heebo', sans-serif;">Identifies and authenticates a specific person by thier facial features from video.</p>
              </div> --><!--card body end==--><!--card body==-->
              <!--card body end==--><!--card body==-->
              <!--card body end==-->
            </div></a>
          </div>
        </div><!--column four end--><!--column five-->
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 col-xxl-1 columntop">
          <div class="box0">
            <a href="upload_target.php" style="cursor:pointer; text-decoration:none;">
            <div class="profile-card-1" style="width:18rem; border:2px solid #787878; border-radius:10px;">
              <img src="images/TTP.webp" class="card-img-top" alt="..."> <!--card body==-->
               <!--card body end==--><!--card body==-->
              <div class="card-body">
                <h5 class="card-title text-center" style="font-family:'Heebo', sans-serif; font-size:21px; font-weight:600; color:#ffffff; letter-spacing:3px;">TARGET IDENTIFIER</h5>
              </div><!--card body end==--><!--card body==-->
              <!-- <div class="card-body">
                <p class="card-text" style="margin-top:-18px; margin-bottom:7px; font-size:18px; color:#c7c7c7; font-family:'Heebo', sans-serif;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div> --><!--card body end==--><!--card body==-->
              <!--card body end==--><!--card body==-->
              <!--card body end==-->
            </div></a>
          </div>
        </div><!--column five end--><!--column six-->
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 col-xxl-1 columntop">
          <div class="box0">
            <a href="select_language_speechtxt.php" style="cursor:pointer; text-decoration:none;">
            <div class="profile-card-1" style="width:18rem; border:2px solid #787878; border-radius:10px;">
              <img src="images/Speech_Recognition_in_Python.jpg" class="card-img-top" alt="..."> <!--card body==-->
               <!--card body end==--><!--card body==-->
              <div class="card-body">
                <h5 class="card-title text-center" style="font-family:'Heebo', sans-serif; font-size:22px; font-weight:600; color:#ffffff; letter-spacing:3px;">SPEECH TO TEXT</h5>
              </div><!--card body end==--><!--card body==-->
              <!--            <div class="card-body">
                <p class="card-text" style="margin-top:-18px; margin-bottom:7px; font-size:18px; color:#c7c7c7; font-family:'Heebo', sans-serif;">DeepSpeech is an voice recognization that uses a neural network to convert speech to text transcript.</p>
              </div> --><!--card body end==--><!--card body==-->
              <!--card body end==--><!--card body==-->
              <!--card body end==-->
            </div></a>
          </div>
        </div><!--column six end-->
      </div><!--row end ==================-->
      <!--================================================================================-->
      <!-- row2 start===========-->
      <div class="row">
        <!--column one-->
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 col-xxl-1 columntop">
          <div class="box0">
            <a href="aria_lpedestrain_object_detection.php" style="cursor:pointer; text-decoration:none;">
            <div class="profile-card-1" style="width:18rem; border:2px solid #787878; border-radius:10px;">
              <img src="images/07.jpg" class="card-img-top" alt="..."> <!--card body==-->
               <!--card body end==--><!--card body==-->
              <div class="card-body">
                <h5 class="card-title text-center" style="font-family:'Heebo', sans-serif; font-size:22px; font-weight:600; color:#ffffff; letter-spacing:3px;">OBJECT DETECTION</h5>
              </div><!--card body end==--><!--card body==-->
              <!-- <div class="card-body">
                <p class="card-text" style="margin-top:-18px; margin-bottom:7px; font-size:18px; color:#c7c7c7; font-family:'Heebo', sans-serif;">This technology can filter out false alarms in complex sense with a large amount of non-relevant details.</p>
              </div> --><!--card body end==--><!--card body==-->
              <!--card body end==--><!--card body==-->
              <!--card body end==-->
            </div></a>
          </div>
        </div><!--column one end-->
        <!--column two-->
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 col-xxl-1 columntop">
          <div class="box0">
            <a href="video_summarization.php" style="cursor:pointer; text-decoration:none;">
            <div class="profile-card-1" style="width:18rem; border:2px solid #787878; border-radius:10px;">
              <img src="images/vedio_summarization.png" class="card-img-top" alt="..."> <!--card body==-->
              <div class="card-body">
                <h5 class="card-title text-center" style="font-family:'Heebo', sans-serif; font-size:22px; font-weight:600; color:#ffffff; letter-spacing:5px;">CCTV FOOTAGE SUMMARIZATION</h5>
              </div><!--card body end==--><!--card body==-->
              <!--            <div class="card-body">
                <p class="card-text" style="margin-top:-24px; margin-bottom:14px; font-size:18px; color:#c7c7c7; font-family:'Heebo', sans-serif;">Video summarization is an innovative approach that allows organizations to review hours of vedio in minutes.</p>
              </div> --><!--card body end==--><!--card body==-->
              <!--card body end==-->
            </div></a>
          </div>
        </div><!--column two end--><!--column three-->
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 col-xxl-1 columntop">
          <div class="box0">
            <a href="keyword_spotting_english.php" style="cursor:pointer; text-decoration:none;">
            <div class="profile-card-1" style="width:18rem; border:2px solid #787878; border-radius:10px;">
              <img src="images/keyword1.jpg" class="card-img-top" alt="..."> <!--card body==-->
               <!--card body end==--><!--card body==-->
              <div class="card-body">
                <h5 class="card-title text-center" style="font-family:'Heebo', sans-serif; font-size:22px; font-weight:600; color:#ffffff; letter-spacing:3px;">KEYWORD SPOTTING</h5>
              </div><!--card body end==--><!--card body==-->
              <!-- <div class="card-body">
                <p class="card-text" style="margin-top:-24px; margin-bottom:14px; font-size:18px; color:#c7c7c7; font-family:'Heebo', sans-serif;">It allows the user to search any word he wants from this audios residing in database.</p>
              </div> --><!--card body end==--><!--card body==-->
              <!--card body end==--><!--card body==-->
              <!--card body end==-->
            </div></a>
          </div>
        </div><!--column three end--><!--column four-->
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 col-xxl-1 columntop">
          <div class="box0">
            <a href="crime_scene_detect.php" style="cursor:pointer; text-decoration:none;">
            <div class="profile-card-1" style="width:18rem; border:2px solid #787878; border-radius:10px;">
              <img src="images/08.jpg" class="card-img-top" alt="..."> <!--card body==-->
              <div class="card-body">
                <h5 class="card-title text-center" style="font-family:'Heebo', sans-serif; font-size:23.5px; font-weight:600; color:#ffffff; letter-spacing:3px;">CROWD COUNTING</h5>
              </div><!--card body end==--><!--card body==-->
              <!--             <div class="card-body">
                <p class="card-text" style="margin-top:-18px; margin-bottom:7px; font-size:18px; color:#c7c7c7; font-family:'Heebo', sans-serif;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div> --><!--card body end==--><!--card body==-->
              <!--card body end==--><!--card body==-->
              <!--card body end==-->
            </div></a>
          </div>
        </div><!--column four end--><!--column five-->
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 col-xxl-1 columntop">
          <div class="box0">
            <a href="#" style="cursor:pointer; text-decoration:none;">
            <div class="profile-card-1" style="width:18rem; border:2px solid #787878; border-radius:10px;">
              <img src="images/trafficanalysis.JPG" class="card-img-top" alt="..."> <!--card body==-->
              <div class="card-body">
                <h5 class="card-title text-center" style="font-family:'Heebo', sans-serif; font-size:24px; font-weight:600; color:#ffffff; letter-spacing:3px;">TRAFFIC INSIGHTS</h5>
              </div><!--card body end==--><!--card body==-->
              <!-- <div class="card-body">
                <p class="card-text" style="margin-top:-18px; margin-bottom:7px; font-size:18px; color:#c7c7c7; font-family:'Heebo', sans-serif;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div> --><!--card body end==--><!--card body==-->
              <!--card body end==--><!--card body==-->
              <!--card body end==-->
            </div></a>
          </div>
        </div><!--column five end--><!--column six-->
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 col-xxl-1 columntop">
          <div class="box0">
            <a href="#" style="cursor:pointer; text-decoration:none;">
            <div class="profile-card-1" style="width:18rem; border:2px solid #787878; border-radius:10px;">
              <img src="images/selveralert.jpg" class="card-img-top" alt="..."> <!--card body==-->
               <!--card body end==--><!--card body==-->
              <div class="card-body">
                <h5 class="card-title text-center" style="font-family:'Heebo', sans-serif; font-size:22px; font-weight:600; color:#ffffff; letter-spacing:3px;">NUMBERPLATE RECOGNITION</h5>
              </div><!-- <div class="card-body">
                 <p class="card-text" style="margin-top:-18px; margin-bottom:-12px; font-size:18px; color:#c7c7c7; font-family:'Heebo', sans-serif;">ANPR helps reads, documents and matches vehicle license plates without needing a human operator.</p>
              </div> --><!--card body end==--><!--card body==-->
              <!--card body end==--><!--card body==-->
              <!--card body end==-->
            </div></a>
          </div>
        </div><!--column six end-->
      </div><!--row2 end ==================-->
      <!-- row three start===========-->
      <!--3 row end ==================-->
    </div><!--==== end cases container ===================-->
  </div>
</body>
</html>