<!doctype html>
<html lang="en">

<head>
 <meta charset="utf-8" />
 
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="jquery.csvToTable.js"></script>
  <style type="text/css">


/*body{
	background-color: black;
	color: black;
}*/
    canvas {
  /* for display purposes */
              /*border: 1px solid red;*/
              display: block;
              float: left;
            }

    .container {
              /* for display purposes */
              color: blue;              /* make sure we contain the floats */
              overflow: auto;
              margin-top: 100px;
            }
            .container1{
              opacity: 0.7;

            }

    .images: hover{

      border: 1px solid red;

}
.main-panel{
  width: 100%
}
.content{}
#table1 {
  margin-left: auto;
  margin-right: auto;
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  table-layout: fixed;
  margin: 10px;
  border-collapse:separate; 
border-spacing: 25px 1rem;
}

#table1 td, #table1 th {
  border: 1px solid #ddd;
  padding: 8px;
  justify-content: center;
}
#table1 tr:hover {background-color: beige;color: darkgreen;}

#table1 th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: black;
  color: white;
}
#table1 tr{
  font-weight: bolder;
  font-size: 20px;
  color: black;
}
#table1 {
  margin-left: auto;
  margin-right: auto;
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50;
}

</style>
  </style>

</head>

<?php 
if($_SERVER["REQUEST_METHOD"] == "POST") {

$index1=strval($_POST['train']);
$index2=strval($_POST['test']);	

$index=$index1.'--'.$index2;
// echo "<h1>$index</h1>";





}

?>
		
<body>
<div  class= "logo" style =" 
    margin: 0 auto;
    width: 100px;
    text-align:center;
  top:50%; 
  left:50%;" id="logo"> 
  <a href="http://localhost/horizon/cases.php"><img src="images/logo.png"> </a>
</div>     
	<!--run backend model to Detect Crime Scene-->	
		<?php
		$command = escapeshellcmd("C:/Users/horiz/anaconda3/envs/speechy/python.exe C:/Users/horiz/Desktop/final_version_speech_upd/official_modifying.py $index");
			$output = shell_exec($command);
			// echo $output;	
		?>
		<!-- <div style="width: auto;"><embed src="predictions.txt"></div>'     -->
<script type="text/javascript">
    function processData(csv) {

      let data = csv.split(/\r\n|\n/).map(v => v.split(','));

      let headers = data.shift();

      let table = document.createElement('table');
      table.setAttribute("id", "table1");

      let thead = document.createElement('thead');
      table.appendChild(thead);

      thead.innerHTML = '<tr><th>' + headers.join('</th><th>') + '</th></tr>';

      let tbody = document.createElement('tbody');
      table.appendChild(tbody);

      for (let row of data) {
        tbody.innerHTML += '<tr><td>' + row.join('</td><td>') + '</td></tr>';
      }

      document.body.appendChild(table);

    }

    // I uploaded the CSV to a personal repo for this example,
    // but you CAN use a local file as long as you *serve* it
    fetch("predictions.txt")
      .then(res => res.text())
      .then(text => processData(text));
  </script>  
           
</body>		


</html>
		
		
		
		
		
		
		
		
		