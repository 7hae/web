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
			<a href="<?php if($row->btn_link == ''){echo 'javascript:void()';}else{echo $row->btn_link;}?>"<?php if($row->btn_link == ''){echo 'onclick="show_info(this)"';}?> <?php if($row->news_window == 1){echo 'target="_blank"';}?>>
			<button class="btn <?php echo $row->btn_pic;?> btn-lg"><?php echo $row->btn_title;?></button>
			</a>&nbsp;&nbsp;
			<?php if($row->btn_link == ''){?>
			<div class="popover fade right in col-lg-12" style="top: 184px; left: 76.15px; display: none;">
				<div class="arrow" style="top: 26.453%;"></div>
				<div class="popover-content">世界中医药联合会脉象研究专业委员会名誉会长。创立S中医，对中医学做出五项创新贡献，如使中医变为人人都能学会、且效果明显的自我保健法宝。这些贡献具有里程碑意义.</div>
			</div>
			<?php }?>
		<?php }?>
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
