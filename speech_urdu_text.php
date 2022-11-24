

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
	<title> Neuron Tech </title>
</head>


<!-----head------->
<?php include "headers/speech_urdu_text_head.php" ?>
<!--end head------>




<!--container-->
<div class="container-fluid" >
	<div class="row" >

<!--column 1-->	
	<div class="col-2 sidebarved scrollbar" style="height:auto;">
	  
<!--upload video playlist-->		
<?php 
$local_dir = 'audio_urdu/';
$files=scandir($local_dir);

$files=array_diff($files, array('.','..'));
$files=array_values($files);

for($i =0; $i < count($files); $i++)
		{
		echo "	
		<form method='post' action='' enctype='multipart/form-data'>	
		<div onclick='togglemidcol()' style='background-color:'>
			<ul style='padding: 0 0 0 0;' class=''>
				<li> <a class='nav-link' href='#' id='openved' onClick='fetch_month1($i);'> 
					<!--span class='nav_name'>$local_dir$files[$i] <br></span-->			 
					<!--div class='embed-responsive embed-responsive-16by9'--> 
						<audio style='width: 250px;' controls>
							<source src='$local_dir$files[$i]' class='video' type='audio/wav' name='video2' style='' > 
						</audio>
					
					<!--/div-->
					</a> 
				</li>
			</ul>
		</div>
		</form>
		";	
		}
?>
	</div>
<!--column 1 end-->	



	
<!--column 2  display audio -->	
	<div class="col-8"  >

		<!--display audio column panel-->
		<div id='displayvideo' style="display:block;">
			<center>
				<div class='novideo'>
					<p> No Audio selected</p>
				</div>	
			</center>
		</div>
<!--end display audio column-->
	

<!------------------------------------------------->
		<!-- display speech to text panel-->
		<div id='displayperboard'>
			<div class="row py-4">
				<div class="col-lg-8 mx-auto">
				
					<div  id='loader' style="display:none;">
					<!--img src="images/progressbar.gif"-->
						<div id="circle">
							<div class="loader">
								<div class="loader">
									<div class="loader">
										<div class="loader">
										</div>
									</div>
								</div>
							</div>
						</div> 
					</div>	
					
					
				<p id="vd"> </p>
				<p id="name"></p>
					
					
					
				</div>
			</div>
		<!-- end display speech to text panel-->
		
				
		<!--output of model speech to text-->
			<div class="crimeveddis" id="outputved" style="display:block; ">

				<div class='transcript_title_text'> 
					<i class="fas fa-microphone-alt"  style="font-size:39px; color:#2651729c; margin-top:159px; margin-right:12px;"> </i>
					Speech to Text 
				</div>
				
				<center>
					<div class="content_audio" style="text-align: right !important;">
						
						<?php
						$url = "sample_urdu.txt";
						$strings = file_get_contents($url);
						$strreplace = str_replace ("0", "",   $strings);
						$strreplace0 = str_replace (',', '', $strreplace);
						file_put_contents($url, $strreplace0);
						?>
						
						<?php
						//a function to read file content
						function phpReadFile($filename){
							$myfile = fopen($filename, "r")or die("Unable to open file!");
							$filecontent = fread($myfile, filesize($filename));
							fclose($myfile);
							return $filecontent;
						}
						
						//lets read sample.text file
						echo phpReadFile("sample_urdu.txt");
						?>
						
					</div>
				</center>
			</div>
		</div>
<!------------------------------------->
	</div>
<!--column 2 end-->	

		

<!--column 3-->

<!--column 3 end-->	
	
	 </div>
	</div>
</div>
<!--container end-->
</body>




<!--js for onclick select video-->
<script type="text/javascript">
$(document).ready(function(){
  $("#btn").click(function(){
	//$("p").slideToggle();
  fetch_month1();
  });
});
 function fetch_month1(hh)
            {
				
				var data1 = hh;
	            $.ajax({
				type: 'POST',
				url: 'speech_urdu_text_product_file.php',
				data: { name: hh },
					
				beforeSend: function () {  
				$('#loader').show();
				},
				
                success: function(data) {
			        $("#vd").html(data);
					console.log(data1);
                },
				
				//complete: function () {  
				//$('#loader').hide()
				//location.reload();
				//},
				
				});
				//$('#outputved').show()
				//$("#loader").show();
			
            }
</script>


<!-- js replace upload to run model on click-->
<script>
function displayrunbtn(){
	document.getElementById('dismdlbtn').style.display = 'block';
	document.getElementById('disuploadbtn').style.display = 'block'; 
}
</script>


<!--js for toggle middle columns--->
<script>
function togglemidcol() {
	var disved = document.getElementById("displayvideo");
	var disvidgall = document.getElementById("outputved");
		
	if (disved.style.display === "block" || disvidgall.style.display === "block" ){
		disved.style.display = "none";
		disvidgall.style.display = "none";
	}
  //document.getElementById('displayvideo').style.display ="none";
}
</script>




<!--return to the location javascript-->
<script type="text/javascript">
    document.getElementById("savechngved").onclick = function () {
        location.href = "speech_urdu_text.php";
    };
</script>






 <!-- Ajax JavaScript video File Upload  -->
<script>
  $(document).ready(function(){
  $('#crime_upload').click(function(){

    var fd = new FormData();
    var files = $('#upload')[0].files[0];
    fd.append('file',files);

    // AJAX request
    $.ajax({
      url: 'ajaxfile_video.php',
      type: 'post',
      data: fd,
      contentType: false,
      processData: false,
      success: function(response){
        if(response != 0){
          // Show video preview
          
        }else{
          alert('file not uploaded');
        }
      }
    });
  });
});

</script>
 



<!-- Ajax JavaScript video File Upload  -->
 <script>
  $(document).ready(function(){
  $('#btn_upload').click(function(){

    var fd = new FormData();
    var files = $('#imgfile')[0].files[0];
    fd.append('file',files);

    // AJAX request
    $.ajax({
      url: 'uploadvideoajax.php',
      type: 'post',
      data: fd,
      contentType: false,
      processData: false,
      success: function(response){
        if(response != 0){
          // Show video preview
          $('#preview').append("<video src='"+response+"' width='100' height='100' style='display: inline-block;'>");
        }else{
          alert('file not uploaded');
        }
      }
    });
  });
});

</script>
  



<!--javascript for verticle sub menu bar-->
<script>
		$('.sub-menu ul').hide();
		$(".sub-menu a").click(function () {
		$(this).parent(".sub-menu").children("ul").slideToggle("100");
		$(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
		});
 </script>

 
 









<footer>
</footer>

</html>


