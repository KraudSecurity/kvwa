<html>
<head>
<title>Kraud Vulnerable Web Applications | XSS 100</title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>XSS 100<h1>

        <a href="xss100.php?input=1234567890">Link</a> <br>

<?php
/* Prevent XSS input */
$_GET   = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
/* I prefer not to use $_REQUEST...but for those who do: */
$_REQUEST = (array)$_POST + (array)$_GET + (array)$_REQUEST;


print($$_GET['input']);

?>


</body>
</html>