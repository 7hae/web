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
$pic			=$_POST['pic'];
$type			=$_POST['type'];
$order_num		=$_POST['order_num'];
$title1			=$_POST['title1'];
$title2			=$_POST['title2'];
$description	=$_POST['description'];
$img_type		=$_POST['img_type'];
$bg_weight		=$_POST['bg_weight'];
$bg_height		=$_POST['bg_height'];
$title1_fontcolor=$_POST['colorpickerField1'];
$title2_fontcolor=$_POST['colorpickerField2'];
$bgcolor=$_POST['colorpickerField4'];
$pagename		=$_POST['pagename'];

$btntype		=$_POST['btntype'];
$btn_title		=$_POST['btn_title'];
$btn_link		=$_POST['btn_link'];
$btn_pic		=$_POST['btn_pic'];
$news_window	=$_POST['news_window'];
$mao	=$_POST['mao'];

$description_fontcolor=$_POST['colorpickerField3'];
$sql='insert into wp_index_temp (`title1`,`title2`,`pic`,`type`,`description`,`order_num`,`img_type`,`bg_weight`,`bg_height`,`title1_fontcolor`,`title2_fontcolor`,`description_fontcolor`,`pagename`,`btntype`,`btn_title`,`btn_link`,`btn_pic`,`bgcolor`,`news_window`,`mao`) value ("'.$title1.'","'.$title2.'","'.$pic.'",'.$type.',"'.$description.'",'.$order_num.',"'.$img_type.'","'.$bg_weight.'","'.$bg_height.'","'.$title1_fontcolor.'","'.$title2_fontcolor.'","'.$description_fontcolor.'",'.$pagename.','.$btntype.',"'.$btn_title.'","'.$btn_link.'","'.$btn_pic.'","'.$bgcolor.'",'.$news_window.',"'.$mao.'")';

if($wpdb->query($sql)){
	echo '添加成功！';
}else{
	echo '1';
}
?>
