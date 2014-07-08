<?php get_header(); ?>
<?php
	global $wpdb;
	$pagename=$_GET['page_id'];
	$sql='select * from wp_index_temp where pagename='.$pagename.' order by `order_num` asc';
	$content=$wpdb->get_results($sql);
	foreach($content as $k=>$row){
		$filename=$row->type.'.php';
		include(dirname(__FILE__).'/temp/'.$filename);
	}
?>
<?php if(count($content) == 0){?>
<?php while ( have_posts() ) : the_post(); ?>
	<div class="container page_content" style="margin-top:150px;padding:0 150px">
		<?php the_content(); ?>
	</div>
<?php endwhile; ?>
<?php }?>


<?php get_footer(); ?>
