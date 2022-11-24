
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
$local_dir = 'input_all_video/';
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
	<!--run backend model -->	
		<?php
			$command = escapeshellcmd("D:/Anaconda/envs/torch/python.exe C:/Users/asdf/Desktop/survilance/test_all_model.py $files[$index]");
			$output = shell_exec($command);
			// echo $output;	
			 // echo '<div class="my_class">'.$output.'</div>';
		?>
		<!--------------------------------->
</body>		


</html>

		
		
		
		
		
		
		
		
		
		
		
		
		