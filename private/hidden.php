<?php
$username = $_COOKIE['user'];
if (!isset($username)) {
    setcookie("user", "guest", time() + 3600);
}
?>

<html>
<head>
    <title>Kraud Vulnerable Web Applications | XSS Hidden</title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>XSS Hidden<h1>

        <?php
        $username = $_COOKIE['user'];
        if (isset($username)) {
            print($username);
        }

        ?>

        <hr><textarea rows="10" cols="100">guest<script>alert(1)</script></textarea>
        <hr>
        Следует установить Cookies username


</body>
</html>