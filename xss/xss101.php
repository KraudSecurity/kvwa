<html>
<head>
<title>Kraud Vulnerable Web Applications | XSS 100</title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>XSS 100<h1>

        <a href="xss100.php?input=1234567890">Link</a> <br>

<?php

$input = filter_input(INPUT_GET, 'input', FILTER_SANITIZE_URL);
echo '<a href="http://example.com/page?input="' . $input . '">Link</a>';

?>


</body>
</html>