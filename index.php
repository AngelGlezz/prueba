<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, minimal-ui">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC:700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Coming+Soon" rel="stylesheet">
	<style>
		html, body, div, span, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, abbr, address, cite, code, del, dfn, em, img, ins, kbd, q, samp, small, strong, sub, sup, var, b, i, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, figcaption, figure, footer, header, hgroup, menu, nav, section, summary, time, mark, audio, video {
				background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
				border: 0 none;
				font-size: 100%;
				margin: 0;
				outline: 0 none;
				padding: 0;
				vertical-align: baseline;
				width: auto;
			}  
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/plantilla.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/article.css">
</head>
<body>
	<div id="page">
		<div id="header">
			<div id="upper_content">
				<?php include("includes/cabecera.php");
				include("includes/menu.php"); ?>
				<div id="session_main">
					<div id="car"><img src="images/car.png"></div>
					<div id="register">REGISTRATE</div>
					<div id="session">INICIAR SESION</div>
				</div>
			</div>
		</div>
		<div id="principal">
			<div id="content">
			<div id="slider_rotator_content">
					<?php include("material/slider_rotator.html");?>
				</div>
				<div id="slider_content">
					<?php include("material/ItemSlider/slider.html"); ?>
				</div>
			</div>
		</div>
		<div id="footer">
			<?php include("includes/pie.php"); ?>
		</div>
	</div>
</body>
</html>