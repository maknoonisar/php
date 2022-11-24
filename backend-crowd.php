
<?php

$files = glob('C:/xampp/htdocs/horizon/upload_face'.'/*'); // get all file names
foreach($files as $file){ // iterate files
  unlink($file); // delete file 
  
}


?>
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
/*  body{
  background: rgba(0,0,0,0.9);
}*/
#myProgress {
  width: 28%;
  background-color: #ddd;
  margin-top: 3%;
  margin-left: 36.5%;
}

#myBar {
  width: 1%;
  height: 30px;
  background-color: #04AA6D;
}

  #main{
  position: absolute;
  top: 10%;
  left: 50%;
  margin-top: 8%;
  margin-left: -250px;
  width: 500px;
  height: 200px;
  border: 4px dashed #000;
}
#main p{
  width: 100%;
  height: 100%;
  text-align: center;
  line-height: 170px;
  
  font-family: Arial;
}
#main button{
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
}
#main button:hover{
  background: grey;
  color: #fff;
}
#main button:active{
  border:0;
}
#new_submit{
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
}
.main-panel{
  width: 100%
}
#new_submit:hover{
  background: grey;
  color: #fff;
}
#new_submit:active{
  border:0;
}

  </style>


</head>
<body> 
       
    </div>
    <div class="main-panel" id="main-panel" >
    <div class="jumbotron jumbotron-fluid text-light bg-dark">
  <div class="container1">
    <h1  class="display-4 text-light text-center text- font-weight-bold lead bg-gradient-light text-white">Crowd Counting</h1>
     <hr class="my-4">

  </div>
</div>
        <div class= "logo" style =" position:fixed; 
  top:30px; 
  left:20px;" id="logo"> 
  <a href="http://localhost/horizon/cases.php"><img src="images/logo.png"> </a> 
</div>       <!-- Navbar -->
  
      <!-- End Navbar -->
  
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card" style="display: none;">
              
               
<!-- <form style="margin-left: 36%;" action="http://192.168.18.32/testing.php" method="post" id="bases"> -->
  <form style="margin-left: 36%;" method="post" id="bases" action="http://localhost/horizon/runpy-crowd.php">
  <p style="float: left;position: absolute;">Data:</p>
    <select id="georef" name="georeference" style="float: left;position: absolute; margin-left: 5%;" onchange="if (this.value=='yes'){console.log(this.value);
    // $('#bases').val('Auto-Select');
    document.getElementById('base-selection').innerHTML = '(Base will be detected from the image)'

    }
    if (this.value=='no'){console.log(this.value);
    // $('#bases').val('Auto-Select');
    document.getElementById('base-selection').innerHTML = ''

    }


    ">
  <option value="yes">Georeferenced Images</option>
  <option value="no">No Spatial Reference</option>
  
  
  
  </select>
  <br>
  <p style="float: left;position: absolute;">Base:</p>

<select id="bases" name="bases" style="float: left;position: absolute;margin-left: 5%;">
  <option value="">Select Base</option>
  <option value="`chennai`">Chennai</option>
  <option value="`cochin`">Cochin</option>
  <option value="`dahej`">Dahej</option>
  <option value="`hazira`">Hazira</option>
  <option value="`ins-degs`">INS Dega</option>
  <option value="`ins-kadamba-karwar`">INS Kadamba Karwar</option>
  <option value="`ins-kattabomman`">INS Kattabomman</option>
  <option value="`ins-kavaratti-lakshadweep`">INS Kavaratti Lakshadweep</option>
  <option value="`ins-parandu`">INS Parandu</option>
  <option value="`ins-port-balir`">INS Port Balir</option>
  <option value="`ins-rajali`">INS Rajali</option>
  <option value="`ins-tanagi`">INS Tanagi</option>
  <option value="`ins-trata-missile-defence`">INS Trata Missile Defence</option>
  <option value="`ins-trata-missile-depot`">INS Trata Missile Depot</option>
  <option value="`ins-vajrakosh`">INS Vajrakosh</option>
  <option value="`kakinada-port`">Kakinada Port</option>
  <option value="`kandla-port`">Kandla Port</option>
  <option value="`mangalore-port`">Mangalore Port</option>
  <option value="`marmagoa`">Marmagoa</option>
  <option value="`mumbai`">Mumbai</option>
  <option value="`mundra-port`">Mundra Port</option>
  <option value="`nicobar`">Nicobar</option>
  <option value="`okha-port`">Okha Port</option>
  <option value="`pipavav-port`">Pipavav Port</option>
  <option value="`porbandar-port`">Porbandar Port</option>
  <option value="`project-varsha`">Project Varsha</option>
  <option value="`sikha`">Jodhpur AFS</option>
  <option value="`jorhat_afs`">Sikha</option>
  <option value="`tuticorin`">Tuticorin</option>
  <option value="`vizag-visakhapatnam`">Vizag Visakhapatnam</option>
  

  </select>
  <p id="base-selection" style="float: left;position: absolute; margin-left:27%; font-style: italic;"><i></i></p>
  <br>

  <p style="float: left; position: absolute;">Model:</p>
  <select style="float: left;position: absolute; margin-left: 5%;" id="model" name="model">
  <option value="sar">SAR Data</option>
  <option value="optical">Optical Data</option>
  <!-- <option value="multi">Multi-Sensor Model</option> -->
  </select>  
  <br>
  <!-- <p style="">Time of Image Acquisition:</p> -->
  <p style="float: left; position: absolute;">Date:</p>
  <input type="date" id="date" name="date" value="Date of Image Acquisition" style="float: left; position: absolute; margin-left: 5%;">
  </select>
  <p style="margin-top:4%"></p>

  
         
