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
<cms:template title='Services' >
	<cms:editable name='serv_desc_id' label='Description Indonesia' desc='Enter description of property here' type='richtext' />
	<cms:editable name='serv_desc_en' label='Description English' desc='Enter description of property here' type='richtext' />
	<cms:editable name='serv_image' label='Image' width='275' show_preview='1' desc='Upload image here' type='image' />
</cms:template>
<cms:set my_lang = "<cms:php>global $selected_lang; echo $selected_lang;</cms:php>" 'global' />
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
	<?php include("include/header.php")  ?>
	</head>
	<body class="layout-content">
		<div id="ip-container" class="ip-container animsition">
			
			<?php include("include/top-menu-other.php")  ?>
        	
			<!-- main content -->
			<div class="bg-abstract services animations">
				<div class="intro-products animatedParent">
			    	<h4 class="animated bounceInDown slower">LAYANAN KAMI</h4>
			    	<div class="row">
			    		<div class="product-container">
			    			<div class="col s7 l6 right-align top-text animated bounceInLeft slower">
			    				<cms:if my_lang='id'><cms:show serv_desc_id /></cms:if>
								<cms:if my_lang='en'><cms:show serv_desc_en /></cms:if>	
			    			</div>
			    			<div class="col s5 l6 left-align top-img animated bounceInRight slower">
			    				<img src="<cms:show serv_image />"/>
			    			</div>
			    		</div>
			    	</div>
				</div>
				<div class="ip-main ">
					<div class="row animatedParent">
						<ul class="service-prod-1" >
							<li class="animated bounceInUp slowest repeat"><a href="service/serv-kusen.php"><img src="assets/img/Kusen 1.png"><span>KUSEN</span></a></li>
							<li class="animated bounceInDown slowest repeat"><a href="service/serv-facade.php"><img src="assets/img/Facade 1.png"><span>FACADE CURTAIN WALL</span></a></li>
							<li class="animated bounceInLeft slowest repeat"><a href="service/serv-canopy.php"><img src="assets/img/Canopy 1.png"><span>CANOPY KACA</span></a></li>
							<li class="animated bounceInRight slowest repeat"><a href="service/serv-cladding.php"><span>CLADDING ALUMUNIUM COMPOSITE PANEL</span><img src="assets/img/Cladding 1.png"></a></li>
							<li class="animated bounceInUp slowest repeat"><a href="service/serv-railing.php"><span>RAILING STAINLESS STEEL</span><img src="assets/img/Railing 1.png"></a></li>
							<li class="animated bounceInDown slowest repeat"><a href="service/serv-plafon.php"><span>PLAFON &amp; PARTISI GYPSUM</span><img src="assets/img/Plafon 1.png"></a></li>
						</ul>		         
					</div>
				</div>
				<div class="sticky-wrapper">
					<div id="sticky-anchor"></div>
					<ul class="sosmed-icon-line services-sos" id="sticky">
		          		<li><a href="#"><i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i></a></li>          		
		          		<li><a href="#"><i class="fa fa-google-plus fa-lg" aria-hidden="true"></i></a></li>
		          		<li><a href="#"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a></li>
		          	</ul>
	          	</div>
			</div>

			<?php include("include/footer.php")  ?>
			<!-- end main content -->

		</div><!-- /container -->
		<script type="text/javascript" src="assets/js/jquery-2.1.1.min.js"></script>
		<script src='assets/js/animate.js'></script>
		<script src="assets/js/classie.js"></script>
		<script src="assets/js/pathLoader.js"></script>
		<script src="assets/js/main.js"></script>
		<script type="text/javascript" src="assets/js/materialize.min.js"></script>
		<script type="text/javascript" src="assets/js/effect-onscroll.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
		      
		       $("#nav-toggle").click(function(){
    		  		$(".menu-mobile").slideToggle();
    		  });

		       function sticky_relocate() {
				    var window_top = $(window).scrollTop();
				    var div_top = $('#sticky-anchor').offset().top;
				    if (window_top > div_top) {
				        $('#sticky').addClass('stick');
				        $('#sticky-anchor').height($('#sticky').outerHeight());
				    } else {
				        $('#sticky').removeClass('stick');
				        $('#sticky-anchor').height(0);
				    }
				}

				$(function() {
				    $(window).scroll(sticky_relocate);
				    sticky_relocate();
				});
		    });
		    document.querySelector( "#nav-toggle" ).addEventListener( "click", function() {
			  this.classList.toggle( "active" );
			});
			
		</script>

		<script src="assets/js/animsition.min.js" charset="utf-8"></script>
		<script>
		  $(document).ready(function() {
		    $('.animsition').animsition({
		    	inClass:'zoom-in',
		    	
		    })
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

		<script type="text/javascript">
			var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
			(function(){
			var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
			s1.async=true;
			s1.src='https://embed.tawk.to/57d37efdc465436c8cdfae16/default';
			s1.charset='UTF-8';
			s1.setAttribute('crossorigin','*');
			s0.parentNode.insertBefore(s1,s0);
			})();
		</script>

	</body>
</html>
<?php COUCH::invoke(); ?>