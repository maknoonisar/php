


<?php

// file name
$filename = $_FILES['file']['name'];

// Location
$location = 'vedio_personreid/'.$filename;

// file extension
$file_extension = pathinfo($location, PATHINFO_EXTENSION);
$file_extension = strtolower($file_extension);

// Valid image extensions
$image_ext = array("mp4","webm");

$response = 0;
if(in_array($file_extension,$image_ext)){
  // Upload file
  if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
    $response = $location;
  }
}

echo $response;
?>