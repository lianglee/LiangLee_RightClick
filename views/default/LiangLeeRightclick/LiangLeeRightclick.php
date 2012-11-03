<?php
/* Liang Lee Rightclick Plugin
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * @package Liang Lee Rightclick Plugin
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2012.
 * @File LiangLeeRightclick.php
 */
if($LiangLeeRcm = elgg_get_plugin_setting("LiangLeeRcm", "LiangLeeRightclick")){
	$Le_rcm =$LiangLeeRcm;
}
if (elgg_get_plugin_setting('LiangLeeRcm', 'LiangLeeRightclick')) {
?>
<script language='JavaScript' type='text/JavaScript'>
var Liangleerc2='';
function Liangleerc() {
if (document.all) {
(Liangleerc2);alert(
"<?php echo $Le_keywords ?>"
); return false;}
}
function Liangleerc3(e) {
if (document.layers||(
document.getElementById&&!document.all
)
) {
if (e.which==2||e.which==3) {
(Liangleerc2);return false;
}
}
}
if (document.layers) {
document.captureEvents(Event.MOUSEDOWN);document.onmousedown=Liangleerc3;
} else {
document.onmouseup=Liangleerc3;document.oncontextmenu=Liangleerc;
}
document.oncontextmenu=new Function(
'alert("<?php echo $Le_rcm ?>"); return false')
</script>
<?php
}?>
