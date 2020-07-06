
<html>
<head>
<title>Kraud Vulnerable Web Applications</title>
</head>
<body>

<h1>XSS Clear</h1>

<a href="xss/xss1.php?phone=1234567890">XSS 1 (BODY)</a><br>

<a href='xss/xss2.php?phone=1234567890'>XSS 2 (TITLE)</a><br>

<a href='xss/xss3.php'>XSS 3 (FORM POST)</a><br>

<a href='xss/xss4.php'>XSS 4  (FORM GET)</a><br>

<a href='xss/xss5.php'>XSS 5  (FORM POST TAG SCRIPT)</a><br>

<a href='xss/xss6.php'>XSS 6  (FORM POST TAG STYLE)</a><br>

<a href='xss/xss7.php'>XSS 7  (FORM POST TAG NOSCRIPT)</a><br>

<a href='xss/xss8.php'>XSS 8  (FORM POST TAG TEXTAREA)</a><br>

<a href='xss/xss9.php'>XSS 9  (FORM GET TAG A)</a><br>

<a href='xss/xss10.php'>XSS 10  (USER-AGENT)</a><br>


<h1>XSS Filter</h1>

<a href='xss/xss11.php?from=https://yandex.ru/404/'>XSS 11  (TAG A Filter ^javascript )</a><br>

<a href='xss/xss12.php?from=https://yandex.ru/404/'>XSS 12  (TAG A Filter proto://host/string )</a><br>

<a href='xss/xss13.php'>XSS 13  (FORM POST Filter > )</a><br>

<a href='xss/xss14.php?from=https://yandex.ru/404/'>XSS 14  (TAG A Filter javascript )</a><br>

<a href='xss/xss15.php'>XSS 15  (FORM POST Filter script tags )</a><br>


<h1>XSS Invulnerable</h1>

<a href='xss/xss100.php'>XSS 100</a><br>

<a href='xss/xss101.php?input=1234567890'>XSS 101</a><br>

<a href='xss/xss102.php'>XSS 102</a><br>

</body>
</html>