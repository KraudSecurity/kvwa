<html>
<head>
    <title>Kraud Vulnerable Web Applications | XSS 1</title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>Schema JS 1<h1>

        <a href="/kvwa/schema/js.php?from=http://127.0.0.1">TEST</a><br><br>

                <?php
                $url = $_GET['from'];
                if (!preg_match('/^javascript/',$url, $matches)) {
                    $url = "http://localhost";
                }
                ?>
                <a href="<?php  echo $url;  ?>">Back</a>

                <hr><textarea rows="10" cols="100">javascript:alert(1)</textarea>
                <hr>
                Требуется клик по Back
        </body>
</html>