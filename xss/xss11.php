<html>
<head>
<title>Kraud Vulnerable Web Applications | XSS 11</title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>XSS 11<h1>
        <?php
        $url = $_GET['from'];
        if (preg_match('/^javascript/',$url, $matches)) {
            $url = "http://localhost";
        }
        ?>
        <a href="<?php  echo $url;  ?>">Back</a>

        <hr><textarea rows="10" cols="100">%20javascript:alert(1)</textarea>
        <hr>
        Требуется клик по Back
</body>
</html>