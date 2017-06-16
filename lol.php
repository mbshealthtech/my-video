<?php
$id = $_GET["id"];
$file = "hide98" . $id . ".mp4";

if (file_exists($file)) {
readfile('https://mbshealthtech.github.io/my-video/lol.php?=98');
header('Expires: 0');
ob_clean();
flush();
readfile($file);
exit;
}
?>
