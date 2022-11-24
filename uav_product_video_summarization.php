<?php 

function pre_r($array){
	echo '<pre>';
	print_r($array);
	echo '<pre>';
	
}
$local_dir = 'input_uav_video_summarization/';
$files=scandir($local_dir);

$files=array_diff($files, array('.','..'));
$files=array_values($files);
$index=$_POST['name'];

echo "$index";
pathinfo($index);

echo "yes...i am working";



	echo "
		<video class='video' name='video2'  style='display:; height:15%; width:50%' controls>
			<source src='$local_dir$files[$index]' `='video/mp4'>
		</video>";


?>

<?php
echo realpath($files[$index]);
?>

	<!--run backend model to ReIdentify person-->	
		<?php
			
			$command = escapeshellcmd("D:/Anaconda/envs/open-cv/python.exe D:/surveillance/video_summarization/uav_video_summarization_code.py $files[$index]");
			$output = shell_exec("$command");
			echo $output;	
		?>
	


