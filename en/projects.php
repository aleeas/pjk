<?php require_once( 'admin/cms.php' ); ?>
<cms:template title='Projects' >
	<cms:editable name='project_image' label='Image' show_preview='1' desc='Upload image here' type='image'/>
</cms:template>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<?php include("include/header.php")  ?>
</head>
	<body class="layout-content">
		<div id="ip-container" class="ip-container animsition">
			
			<?php include("include/top-menu-other.php")  ?>
        	
			<!-- main content -->
			<div class="bg-abstract projects animations animatedParent">
				<div class="intro-products">
			    	<h4 class="animated bounceInLeft slower">PROYEK-PROYEK PJK</h4>
			    	<div class="row">
			    		<div class="product-container partner">
			    			<div class="col s12 animated growIn slowest">
			    				<img src="<cms:show project_image/>" width="100%">
			    			</div>			    			
			    		</div>
			    	</div>			    	
				</div>
				<div class="ip-main">
					<div class="row">
					<cms:repeatable name='my_multiple_link' >
						<cms:editable type='image' name='my_image' label='Photo' show_preview='1' preview_width='150' input_width='200' col_width='300' />
					    <cms:editable type='text' name='my_link' label='Links' />
					</cms:repeatable>

					<cms:repeatable name='my_multiple_link2' >
						<cms:editable type='image' name='my_image2' label='Photo' show_preview='1' preview_width='150' input_width='200' col_width='300' />
					    <cms:editable type='text' name='my_link2' label='Links' />
					</cms:repeatable>
					
					<ul class="list-projects">
						<cms:show_repeatable 'my_multiple_link' >
							<li><a href="<cms:show my_image />" rel="lightbox-<cms:show my_image/>">
							<cms:show my_link/></a></li>
						</cms:show_repeatable>
					</ul>

					<ul class="list-projects list-2">
						<cms:show_repeatable 'my_multiple_link2' >
							<li><a href="<cms:show my_image2 />" rel="lightbox-<cms:show my_image2/>">
							<cms:show my_link2/></a></li>
						</cms:show_repeatable>
					</ul>
					
   
					</div>
				</div>
				<div class="sticky-wrapper">
					<div id="sticky-anchor"></div>
					<ul class="sosmed-icon-line projects-sos" id="sticky">
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
		    	inClass:'fade-in-down',
		    	
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