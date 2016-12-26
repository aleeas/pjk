<?php require_once( 'admin/cms.php' ); ?>
<cms:template title='Contact Us' ></cms:template>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<?php include("include/header.php")  ?>
</head>
	<body class="layout-content">
		<div id="ip-container" class="ip-container animsition">
			
			<?php include("include/top-menu-other.php")  ?>
        	
			<!-- main content -->
			<div class="bg-abstract contacts animations ">
				<div class="intro-products">			    	
			    	<div class="row animatedParent">
			    		<div class="container">
			    			<h4 class="animated bounceInLeft slower">HUBUNGI KAMI</h4>
			    			<div class="col s12 l6 m6 form-contact animated bounceInDown slower">
			    				<cms:editable name='contact_intro' label='Introductory text' type='richtext'>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel porta erat. Quisque sit amet risus at odio pellentesque sollicitudin. Proin suscipit molestie facilisis. Aenean vel massa magna. Proin nec lacinia augue. Mauris venenatis libero nec odio viverra consequat. In hac habitasse platea dictumst.</p>
								</cms:editable>
			    				<cms:form action='' method='post' id='contact_form' style="width:80%">
							      <div class="row">
							        <div class="input-field col s12">
							          <cms:input type='text' name='name' id='name' required='1' placeholder="Name"/>
							          <label for="name">Name *</label>
							          <div class="clearfix"></div>
										<cms:if k_error_name>
											<p id='name_error' class='error' style="display:block">Insert a Name</p>
										</cms:if>
							        </div>							        
							      </div>							      
							      
							      <div class="row">
							        <div class="input-field col s12">
							         <cms:input type='text' name='email' id='email' required='1' validator='email' placeholder="Email" />
							          <label for="email">Email Address *</label>
							          <div class="clearfix"></div>
										<cms:if k_error_email>
											<p id='email_error' class='error' style="display:block">Enter a valid email address</p>
										</cms:if>
							        </div>
							      </div>

							      <div class="row">
							        <div class="input-field col s12">
							          <cms:input type='text' name='subject' id='subject' required='1' placeholder="Subject"/>
							          <label for="subject">Subject</label>
							          <div class="clearfix"></div>
										<cms:if k_error_subject>
											<p id='subject_error' class='error' style="display:block">Enter a message subject</p>
										</cms:if>
							        </div>
							      </div>

								  <div class="row">
							        <div class="input-field col s12">
										<cms:input type='textarea' name='message' id='message' required='1' rows="30" cols="30" class="materialize-textarea" placeholder="Message"></cms:input>
	          							<label for="message">Message</label>
	          							<div class="clearfix"></div>
										<cms:if k_error_message>
											<p id='message_error' class='error' style="display:block">Enter a message</p>
										</cms:if>
							        </div>
							      </div>
								  <div class="row">
							        <div class="input-field col s12">
							        	<cms:if k_success >	
											<p id='mail_success' class='success' style="display:block">Thank you. I'll get back to you as soon as possible.</p>
											
											<cms:send_mail from=k_email_from to=k_email_to subject='Feedback from your site'>
												The following is an email sent by a visitor to your site:
												<cms:show k_success />
											</cms:send_mail>
										</cms:if>
										<div id="button">
											<input type='submit' id='send_message' class="btn" value='Submit' />
										</div>
							        </div>
							       </div>
							    </cms:form> 
			    			</div>
			    			<div class="col s12 l6 m6 icon-contact animated bounceInRight slower">
			    				<img src="<cms:editable name='contact_image' label='Image' show_preview='1' desc='Upload image here' type='image' />" width="420">
			    				<div>
			    					<h4>WORKSHOP KAMI</h4>
			    					<p class="grey-text text-lighten-4">Jl. Raya Pejaten No. 14, Pasar Minggu, Jakarta Selatan <br> Telp. : 021 79199651, 7940124, 79181336 Fax. : 021 7987527 <br> Email : aloy_pjk@hotmail.com </p>
			    				</div>
			    			</div>
			    		</div>
			    	</div>
				</div>
				<div class="clearfix"></div>
				<div class="row maps-image">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.8844581118883!2d106.83087261418822!3d-6.278917895455435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f2162e3c4e1d%3A0x76c974291687325e!2sPejaten+Jaya+Kaca!5e0!3m2!1sen!2sid!4v1474856490436" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
					
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
		      $('input#input_text, textarea#message').characterCounter();
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
		    	inClass:'fade-in-up',
		    	
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