





<!-- navbar-->
<nav class="navbar navbar-expand-lg navbar-light b-light">
  <div class="col" style="margin-top:-8px; margin-bottom:1px;">
	<div class="navbar-header">
		<a class="navbar-logo" href="#">
				<div style='font-size:26px; color: #ffffff;'>
				<img src='images/logo.png'  style="width:100px; height:100px;"> 
				SMART SURVEILLANCE SYSTEM  
			</div>
		</a>
	</div>
   </div>
			   
	
</nav>
<!--nav bar end-->







<body style="background-color:black">

<!--sub navbar-->
<nav class="navbar navbar-expand-lg sub-nav" style="border-style:none!important; height:43px; ">
  <div class="collapse navbar-collapse" id="navbarNav" >
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="#">DASHBOARDS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">SOURCES</a>
      </li>
	  <li class="nav-item" style="margin-left:600px;">
		<a class="nav-link active" href="#">ANALYSIS</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link" href="#">STORY</a>
	  </li>

	  <li class="nav-item" style="position:absolute; right:30px;">
		<div class="boxdash">
			<a class="nav-link add-vedio" data-bs-target="#reg" data-bs-toggle="modal"> VIDEO ANALYTIC  
				<span class="far fa-image" style="color:; font-size:20px;"> </span> 
				<i class="fa fa-caret-down" style="margin-left:12px;"></i>
			</a>
		</div>
	  </li>
    </ul>
  </div>
</nav>
<!--sub navbar end-->



