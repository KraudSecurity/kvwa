<html>
<head>
<title>Kraud Vulnerable Web Applications | XSS 14</title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>XSS 14<h1>
        <?php
        $search = array ("'", '"');
        $url = $_GET['from'];
        $url = preg_replace($search, '', $url);
        if (preg_match('/javascript/',$url, $matches)) {
            $url = "http://localhost";
        }
        ?>
        <a href="<?php  echo $url;  ?>">Back</a>

        <hr><textarea rows="10" cols="100">%26%23x6A%3B%26%23x61%3B%26%23x76%3B%26%23x61%3B%26%23x73%3B%26%23x63%3B%26%23x72%3B%26%23x69%3B%26%23x70%3B%26%23x74%3B%26%23x3A%3B%26%23x61%3B%26%23x6C%3B%26%23x65%3B%26%23x72%3B%26%23x74%3B%26%23x28%3B%26%23x31%3B%26%23x29%3B
        </textarea>
        <hr>
        Требуется клик по Back
</body>
</html>