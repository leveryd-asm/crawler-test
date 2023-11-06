<?php
error_reporting( error_reporting() & ~E_NOTICE );
?>
<!DOCTYPE html>
<html>
<head>
  <title>DOM-XSS Vulnerable Page</title>
</head>
<body>
<script type="text/javascript">
  var id = x => x;
  var f = <?=$_GET["filter"] ?: "unescape"?>;
  var src = <?=$_GET["source"] ?: "f(location.hash.substring(1))"?>;
  var ce = t => document.createElement(t);
  var mkScriptedIframe = function (id) {
    var f = ce("iframe");
    if (id)
      f.id = id;
    document.body.appendChild(f);
    return f;
  };
  <?php
    switch ($_GET["sink"]) {
      // let's start with basic
      case "eval":
        echo "eval(src)"; break;
      case "function":
        echo "(new Function(src))()"; break;
      case "setTimeout":
        echo "setTimeout(src, 0)"; break;
      case "scriptSrc":
        echo "var z = ce('script');\nz.src = src;\ndocument.body.appendChild(z)"; break;
      case "scriptText":
        echo "var z = ce('script');\nz.textContent = src;\ndocument.body.appendChild(z)"; break;
      case "location":
        echo "document.location = src"; break;
      case "lochref":
        echo "location.href = src"; break;
      case "docwrite":
        echo "var z = mkScriptedIframe('if');\nz.contentDocument.write(src);\nz.contentDocument.close();"; break;
      case "innerHTML":
        echo "var z = ce('p');\ndocument.body.appendChild(z);\nz.innerHTML = src"; break;
    }
  ?>;
</script>

</body>
</html>

https://github.com/rpelizzi/dom-xss/blob/master/test/examples/dombased.php
