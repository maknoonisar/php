
<!doctype html>
<html lang="en">

<head>
	<?php include "headers/header.php" ?>
</head>



<?php 

function pre_r($array){
	echo '<pre>';
	print_r($array);
	echo '<pre>';
	
}
$local_dir = 'audio/';
$files=scandir($local_dir);

$files=array_diff($files, array('.','..'));
$files=array_values($files);
$index=$_POST['name'];

#echo "$index";
#pathinfo($index);

#echo "hiiiiiiiiiiiiiiiiii";


echo "
<audio style='width:600px; height:150px; margin:1px 0px 0px 8px;'  controls autoplay>
	<source src='$local_dir$files[$index]' class='video' type='audio/wav' name='video2' > 
</audio>
	";

?>

<?php
#echo realpath($files[$index]);
?>

	<!--run backend model to ReIdentify person-->	
		<?php

			$command = escapeshellcmd("python C:/DeepSpeech_english/running.py $local_dir$files[$index]");
			$output = shell_exec($command);
			echo $output;	
			
		?>
	



</html>

		
		
		
		
		
		
		
		
		
		
		
		
		