<html>
<head>
<title>Kraud Vulnerable Web Applications | XSS 22</title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>XSS 22<h1>

        <a href="xss22.php?phone=1234567890">Link</a> <br>

<?php

$phone = htmlspecialchars($_GET['phone'], ENT_QUOTES, 'UTF-8');

print($phone);
?>


</body>
</html>