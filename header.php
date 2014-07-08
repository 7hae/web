<html>
<head>

<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0" />
<!-- Bootstrap -->
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
<script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
</head>
<style>
	body{font-family:"Microsoft YaHei";}
</style>
<body>
<div class="container">
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
<a class="navbar-brand" href="/8h"><img src='<?php echo get_template_directory_uri();?>/images/logo.png' thissrc="<?php echo get_template_directory_uri();?>/images/logo.png" height='40' /></a>		
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
<?php wp_list_pages(array('title_li' => '')); ?>	
</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>

