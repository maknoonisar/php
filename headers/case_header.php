


<!-- navbar-->
<nav class="navbar navbar-expand-lg navbar-light b-light">
  <div class="col" style="margin-top:-8px; margin-bottom:1px;">
	<div class="navbar-header">
		<a class="navbar-logo" href="">
				<div style='font-size:35px; color: #ffffff;'>
				<img src='images/logo.png'  style="width:150px; height:150px;"> 
				<b style="letter-spacing:6px;">SMART SURVEILLANCE SYSTEM </b> 
			</div>
		</a>
	</div>
   </div>
			   
	<!-- <div class="col-md-auto">
		<ul class="nav justify-content-end">
		  <li class="nav-item">
			<a class="nav-link active" href="#">REVIEW</a>
		   </li>
		  <li class="nav-item">
			<a class="nav-link" href="#">RESPOND</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#">RESEARCH</a>
		  </li>
						
		</ul>
	</div> -->
</nav>
<!--nav bar end-->



<body style="background-color:black">

<!--sub navbar-->
<nav class="navbar navbar-expand-lg sub-nav" style="border-style:none!important;">
  <div class="collapse navbar-collapse" id="navbarNav">
	<div class="casesnav" style="font-size: 30px;">Use Cases</div>   
 
	<!-- <ul class="navbar-nav createcasebtn" style="margin-left:1310px;">
		<i class="fas fa-search" style="font-size:18px; color:#8a8787; margin-top:11px; "></i>
		<div style="font-size: 15px; color:#8a8787; margin-top:8px; margin-left:12px;">sorted by:</div>

		<li> <a class="nav-link active" style="border-style: none!important;" href="#">Last Created </a> </li>
		<li> <a class="nav-link" style="border-style: none!important;" href="#">| Last Modified</a> </li>
		<li class="nav-item" style="">
			<a class="nav-link add-vedio" data-bs-target="#reg" data-bs-toggle="modal">  
				<span class="fas fa-plus-circle" style="color:#258cd3; font-size:20px;"> </span> CREATE CASE 
			</a>
		</li>
    </ul> -->
  </div>
</nav>
<!--sub navbar end-->



<!-- Modal itself for upload videos-->
<div class="modal fade" id="reg" tabindex="-1"
     aria-labelledby="modal-title"
	 aria-hidden="true"> 
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header"  style="background-color:#417192; color:#dee7e8;">
				<h4 class="modal-title" id="modal-title"> File upload form  </h4>
				<button type="button" class="btn-close" 
					data-bs-dismiss="modal"
					aria-label="Close" style="background-color: #417192;border:#417192;">
					<i class="fas fa-times" style="color:#acb1b5; font-weight:400;"></i>
				</button>
			</div>
			<div class="modal-body">
				<!-- Form -->
				<form method='post' action='' enctype="multipart/form-data">
				Select a file : <input type='file' name='file' id='imgfile' class='form-control' ><br>
				<input type='button' class='btn btn-info' value='Upload' id='btn_upload'>
				</form>
				<!-- Preview-->
				<div id='preview'>
				</div>	
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" id="savechngved"  class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<!-- end modal--> 




