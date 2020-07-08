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

        <hr><textarea rows="10" cols="100">javascript:alert(1)</textarea>
        <hr>
        Требуется клик по Back
        <br>
        Следует установить Referer в браузере

</body>
</html>