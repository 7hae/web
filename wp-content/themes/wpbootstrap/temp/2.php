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
<?php if($row->img_type == 'bg_img'){?>
<div class="col-lg-12"  id="bg_img">
	<img src="<?php echo $row->pic;?>" width='1170' class="img-responsive" alt="Responsive image" style="display:inline" />
</div>
<?php }?>
<?php if($row->img_type == 'img'){?>
<div class="col-lg-12" style="text-align:center;margin-top:120px;">
	<img src="<?php echo $row->pic;?>" class="img-responsive" alt="Responsive image" style="display:inline" />
</div>
<?php }?>
</div>