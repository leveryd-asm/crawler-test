<?php
// router.php
$pathinfo = pathinfo($_SERVER['REQUEST_URI']);
//echo $pathinfo['basename'];
include explode("?", $pathinfo['basename'])[0];
?>