<?php
$a = str_replace('"','\\""',$_GET['test']);
?>
<a href="http://www.baidu.com/?test=<?php echo $a; ?>"; > </a>
