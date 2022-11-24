
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
$local_dir = 'input_video/';
$files=scandir($local_dir);

$files=array_diff($files, array('.','..'));
$files=array_values($files);
$index=$_POST['name'];


	echo "
		<video class='video' name='video2'  style='display:none; height:15%; width:50%' controls>
			<source src='$local_dir$files[$index]' `='video/mp4'>
		</video>";

		
//echo "$index";
//pathinfo($index);

//echo "my name is: . $files[$index]";

?>



<body>
	<!--run backend model to Detect Crime Scene-->	
		<?php
			$str1 = "Video";
			$str2 = $files[$index];
			echo $str1;
			echo $str2;
			$str = "D:/Anaconda/envs/tf-keras/python.exe main.py $str1 $str2";
			$command = escapeshellcmd($str);
			$output = shell_exec($command);
			// $str3 = "D:/Anaconda/envs/tf-keras/python.exe C:/xampp/htdocs/horizon/copier.py";
			
			// $command1 = escapeshellcmd($str3);
			
			// $output1 = shell_exec($command1);
			// echo $output;	
			 // echo '<div class="my_class">'.$output.'</div>';
		?>
		<!--------------------------------->
</body>		


</html>

		
		
		
		
		
		
		
		
		
		
		
		
		