<!--                   <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                    <div class="font-icon-detail">
                      <i class="now-ui-icons users_single-02"></i>
                      <p>users_single-02</p>
                    </div> -->

      
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

  <div id="main" style="margin-top: 15%;">
<?php

$total = count($_FILES['fileToUpload']['name']);
// echo $total;
$target_dir = "upload_face/";
for( $i=0 ; $i < $total ; $i++ ){
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"][$i]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image

  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"][$i]);
  if($check !== false) {
    // echo "<p>File is a valid image</p>" ;
    $uploadOk = 1;
  } else {
    // echo "<p>File is not an image.</p>";
    $uploadOk = 1;
  }


// Check if file already exists
if (file_exists($target_file)) {
  // echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
// if ($_FILES["fileToUpload"]["size"] > 50000000) {
//   echo "<p>Sorry, your file is too large.</p>";
//   $uploadOk = 0;
// }

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "tif" && $imageFileType != "jp2" && $imageFileType != "npy" ) {
  // echo "<p>Sorry, only JPG, JPEG, PNG files are allowed.</p>";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo '
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
  $("#new_submit").hide();
  $("#bases").hide();
  $("#date").hide();
  $("#p").hide();
  $("#main").hide();

});
  alert("Error! Files invalid or not uploaded correctly, please try again!")
  window.location.replace("http://localhost/horizon/upload_crowd.php");
  </script>
  <a href="http://localhost/ship/upload_multiple.php" style="margin-top:20%;"> 
    Upload Image Again  
     </a>';
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$i], $target_file)) {
    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    $out_text = 1;
    // echo'<p>Ready for detection!</p>';

  } else {
    $out_text = 0;
    // echo "<p>Sorry, there was an error uploading your file.<p>";
  }
}

}
if ($out_text == 1){
  echo'<p>Ready for detection!</p>';
}
else{
  echo "<p>Sorry, there was an error uploading your file.<p>";
}

?>
<input  value = "Run Scan" type="submit" id="new_submit" style="margin-top: 5%; " onclick="move()">
</div>


  
  <input type="hidden" name="count" value=<?= $total ?> />
</form> 
<div id="myProgress">
  <div id="myBar"></div>

</div>
<p id="sp" style="margin-left:48.5%;"><i>Scanning...</i></p>
                          </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $('#myProgress').hide();
  $('#sp').hide();
  
});

var i = 0;
function move() {
  $('#main').hide();
  $('#new_submit').hide();
  $('#myProgress').show();
  $('#sp').show();
  
  function blink(){
  $('#sp').fadeOut(500);
  $('#sp').fadeIn(500);
  };
 setInterval(blink);


  if (i == 0) {
    i = 1;
    var elem = document.getElementById("myBar");
    var width = 1;
    var id = setInterval(frame, 250);
    function frame() {
      if (width >= 100) {
        clearInterval(id);
        i = 0;
      } else {
        width++;
        elem.style.width = width + "%";
      }
    }
  }

}
</script>

   </body>    
</html>


   <!--  <a href="http://localhost/runpy.php">  
    <button type="submit" value="Detect">Detect</button>  
     </a>'; -->

