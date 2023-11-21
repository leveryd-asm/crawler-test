测试是否支持 path路径 中参数扫描

<?php
//echo $_SERVER['PHP_SELF'];
//分割字符串
$ss = explode("/", $_SERVER['PHP_SELF']);
print_r($ss);?>

<script>
//document.write("当前路径为："+ decodeURI(window.location.pathname));
</script>

u