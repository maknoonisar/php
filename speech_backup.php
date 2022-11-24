
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
<style>
	.jumbotron{
	color: red;
	opacity: 0.5
}
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
  width: 90%;
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
        opacity: 0.8;
          
  /*opacity: .8;*/
}
/*div {
  border-radius: 5px;
  width: 50%;
    background-color: #f2f2f2;
  padding: 20px;
}*/
body {

  background-image: url("images/Lovepik_com-500769023-speech-recognition.jpg")!important; /* The image used */
  width: 100%;
  height: 100%;
  background-color: black; /* fallback color */f
  background-position: center;
  background-size: cover; /* Do not repeat the image */
  /* Resize the background image to cover the entire container */
	
}
li:not(.logo) {
            text-decoration: line-through;
            color: green;
        }

</style>

</style>

<body>
	
	<!--container----->
	
	
	
	
	
	
	
	<div class="row">
		<form method="POST">
		
			<div class="col" style="margin-top:530px; margin-left:1400px;">
				<select name="dataset" class="form-select" id="datasetselect" aria-label="Default select example">
					<option selected disabled>Select Langauge</option>
					<option value="english">English</option>
					<option value="urdu">Urdu </option>
				</select>
			</div>
			
			<div class="col" style="margin-left:1400px;">
				<input type="submit" name="submit" class="btn btn-secondary" id="enterbtn" value="ENTER">
			</div>
			
		</form>
	</div>
	
	
	<?php 
		if(isset($_POST['submit']))
		{
			$getcar = $_POST['dataset'];
			
			if ($getcar == "english") {
				header("Location: speech_english_text.php");
			}
			
			if ($getcar == "urdu") {
				header("Location: speech_urdu_text.php");
				
			}
			//echo 'The dataset is:' .$getcar;
		}
	?>
	
	

	
</body>


</html>
