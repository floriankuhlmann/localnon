<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

function prepareName($dirname) {
	$artistnames = explode("_", $dirname);
	foreach ($artistnames as $artistname) {
		
		echo ucfirst(strtolower($artistname))." ";		
	}
	
}

?>
<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >

<head>
  <meta charset="utf-8">
  <!-- If you delete this meta tag World War Z will become a reality -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $pagetitle; ?> by <?php echo $artistname; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/normalize.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/foundation.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/localnonsculpture.css"/>
  <script src="<?php echo base_url();?>assets/js/vendor/modernizr.js"></script>
  <script src="<?php echo base_url();?>assets/js/vendor/placeholder.js"></script>
  <script src="<?php echo base_url();?>assets/js/vendor/fastclick.js"></script>
	
</head>
<body>
	<div class="contain-to-grid sticky">

		<nav class="top-bar" data-topbar role="navigation">
			<ul class="title-area">
			  <li class="name">
				  <p><a href="<?php echo base_url();?>local/showall">#LocalNonSculpture</a></p>
			  </li>
			   <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
			  <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
			</ul>
			<section class="top-bar-section">
				<!-- Right Nav Section -->
				<ul class="right">
					<li class="has-dropdown">
						<a href="<?php echo base_url();?>local/showall">All artists</a>
						<ul class="dropdown">
							<?php 
								$i = 0;
								foreach ($map as $k => $dirname) { 
							?>
							<li><a href="<?php echo base_url();?>local/<?php echo $k ?>"><?php echo prepareName($k)?></a></li>
							<?php 	
									$i++;
							} ?>
						</ul>
					</li>
				</ul>
			  <!-- Left Nav Section -->
			</section>
		</nav>
		
	</div>
<div class="container">

	<div class="row">
		<div class="medium-10 medium-offset-1 small-10 small-offset-1 columns margin-bottom-10-em">
			<h1 class="text-center"><?php echo prepareName($artistnamewithunderscore)?></h1>
			<h1 class="text-center"><?php echo $title ?></h1>
		</div>
	</div>
	<div class="row">
		<div class="medium-10 medium-offset-1 small-10 small-offset-1 columns margin-bottom-5-em">
			<p class="text-center">
				<?php 
				 foreach ($artfiles as $artfile) {
				?>
				<a href="<?php echo base_url();?>assets/artwork/<?php echo $artistnamewithunderscore.'/gif/'.$artfile;?>"><img src="<?php echo base_url();?>assets/artwork/<?php echo $artistnamewithunderscore.'/gif/'.$artfile;?>"></a>				 	 
				 <?php }?>
				
			</p>
		</div>
	</div>
	<div class="row">
		<div class="medium-10 medium-offset-1 small-10 small-offset-1 columns margin-bottom-5-em text-center">
				<?php echo $description ?>	
		</div>
	</div>

</div><!-- ende .container -->

  <script src="<?php echo base_url();?>assets/js/vendor/jquery.js"></script>
  <script src="<?php echo base_url();?>assets/js/foundation/foundation.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/foundation/foundation.topbar.js"></script>
  <!-- Other JS plugins can be included here -->

  <script>
    $(document).foundation({
		reveal : {
			animation_speed: 500
		},
		topbar : {
			custom_back_text: false,
			is_hover: false,
			mobile_show_parent_link: false,
			back_text: '< Back',
		}
	});
  </script>
</body>
</html>