<html>
<head>
<title>Kraud Vulnerable Web Applications | XSS 11</title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>XSS 11<h1>
        <?php
        $url = $_GET['from'];
        if (preg_match('/^[a-zA-Z]:\/\/[a-zA-Z-0-9]\//',$url, $matches)) {
            $url = "http://localhost";
        }
        ?>
        <a href="<?php  echo $url;  ?>">Back</a>

        <hr><textarea rows="10" cols="100">javascript://host.com/%0aalert(1)</textarea>

</body>
</html>