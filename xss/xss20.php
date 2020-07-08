<html>
<head>
<title>Kraud Vulnerable Web Applications | XSS 20</title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>XSS 20<h1>

        <?php
        echo "<a href=\"" . $_SERVER["HTTP_REFERER"] . "\">Back</a>";
        ?>

        <hr><textarea rows="10" cols="100">?--><script>alert(1)</script></textarea>
        <hr>
        Требуется клик по Back

</body>
</html>