<?php
/* Liang Lee Rightclick Plugin
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * @package Liang Lee Rightclick Plugin
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2012.
 * @File settings.php
 */
$path = elgg_get_plugins_path();
$liang_lee_rc_url = "LiangLeeRightclick";
$LiangLeeRightclick_ver = $path. $liang_lee_rc_url . "/version.php";
include $LiangLeeRightclick_ver;
$liang_lee_rc1 = elgg_echo('llee:rc:1');

$liang_lee_rcl_1 = elgg_view("input/text", array(
"name" => "params[LiangLeeRcm]", 
"value" => $vars['entity']->LiangLeeRcm));
$settings = <<<__HTML

    <h3>$lleesettings</h3>
    <div>
        <p><i>$liang_lee_rc1</i><br>$liang_lee_rcl_1</p>
		 <p></p>
		<p>Release:$LiangLeeRightclick_release</p>
		<p>Version:$LiangLeeRightclick_version</p>

    </div>
    <hr>
</div>
__HTML;

echo $settings, $title;