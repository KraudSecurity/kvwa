<html>
<head>
    <title>Kraud Vulnerable Web Applications | XSS 1</title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>Schema JS 1<h1>

        <a href="/kvwa/schema/js.php?from=http://127.0.0.1">TEST</a><br><br>

        <a href="/kvwa/schema/js.php?from1=http://127.0.0.1">TEST</a><br><br>




                <?php
                $url = $_GET['from'];
                if (!preg_match('/^javascript/',$url, $matches)) {
                    $url = "http://localhost";
                }

                $url1 = $_GET['from1'];
                if (!preg_match('/^javascript/',$url1, $matches)) {
                    $url1 = "http://localhost";
                }

                

                ?>
                <a href="<?php  echo $url;  ?>">Back</a>
                <br>
                <IMG SRC="<?php  echo $url1;  ?>">
                <br>



                <hr><textarea rows="10" cols="100">javascript:alert(1)</textarea>
                <hr>
                Требуется клик по Back
        </body>
</html>