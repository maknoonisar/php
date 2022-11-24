<?php 
// include('leafletimg/navbar.php');
// Check if the user is logged in, if not then redirect him to login page
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: leafletimg/index.php");
    exit;
} ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
 
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <style type="text/css">
        ul p{
  font-size: 12px;
}
    body{
  background: #fff;
}
form{
  position: absolute;
  top: 52%;
  left: 55%;
  margin-top: -100px;
  margin-left: -250px;
  width: 500px;
  height: 200px;
  border: 4px solid #000;
}
form p{
  width: 100%;
  height: 100%;
  text-align: center;
  line-height: 170px;
  color: #000;
  font-family: Arial;
}
form input{
  position: absolute;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  outline: none;
  opacity: 0;
}
form button{
  margin: 0;
  color: #fff;
  background: #141E30;
  border: none;
  width: 508px;
  height: 35px;
  margin-top: -20px;
  margin-left: -4px;
  border-radius: 4px;
  border-bottom: 4px solid #141E30;
  transition: all .2s ease;
  outline: none;
  position: relative;
}
form button:hover{
  background: grey;
  color: #fff;
}
form button:active{
  border:0;
}
div button{
  margin: 0;
  color: #fff;
  background: #2596be;
  border: none;
  width: 200px;
  height: 35px;
  margin-top: 230px;
  margin-left: 615px;
  border-radius: 4px;
  border-bottom: 4px solid #117A60;
  transition: all .2s ease;
  outline: none;
  position: relative;
}
div button:hover{
  background: #149174;
  color: #0C5645;
}
div button:active{
  border:0;
  background: darkgray;
  color: gray;
}
#toggle-weights{
  /*margin: 0;*/
  color: #fff;
  background: #16a085;
  border: none;
  width: 200px;
  height: 35px;
  margin-top: 10px;
  margin-left: 615px;
  border-radius: 4px;
  border-bottom: 4px solid #117A60;
  transition: all .2s ease;
  outline: none;
  }
  #toggle-weights:hover{
  background: #149174;
  color: #0C5645;
}
#toggle-weights:active{
  border:0;
    background: darkgray;
  color: gray;
}
#toggle-image{
  /*margin: 0;*/
  color: #fff;
  background: #16a085;
  border: none;
  width: 200px;
  height: 35px;
  margin-top: 10px;
  margin-left: 615px;
  border-radius: 4px;
  border-bottom: 4px solid #117A60;
  transition: all .2s ease;
  outline: none;
  }
  #toggle-image:hover{
  background: #149174;
  color: #0C5645;
}
#toggle-image:active{
  border:0;
    background: darkgray;
  color: gray;
}
  </style>

</head>  
<body>
      <div class="sidebar" data-color="blue">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="leafletimg/welcome.php" class="simple-text logo-normal">
          Object Detection 
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li >
            <a href="leafletimg/welcome.php">
              <i class="now-ui-icons design_app"></i>
              <p>Home</p>
            </a>
          </li>
          <li>
            <a href="upload_multiple.php">
              <i class="now-ui-icons objects_spaceship"></i>
              <p>Aircraft Detection</p>
            </a>
          </li>
          <li class="active ">
            <a href="upload_distance.php">
              <i class="now-ui-icons objects_spaceship"></i>
              <p>Interactive Detection</p>
            </a>
          </li>
                              <li>
            <a href="upload_runway.php">
              <i class="now-ui-icons location_world"></i>
              <p>Runway Detection</p>
            </a>
          </li>
          <li>
            <a href="../ship/upload_ship.php">
              <i class="now-ui-icons location_compass-05"></i>
              <p>Ships Detection</p>
            </a>
          </li>
                                         <li>
            <a href="../ship/upload_distance_ship.php">
              <i class="now-ui-icons objects_planet"></i>
              <p>Semi-Auto Ships Detection</p>
            </a>
          </li>
          <li>
            <a href="../ship/upload_dish.php">
              <i class="now-ui-icons objects_planet"></i>
              <p>Dish Detection</p>
            </a>
          </li>
           <li>
            <a href="upload_sam.php">
              <i class="now-ui-icons transportation_bus-front-12"></i>
              <p>SAM Detection</p>
            </a>
          </li>
            <li>
            <a href="upload_change.php">
              <i class="now-ui-icons location_world"></i>
              <p>Change Detection</p>
            </a>
          </li>
          <li>
            <a href="temporalscan.php">
              <i class="now-ui-icons objects_spaceship"></i>
              <p>Temporal Scan</p>
            </a>
          </li>
          <li>
            <a href="slider.php">
              <i class="now-ui-icons business_chart-pie-36"></i>
              <p>Dashboard</p>
            </a>
          </li>
           <li>
            <a href="generate_report.php">
              <i class="now-ui-icons files_single-copy-04"></i>
              <p>Generate Report</p>
            </a>
          </li>
          <li>
            <a href="leafletimg/logout.php">
              <i class="now-ui-icons users_single-02"></i>
              <p>Sign Out</p>
            </a>
          </li>

        </ul>
      </div>
    </div>
