<?php
/**
 * New Post Administration Screen.
 *
 * @package WordPress
 * @subpackage Administration
 */

/** Load WordPress Administration Bootstrap */
require_once( dirname( __FILE__ ) . '/admin.php' );
require_once( ABSPATH . 'wp-admin/admin-header.php' );
global $wpdb;
$id=$_GET['id'];
$sql="select * from wp_index_temp where id=".$id;
$info=$wpdb->get_row($sql); 
?>
	<link rel="stylesheet" href="./color-picker/css/colorpicker.css" type="text/css" />
	<link rel="stylesheet" href="../wp-includes/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="../wp-includes/css/flat-ui.css" type="text/css" />
	<script type="text/javascript" src="./color-picker/js/colorpicker.js"></script>
    <script type="text/javascript" src="./color-picker/js/eye.js"></script>
    <script type="text/javascript" src="./color-picker/js/utils.js"></script>
    <script type="text/javascript" src="./color-picker/js/layout.js?ver=1.0.2"></script>
	<style>
		#btns{width:1000px;border:1px solid #dddddd;float:left;padding:15px;}
		#btns li{float:left;margin-left:20px}
	</style>
<div class="wrap">
<h2>设置首页模板</h2>
<form name="temp_info" action="set_index.php" method="post" target="" onsubmit="return postinfo()">
	<table border="0" width='1000'>
	<tr>
	<td>选择模板页面</td><td>
<select name="pagename" id="pagename">
<?php
 $pagelist= get_pages_list();

	foreach($pagelist as $row){
	?>
	<option value="<?php echo $row->ID;?>" <?php if($row->ID == $info->pagename){echo 'selected';}?>><?php echo $row->post_title;?></option>
<?php
}
;?>
</select>
	&nbsp;&nbsp;&nbsp;&nbsp;模块背景色<input type="text" value="<?php echo $info->bgcolor;?>" maxlength="6" size="6" id="colorpickerField4" />
</td>
</tr>
	<tr>
	<td>选择模板格式：</td>
	<td><select name="type" id="type">
		<option value='0'>请选择</option>
		<option <?php if($info->type==1){echo "selected";}?> value='1'>图上文下</option>
		<option <?php if($info->type==2){echo "selected";}?> value='2'>图下文上</option>
		<option <?php if($info->type==3){echo "selected";}?> value='3'>图左文右</option>
		<option <?php if($info->type==4){echo "selected";}?> value='4'>图右文左</option>
		<option <?php if($info->type==5){echo "selected";}?> value='5'>视频模块</option>
	</select>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;排序：<input type="text" name="order_num" id="order_num" value="<?php echo $info->order_num;?>" size="10" />
	</td>
	</tr>
	<tr>
	<td>标题【主】：</td><td><input type="text" name="title1" value="<?php echo $info->title1;?>" id="title1" size='60' /><input type="text" maxlength="6" size="6" id="colorpickerField1" value="<?php echo $info->title1_fontcolor;?>" /></td>
	</tr>
	</tr>

	<tr>
	<td>页内锚点链接：</td>
	<td><input type="text" name="mao" value="<?php echo $info->mao;?>" id="mao" size='30' />没有可不填
	</td>
	</tr>

	<tr>
	<td>标题【副】:</td><td><input type="text" name="title2" value="<?php echo $info->title2;?>" id="title2" size='60' /><input type="text" maxlength="6" size="6" id="colorpickerField2" value="<?php echo $info->title2_fontcolor;?>" /></td>
	</tr>
	<tr>
	<td>描述:</td><td><textarea name="description" id="description" style="width:521px"><?php echo $info->description;?></textarea><input type="text" maxlength="6" size="6" id="colorpickerField3" value="<?php echo $info->description_fontcolor;?>" /></td>
	</tr>
	<tr>
		<td colspan='2'>
<?php wp_editor( $post->post_content, 'content', array(
	'dfw' => true,
	'drag_drop_upload' => true,
	'tabfocus_elements' => 'insert-media-button,save-post',
	'editor_height' => 360,
	'tinymce' => array(
		'resize' => false,
		'add_unload_trigger' => false,
	),
) ); ?>

