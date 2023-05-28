<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<meta charset="utf-8">
	<style type="text/css">
		*{
			padding: 0px;
			margin: 0px;
			font-family: arial;
		}
		#banner{
			width: 1059px;
			height: 100px;
			background-color: green;
			margin: 0px auto;
		}
		#index{
			width: 1059px;
			height: 50px;
			background-color: grey;
			margin: 0px auto;
		}
		#content{
			width: 500px;
			height: 700px;
			margin: 0px auto;
			
		}
		a:link, a:visited {
		  background-color:blue;
		  color: white;
		  padding: 15px 100px;
		  text-align: center;

		  display: inline-block;
		}

		a:hover, a:active {
		  background-color:#4285F4 ;		  
		}
		
	</style>
</head>
<body>

	<div id="header">
		<div id="banner"></div>
		<div id="index">
			<a href="index.php?page=home">Home</a>
			<a href="index.php?page=contact" >Contact</a>
			<a href="index.php?page=drawtable">DrawTable</a>
			<a href="index.php?page=cauculate">Cauculate</a>
		</div>
		<div id="content">
			<?php 
				if (isset($_GET['page'])) {
							$page = $_GET['page'];
						}else{
							$page = 'menu';
						}
						switch ($page) {
							case 'home':

								echo "Đây là trang home";
								break;

							case 'contact':
								include("pages/login.php");
								echo "Đây là trang thông tin";
								break;

							case 'drawtable':
								include("pages/drawTable.php");
								echo "Đây là trang thông tin";
								break;

							case 'cauculate':
								include("pages/cauculate.php");
								echo "Đây là trang thông tin";
								break;
								
							default:
								echo "Bấm vào danh mục bên trên";
								break;
						}
			 ?>
		</div>
	</div>
	

</body>
</html>