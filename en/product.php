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
<cms:template title='Product' >
	<cms:editable name='prod_desc_id' label='Description' desc='Enter description of property here' type='richtext' />
	<cms:editable name='prod_desc_en' label='Description' desc='Enter description of property here' type='richtext' />
	<cms:editable name='prod_image' label='Image' width='275' show_preview='1' desc='Upload image here' type='image' />
</cms:template>
<cms:set my_lang = "<cms:php>global $selected_lang; echo $selected_lang;</cms:php>" 'global' />
<!DOCTYPE html>
<html>
<head>
	<?php include("include/header.php")  ?>
</head>
<body class="layout-content">
	<div id="ip-container" class="ip-container animsition">
		<?php include("include/top-menu-other.php")  ?>
					
		<div class="bg-abstract products animations">
				<div class="intro-products">
			    	<div class="animatedParent"><h4 class="animated bounceInLeft slower">PRODUK-PRODUK PJK</h4></div>
			    	<div class="row">
			    		<div class="product-container animatedParent">
			    			<div class="col s7 l6 right-align top-text animated bounceInLeft slower">
			    				<cms:if my_lang='id'><cms:show prop_desc_id /></cms:if>
								<cms:if my_lang='en'><cms:show prop_desc_en /></cms:if>
			    			</div>
			    			<div class="col s5 l6 left-align top-img animated bounceInRight slower">
			    				<img src="<cms:show prod_image />" />  
			    			</div>
			    		</div>
			    	</div>
				</div>
				<div class="ip-main">
					<div class="row">
						<div class="category-product">
							<h6>Pilih Kategori</h6>
							<div class="product-icon">
								<ul class="prod-icon animatedParent">
									<li class="animated bounceIn slowest"><a href="product/prod-kaca.php"><img src="assets/img/Kaca Icon.png"> 
										<div class="text-prod-icon">Kaca</div></a></li>
									<li class="animated bounceInUp slowest"><a href="product/prod-alumunium-btg.php"><img src="assets/img/Alum btg Icon.png">
										<div class="text-prod-icon">Alumunium Batang</div></a></li>
									<li class="animated bounceInRight slowest"><a href="product/prod-alumunium-lbr.php"><img src="assets/img/Alum Lbr Icon.png"> 
										<div class="text-prod-icon">Alumunium Lembar</div></a></li>
									<li class="animated bounceInLeft slowest"><a href="product/prod-acc.php"><img src="assets/img/Acc Icon.png"> 
										<div class="text-prod-icon">Aksesoris</div></a></li>
									<li class="animated bounceInRight slowest"><a href="product/prod-etc.php"><img src="assets/img/Lain-lain Icon.png"> 
										<div class="text-prod-icon">Lain-lain</div></a></li>
								</ul>
							</div>
						</div>		         
					</div>
				</div>
				<div class="sticky-wrapper">
					<div id="sticky-anchor"></div>
					<ul class="sosmed-icon-line" id="sticky">
		          		<li><a href="#"><i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i></a></li>          		
		          		<li><a href="#"><i class="fa fa-google-plus fa-lg" aria-hidden="true"></i></a></li>
		          		<li><a href="#"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a></li>
		          	</ul>
	          	</div>
		</div>

		<?php include("include/footer.php")  ?>
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
	    	inClass:'fade-in-right-lg',
	    	
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