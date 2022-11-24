

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
<?php include "headers/respond_crime_head.php" ?>
<!--end head------>




<!--container-->
<div class="container-fluid" >
	<div class="row" style="background-color:">

<!--column 1-->	
	<div class="col-2 sidebarved scrollbar" style="height:auto;">
	  
<!--upload video playlist-->		
<?php 
$local_dir = 'input_crime_video/';
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
					<span class='nav_name'>$files[$i] <br></span>			 
					<div class='embed-responsive embed-responsive-16by9'> 
					<iframe class='embed-responsive-item' name='video2' src='$local_dir$files[$i]' frameborder='0' sandbox='' allowfullscreen> </iframe>
					</div>
					<span class='nav_name' style='color:#38df63;'>Alerts<br></span>	
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



	
<!--column 2  display videos --------->	
	<div class="col-8"  style="background-color:#444444a1;">
	
		<ul class="navbar-nav" style="margin-left:px;">
			<div style="font-size: 15px; color:#8a8787; margin-top:8px; margin-left:12px;">Sorted by:</div>
			<a class="nav-link active" style="border-style:none!important; margin-top:-32px; margin-left:90px;" href="#"> Newest </a> 
			<a class="nav-link" style="border-style:none!important; margin-top:-41px; margin-left:151px;" href="#"> |</a> 
			<a class="nav-link" style="border-style:none!important; margin-top:-39px; margin-left:161px;" href="#">Oldest</a> 
			<img src='images/offsound.png'  style="width:29px; height:25px; margin-top:-28px; margin-left:1196px;"> 
		</ul>
	
		<div id="date" style="font-size:15px; color:#e9e6e6; margin-top:8px; margin-left:12px; margin-bottom:-20px;"></div><br>
		
		<div class="row" style='margin-left:-16px; margin-right:-1px;'>	
				
			<?php
			$local_dir ='respond_output_crime_video/';
			$vidfiles=scandir($local_dir);

			$vidfiles=array_diff($vidfiles, array('.','..'));
			$vidfiles=array_values($vidfiles);

			for($i =0; $i < count($vidfiles); $i++)
			{
				echo "
				<div class='col-3'>	
						<iframe class='embed-responsive-item resvidbox' src='$local_dir$vidfiles[$i]' sandbox='' frameborder='0' allowfullscreen> </iframe>
				</div>
				";	
			}
			?>	
		</div>
	
		
	</div>
<!--------------column 2 end---------->	

		

<!--column 3-->
	<div class="col-2 subbar scrollbar"  style="background-color:">
     	<ul style="padding: 0 0 0 0;">
			<li class='sub-menu'> <a class ="nav-link" href="#">Sources</a> </li>
			<li class='sub-menu'> <a class ="nav-link"  href="#">Rules </a> </li>
			<li class='sub-menu'> <a class ="nav-link" href="#">Date</a> </li>
			<li class='sub-menu'> <a class ="nav-link" href="#"> Display </a> </li>
		</ul>
	</div>
<!--column 3 end-->	
	
	 </div>
	</div>
</div>
<!--container end-->
</body>





<!--javascript for verticle sub menu bar-->
<script>
		$('.sub-menu ul').hide();
		$(".sub-menu a").click(function () {
		$(this).parent(".sub-menu").children("ul").slideToggle("100");
		$(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
		});
</script>


<script>
n =  new Date();
y = n.getFullYear();
m = n.getMonth() + 1;
d = n.getDate();
document.getElementById("date").innerHTML = m + "/" + d + "/" + y;
</script>













<footer>
</footer>

</html>


