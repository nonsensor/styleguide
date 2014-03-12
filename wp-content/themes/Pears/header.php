<?
	if(isset($_COOKIE['style'])) {
		$style = $_COOKIE['style'];
	}
	else {
		$style = "direct";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>D&B UX Guide <?php wp_title('/', true, 'left'); ?></title>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Open+Sans:400italic,400,700' rel='stylesheet' type='text/css'>
<!-- hide css from IE6 but load for everyone else -->
<!--[if gte IE 7]><!-->
<link rel="stylesheet/less" media="screen, projection" href="<?php echo get_template_directory_uri(); ?>/css/screen.less" />
<link rel="stylesheet/less" media="screen, projection" href="/dnb-ui-lib/src/less/styles-<?=$style?>.less" />
<!-- <![endif]-->

<link rel="shortcut icon" href="/favicon.png" /> 

<style type="text/css">
	.brand-header {
		margin-bottom: 20px;
	}
	.logo {
		<? switch ($style) { 
			case "direct":
		?>
				width: 52px;
				height: 52px;
				border: 1px solid #fff;
				background: url(<?php echo get_template_directory_uri();?>/images/logo-dnb.gif) 0 0 no-repeat;
		<? 
				break;
			case "hoovers": ?>
				width: 100px;
				height: 72px;
				background: url(<?php echo get_template_directory_uri();?>/images/logo-hoovers.png) 0 0 no-repeat;
		<?		break;
		} ?>
		float: left;
		margin: 10px;
	}
</style>

<!-- enable HTML5 elements in IE7+8 -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.6.3/less.min.js"></script>
</head>
<body <?php body_class(); ?>>
	<div class="brand-header">

		<div id="switcher">
			<a href="/change-style.php/?brand=direct">D&B Direct</a> | <a href="/change-style.php/?brand=hoovers">Hoovers</a>
		</div>

	    <div class="logo"></div>
	    <div class="row">
	      <h1><small>Style Guide</small></h1>
	    </div>
	</div>

<div class="wrap group">
	<div class="main" role="main">
