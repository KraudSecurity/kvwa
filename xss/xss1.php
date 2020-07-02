<html>
<head>
<title>Kraud Vulnerable Web Applications | XSS 1</title>
</head>
<body>

<h1>XSS 1<h1>
<?php
echo $_GET['phone'];
?>

</body>
</html>