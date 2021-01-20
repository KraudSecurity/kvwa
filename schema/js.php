<html>
<head>
    <title>Kraud Vulnerable Web Applications | Schema JS 1 </title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>Schema JS 1<h1>

        <a href="/kvwa/schema/js.php?from=http://127.0.0.1">TEST 1</a><br><br>

        <a href="/kvwa/schema/js.php?from1=http://127.0.0.1">TEST 2</a><br><br>

        <a href="/kvwa/schema/js.php?from2=http://127.0.0.1">TEST 3</a><br><br>

        <a href="/kvwa/schema/js.php?from3=http://127.0.0.1">TEST 4</a><br><br>

        <hr>

                <?php
                $url = $_GET['from'];
                if (!preg_match('/^javascript/',$url, $matches)) {
                    $url = "http://localhost";
                }

                $url1 = $_GET['from1'];
                if (!preg_match('/^javascript/',$url1, $matches)) {
                    $url1 = "http://localhost";
                }

                $url2 = $_GET['from2'];
                if (!preg_match('/^javascript/',$url2, $matches)) {
                    $url2 = "http://localhost";
                }

                $url3 = $_GET['from3'];
                if (!preg_match('/^javascript/',$url3, $matches)) {
                    $url3 = "http://localhost";
                }



                ?>
                <a href="<?php  echo $url;  ?>">Back</a>
                <br>
                <IMG SRC="<?php  echo $url1;  ?>">
                <br>
                <FORM NAME=f METHOD=post ACTION="<?php  echo $url2;  ?>">
                    <INPUT TYPE=submit VALUE=Click>
                </FORM>
                <br>
                <input name=test value="<?php  echo $url3;  ?>">


                <hr><textarea rows="10" cols="100">javascript:alert(1)</textarea>
                <hr>
                Требуется клик по Back
        </body>
</html>