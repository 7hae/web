<div class="container" id="bg_img_parent">
<div class="col-lg-12 bs-header" id="bg_content">
	<h1><?php echo $row->title1;?></h1>
	<?php 
			if($row->title2){
				echo '<h2 style="color:#aaa">'.$row->title2.'</h2>';
			}
		?>
	<p class="col-lg-10 col-lg-offset-1 description"><?php echo $row->description;?></p><br />
</div>
<div class="col-lg-12"  id="bg_img">
	<video src="<?php echo $row->pic;?>" id="video" loop="loop" autoplay></video>
</div>
</div>
