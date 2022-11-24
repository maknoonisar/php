<!--logout session-->
<?php
session_start();

if ($_SESSION["status"] != true) {
   header("Location: index.php");
}
?>
<!--logout session end-->


<!doctype html>
<html lang="en">
<system.webServer>
   <staticContent>
      <clientCache cacheControlMode="NoControl" />

      <head>
         <?php include "headers/header.php" ?>
         <title> VISUAL INTELLIGENCE </title>
         <style>
            /* @import url('css2.css'); */

            * {
               /* font-family: 'Poppins', sans-serif; */
               margin: 0;
               padding: 0;
               box-sizing: border-box;
               outline: none;
               border: none;
               text-decoration: none;
               text-transform: capitalize;
            }

            body {
               background-color: black;
               padding: 0px;
            }

            .container {
               max-width: 200px;
               margin: 100px auto;
               display: flex;
               flex-wrap: wrap;
               align-items: flex-start;
               gap: 50px;
            }

            .container .main-video-container {
               flex: 1 1 700px;
               border-radius: 5px;
               box-shadow: 0 5px 15px rgba(0, 0, 0, .1);
               background-color: #fff;
               padding: 15px;
            }

            .container .main-video-container .main-video {
               margin-bottom: 7px;
               border-radius: 5px;
               width: 100%;
            }

            .container .main-video-container .main-vid-title {
               font-size: 20px;
               color: #444;
            }

            .container .video-list-container {
               flex: 1 1 350px;
               height: 485px;
               overflow-y: scroll;
               border-radius: 5px;
               box-shadow: 0 5px 15px rgba(0, 0, 0, .1);
               background-color: #fff;
               padding: 15px;
            }

            .container .video-list-container::-webkit-scrollbar {
               width: 50px;
            }

            .container .video-list-container::-webkit-scrollbar-track {
               background-color: #fff;
               border-radius: 5px;
            }

            .container .video-list-container::-webkit-scrollbar-thumb {
               background-color: #444;
               border-radius: 5px;
            }

            .container .video-list-container .list {
               display: flex;
               align-items: center;
               gap: 15px;
               padding: 0px;
               background-color: #eee;
               cursor: pointer;
               border-radius: 5px;
               margin-bottom: 10px;
            }

            .container .video-list-container .list:last-child {
               margin-bottom: 0;
            }

            .container .video-list-container .list.active {
               background-color: #444;
            }

            .container .video-list-container .list.active .list-title {
               color: #fff;
            }

            .container .video-list-container .list .list-video {
               width: 100px;
               border-radius: 5px;
            }

            .container .video-list-container .list .list-title {
               font-size: 17px;
               color: #444;
            }















            @media (max-width:1200px) {

               .container {
                  margin: 0;
               }

            }

            @media (max-width:450px) {

               .container .main-video-container .main-vid-title {
                  font-size: 15px;
                  text-align: center;
               }

               .container .video-list-container .list {
                  flex-flow: column;
                  gap: 10px;
               }

               .container .video-list-container .list .list-video {
                  width: 100%;
               }

               .container .video-list-container .list .list-title {
                  font-size: 15px;
                  text-align: center;
               }

            }
         </style>
      </head>


      <!-----head------->
      <?php include "headers/crime-head.php" ?>
      <!--end head------>




      <!--container-->
      <div class="container-fluid">

         <div class="row">

            <!--column 1-->
            <div class="col-2 sidebarved scrollbar"  style="height:1000px; padding-right: 1px;
    padding-left: 1px;">

               <!--upload video playlist-->
               <?php
               $local_dir = 'input_all_video/';
               $files = scandir($local_dir);

               $files = array_diff($files, array('.', '..'));
               $files = array_values($files);


               for ($i = 0; $i < count($files); $i++) {
                  echo "	
		<form method='post' action='' enctype='multipart/form-data'>
			
		<div onclick='togglemidcol()' style='background-color:' class='video-list-container'>
			<ul style='padding: 14px 16px 13px 17px;' class=''>
				<li> <a class='nav-link' href='#' id='openved' onClick='fetch_month1($i);'> 
					<!--span class='nav_name'>$files[$i] <br></span-->			 
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
            <div class="col-8">


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
               <div id='displayperboard'>
                  <div class="row py-4">
                     <div class="col-lg-8 mx-auto">

                        <div id='loader' style="display:none;">
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
                  <!-- <div class="crimeveddis" id="outputved" style="display:block;">
				<div class="crime_type" style='width: auto; background-color:  gray;font-size: 30px;font-weight: bolder;'><embed 
				 src='output_crime_video/output.txt'> -->


               </div>

               <div class="crimeveddis" id="outputved" style="display:block;">
                  <?php
                  // (B) GET LIST OF VIDEO FILES FROM GALLERY FOLDER
                  $dir = __DIR__ . DIRECTORY_SEPARATOR . "output_all_video" . DIRECTORY_SEPARATOR;
                  $images = glob($dir . "*.{mp4,avi,webm}", GLOB_BRACE);

                  // (C) OUTPUT VIDEO 
                  foreach ($images as $i) {
                     $txtfilepath = sprintf("output_all_video/%s.txt", basename($i, '.mp4'));
                     $output_crime_label = pathinfo($txtfilepath);
                     // echo $txtfilepath;
                     // $file = fopen($txtfilepath,"r");
                     // $content = $output_crime_label['filename'];
                     // echo "<center><div style='font-size:50px;font-weight:bolder;background-color:none;color:black;'>".$content."</div></center>";
                     // fclose($file);
                     printf(" <center> <video width='1500' height='870' src='output_all_video/%s.mp4'  controls autoplay muted/>  </center>", basename($i, '.mp4'));
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
         $(document).ready(function() {
            $("#btn").click(function() {
               //$("p").slideToggle();
               fetch_month1();
            });
         });

         function fetch_month1(hh) {

            var data1 = hh;
            $.ajax({
               type: 'POST',
               url: 'all_product.php',
               data: {
                  name: hh
               },
               cache: false,

               beforeSend: function() {
                  $('#loader').show();
               },

               success: function(data) {
                  console.log(data);
                  $("#vd").html(data);
                  //console.log(data1);
               },

               complete: function() {
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
         function displayrunbtn() {
            document.getElementById('dismdlbtn').style.display = 'block';
            document.getElementById('disuploadbtn').style.display = 'block';
         }
      </script>


      <!--js for toggle middle columns--->
      <script>
         function togglemidcol() {
            var disved = document.getElementById("displayvideo");
            var disvidgall = document.getElementById("outputved");

            if (disved.style.display === "block" || disvidgall.style.display === "block") {
               disved.style.display = "none";
               disvidgall.style.display = "none";
            }
            //document.getElementById('displayvideo').style.display ="none";
         }
      </script>




      <!--return to the location javascript-->
      <script type="text/javascript">
         document.getElementById("savechngved").onclick = function() {
            location.href = "all_detect.php";
         };
      </script>




      <!-- Replace Video  name-->
      <script>
         /*  ==========================================
    SHOW UPLOADED VIDEO
* ========================================== */
         function readURL(input) {
            if (input.files && input.files[0]) {
               var reader = new FileReader();

               reader.onload = function(e) {
                  $('#imageResult')
                     .attr('src', e.target.result);
               };
               reader.readAsDataURL(input.files[0]);
            }
         }

         $(function() {
            $('#upload').on('change', function() {
               readURL(input);
            });
         });

         /*  ==========================================
             SHOW UPLOADED VIDEO NAME
         * ========================================== */
         var input = document.getElementById('upload');
         var infoArea = document.getElementById('upload-label');

         input.addEventListener('change', showFileName);

         function showFileName(event) {
            var input = event.srcElement;
            var fileName = input.files[0].name;
            infoArea.textContent = 'File name: ' + fileName;
         }
      </script>




      <!-- Ajax JavaScript video File Upload  -->
      <script>
         $(document).ready(function() {
            $('#crime_upload').click(function() {

               var fd = new FormData();
               var files = $('#upload')[0].files[0];
               fd.append('file', files);

               // AJAX request
               $.ajax({
                  url: 'ajax_allvideo.php ',
                  type: 'post',
                  data: fd,
                  cache: false,
                  contentType: false,
                  processData: false,
                  success: function(response) {
                     if (response != 0) {
                        // Show video preview

                     } else {
                        alert('file not uploaded');
                     }
                  }
               });
            });
         });
      </script>




      <!-- Ajax JavaScript video File Upload  -->
      <script>
         $(document).ready(function() {
            $('#btn_upload').click(function() {

               var fd = new FormData();
               var files = $('#imgfile')[0].files[0];
               fd.append('file', files);

               // AJAX request
               $.ajax({
                  url: 'upload_allajax.php',
                  type: 'post',
                  data: fd,
                  cache: false,
                  contentType: false,
                  processData: false,
                  success: function(response) {
                     if (response != 0) {
                        // Show video preview
                        $('#preview').append("<video src='" + response + "' width='100' height='100' style='display: inline-block;'>");
                     } else {
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
         $(".sub-menu a").click(function() {
            $(this).parent(".sub-menu").children("ul").slideToggle("100");
            $(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
         });
      </script>



      <!--javascript for output video grid-->
      <script>
         window.addEventListener("DOMContentLoaded", function() {
            // (A) GET ALL VIDEO
            var all = document.querySelectorAll(".gallery img");

            // (B) CLICK ON VIDEO TO TOGGLE FULLSCREEN
            if (all.length > 0) {
               for (let img of all) {
                  img.addEventListener("click", function() {
                     // EXIT FULLSCREEN
                     if (document.webkitFullscreenElement || document.fullscreenElement) {
                        if (document.exitFullscreen) {
                           document.exitFullscreen();
                        } else if (document.webkitExitFullscreen) {
                           document.webkitExitFullscreen();
                        }
                     }

                     // ENGAGE FULLSCREEN
                     else {
                        if (this.requestFullscreen) {
                           this.requestFullscreen();
                        } else if (this.webkitRequestFullscreen) {
                           this.webkitRequestFullscreen();
                        }
                     }
                  });
               }
            }
         });
      </script>
      <!--javascript -->












      <footer>
      </footer>

</html>