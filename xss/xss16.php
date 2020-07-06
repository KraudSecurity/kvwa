<?php
$username = $_COOKIE['username'];
if (!isset($username)) {
    setcookie("username", "guest", time() + 3600);
}
?>

<html>
<head>
<title>Kraud Vulnerable Web Applications | XSS 16</title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>XSS 16<h1>

        <?php
        $username = $_COOKIE['username'];
        if (isset($username)) {
            print($username);
        }

        ?>

        <hr><textarea rows="10" cols="100">  </textarea>
        <hr>
        Следует установить Cookies username


</body>
</html>