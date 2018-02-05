<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Documento sin título</title>	
	<style>
		.msg-content{
			width: 400px;
			margin-bottom: 10px; 
			border: 2px solid #eeeeee;
			background: #eeeeee;
		}
		.msg-content > ul{
			list-style: none;
			padding-left: 0px;
		}
		.msg-content > ul > li{
			padding: 10px;
			margin: 5px;
			border-radius: 3px;
			font-size: 20px;
			font-family: arial;
		}
		.msg-content > ul > li:hover{
			background: #e0e0e0;
		}		
		#mensaje{
			font-size: 20px;
			padding: 10px;
			border: 1px solid #9e9e9e;
			padding-left: 20px;
			border-radius: 40px;
			margin: 10px;			
		}
		#mensaje:focus{
			outline: none;
			border-color: #2196f3;
		}
	</style>
</head>

<body>

	<center>
		<!-- msg-content -->
		<div class="msg-content">
			<!-- msg_view -->
			<ul id="msg_view"></ul>
			<!-- msg_view -->
			<div>
				<input type="text" placeholder="Escribe algo..." autocomplete="off" id="mensaje" name="mensaje">
				<input type="submit" id="submit" value="enviar">		
 			</div>
		</div>
		<!-- msg-content -->		
	</center>
	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/push-demo.js"></script>
</body>
</html>