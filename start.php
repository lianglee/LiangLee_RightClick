<?php
/* LiangLee Meta Tags Manager
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * @package LiangLee Meta Tags Manager
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2012.
 * @File start.php 
 */
?>
<?php

elgg_register_event_handler('init', 'system', 'LiangLeeRightclick_init');

function LiangLeeRightclick_init() {
	elgg_extend_view('page/elements/head','LiangLeeRightclick/LiangLeeRightclick');
	$liang_lee_pname     = "LiangLeeRightclick";
  
}
?>