<!--   <div id="10" style="margin-top: 12%;">
  <button href="#" class="btn btn-default" id="toggle-image" style="color: #ffffff;" onclick="selectImage()">Image</button>
</div>
<button href="#" class="btn btn-default" id="toggle-weights" style="color: #ffffff;" onclick="selectWeights()">Update Weights <i>(optional)</i></button>
<div id = 'radio' style="margin-left: 55%; margin-top: 5%;"> -->
<!-- <p style="color:white;"></p>
  <input type="radio" id="html" name="fav_language" value="HTML">
  <label for="html" style="color:white;">Panchromatic</label><br>
  <input type="radio" id="css" name="fav_language" value="CSS">
  <label for="css" style="color:white;">RGB</label><br>
  <input type="radio" id="javascript" name="fav_language" value="JavaScript">
  <label for="javascript" style="color:white;">Multispectral</label>
</div> -->



<!-- <label class="switch">
  <input type="checkbox">
  <span class="slider"></span>
</label> -->

<div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" style="font-size: 24px;">Semi-Automated Aircraft Detection</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>

        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 18px;">Upload Images</h5>
              </div>
              <div class="card-body">
                <div class="alert alert-info">
                  <span>Browse or drop images to run a spatial detection scan</span>
                </div>
         
<!--                   <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                    <div class="font-icon-detail">
                      <i class="now-ui-icons users_single-02"></i>
                      <p>users_single-02</p>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
<form id=1 action="backend-distance.php" method="post" enctype="multipart/form-data">
  <input type="file" name="fileToUpload[]" id="fileToUpload" multiple="multiple">
  <p>Drag images here or click to browse!</p>
  <button type="submit" value="Upload Image" name="submit" >Upload Image</button>
</form>
<form id=2 action="" method="post" enctype="multipart/form-data">
  <input type="file" name="file" id="file">
  <p>Drag your model weights file here or click here to browse!</p>
  <button type="submit" value="Upload Weights" name="submit" id="but_upload">Upload Model Weights</button>
  <p>Last updated model weights to be used if new weights not uploaded.</p>
</form>


<br>
<!-- <button onclick="move()">Click Me</button> --> 


<script src="jquery-img-upload.js"></script>
<script type="text/javascript">
  function selectImage(){
    $('#2').hide();
    $('#1').show();
    $('#radio').show();
  }
  function selectWeights(){
    $('#1').hide();
    $('#2').show();
    $('#radio').hide();
  }
  $(document).ready(function(){
  $('#2').hide();
  $('form input').change(function () {
    $('form p').text(this.files.length + " file(s) selected");
  });


  $("#but_upload").click(function(){
         
         var fd = new FormData();
         var files = $('#file')[0].files;
         var file_name = files[0].name;
         
         // Check file selected or not
         if(files.length > 0 ){
          fd.append('file',files[0]);
         
          $.ajax({
             url: 'upload_model.php',
             type: 'post',
             data: fd,
             contentType: false,
             processData: false,
             success: function(response){
                if(response != 0){
                   alert('Model Weights Successfully Updated!');
                   
               
                }
                else{
                   alert('Model Weights could not be updated. Please try again!');
                }
             },
          });
         }
         else{
          alert("Please select a file.");
         }
         selectImage();
         $("#p12").text('Model Weights Successfully Updated!');

         });
    });
</script>
</body>
</html>