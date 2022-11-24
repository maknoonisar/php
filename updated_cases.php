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
    body{
    padding-left : 20px;
}
.profile-card-1
{border-spacing: 3px;
  /*margin-left: 20px;*/
  margin: 10px;
margin-bottom: 25px !important;
 }
 /* .container-fluid {
    margin-top:5 px !important;
  }*/
/* .profile-card-1:hover{
font-color:white;
} */



  /*.profile-card-1 .btn{
    border-radius:2px;
    text-transform:uppercase;
    font-size:12px;
    padding:7px 20px;
  }
  .profile-card-1 .card-img-block {
    width: 91%;
    margin: 0 auto;
    position: relative;
    top: -30px;
    
  }
  .profile-card-1 .card-img-block img{
    border-radius:2px;
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
*/
 /* html.touch *:hover {
    color: ;
  } */
  body {
  font-family: Arial, Helvetica, sans-serif;
  }

  /* Float four columns side by side */
 /* .column {
  float: left;
  width: 25%;
  padding: 0 10px;
  }*/

  /* Remove extra left and right margins, due to padding in columns */
 

  /* Clear floats after the columns */
  .row:after {
  content: "";
  display: table;
  clear: both;
  }



  .card-img-top {
    width: 100%;
    height: 10.5vw;
    object-fit: cover;
  }

  /* Style the counter cards */
  /*.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);  this adds the "card" effect 
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
  }*/
/*  .image {
  width:100%; 
  clip-path: polygon(0 0, 100% 0, 100% 42%, 0 23%);
  }*/
  /* Responsive columns - one column layout (vertical) on small screens */
 /* @media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
  }*/

  </style>
