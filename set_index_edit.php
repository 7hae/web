<?php
/**
 * New Post Administration Screen.
 *
 * @package WordPress
 * @subpackage Administration
 */

/** Load WordPress Administration Bootstrap */
require_once( dirname( __FILE__ ) . '/admin.php' );
global $wpdb;
$id			=$_POST['id'];
$pic		=$_POST['pic'];
$type		=$_POST['type'];
$order_num	=$_POST['order_num'];
$title1		=$_POST['title1'];
$title2		=$_POST['title2'];
$description=$_POST['description'];
$img_type	=$_POST['img_type'];
$bg_weight	=$_POST['bg_weight'];
$bg_height	=$_POST['bg_height'];

$title1_fontcolor=$_POST['colorpickerField1'];
$title2_fontcolor=$_POST['colorpickerField2'];
$bgcolor=$_POST['colorpickerField4'];
$pagename	=$_POST['pagename'];

$btntype		=$_POST['btntype'];
$btn_title		=$_POST['btn_title'];
$btn_link		=$_POST['btn_link'];
$btn_pic		=$_POST['btn_pic'];
$description_fontcolor=$_POST['colorpickerField3'];
$sql="update wp_index_temp set title1='$title1',title2='$title2',type=$type,order_num=$order_num,description='$description',img_type='$img_type',bg_weight='$bg_weight',bg_height='$bg_height',title1_fontcolor='$title1_fontcolor',title2_fontcolor='$title2_fontcolor',description_fontcolor='$description_fontcolor',bgcolor='$bgcolor',pagename=$pagename";
if($pic != ''){
	$sql.=",pic='$pic'";
}
if($btntype != 0){
	$sql.=",btntype=$btntype,btn_title='$btn_title',btn_link='$btn_link',btn_pic='$btn_pic'";
}elseif($btntype == 0){
	$sql.=",btntype=0";
}
$sql.=" where id=$id";
if($wpdb->query($sql)){
	echo '编辑成功！';
}else{
	echo 1;
}
?>