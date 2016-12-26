<?php require_once( '../admin/cms.php' ); ?>
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
<cms:template title='Service Facade' clonable='1' dynamic_folders='1' gallery='1'>
   <cms:editable 
      name='gg_image' 
      label='Image' 
      desc='Upload your main image here'
      width='500'
      height='500'
      show_preview='1'
      preview_height='200'
      type='image'
   />
   
   <cms:editable 
      name='gg_thumb' 
      label='Image Thumbnail' 
      desc='Thumbnail of the main image above'
      width='275'
      height='176'
      enforce_max='1'
      assoc_field='gg_image' 
      show_preview='1'
      type='thumbnail'
   />  

   <cms:editable 
      name='my_thumb_2' 
      label='Image Thumbnail 2' 
      desc='Second thumbnail of the main image above'
      width='275'
      height='176'
      assoc_field='gg_image' 
      show_preview='1'
      type='thumbnail'
   />  
   
   <cms:editable 
      name='my_desc' 
      label='Description' 
      height='60'
      type='textarea'
   />
               
</cms:template>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<?php include("../include/header-sub.php")  ?>
		<script type="text/javascript" src="<cms:show k_admin_link />includes/jquery.min-1.5.1.js"></script>
   		<script type="text/javascript" src="<cms:show k_site_link />assets/slimbox/js/slimbox2.js"></script>
	    <link rel="stylesheet" href="<cms:show k_site_link />assets/slimbox/css/slimbox2.css" type="text/css" media="screen" />		
	</head>
	<body class="layout-content">
		<div id="ip-container" class="ip-container">
			
			<?php include("../include/top-menu-sub.php")  ?>
        	
			<!-- main content -->
			<div class="bg-abstract partner services facade">
				<div class="intro-products">
			    	<h4>Layanan Kami</h4>
			    	<div class="row">
			    		<div class="container">
			    			<div class="col s12 l9 m6 m-pd">
			    				<div class="img-service left">
			    					<img src="../assets/img/Facade Icon.png" width="200">
			    				</div>
			    				<div class="desc-service left white-text">
			    					<h5>Facade Curtain Wall</h5>
			    					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			    					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			    					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			    					consequat.</p>
			    				</div>
			    			</div>
			    			<div class="col s12 l3 m3 backtocat">
			    				<a href="../service.php">Kembali ke Kategori</a>
			    			</div>
			    		</div>
			    	</div>

			    	<div class="row">
			    		<div class="container">
			    			<div id="gallery-wrapper">
							   
							   <cms:if k_is_list>
							      
							      <!-- gallery folders --> 
							      							      
							      <cms:set my_page="<cms:gpc 'pg' method='get' />" />
							      <cms:if my_page lt '2' >
							         <ul class="gallery folders"> 
							            <cms:folders childof=k_folder_name hierarchical='1' depth='1'>
							            
							               <cms:set my_folder_image="" />
							               <cms:if k_folder_image>
							                  <cms:set my_folder_image=k_folder_image />
							               <cms:else />
							                  <cms:pages folder=k_folder_name include_subfolders='0' limit='1'>
							                      <cms:set my_folder_image=my_thumb_2 scope='parent' />
							                  </cms:pages>
							               </cms:if>
							               <cms:if my_folder_image=''><cms:set my_folder_image="<cms:show k_admin_link />theme/images/empty-folder.gif" /></cms:if>
							               
							               <li>
							                  <a href="<cms:show k_folder_link />">
							                     <img alt="<cms:show k_folder_title />" src="<cms:show my_folder_image />"/>
							                     <span class="title"><cms:show k_folder_title /></span>
							                     <span class="count_images"><cms:show k_folder_totalpagecount /> images</span>
							                     <span class="count_folders"><cms:show k_folder_totalchildren /> folders</span>
							                  </a>
							               </li>
							            </cms:folders> 
							         </ul>   
							      </cms:if>
							      
							      <!-- gallery images-->
							      <ul class="gallery">
							         <cms:pages folder=k_folder_name include_subfolders='0' limit='12' paginate='1'>
							            <li class="col s12 l3 m4">
							               <a href="<cms:show gg_image />" rel="lightbox-<cms:show k_page_foldername/>" <cms:if my_desc>title="<cms:show my_desc/>"</cms:if>>
							                  <img alt="<cms:show k_page_title />" src="<cms:show my_thumb_2 />"/>
							               </a>
							               <div class="caption-text">
							               	  <h5><cms:show k_page_title /></h5>
							               	  <span><cms:show my_desc/></span>
							                </div>
							            </li>
							            
							            <cms:if k_paginated_bottom >
							               <div style="clear:both"><cms:paginator /></div>   
							            </cms:if>
							            
							         </cms:pages>
							      </ul>
							  
							   <cms:else /><!-- k_is_page -->   
							      
							      <div id="image_container">
							         <img alt="<cms:show k_page_title />" src="<cms:show gg_image />"/>
							      </div>
							      
							   </cms:if>

							</div>
			    		</div>
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

			<?php include("../include/footer.php")  ?>
			<!-- end main content -->

		</div><!-- /container -->
		<script type="text/javascript" src="../assets/js/jquery-2.1.1.min.js"></script>				
		<script type="text/javascript" src="../assets/lib/jquery.mousewheel-3.0.6.pack.js"></script>
		<script type="text/javascript" src="../assets/source/jquery.fancybox.js?v=2.1.5"></script>
		<script type="text/javascript" src="../assets/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>	
		<script type="text/javascript" src="../assets/js/materialize.min.js"></script>
		<script type="text/javascript" src="../assets/js/effect-onscroll.js"></script>
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
			  xmlhttp.open("GET","../include/livesearch.php?q="+str,true);
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