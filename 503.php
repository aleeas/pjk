<?php require_once( 'admin/cms.php' ); ?>
<cms:template title='Maintenance' >
	<cms:editable name='maintenance_image' label='Image' desc='Upload main image here' show_preview='1' 
			width='100%' type='image' />
</cms:template>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width; height=device-height; maximum-scale=1.0; initial-scale=1.0; 
		user-scalable=no"/>
		<title>Pejaten Jaya Kaca</title>
		<meta name="description" content="Pejaten Kaca: Kaca, Alumunium, Stainless" />
		<meta name="keywords" content="pejaten kaca, kaca, stainless, steel, jaya, jaya kaca, pjk, pja, jaya abadi" />
		<meta name="author" content="Pejaten Kaca" />
		<link rel="shortcut icon" href="../favicon.ico">
		<!--Import Google Icon Font-->
      	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      	<link rel="stylesheet" href="font/font-awesome/css/font-awesome.min.css">
      	<!--Import materialize.css-->
      	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		<!-- <link rel="stylesheet" type="text/css" href="css/normalize.css" /> -->		
		<link rel="stylesheet" type="text/css" href="css/effect1.css" />
		<link rel="stylesheet" type="text/css" href="css/pjkstyle.css" />
		<script src="js/modernizr.custom.js"></script>
		<style type="text/css">
			body{
				margin: 0;
				overflow: hidden;
			}
			.bg-maintenis{
				background-color: rgb(149,194,199);
				height: 100vh;
    			width: 100vw;
    			text-align: center;
    			padding: 30px 0;
    			overflow: hidden;
			}
			.bg-maintenis img{
				margin: 30px 0;
				width: 100vw;
				max-width: 454px;
			}
			.text{
				color: #fff;
				font-family: 'Century Gothic';
				font-size: 16px;
			}
			.text a{
				color: #fff;
			}
			.text a:hover{
				text-decoration: underline;
			}
			a{
				text-decoration: none;
			}
			.text.intro{
				font-size: 24px;
				
			}
		</style>
	</head>
	<body>
		<div id="ip-container" class="ip-container">
			<div class="bg-maintenis">
				<div class="text intro">We'll Be Right Back!</div>
				<img src="<cms:show maintenance_image/>">
				<div class="text">We are performing scheduled maintenance. <br/> Please contact us: 021 79199651, 7940124, 79181336 Fax. : 021 7987527 <br/> Email: <a href="mailto:info@pejatenkaca.com" target="_top">info@pejatenkaca.com </a><br/> if you have any question</div>
			</div>
			
		</div>

	</body>
	</html>

<?php COUCH::invoke(); ?>