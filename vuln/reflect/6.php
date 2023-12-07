<?php
$a = str_replace('"','\\"',$_GET['test']);
?>

<script>
let a="<?php echo $a;?>";
</script>

<!--

?test=</script><script>alert(1)</script>

-->