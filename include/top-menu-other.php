
<div class="row" style="margin-bottom:60px;">
	<nav class="shades black nav-down" role="navigation">
	    <div class="nav-wrapper container">
	      <a id="logo-container" href="index.php" class="brand-logo">
	      	 <?php include('logo.php'); ?>   		      		      	
	      </a>
	      <div class="relative left">
		      <div class="search-box">
		      	<?php include('searchbox.php'); ?>
		      </div>
		      <div class="switch-lang content-product">
		      	<!-- <a href="#!"><span id="ind">Ind</span></a>
		      	<a href="#!"><span id="eng">Eng</span></a> -->
		      	<cms:php>
			      global $accepted_langs, $selected_lang;
			      foreach( $accepted_langs as $lang ){
			         $selected_class = ( $lang==$selected_lang ) ? ' selected' : '';
			         echo'<span class="'.$lang.$selected_class.'"><a href="<cms:show k_admin_link />switch.php?lang='.$lang.'&redirect='.urlencode($_SERVER["REQUEST_URI"]).'"><span>'.strtoupper($lang).'</span></a></span>';
			      }
			 	</cms:php>
		      </div>
	      </div>	    		      
	      <?php include('menu.php'); ?>  
	      <a href="#" data-activates="nav-mobile" class="button-collapse" id="nav-toggle"><span></span></a>
	    </div>
	    <div class="menu-mobile" style="display:none">
	    	<?php include('menu-mobile.php'); ?>  
	    </div>
	</nav>
</div>