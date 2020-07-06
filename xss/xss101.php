<html>
<head>
<title>Kraud Vulnerable Web Applications | XSS 101</title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>XSS 101<h1>

        <a href="xss100.php?input=1234567890">Link</a> <br>

<?php

$input = filter_input(INPUT_GET, 'input', FILTER_SANITIZE_URL);
print($input);

?>


</body>
</html>