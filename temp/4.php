<div class="container" id="bg_img_parent" style="background-color:#<?php echo $row->bgcolor;?>">
<?php if($row->mao != ''){?>
<span id="<?php echo $row->mao;?>"></span>
<?php }?>
	<div class="col-lg-3 col-lg-offset-1 col-sm-10 col-sm-offset-1 <?php if($row->img_type == 'img'){echo 'bs-header4';}?>" <?php if($row->img_type == 'bg_img'){?>id="bg_content"<?php }?>>
		<h1 style="color:#<?php echo $row->title1_fontcolor;?>"><?php echo $row->title1;?></h1>
		<?php 
			if($row->title2){
				echo '<h2 style="color:#'.$row->title2_fontcolor.'">'.$row->title2.'</h2>';
			}
		?>
		<p class="description" style="color:<?php echo $row->description_fontcolor;?>"><?php echo $row->description;?></p>
		<?php if($row->btntype==1 && $row->btn_pic != ''){?>
			<a href="<?php echo $row->btn_link;?>" <?php if($row->news_window == 1){echo 'target="_blank"';}?>><button class="btn <?php echo $row->btn_pic;?> btn-lg"><?php echo $row->btn_title;?></button>
			</a>&nbsp;&nbsp;
			
		<?php }?>
	</p>
	</div>

	
	<?php if($row->img_type == 'bg_img'){?>
	<div class="col-lg-12"  style="text-align:center;" id="bg_img">
		<img thissrc="<?php echo $row->pic;?>" src="<?php echo get_template_directory_uri();?>/images/loading.jpg" width="100%" class="img-responsive" alt="Responsive image" style="display:inline" />
	</div>
	<?php }?>

	<?php if($row->img_type == 'img'){?>	
	<div class="col-lg-7 col-lg-offset-1 col-sm-12" style="text-align:center">
		<img thissrc="<?php echo $row->pic;?>" src="<?php echo get_template_directory_uri();?>/images/loading.jpg" class="img-responsive" alt="Responsive image" style="display:inline" />
	</div>
	<?php }?>
</div>
