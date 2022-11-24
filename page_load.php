<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/pageloader-style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <title>Document</title>

</head>


<body>

<form method='post' action='' enctype="multipart/form-data"> 
 
 <div id="dismdlbtn">
	<button type='submit' class='btn btn-info' value='Crime Scene Detect' name='crimescene'  id='crimedetect' onclick="loadbmdl()"> Detect Crime Scene</button>
 </div>
 
</form>					

			
			<!--run backend model to Detect Crime Scene-->	
			<?php
				if(isset($_POST['crimescene']))
				{
					$command = escapeshellcmd('python C:/crime_detection/Crime_Detection.py');
					$output = shell_exec($command); 
					echo $output;
				} 
			?>
			<!--------------------------------->
					
 
    
	<div id="loadbar" style="display:none">
		<div class="progress-bar">
			<div class="progress"></div>
		</div> 
		<span class=" loading" > loading</span>
	</div>
	
	
	
	
	<div class="crimeveddis">
			<?php
				// (B) GET LIST OF VIDEO FILES FROM GALLERY FOLDER
				$dir = __DIR__ . DIRECTORY_SEPARATOR . "output_crime_video" . DIRECTORY_SEPARATOR;
				$images = glob($dir . "*.{mp4,avi,webm}", GLOB_BRACE);
 
				// (C) OUTPUT VIDEO 
				foreach ($images as $i) {
				printf(" <center> <video width='850' height='500' src='output_crime_video/%s'  controls/>  </center>", basename($i));
				}
			?>	
	</div>
	
	
	
	

	
<script>

function loadbmdl(){
	document.getElementById('loadbar').style.display = 'block';
	
	const progress = document.querySelector(".progress");
	const loading = document.querySelector(".loading");
	
	let i = 0;
	const fakeUploadPercentage = [0,1,5, 10, 15, 20, 27, 30, 36, 42, 55, 62, 60, 70, 75, 80, 85, 90, 100];


	const interval = setInterval(() => {
		progress.style.width = fakeUploadPercentage[i] + "%";
		loading.innerHTML = fakeUploadPercentage[i] + "%";
		i++;
		if (i == fakeUploadPercentage.length) {
			clearInterval(interval);
			loading.innerHTML = "Completed";
		}
	}, 10000);
	
}
</script>
	

</body>




</html>