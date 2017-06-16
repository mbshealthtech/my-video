<?php
$id = $_GET["id"];
$file = "hide98" . $id . ".mp4";

if (file_exists($file)) {
readfile('http://www.hideurlscript.com/scripttest/lol.php?id=98');
header('Expires: 0');
ob_clean();
flush();
readfile($file);
exit;
}
?>
