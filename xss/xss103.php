<html>
<head>
<title>Kraud Vulnerable Web Applications | XSS 103</title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>XSS 103<h1>

<a href="xss103.php?input=1234567890">Link</a> <br>

<?php

$input = htmlentities($_GET['input'], ENT_QUOTES, 'UTF-8');

print($input);

?>


</body>
</html>