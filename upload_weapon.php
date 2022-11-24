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
    ul p {
      font-size: 12px;
    }

    /*    body{
  background: red;
opacity: 0.8;
}*/

    .card {
      color: red;
      background-color: orange;
    }


    li:not(.logo) {
      text-decoration: line-through;
      color: green;
    }

    form {
      position: absolute;
      top: 50%;
      left: 50%;
      margin-top: -100px;
      margin-left: -250px;
      width: 500px;
      height: 200px;
      border: 4px solid #000;
    }

    form p {
      width: 100%;
      height: 100%;
      text-align: center;
      line-height: 170px;
      color: #000;
      font-family: Arial;
    }

    form input {
      position: absolute;
      margin: 0;
      padding: 0;
      width: 100%;
      height: 100%;
      outline: none;
      opacity: 0;
    }

    form button {
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

    form button:hover {
      background: grey;
      color: #fff;
    }

    form button:active {
      border: 0;
    }

    div button {
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

    div button:hover {
      background: #149174;
      color: #0C5645;
    }

    div button:active {
      border: 0;
      background: darkgray;
      color: gray;
    }

  

    .main-panel {
      width: 100%
    }

    #toggle-weights {
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

    #toggle-weights:hover {
      background: #149174;
      color: #0C5645;
    }

    #toggle-weights:active {
      border: 0;
      background: darkgray;
      color: gray;
    }

    #toggle-image {
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

    #toggle-image:hover {
      background: #149174;
      color: #0C5645;
    }

    #toggle-image:active {
      border: 0;
      background: darkgray;
      color: gray;
    }

    .display {
      justify-content: center;}
  </style> 
</head>

<body style=" background:#BECADF;">
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="col" style="margin-top:-8px; margin-bottom:1px;">
	<div class="navbar-header">
		<a class="navbar-logo" href="#">
					<div style='font-size:26px; color: #ffffff;'>
				<img src='images/logo.png'  style="width:60px; height:70px;"> 
        Weapon Detection
			</div>
		</a>
	</div>
   </div>
</nav>

<!--<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="col" style="margin-top:-8px; margin-bottom:1px;">
	<div class="navbar-header">
		<a class="navbar-logo" href="#">
					<div style='font-size:26px; color: #ffffff;'>
				<img src='images/logo.png'  style="width:60px; height:70px;"> 
				Weapon Detection
			</div>
		</a>
	</div>
   </div>
</nav>

<!--<nav class="navbar navbar-light bg-dark">
  <a class="navbar-brand" href="http://localhost/horizon/cases.php">
    <div class="row">
      <div class="col-4" style="text-align:center">
    <img src="images/logo.png" width="50" height="50" class="d-inline-block align-top" alt="">

      </div>
      <div class="col-8" style="text-align:center">
      <h3 class=" text-light text-center font-weight-bold lead bg-gradient-light text-white" >Weapon Detection</h3>

      </div>
    </div>
  </a>
</nav>


 <!-- <div class="main-panel" id="main-panel">
    <div class="jumbotron jumbotron-fluid text-light bg-dark">
      <div class="container1">
        <h1 class="display-4 text-light text-center text- font-weight-bold lead bg-gradient-light text-white">Weapon Detection</h1>
        <hr class="my-4">

      </div>
    </div>
    <div class="logo" style=" position:fixed; top:50px; 
  left:20px;" id="logo">
      <a href="http://localhost/horizon/cases.php"><img src="images/logo.png"> </a>
    </div>-->
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
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
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>



  <form id=1 action="backend-weapon.php" method="post" enctype="multipart/form-data" style="background:#FFFFFF;">
    <input type="file" name="fileToUpload[]" id="fileToUpload" multiple="multiple">
    <p>Drag images here or click to browse!</p>
    <button type="submit" value="Upload Image" name="submit">Upload Image</button>
  </form>
  <form id=2 action="" method="post" enctype="multipart/form-data" style="background:#FFFFFF;">
    <input type="file" name="file" id="file">
    <p>Drag your model weights file here or click here to browse!</p>
    <button type="submit" value="Upload Weights" name="submit" id="but_upload">Upload Model Weights</button>
    <p>Last updated model weights to be used if new weights not uploaded.</p>
  </form>
  <br>
  <!-- <button onclick="move()">Click Me</button> -->
  <script src="jquery-img-upload.js"></script>
  <script type="text/javascript">
    function selectImage() {
      $('#2').hide();
      $('#1').show();
      $('#radio').show();
    }

    function selectWeights() {
      $('#1').hide();
      $('#2').show();
      $('#radio').hide();
    }
    $(document).ready(function() {
      $('#2').hide();
      $('form input').change(function() {
        $('form p').text(this.files.length + " file(s) selected");
      });
      $("#but_upload").click(function() {
        var fd = new FormData();
        var files = $('#file')[0].files;
        var file_name = files[0].name;
        // Check file selected or not
        if (files.length > 0) {
          fd.append('file', files[0]);
          $.ajax({
            url: 'upload_model.php',
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(response) {
              if (response != 0) {
                alert('Model Weights Successfully Updated!');
              } else {
                alert('Model Weights could not be updated. Please try again!');
              }
            },
          });
        } else {
          alert("Please select a file.");
        }
        selectImage();
        $("#p12").text('Model Weights Successfully Updated!');
      });
    });
  </script>
</body>

</html>