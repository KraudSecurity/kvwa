<html>
<head>
<title>Kraud Vulnerable Web Applications | XSS 12</title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>XSS 12<h1>
        <?php
        $url = $_GET['from'];
        if (!preg_match('|^http(s)?://[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(/.*)?$|i', $url)) {
            $url = "http://localhost";
        }
        ?>
        <a href="<?php  echo $url;  ?>">Back</a>

        <hr><textarea rows="10" cols="100">javascript://host.com/%0aalert(1)</textarea>
        <hr>
        Требуется клик по Back

</body>
</html>