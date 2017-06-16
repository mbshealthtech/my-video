<?php
$id = $_GET["id"];
$file = "hide" . $id . ".mp4";

if (file_exists($file)) {
readfile('http://www.hideurlscript.com/scriptest/lol.php');
header('Expires: 0');
ob_clean();
flush();
readfile($file);
exit;
}
?>
