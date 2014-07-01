</div><!-- Ends Container -->

<div class="container news">

<div class="cols-lg-12" style="text-align:center;font-size:20px">		
<a href="#" id="top-return">			
<?php _e ('^Top', 'newsframe' ); ?>		
</a>	
</div>

<div class="col-lg-12">
<?php global $newsframe_options; $newsframe_settings = get_option( 'newsframe_options', $newsframe_options ); ?>

<ul id="footermenu">
	<?php wp_nav_menu( array( 'theme_location' => 'bottom-menu' ) ); ?>
</ul>
	<br /><br /><br />
<small>&copy; <?php echo date('Y'); ?> - <?php bloginfo('name'); ?></small><br>

</div><br />
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/bootstrap/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

<script language="javascript">
imgs = document.getElementsByTagName("img");
imgsnum = imgs.length;
for(imgi = 0 ;imgi < imgsnum;imgi++){
     if (imgs[imgi].className != 'img-responsive'){
        imgs[imgi].className += ' img-responsive';
	 }
}
</script>