<body>
<!-- Modal itself for dashboards verities-->
<div class="modal fade" id="reg" tabindex="-1" style="top:-102px;"
     aria-labelledby="modal-title"
	 aria-hidden="true" > 
	<div class="modal-dialog" style="background-color:">
		<div class="modal-content" style="width:343%; margin-left:-607px; background-color:#444444;">
			<div class="modal-header"  style="background-color:#417192; color:#dee7e8;">
				<h4 class="modal-title" id="modal-title"> Sheets </h4>
				<button type="button" class="btn-close" 
					data-bs-dismiss="modal"
					aria-label="Close" style="background-color: #417192;border:#417192;">
					<i class="fas fa-times" style="color:#acb1b5; font-weight:400;"></i>
				</button>
			</div>
			<div class="modal-body" style="">
				<h6 class="modal-title" id="modal-title" style="margin-bottom:12px; color:#c7c7c7;"> Public Sheets (12) 
				<i class="fa fa-caret-down" onclick='toggledashboard()' style="color:#417192; font-size:25px; margin-right:1509px; margin-top:-2px;"></i>
				</h6>
			
				<!--Container is here-->
				<div class="container-fluid">
					<div id='displaydasboards' style="display:block;">
						
					<!--public sheets-->
						<!--Row-1 is here-->
						<div class="row">
					
							<div class="col-lg-1 dialogdash" style="cursor:pointer;">
								<div class="box00" style="box-shadow: 0 0 5px #ffffff!important; background-color:#2f3542!important; width:144px;"> 
									<div class="card">
										<img src="images/dashboard/crime_analysis.PNG" class="card-img-top" alt="...">
										<div class="card-body">
											<h6 class="card-title" style="font-size:12px; color:#8a8787;"> CRIME ANALYSIS </h6>
										</div>
									</div>
								</div>
							</div>
						
							<div class="col-lg-1 dialogdash" style="cursor:pointer;">
								<div class="box00" > 
									<a href="crimescene_dashboar_1.php" class="" style="cursor:pointer; text-decoration:none;">
										<div class="card">
											<img src="images/dashboard/crime_analysis_dashboard2.PNG" class="card-img-top" alt="...">
											<div class="card-body">
												<h6 class="card-title" style="font-size:12px; color:#8a8787;">Hourly ANALYSIS</h6>
											</div>
										</div>
									</a>	
								</div>
							</div>
						
							<div class="col-lg-1 dialogdash" style="cursor:pointer;">
								<div class="box00" >
									<div class="card">
										<img src="images/dashboard/d1.jpg" class="card-img-top" alt="...">
										<div class="card-body">
											<h6 class="card-title" style="font-size:12px; color:#8a8787;">AIRPORT CHECKPOINT</h6>
										</div>
									</div>
								</div>
							</div>
						
							<div class="col-lg-1 dialogdash" style="cursor:pointer;">
								<div class="box00">
									<div class="card">
										<img src="images/dashboard/d3.jpg" class="card-img-top" alt="...">
										<div class="card-body">
											<h6 class="card-title" style="font-size:12px; color:#8a8787;">VEHICLE DETAILS</h6>
										</div>
									</div>
								</div>
							</div>
						
							<div class="col-lg-1 dialogdash" style="cursor:pointer;">
								<div class="box00">
									<div class="card">
										<img src="images/dashboard/d4.png" class="card-img-top" alt="...">
										<div class="card-body">
											<h6 class="card-title" style="font-size:12px; color:#8a8787;">OUTCOUNT ANALYSIS</h6>
										</div>
									</div>
								</div>
							</div>
						
							<div class="col-lg-1 dialogdash" style="cursor:pointer;">
								<div class="box00">
									<div class="card">
										<img src="images/dashboard/d5.jpg" class="card-img-top" alt="...">
										<div class="card-body">
											<h6 class="card-title" style="font-size:12px; color:#8a8787;">TRAFFIC SETECTION</h6>
										</div>
									</div>
								</div>
							</div>
						
							<div class="col-lg-1 dialogdash" style="cursor:pointer;">
								<div class="box00">
									<div class="card">
										<img src="images/dashboard/d6.jpg" class="card-img-top" alt="...">
										<div class="card-body">
											<h6 class="card-title" style="font-size:12px; color:#8a8787;">PATH ANALYSIS</h6>
										</div>
									</div>
								</div>
							</div>
						
							<div class="col-lg-1 dialogdash" style="cursor:pointer;">
								<div class="box00">
									<div class="card">
										<img src="images/dashboard/d6.jpg" class="card-img-top" alt="...">
										<div class="card-body">
											<h6 class="card-title" style="font-size:12px; color:#8a8787;">TRAFFIC VIOLATIONS</h6>
										</div>
									</div>
								</div>
							</div>
						
							<div class="col-lg-1 dialogdash" style="cursor:pointer;">
								<div class="box00">
									<div class="card">
										<img src="images/dashboard/d0.png" class="card-img-top" alt="...">
										<div class="card-body">
											<h6 class="card-title" style="font-size:12px; color:#8a8787;">SHOPPER ANALYSIS</h6>
										</div>
									</div>
								</div>	
							</div>
						
							<div class="col-lg-1 dialogdash" style="cursor:pointer;">
								<div class="box00">
									<div class="card">
										<img src="images/dashboard/d6.jpg" class="card-img-top" alt="...">
										<div class="card-body">
											<h6 class="card-title" style="font-size:12px; color:#8a8787;">SMART CITY</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
					
						<!--Row-2 is here-->
						<div class="row">
					
							<div class="col-lg-1 dialogdash" style="cursor:pointer;">
								<div class="box00">
									<div class="card">
										<img src="images/dashboard/d4.png" class="card-img-top" alt="...">
										<div class="card-body">
											<h6 class="card-title" style="font-size:12px; color:#8a8787;">BUILDING OCCUPANCY</h6>
										</div>
									</div>
								</div>
							</div>
						
							<div class="col-lg-1 dialogdash" style="cursor:pointer;">
								<div class="box00">
									<div class="card">
										<img src="images/dashboard/d13.png" class="card-img-top" alt="...">
										<div class="card-body">
											<h6 class="card-title" style="font-size:12px; color:#8a8787;">VEHICLE IDENTIFICATION </h6>
										</div>
									</div>
								</div>
							</div>
						
							<div class="col-lg-1 dialogdash" style="cursor:pointer;">
								<div class="box00">
									<div class="card">
										<img src="images/dashboard/d0.png" class="card-img-top" alt="...">
										<div class="card-body">
											<h6 class="card-title" style="font-size:12px; color:#8a8787;">LICENSE PLATE TRAFFIC</h6>
										</div>
									</div>
								</div>
							</div>
						
							<div class="col-lg-1 dialogdash" style="cursor:pointer;">
								<div class="box00">
									<div class="card">
										<img src="images/dashboard/d13.png" class="card-img-top" alt="...">
										<div class="card-body">
											<h6 class="card-title" style="font-size:12px; color:#8a8787;">WAEPON IDENTIFICATION</h6>
										</div>
									</div>
								</div>
							</div>
						
							<div class="col-lg-1 dialogdash" style="cursor:pointer;">
								<div class="box00">
									<div class="card">
										<img src="images/dashboard/d14.jpg" class="card-img-top" alt="...">
										<div class="card-body">
											<h6 class="card-title" style="font-size:12px; color:#8a8787;">SHOWER ANALYSIS</h6>
										</div>
									</div>
								</div>
							</div>
						
							<div class="col-lg-1 dialogdash" style="cursor:pointer;">
								<div class="box00">
									<div class="card">
										<img src="images/dashboard/d18.png" class="card-img-top" alt="...">
										<div class="card-body">
											<h6 class="card-title" style="font-size:12px; color:#8a8787;">CUSTOMER TRAFFIC SALES</h6>
										</div>
									</div>
								</div>
							</div>
						
							<div class="col-lg-1 dialogdash" style="cursor:pointer;">
								<div class="box00">
									<div class="card">
										<img src="images/dashboard/d1.jpg" class="card-img-top" alt="...">
										<div class="card-body">
											<h6 class="card-title" style="font-size:12px; color:#8a8787;">INTERACTION ANALYSIS</h6>
										</div>
									</div>
								</div>
							</div>
						
							<div class="col-lg-1 dialogdash" style="cursor:pointer;">
								<div class="box00">
									<div class="card">
										<img src="images/dashboard/d1.jpg" class="card-img-top" alt="...">
										<div class="card-body">
											<h6 class="card-title" style="font-size:12px; color:#8a8787;">VEHICLE DETAILS</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--public sheets end-->
					</div>
				</div>
				
				
				<!--community-->
				<h6 class="modal-title" id="modal-title" style="margin-top:27px; margin-bottom:12px; color:#c7c7c7;"> Community (1) 
				<i class="fa fa-caret-down" onclick='toggledashboard0()' style="color:#417192; font-size:25px; margin-right:1543px; margin-top:-2px;"></i>
				</h6>
			
				<!--Container is here-->
				<div class="container-fluid">
					<div id='displaydasboards0' style="display:block;">
				
					<!--Row-1 is here-->
						<div class="row">
					
							<div class="col-lg-1 dialogdash" style="cursor:pointer;">
								<div class="box00">
									<div class="card">
										<img src="images/dashboard/d18.png" class="card-img-top" alt="...">
										<div class="card-body">
											<h6 class="card-title" style="font-size:12px; color:#8a8787;">MY NEW SHEET</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--community end-->
					</div>
				</div>		
			</div>


			
			
		</div>
	</div>
</div> 
<!-- end modal--> 
</body>


<!--js for toggle dashboard rows--->
<script>
function toggledashboard() {
	var disdash = document.getElementById("displaydasboards");
	if (disdash.style.display === "block"){
		disdash.style.display = "none";
	}
	else if (disdash.style.display === "none"){
			 disdash.style.display = "block";
	}
}
</script>


<!--js for toggle dashboard rows--->
<script>
function toggledashboard0() {
	var disdash = document.getElementById("displaydasboards0");
	if (disdash.style.display === "block"){
		disdash.style.display = "none";
	}
	else if (disdash.style.display === "none"){
			 disdash.style.display = "block";
	}
}
</script>




