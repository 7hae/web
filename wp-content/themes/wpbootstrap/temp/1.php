<div class="container">
<?php if($row->img_type == 'bg_img'){?>
<div class="col-md-12 bg_img">
	<img src="<?php echo $row->pic;?>" class="img-responsive" width="<?php echo $row->bg_weight;?>" height="<?php echo $row->bg_height;?>" />
</div>
<?php }?>
<?php if($row->img_type == 'img'){?>
<div class="col-lg-12" style="text-align:center;margin-top:120px;">
	<img src="<?php echo $row->pic;?>" class="img-responsive" alt="Responsive image" style="display:inline" />
</div>
<?php }?>
<div class="col-lg-12 bs-header" style="text-align:center;margin-top:50px;">
	<h1><?php echo $row->title1;?></h1>
	<?php 
		if($row->title2){
			echo '<h2 style="color:#aaa">'.$row->title2.'</h2>';
		}
	?>
	<p class="col-lg-10 col-lg-offset-1 description"><?php echo $row->description;?></p><br />
</div>
</div>