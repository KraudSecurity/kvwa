<html>
<head>
<title>Kraud Vulnerable Web Applications | XSS 15 </title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>XSS 15<h1>

        <?php

        $type = preg_replace("'<script[^>]*?>.*?</script>'si", '', $_POST['type']);
        $type = str_replace($type,"",$type);
        $type = str_replace (array("*","\\"), "", $type );
        $type = strip_tags($type);
        $type = htmlentities($type, ENT_QUOTES, "UTF-8");
        $type = htmlspecialchars($type, ENT_QUOTES);

        ?>

        <form action="" method="POST">
            <input name="type" value='<?php  echo $type;  ?>'>
            <input type="submit">
        </form><br>

        <hr><textarea rows="10" cols="100">
            пока не найден
            </textarea>

</body>
</html>