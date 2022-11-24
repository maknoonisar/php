

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
<?php include "headers/perid-video_head.php" ?>
<!--end head------>




<style>
.loader {
    position: fixed;
    z-index: 99;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: white;
    display: flex;
    justify-content: center;
    align-items: center;
}

.loader > img {
    width: 100px;
}

.loader.hidden {
    animation: fadeOut 5s;
    animation-fill-mode: forwards;
}

@keyframes fadeOut {
    100% {
        opacity: 0;
        visibility: hidden;
    }
}

.thumb {
    height: 100px;
    border: 1px solid black;
    margin: 10px;
}
</style>






<!--container-->
<div class="container-fluid" >
	<div class="row" style="background-color:">

<!--column 1-->	
	<div class="col-2 sidebarved scrollbar" style="height:auto;">
	  
<!--upload video playlist-->		
<?php 
$local_dir = 'vedio_personreid/';
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
					<div class='embed-responsive embed-responsive-16by9'> 
					<iframe class='embed-responsive-item' name='video2' src='$local_dir$files[$i]' frameborder='0' sandbox='' allowfullscreen> </iframe>
					</div>
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


	
<!--column 2  display videos -->	
	<div class="col-8"  style="background-color:">

		<!--display video column panel-->
		<div id='displayvideo' style="display:block;">
		
			<center>
			<!--video  id="video1"  style="display:inline; height:800px; width:100%;" width=""  controls> 
				<source src="videos/Explosion052_x264.mp4" type="video/mp4">
			</video-->
				<div class='novideo'>
					<p> No video selected</p>
				</div>	
			</center>
			
		</div>
<!--end display video column-->
	

<!------------------------------------------------->
		<!-- display Crime Scene Detection panel-->
		<div id='displayperboard' style="display:;">
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
	    		
				<!--p id="vd"></p>
				<p id="name"></p-->
				
				</div>
			</div>
		<!-- end display Crime Detection panel-->
		
				
		<!--output of model Crime scene detection-->
			<div class="crimeveddis" id="outputved" style="display:block;">
			<?php
				// (B) GET LIST OF VIDEO FILES FROM GALLERY FOLDER
				$dir = __DIR__ . DIRECTORY_SEPARATOR . "output_video_per_reid" . DIRECTORY_SEPARATOR;
				$images = glob($dir . "*.{mp4,avi,webm}", GLOB_BRACE);
 
				// (C) OUTPUT VIDEO 
				foreach ($images as $i) {
				printf(" <center> <video width='1500' height='870' src='output_video_per_reid/%s'  controls autoplay muted/>  </center>", basename($i));
				}
			?>	
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
				url: 'file_product_per_vid.php',
				data: { name: hh },
					
				beforeSend: function () {  
				$('#loader').show();
				},
				
                success: function(data) {
			        $("#vd").html(data);
					//console.log(data1);
                },
				
				complete: function () {  
				$('#loader').hide()
				location.reload();
				},
				
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
        location.href = "videos_personid.php";
    };
</script>




<!-- Replace Video  name-->
<!--script>
/*  ==========================================
    SHOW UPLOADED VIDEO
* ========================================== */
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imageResult')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$(function () {
    $('#upload').on('change', function () {
        readURL(input);
    });
});

/*  ==========================================
    SHOW UPLOADED VIDEO NAME
* ========================================== */
var input = document.getElementById( 'upload' );
var infoArea = document.getElementById( 'upload-label' );

input.addEventListener( 'change', showFileName );
function showFileName( event ) {
  var input = event.srcElement;
  var fileName = input.files[0].name;
  infoArea.textContent = 'File name: ' + fileName;
}
</script-->




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

 
 
<!--javascript for output video grid-->
 <script>
window.addEventListener("DOMContentLoaded", function(){
  // (A) GET ALL VIDEO
  var all = document.querySelectorAll(".gallery img");
 
  // (B) CLICK ON VIDEO TO TOGGLE FULLSCREEN
  if (all.length>0) { for (let img of all) {
    img.addEventListener("click", function(){
      // EXIT FULLSCREEN
      if (document.webkitFullscreenElement || document.fullscreenElement) {
        if (document.exitFullscreen) { document.exitFullscreen(); }
        else if (document.webkitExitFullscreen) { document.webkitExitFullscreen(); }
      }

      // ENGAGE FULLSCREEN
      else {
        if (this.requestFullscreen) { this.requestFullscreen(); }
        else if (this.webkitRequestFullscreen) { this.webkitRequestFullscreen(); }
      }
    });
  }}
});
</script>
<!--javascript -->












<footer>
</footer>

</html>