</td>		
	</tr>
	<tr>
		<td colspan=2><img src="<?php echo $info->pic;?>" height="200" /></td>
	</tr>
	<tr style="height:40px;line-height:40px;">
		<td>请选择图片类型：</td>
		<td>
		<select name="img_type" id="img_type" onchange="bg_wh()">
			<option value="img" <?php if($info->img_type=='img'){echo "selected";}?> /> 图片
			<option value="bg_img" <?php if($info->img_type=='bg_img'){echo "selected";}?> /> 背景图
		</select>
		</td>
	</tr>
	<tr>
		<td colspan='2' align="center">
		<input class="button button-primary button-large" type="button" id="addbtn" accesskey="p" value="添加按钮" onclick="add_btn()"> 
		<input type="hidden" name="btntype" id="btntype" value='<?php echo $info->btntype;?>' />
		</td>
	</tr>

	<tr>
		<td colspan="2">
			<div id="btn" style="<?php if($info->btntype=='0'){echo "display:none";}else{echo "display:inline";}?>">
				<ul>
					<li><span>标题：</span><input type="text" value="<?php echo $info->btn_title;?>" name="btn_title" id="btn_title" /></li>
					<li><span>链接：</span><input type="text" value="<?php echo $info->btn_link;?>" name="btn_link" id="btn_link" /></li>
					<li><span>链接打开方式：</span>
					<input type="radio" name="news_window" onchange="get_link_type(this)" value="1" <?php if($info->news_window==1){echo 'checked';}?> />新窗口
					<input type="radio" name="news_window" onchange="get_link_type(this)" value="0" <?php if($info->news_window==0){echo 'checked';}?> />原窗口
					<input type="hidden" id="news_window" value="<?php echo $info->news_window;?>" />
					</li>

					<li><span>按钮图片：</span></li>
					<li>
					<div id="btns" style="display:inline">
				<ul>
					<li>
						<input type="radio" name="btn_pic" value="btn-default" onclick="gei_btnpic_value(this)" checked />
						<button onclick="return false" class="btn btn-default mrs">Default</button>
					</li>
					<li>
					<input type="radio" name="btn_pic" value="btn-primary" class="btn_pic" onclick="gei_btnpic_value(this)"  />
					<button onclick="return false" class="btn btn-primary mrs">Primary</button>
					</li>
					<li>
					<input type="radio" name="btn_pic" value="btn-info" class="btn_pic" onclick="gei_btnpic_value(this)" />
					<button onclick="return false" class="btn btn-info mrs">Info</button>
					</li>
					<li>
					<input type="radio" name="btn_pic" value="btn-danger" class="btn_pic" onclick="gei_btnpic_value(this)" />
					<button onclick="return false" class="btn btn-danger mrs">Danger</button>
					</li>
					<li>
					<input type="radio" name="btn_pic" value="btn-success" class="btn_pic" onclick="gei_btnpic_value(this)" />
					<button onclick="return false" class="btn btn-success mrs">Success</button>
					</li>
					<li>
					<input type="radio" name="btn_pic" value="btn-warning" class="btn_pic" onclick="gei_btnpic_value(this)" />
					<button onclick="return false" class="btn btn-warning mrs">Warning</button>
					</li>
					<li>
					<input type="radio" name="btn_pic" value="btn-inverse" class="btn_pic" onclick="gei_btnpic_value(this)" />
					<button onclick="return false" class="btn btn-inverse mrs">Inverse</button>
					</li>
				</ul>
			</div>
					</li>
				</ul>
			</div>
		</td>
	</tr>
	</table>
	<input type="hidden" id="btn_pic" value="<?php echo $info->btn_pic;?>" name="btnpic" />
	<input type="hidden"  name="id" id="id" value="<?php echo $id;?>" />
	<input id="publish" class="button button-primary button-large" type="submit" accesskey="p" value="发布" name="publish" /><img src="./images/loading.gif" id="zhuan" style="display:none" />
</form>
</div>
<?php  

include( ABSPATH . 'wp-admin/admin-footer.php' );
?>

<script type="text/javascript" src="./js/jquery.js"></script>
<script type="text/javascript">
function postinfo(){
	var title1					=$("#title1").val();
	var id						=$("#id").val();
	var title2					=$("#title2").val();
	var pic						=$("#content").val();
	var type					=$("#type").val();
	var order_num				=$("#order_num").val();
	var description				=$("#description").val();
	var img_type				=$("#img_type").val();
	var bg_weight				=$("#bg_weight").val();
	var bg_height				=$("#bg_height").val();
	var colorpickerField1		=$("#colorpickerField1").val();
	var colorpickerField2		=$("#colorpickerField2").val();
	var colorpickerField3		=$("#colorpickerField3").val();
	var colorpickerField4		=$("#colorpickerField4").val();
	var pagename		=$("#pagename").val();
	
	var btntype				=$("#btntype").val();
	var btn_title			=$("#btn_title").val();
	var btn_link			=$("#btn_link").val();
	var btn_pic				=$("#btn_pic").val();
	var news_window			=$("#news_window").val();
	var mao			=$("#mao").val();
	if(type == 0){
		alert('类型不能为空！');
		return false;
		
	}
	var data={
		id					:id,
		title1				:title1,
		title2				:title2,
		pic					:pic,
		order_num			:order_num,
		description			:description,
		img_type			:img_type,
		bg_weight			:bg_weight,
		bg_height			:bg_height,
		colorpickerField1	:colorpickerField1,
		colorpickerField2	:colorpickerField2,
		colorpickerField3	:colorpickerField3,
		colorpickerField4	:colorpickerField4,
		pagename			:pagename,
		btntype			:btntype,
		btn_title		:btn_title,
		btn_link		:btn_link,
		btn_pic			:btn_pic,
		news_window		:news_window,
		mao		:mao,
		type:type
	}
		document.getElementById('zhuan').style.display="inline";
	 $.ajax({
		url: './set_index_edit.php',
		type:"POST",
		data:data,
		success:function(msg)
		{
			if(msg ==1){
				alert('编辑失败!');
				return false;
			}else{
				alert(msg);
				location.href="./set_index_temp_list.php";
			}
		}
	})
		return false;
}
</script>
<script type="text/javascript">
<!--
	
	function add_btn(){
		var btntype=$("#btntype").val();
		if(btntype == 0){
			document.getElementById("btn").style.display='inline';
			document.getElementById("btntype").value='1';
			document.getElementById("addbtn").value='取消按钮';
		}else if(btntype == 1){
			document.getElementById("btn").style.display='none';
			document.getElementById("btntype").value='0';
			document.getElementById("addbtn").value='添加按钮';
		}
	}

	function gei_btnpic_value(msg){
		var v=$(msg).val();
		$("#btn_pic").val(v);
	}
	
	function get_link_type(msg){
		var v=$(msg).val();
		$("#news_window").val(v);
	}
//-->
</script>
