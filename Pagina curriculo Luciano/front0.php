<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Curriculo - Luciano Junior</title>
		<style type="text/css">
			header{
				width: 100%;
				height: 50px;
				background-color: gray;
				float: left;
				
			}
			
			.sct{
				width: 50%;
				height: 250px;
				float: left;
				border: radius;
			}
			
			#sct01{
				background-color: beige;
			}
			#sct02{
				background-color: beige;
			}
			
			footer{
				width: 100%;
				height: 50px;
				background-color: gray;
				float: left;			
			}
		</style>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script type="text/javascript">
				$(document).ready(function() {
					$("#header").load("headercontent.php");
					$("#sct01").load("section01content.php");
					$("#sct02").load("section02content.php");
					$("#footer").load("footercontent.php");
				});
		</script>
	</head>
<body>
	<header id="header">innerHTML header</header>
	<section class="sct" id="sct01" >innerHTML sct01</section>
	<section class="sct" id="sct02">innerHTML sct02</section>
	<footer id="footer">innerHTML footer</footer>
</body>
</html>