
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
  border: 1px solid #ccc;
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
}
.card {
        margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 100px; /* Added */
}
/*div {
  border-radius: 5px;
  width: 50%;
    background-color: #f2f2f2;
  padding: 20px;
}*/

</style>
<body>


<div class="container">
<div class="row justify-content-center"> your cards loop </div>
<div class="card h-50" style="width: 30rem;">
  <div class="card-body">
    <strong><h5 class="card-title"><b>Please Select from the dropdown</b></h5></strong>
    <div class='container'>
  <form class ="dataset" action="#">

    <select id="country" name="country">
      <option value="imagesdataset">Image</option>
      <option value="videodataset">Video</option>
    </select>
     <a type="submit" class="btn btn-primary">Submit</a>
  </form>
</div>
	
	</div>
	</div>

	
	<?php 
		if(isset($_POST['submit']))
		{
			$getcar = $_POST['dataset'];
			
			if ($getcar == "imagesdataset") {
				echo "Have a good day!";
				header("Location: images_personid.php");
			}
			
			if ($getcar == "videodataset") {
				header("Location: videos_personid.php");
			}
			//echo 'The dataset is:' .$getcar;
		}
	?>
	
	

	
</body>


</html>





<div class="row">
		<form method="POST">
		
			<div class="col" style="margin-top:530px; margin-left:1400px;">
				<select name="dataset" class="form-select" id="datasetselect" aria-label="Default select example">
					<option selected disabled>Select Dataset</option>
					<option value="imagesdataset">Detect Person from Images</option>
					<option value="videodataset">Detect Person from Video </option>
				</select>
				<input type="submit" name="submit" class="btn btn-secondary" id="enterbtn" value="ENTER">
			</div>
			
			<div class="col" style="argin-left:1400px;">
				<input type="submit" name="submit" class="btn btn-secondary" id="enterbtn" value="ENTER">
			</div>
			
		</form>
	</div>





















<div class="row">
		<form method="POST">
		
			<div class="col" style="margin-top:530px; margin-left:1400px;">
				<select name="dataset" class="form-select" id="datasetselect" aria-label="Default select example">
					<option selected disabled>Select Dataset</option>
					<option value="imagesdataset">Detect Person from Images</option>
					<option value="videodataset">Detect Person from Video </option>
				</select>
			</div>
			
			<div class="col" style="argin-left:1400px;">
				<input type="submit" name="submit" class="btn btn-secondary" id="enterbtn" value="ENTER">
			</div>
			
		</form>
	</div>