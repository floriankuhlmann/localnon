<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

function borderOpenCssClass($i)
{
	echo ($i & 1)?"medium-10 medium-offset-1 small-10 small-offset-1 border-left-open margin-bottom-10-em":"medium-10 medium-offset-1 small-10 small-offset-1 border-right-open margin-bottom-10-em";
}

function prepareName($dirname) {
	$artistnames = explode("_", $dirname);
	foreach ($artistnames as $artistname) {
		
		echo ucfirst(strtolower($artistname))." ";		
	}
	
}
$this->load->helper('directory');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>LOCAL NON SCULPTURE</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/normalize.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/foundation.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/localnonsculpture.css"/>
</head>
<body class="showall">
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
		<div class="medium-8 medium-offset-2 small-10 small-offset-1 margin-bottom-10-em">
			<hr class="green">
		</div>
		<div class="medium-8 medium-offset-2 small-10 small-offset-1 margin-bottom-10-em">
			<h1 class="text-center green">YOU GOT ACCESS TO THE WORK OF</h1>
		</div>
		<div class="medium-8 medium-offset-2 small-10 small-offset-1 margin-bottom-10-em">
			<hr class="green">
		</div>
		
		
	<?php 
	$i = 0;
	foreach ($map as $k => $dirname) { ?>		
		<div class=" <?php borderOpenCssClass($i);?>">
			<a href="<?php echo base_url();?>local/<?php echo $k ?>" class="show"><h1 class="text-center green"><?php echo prepareName($k)?></h1></a>
		</div>
		<div class="medium-8 medium-offset-2 small-10 small-offset-1 margin-bottom-10-em">
			<hr class="green">
		</div>
	<?php 	
	$i++;
	} ?>
		<div class="medium-10 medium-offset-1 small-10 small-offset-1 columns margin-bottom-5-em">
			<p class="text-center">Idea & concept by<br><a href="http://www.floriankuhlmann.com">Florian Kuhlmann</a></p>
		</div>
		
	</div>
</div><!-- ende .container -->

  <script src="<?php echo base_url();?>assets/js/vendor/jquery.js"></script>
  <script src="<?php echo base_url();?>assets/js/foundation/foundation.js"></script>
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