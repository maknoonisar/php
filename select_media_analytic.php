
<?php
ob_start();
?>

<!--logout session-->
<?php
	session_start();
	
	if($_SESSION["status"] != true){
		header("Location: index.php");
	}
?>
<!--logout session end-->


<!doctype html>
<html lang="en">

<head>
	<?php include "headers/header.php" ?>
	<title>Neuron Tech</title>
</head>


<style>
	input[type=text], select {
  width: 80%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 3px solid white;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 80%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
    opacity: .8;
}
#mycard {
	color: white;
	background-color: rgba(255,255,255);
        margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 100px; /* Added */
        top:100px;
        /*opacity: 0.75;*/
          
  /*opacity: .8;*/
}
/*div {
  border-radius: 5px;
  width: 50%;
    background-color: #f2f2f2;
  padding: 20px;
}*/
body {
  background-image: url("images/v617batch2-kul-05-technology1.jpg")!important; /* The image used */
  background-color: #cccccc; /* Used if the image is unavailable */
  height: 500px; /* You must set a specified height */ /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: auto; /* Resize the background image to cover the entire container */
	opacity: 0.74;
}
h1{
	font-weight: 20px;
}
li:not(.logo) {
            text-decoration: line-through;
            color: green;
        }
/*.logo{
	!important;
*/
/*body {
	background-image: url('images/video_summarization.jpg')!important;
    background-repeat: no-repeat !important;
	background-size: cover !important;
	background-position:center;
}
*/
.jumbotron{
	color: #0ffff2;
	opacity: 0.75
}
.form{
color: white;
}
</style>
		<div class= "logo" style =" position:fixed; 
	top:50px; 
	left:20px;" id="logo"> 
	<img src="images/logo.png"> 
</div> 
<body>
	
	<!--container----->
	

<div class="jumbotron jumbotron-fluid bg-dark">
  <div class="container">
    <h1 class="display-4 bg-gradient-light text-white">Media Analytics</h1>
     <hr class="my-4">
    <p class="lead bg-gradient-light text-white">Identifies and authenticates a specific person by thier facial features from video.</p>
  </div>
</div>

	
<div class="container">
<div class="row justify-content-center"></div>
<div class="card h-100 p-3 mb-2 bg-gradient-light text-white" id="mycard" style="width: 30rem;">
  <div class="card-body">
    <strong><h5 style="font-family: 'Heebo';color:white; font-size:30px" class="lead bg-gradient-light text-light"><b>Media Analytics</b></h5></strong>
    <div class='container'>
  <form  method ="POST">
    <select name="dataset"  id="datasetselect" aria-label="Default select example">
      <option value="images"><b>Media Analysis Images</b></option>
      <option value="videos"><b>Media Analysis Videos</b></option>
    </select>
	<input style="width: 50%;align-items: center;" type="submit" name="submit">

     <!-- <a type="submit" class="btn btn-primary">Submit</a> -->
  </form>
</div>
	
	</div>
	</div>
  </form>

	
<!-- 	
	<div class="row">
		<form method="POST">
		
			<div class="col" style="margin-top:530px; margin-left:1400px;">
				<select name="dataset" class="form-select" id="datasetselect" aria-label="Default select example">
					<option selected disabled>Select Dataset</option>
					<option value="images">Media Analysis Images</option>
					<option value="videos">Media Analysis Videos </option>
				</select>
			</div>
			
			<div class="col" style="argin-left:1400px;">
				<input type="submit" name="submit" class="btn btn-secondary" id="enterbtn" value="ENTER">
			</div>
			
		</form>
	</div>
	 -->
	
	<?php 
		if(isset($_POST['submit']))
		{
			$getcar = $_POST['dataset'];
			
			if ($getcar == "images") {
				header("Location: media_analytics_imag.php");
			}
			
			if ($getcar == "videos") {
				header("Location: media_analytics_video.php");
				
			}
			//echo 'The dataset is:' .$getcar;
		}
	?>
	
	

	
</body>


</html>