</head><?php include "headers/case_header.php" ?><!--end head====-->
<!--style of conatiner fluid==========-->
<!---end =============================-->
<body style=>
  <div>
    <!--==== cases container ======================-->
    <div class="container-fluid">
      <!-- row start===========-->
      
      <div class="row">
        <div class="gx-5">
          <div class="box0">
            <a href="all_detect.php" class="" style="cursor:pointer; text-decoration:none;">
            <div class="profile-card-1" style="width:18rem;   border-radius:10px;">
              <img src="images/surveillance.webp" class="card-img-top" alt="..."> <!--card body==-->
               <!--card body end==--><!--card body==-->
              <div class="card-body">
                <h5 class="card-title text-center" style="font-family:'Heebo', sans-serif; font-size:22px; font-weight:600; color:black; letter-spacing:6px;">REALTIME SURVEILLANCE SYSTEM</h5>
              </div><!--card body end==--><!--card body==-->
 
            </div></a>
          </div>
        </div>
        <div class="gx-5">
          <div class="box0">
            <a href="all_detect.php" class="" style="cursor:pointer; text-decoration:none;">
            <div class="profile-card-1" style="width:18rem;  border-radius:10px;">
              <img src="images/surveillance.webp" class="card-img-top" alt="..."> <!--card body==-->
               <!--card body end==--><!--card body==-->
              <div class="card-body">
                <h5 class="card-title text-center" style="font-family:'Heebo', sans-serif; font-size:22px; font-weight:600; color:black; letter-spacing:6px;">REALTIME SURVEILLANCE SYSTEM</h5>
              </div><!--card body end==--><!--card body==-->
 
            </div></a>
          </div>
        </div>
        <!--column one-->
        <div class="gx-5">
          <div class="box0">
            <a href="crime_scene_detect.php" class="" style="cursor:pointer; text-decoration:none;">
            <div class="profile-card-1" style="width:18rem;   border-radius:10px;">
              <img src="images/criminal.jpg" class="card-img-top" alt="..."> <!--card body==-->
               <!--card body end==--><!--card body==-->
              <div class="card-body">
                <h5 class="card-title text-center" style="font-family:'Heebo', sans-serif; font-size:22px; font-weight:600; color:black; letter-spacing:6px;">REALTIME CRIME DETECTION</h5>
              </div><!--card body end==--><!--card body==-->
 
            </div></a>
          </div>
        </div><!--column one end--><!--column one end-->
        <!--column two-->
        <div class="gx-5">
          <div class="box0">
            <a href="cases_target.php" style="cursor:pointer; text-decoration:none;">
            <div class="profile-card-1" style="width:18rem;   border-radius:0px;">
              <img src="images/target.jpg" class="card-img-top" alt="..."> <!--card body==-->
               <!--card body end==--><!--card body==-->
              <div class="card-body">
                <h5 class="card-title text-center" style="font-family:'Heebo', sans-serif; font-size:22px; font-weight:600; color:black; letter-spacing:6px;">TARGET IDENTIFICATION SYSTEM</h5>
              </div><!--card body end==--><!--card body==-->
              <!--       <div class="card-body">
                <p class="card-text" style="margin-top:-18px; margin-bottom:7px; font-size:18px; color:#c7c7c7; font-family:'Heebo', sans-serif;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div> --><!--card body end==--><!--card body==-->
              <!--card body end==--><!--card body==-->
              <!--card body end==-->
            </div></a>
          </div>
        </div><!--column two end--><!--column three-->
        <div class="gx-5">
          <div class="box0">
            <a href="baggage_detect.php" style="cursor:pointer; text-decoration:none;">
            <div class="profile-card-1" style="width:18rem;   border-radius:2px;">
              <img src="images/bag.webp" class="card-img-top" alt="..."> <!--card body==-->
               <!--card body end==--><!--card body==-->
              <div class="card-body">
                <h5 class="card-title text-center" style="font-family:'Heebo', sans-serif; font-size:22px; font-weight:600; color:black; letter-spacing:6px;">UNATTENDED BAGGAGE DETECTION</h5>
              </div><!--card body end==--><!--card body==-->
              <!--       <div class="card-body">
                <p class="card-text" style="margin-top:-18px; margin-bottom:7px; font-size:18px; color:#c7c7c7; font-family:'Heebo', sans-serif;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div> --><!--card body end==--><!--card body==-->
              <!--card body end==--><!--card body==-->
              <!--card body end==-->
            </div></a>
          </div>
        </div><!--column three end--><!--column four-->
        <div class="gx-5">
          <div class="box0">
            <a href="upload_face.php" style="cursor:pointer; text-decoration:none;">
            <div class="profile-card-1" style="width:18rem;   border-radius:2px;">
              <img src="images/fd.png" class="card-img-top" alt="..."> <!--card body==-->
               <!--card body end==--><!--card body==-->
              <div class="card-body">
                <h5 class="card-title text-center" style="font-family:'Heebo', sans-serif; font-size:22px; font-weight:600; color:black; letter-spacing:6px;">ACCESS CONTROL SYSTEM</h5>
              </div><!--card body end==--><!--card body==-->
              <!-- <div class="card-body">
                <p class="card-text" style="margin-top:-24px; margin-bottom:14px; font-size:18px; color:#c7c7c7; font-family:'Heebo', sans-serif;">Identifies and authenticates a specific person by thier facial features from video.</p>
              </div> --><!--card body end==--><!--card body==-->
              <!--card body end==--><!--card body==-->
              <!--card body end==-->
            </div></a>
          </div>
        </div><!--column four end--><!--column five-->
        <div class="gx-5">
          <div class="box0">
            <a href="imgdataset_select_dataset.php" style="cursor:pointer; text-decoration:none;">
            <div class="profile-card-1" style="width:18rem;   border-radius:2px;">
              <img src="images/reID.png" class="card-img-top" alt="..."> <!--card body==-->
               <!--card body end==--><!--card body==-->
              <div class="card-body">
                <h5 class="card-title text-center" style="font-family:'Heebo', sans-serif; font-size:21px; font-weight:600; color:black; letter-spacing:6px;">PERSON DETECTION AND TRACKING</h5>
              </div><!--card body end==--><!--card body==-->
              <!-- <div class="card-body">
                <p class="card-text" style="margin-top:-18px; margin-bottom:7px; font-size:18px; color:#c7c7c7; font-family:'Heebo', sans-serif;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div> --><!--card body end==--><!--card body==-->
              <!--card body end==--><!--card body==-->
              <!--card body end==-->
            </div></a>
          </div>
        </div><!--column five end--><!--column six-->
        <div class="gx-5">
          <div class="box0">
            <a href="upload_weapon.php" style="cursor:pointer; text-decoration:none;">
            <div class="profile-card-1" style="width:18rem;   border-radius:2px;">
              <img src="images/weapon.png" class="card-img-top" alt="..."> <!--card body==-->
               <!--card body end==--><!--card body==-->
              <div class="card-body">
                <h5 class="card-title text-center" style="font-family:'Heebo', sans-serif; font-size:22px; font-weight:600; color:black; letter-spacing:6px;">WEAPON DETECTION SYSTEM</h5>
              </div><!--card body end==--><!--card body==-->
              <!--            <div class="card-body">
                <p class="card-text" style="margin-top:-18px; margin-bottom:7px; font-size:18px; color:#c7c7c7; font-family:'Heebo', sans-serif;">DeepSpeech is an voice recognization that uses a neural network to convert speech to text transcript.</p>
              </div> --><!--card body end==--><!--card body==-->
              <!--card body end==--><!--card body==-->
              <!--card body end==-->
            </div></a>
          </div>
        </div>
        <div class="gx-5">
          <div class="box0">
            <a href="crowd_detect.php" style="cursor:pointer; text-decoration:none;">
            <div class="profile-card-1" style="width:18rem;   border-radius:2px;">
              <img src="images/pedestrian_count.jpg" class="card-img-top" alt="..."> <!--card body==-->
               <!--card body end==--><!--card body==-->
              <div class="card-body">
                <h5 class="card-title text-center" style="font-family:'Heebo', sans-serif; font-size:22px; font-weight:600; color:black; letter-spacing:6px;">WALKTHROUGH ANOMALY DETECTION</h5>
                <h6 style="color: black;">.</h6>
              </div><!-- <div class="card-body">
                 <p class="card-text" style="margin-top:-18px; margin-bottom:-12px; font-size:18px; color:#c7c7c7; font-family:'Heebo', sans-serif;">ANPR helps reads, documents and matches vehicle license plates without needing a human operator.</p>
              </div> --><!--card body end==--><!--card body==-->
              <!--card body end==--><!--card body==-->
              <!--card body end==-->
            </div></a>
          </div>
        </div><!--column six end-->
        <div class="gx-5">
          <div class="box0">
            <a href="video_summarization.php" style="cursor:pointer; text-decoration:none;">
            <div class="profile-card-1" style="width:18rem;   border-radius:2px;">
              <img src="images/vedio_summarization.png" class="card-img-top" alt="..."> <!--card body==-->
              <div class="card-body">
                <h5 class="card-title text-center" style="font-family:'Heebo', sans-serif; font-size:22px; font-weight:600; color:black; letter-spacing:5px;">CCTV FOOTAGE SUMMARIZATION</h5>
                <h6 style="color: black;">.</h6>
              </div><!--card body end==--><!--card body==-->
              <!--            <div class="card-body">
                <p class="card-text" style="margin-top:-24px; margin-bottom:14px; font-size:18px; color:#c7c7c7; font-family:'Heebo', sans-serif;">Video summarization is an innovative approach that allows organizations to review hours of vedio in minutes.</p>
              </div> --><!--card body end==--><!--card body==-->
              <!--card body end==-->
            </div></a>
          </div>
        </div>
        
                <div class="gx-5">
          <div class="box0">
            <a href="upload_crowd.php" style="cursor:pointer; text-decoration:none;">
            <div class="profile-card-1" style="width:18rem;   border-radius:2px;">
              <img src="images/jalsa - Copy.jpg" class="card-img-top" alt="..."> <!--card body==-->
               <!--card body end==--><!--card body==-->
              <div class="card-body">
                <h5 class="card-title text-center" style="font-family:'Heebo', sans-serif; font-size:22px; font-weight:600; color:black; letter-spacing:6px;">CROWD DENSITY ESTIMATION</h5>
              </div><!-- <div class="card-body">
                 <p class="card-text" style="margin-top:-18px; margin-bottom:-12px; font-size:18px; color:#c7c7c7; font-family:'Heebo', sans-serif;">ANPR helps reads, documents and matches vehicle license plates without needing a human operator.</p>
              </div> --><!--card body end==--><!--card body==-->
              <!--card body end==--><!--card body==-->
              <!--card body end==-->
            </div></a>
          </div>
        </div>
        <div class="gx-5">
          <div class="box0">
            <a href="vehicle_detect.php" style="cursor:pointer; text-decoration:none;position: relative;">
            <div class="profile-card-1" style="width:18rem;   border-radius:2px;">
              <img src="images/trafficanalysis.jpg" class="card-img-top" alt="..."> <!--card body==-->
               <!--card body end==--><!--card body==-->
              <div class="card-body">
                <h5 class="card-title text-center" style="font-family:'Heebo', sans-serif; font-size:21px; font-weight:600; color:black; letter-spacing:4px;">SUSPICIOUS CAR DETECTION</h5>
              </div><!--card body end==--><!--card body==-->
              <!-- <div class="card-body">
                <p class="card-text" style="margin-top:-18px; margin-bottom:7px; font-size:18px; color:#c7c7c7; font-family:'Heebo', sans-serif;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div> --><!--card body end==--><!--card body==-->
              <!--card body end==--><!--card body==-->
              <!--card body end==-->
            </div></a>
          </div>
        </div>
        <div class="gx-5">
          <div class="box0">
            <a href="" style="cursor:pointer; text-decoration:none;">
            <div class="profile-card-1" style="width:18rem;   border-radius:2px;">
              <img src="images/VehicleDetection_2_600.jpg" class="card-img-top" alt="..."> <!--card body==-->
               <!--card body end==--><!--card body==-->
              <div class="card-body">
                <h5 class="card-title text-center" style="font-family:'Heebo', sans-serif; font-size:21px; font-weight:600; color:black; letter-spacing:4px;">AERIAL OBJECT DETECTION</h5>
                <h6 style="color: black;">.</h6>
              </div><!--card body end==--><!--card body==-->
              <!-- <div class="card-body">
                <p class="card-text" style="margin-top:-18px; margin-bottom:7px; font-size:18px; color:#c7c7c7; font-family:'Heebo', sans-serif;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div> --><!--card body end==--><!--card body==-->
              <!--card body end==--><!--card body==-->
              <!--card body end==-->
            </div></a>
          </div>
        </div>
      </div>
      </div>
      
      <!--row end ==================-->
      <!--================================================================================-->
      <!-- row2 start===========-->
 <!--row2 end ==================-->
      <!-- row three start===========-->
      <!--3 row end ==================-->
    </div><!--==== end cases container ===================-->
  </div>
</body>
</html>