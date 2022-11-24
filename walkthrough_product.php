
<!doctype html>
<html lang="en">

<head>
	<!-- //Include Header file -->
	<?php include "headers/header.php" ?>
</head>



<?php 

//Read input directory files and handle POST Request from walkthrough_detect.php file
function pre_r($array){
	echo '<pre>';
	print_r($array);
	echo '<pre>';
	
}
$local_dir = 'input_walkthrough_video/';
$files=scandir($local_dir);

$files=array_diff($files, array('.','..'));
$files=array_values($files);
$index=$_POST['name'];

// Display Video Playlist on the side
	echo "
		<video class='video' name='video2'  style='display:none; height:15%; width:50%' controls>
			<source src='$local_dir$files[$index]' `='video/mp4'>
		</video>";

		
//echo "$index";
//pathinfo($index);

//echo "my name is: . $files[$index]";

?>



<body>
	<!--run backend model to Detect walkthrough zones and count person Scene-->	
		<?php
			$command = escapeshellcmd("D:/Anaconda/envs/tf-keras/python.exe D:/Person_detection_from_cctv_video-master/person_detection_every_sec.py $files[$index]");
			$output = shell_exec($command);
			// echo $output;	
			 // echo '<div class="my_class">'.$output.'</div>';
		?>
		<!--------------------------------->
</body>		


</html>

		
		
		
		
		
		
		
		
		
		
		
		
		