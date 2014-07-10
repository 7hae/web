<div class="container" style="font-size:12px;margin-top:80px">
	<?php get_sidebar( 'main' ); ?>
</div>
<div class="container" style="text-align:center;margin-bottom:40px;">
	<p style="color:#aaaaaa;" class="col-xs-12 col-lg-12">ICP © 2014 北京上医养生有限公司 版权所有（备案号：京ICP备11039644号)</p>
</div>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/bootstrap/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/bootstrap/js/grumble.js"></script>
<p id="back-to-top"><a href="#top"><span></span></a></p> 
</body>
</html>
<script language="javascript">
imgs = document.getElementsByTagName("img");
imgsnum = imgs.length;
for(imgi = 0 ;imgi < imgsnum;imgi++){
     if (imgs[imgi].getAttribute('thissrc') != '' && imgs[imgi].getAttribute('thissrc') != null){
		 imgs[imgi].src = imgs[imgi].getAttribute('thissrc');
	 }
}
</script>
<script language="javascript" type="text/javascript">
	aside = document.getElementsByTagName("aside");
	asidesnum = aside.length;
	for(i = 0 ;i < asidesnum;i++){
		if(i == 0){
			aside[i].className ='col-lg-2 col-xs-6 col-sm-3 col-lg-offset-1 clearfix visible-xs';
		}else{
			aside[i].className ='col-lg-2 col-xs-6 col-sm-3 clearfix visible-xs';
		}
	}
</script><script type="text/javascript">
<!--
	var footer_menu2=document.getElementById('menu-footer_menu2');
	yq=footer_menu2.getElementsByTagName('a');
	yqs=yq.length;
	for(i = 0 ;i < yqs;i++){
		$(yq[i]).attr("target","_blank");
	}
//-->
</script>
<script>
$(function(){
	//当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失
	$(function () {
		$(window).scroll(function(){
			if ($(window).scrollTop()>100){
				$("#back-to-top").css('display','block');
			}
			else
			{
				$("#back-to-top").css('display','none');
			}
		});

		//当点击跳转链接后，回到页面顶部位置

		$("#back-to-top").click(function(){
			$('body,html').animate({scrollTop:0},1000);
			return false;
		});
	});
});
</script>

<script type="text/javascript">
	var hide=false;
	var change
	 function show_info(msg){
		var next_doc=$(msg).next();
		var status=$(next_doc).css('display');
		if(status == 'none'){
			$(next_doc).css('display','block');
		}
		if(hide == false){
		change=setInterval("change_hide()",500);
		}
	 }

	function change_hide(){
		hide=true;
		clearInterval(change);
	}
	
	$(".container").click(function(){
		if(hide == true){
			$(".popover").css('display','none');
		}
		hide=false;
	})
</script>

