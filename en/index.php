<?php require_once( 'admin/cms.php' ); ?>
<cms:php>
   session_start();
   global $accepted_langs, $selected_lang;
   
   // Set your languages here
   $accepted_langs = array( 'id', 'en');
   
   if( isset($_SESSION['lang']) && in_array($_SESSION['lang'], $accepted_langs) ){
      $selected_lang = $_SESSION['lang'];
   }
   else{
      $selected_lang = 'id'; // Set your default language here
   }
   </cms:php>
<cms:template title='Home' >
	<cms:editable name='prop_image' label='Image 1' desc='Upload main image here' show_preview='1' group='prop_uploads'  type='image' />
	<cms:editable name='prop_image2' label='Image 2' desc='Upload main image here' show_preview='1' group='prop_uploads' assoc_field='prop_image' type='image' />
	<cms:editable name='prop_image3' label='Image 3' desc='Upload main image here' show_preview='1' group='prop_uploads' assoc_field='prop_image' type='image' />
	<cms:editable name='prop_image4' label='Image 4' desc='Upload main image here' show_preview='1' group='prop_uploads' assoc_field='prop_image' type='image' />
	<cms:editable name='prop_image5' label='Image 5' desc='Upload main image here' show_preview='1' group='prop_uploads' assoc_field='prop_image' type='image' />

	<cms:editable name='prop_desc_id' label='About Description Indonesia' desc='Enter description of property here' type='richtext' />
	<cms:editable name='prop_desc_en' label='About Description English' desc='Enter description of property here' type='richtext' />
	
</cms:template>
<cms:set my_lang = "<cms:php>global $selected_lang; echo $selected_lang;</cms:php>" 'global' />
<!DOCTYPE html>
<html>
<head>
	<?php include("include/header.php")  ?>
</head>
<body>

	<div id="ip-container" class="ip-container">
		<!-- initial header -->
			<header class="ip-header" id="preloader">
				<div class="logo-caption preload-img">
					<img src="assets/img/Logo Caption.png" class="logo-splash">
				</div>
				<div class="ip-loader">
					<svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
						<path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
						<path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
					</svg>
				</div>
			</header>
			<!-- end header -->
			<div class="wrapper" id="wrapper">
			<?php include("include/top-menu-index.php")  ?>
			
			<div class="slider">
			    <ul class="slides">
			      <li>
			        <img src="<cms:show prop_image />"/> 
			        <div class="caption center-align">
			          <h5 class="light grey-text text-lighten-3">Selamat datang di</h5>
			          <h4>Pejaten Jaya Kaca</h4>			          
			        </div>
			      </li>
			     <li>
			        <img src="<cms:show prop_image2 />"/>  			        
			      </li>
			       <li>
			        <img src="<cms:show prop_image3 />"/>			        
			      </li>
			      <li>
			        <img src="<cms:show prop_image4 />"/>			        
			      </li>
			      <li>
			        <img src="<cms:show prop_image5 />"/>			        
			      </li>
			    </ul>
			</div>

			<!-- Main Content -->
			<div class="bg-abstract">
				<div class="ip-main animations">
					<div class="home-wrapper">
						<div class="animatedParent" data-sequence='500'><h4 class="animated bounceIn slower" data-id='1'>About Us</h4></div>
						<div class="animatedParent">
							<div class="desc-about animated bounceInDown slower">
								<!-- <cms:show prop_desc />	 -->
								<cms:if my_lang='id'><cms:show prop_desc_id /></cms:if>
								<cms:if my_lang='en'><cms:show prop_desc_en /></cms:if>						
							</div>
						</div>
						<ul class="sosmed-icon-inline animatedParent">
			          		<li class="animated bounceInLeft slower"><a href="#"><i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i></a></li>          		
			          		<li class="animated bounceInUp slower"><a href="#"><i class="fa fa-google-plus fa-lg" aria-hidden="true"></i></a></li>
			          		<li class="animated bounceInRight slower"><a href="#"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a></li>
			          	</ul>

			         <div class="menu-bottom animatedParent">
			         	<div class="row clear-mbottom">
				         	<a href="service.php" class="animsition-link"><div class="col s6 relative center-align animated bounceInLeft slower">
				         		<img src="assets/img/BT Serv 3.png" class="hide-on-med-and-down">
				         		<img src="assets/img/BT Serv 3 S.png" class="hide-on-large-only">
				         	</div></a>
				         	<a href="product.php" class="animsition-link"><div class="col s6 center-align animated bounceInRight slower">
				         		<img src="assets/img/BT Prod 3.png" class="hide-on-med-and-down">
				         		<img src="assets/img/BT Prod 3 S.png" class="hide-on-large-only push-to-right">
				         	</div></a>
			         	</div>
			         	<div class="row clear-mbottom">
				         	<a href="projects.php" class="animsition-link"><div class="col s6 center-align animated bounceInLeft slower">
				         		<img src="assets/img/BT Proj 3.png" class="hide-on-med-and-down">
				         		<img src="assets/img/BT Proj 3 S.png" class="hide-on-large-only">
				         	</div></a>
				         	<a href="partner.php" class="animsition-link"><div class="col s6 center-align animated bounceInRight slower">
				         		<img src="assets/img/BT Partner 3.png" class="hide-on-med-and-down">
				         		<img src="assets/img/BT Partner 3 S.png" class="hide-on-large-only push-to-right">
				         	</div></a>
			         	</div>
			         </div>	
					</div>
				</div>
			</div>
			<!-- end Main Content -->

			<?php include("include/footer.php")  ?>
	    </div>
	</div>

	<script type="text/javascript" src="assets/js/jquery-2.1.1.min.js"></script>
	<script src='assets/js/animate.js'></script>				
	<script src="assets/js/classie.js"></script>
	<script src="assets/js/pathLoader.js"></script>
	<script src="assets/js/main.js"></script>
	<script type="text/javascript" src="assets/js/materialize.min.js"></script>
	<script type="text/javascript" src="assets/js/effect-onscroll.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
	      $('.slider').slider({
	      	full_width: true,
	      	height: 500
	      });
	       $("#nav-toggle").click(function(){
		  		$(".menu-mobile").slideToggle();
		  });
	    });
	    document.querySelector( "#nav-toggle" ).addEventListener( "click", function() {
		  this.classList.toggle( "active" );
		});

		
		
	</script>

	<script>
		function showResult(str) {
		  if (str.length==0) { 
		    document.getElementById("livesearch").innerHTML="";
		    document.getElementById("livesearch").style.border="0px";
		    return;
		  }
		  if (window.XMLHttpRequest) {
		    // code for IE7+, Firefox, Chrome, Opera, Safari
		    xmlhttp=new XMLHttpRequest();
		  } else {  // code for IE6, IE5
		    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		  xmlhttp.onreadystatechange=function() {
		    if (this.readyState==4 && this.status==200) {
		      document.getElementById("livesearch").innerHTML=this.responseText;
		      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
		    }
		  }
		  xmlhttp.open("GET","include/livesearch.php?q="+str,true);
		  xmlhttp.send();
		}
	</script>

	
</body>
</html>
<?php COUCH::invoke(); ?>