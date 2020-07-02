<html>
<head>
<title>Kraud Vulnerable Web Applications | XSS 1</title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>XSS 1<h1>
<?php
echo $_GET['phone'];
?>

        <hr><textarea rows="10" cols="100"><script>alert(1)</script></textarea>

</body>
</html>