<html>
<head>
<title>Kraud Vulnerable Web Applications | XSS 17</title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>XSS 17<h1>

<?php

$input = filter_input(INPUT_GET, 'input', FILTER_SANITIZE_URL);
echo '<a href="xss17.php?input=' . $input . '">Link</a>';

?>

</body>
</html>