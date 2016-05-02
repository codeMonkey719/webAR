<?php
header("Access-Control-Allow-Origin: *");
$str = file_get_contents($name, FILE_USE_INCLUDE_PATH);
echo base64_encode($str);
exit;
?>