<html>
<head>
<title>Kraud Vulnerable Web Applications | XSS 24</title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>XSS 24<h1>

<a href="xss24.php?input=1234567890">Link</a> <br>

<?php

$input = htmlentities($_GET['input'], ENT_QUOTES, 'UTF-8');

print($input);

?>


</body>
</html>