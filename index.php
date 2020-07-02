
<html>
<head>
<title>Kraud Vulnerable Web Applications</title>
</head>
<body>

<h1>XSS</h1>

<a href="xss/xss1.php?phone=1234567890">XSS 1 (BODY)</a><br>

<a href='xss/xss2.php?phone=1234567890'>XSS 2 (TITLE)</a><br>

<a href='xss/xss3.php'>XSS 3 (FORM POST)</a><br>

<a href='xss/xss4.php'>XSS  (FORM GET)</a><br>

</body>
</html>