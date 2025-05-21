<?php include_once ("for die Registieren.php")?>
	<?php 
	 
		 $query = "SELECT * FROM registration";
		 $ergebnisse = $dbh->query($query);
		 foreach($ergebnisse as $row)
		
		?>
	
<!DOCTYPE html>
<html>
<head>
	<title>HTML Zertifikat</title>
	<style>
		 body{
			font-family: Times New Roman;
			background-color: #F5F5F5;
		
		}
		
		.container{
			border: 1px solid;
			height: 1000px;
			width: 1000px;
			margin: auto;
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
			background-color: #FFFFFF;
    		box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
			margin-top: 100px;
			position: relative;
		}
		h1{
			text-transform: uppercase;
			text-align: center;
			margin-top: 100px;
			color: black;
			position: relative;
			
		}
		.container p{
			text-align: center;
			font-size: large;
		}
		.container h2{
			text-align: center;
		}
		.container img{
			width: 400px;
			float: left;
  			margin-right: 10px;
		}
		.container span{
			float: left;
			margin-left: 300px;
			margin-top: 160px;
		}
		.container span strong{
			color: black;
			font-weight: 800px;
			text-decoration: none;
			
		}
		
	</style>

</head>
<body>
	<div class="container">
		<h1>Abschlusszertifikat</h1><br>
		<p>das bescheinigt das</p><br><br>
		<h2><?php  echo $row['firstName']." ". $row['lastName'];?></h2><br><br>
		<p>hat die erforderlichen Studiengänge absolviert und die OV-Code HTML-Prüfungen bestanden und wird hiermit zum</p><br><br>
		<h2>Zertifizierter HTML-Entwickler</h2><br><br>
		<p>mit grundlegenden Kenntnissen in der Webentwicklung mit HTML5 erklärt.</p><br><br>
		<img src="O_V3schools-removebg-preview.png" alt ="unsere LOGO: OV-Code">
		<span><strong>Aufgegeben am <?php echo date("d.m.Y")  ?><br><br> vom: </strong> OVCode</span>
	</div>
	
</body>
</html>
