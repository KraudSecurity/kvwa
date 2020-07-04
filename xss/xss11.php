<html>
<head>
<title>Kraud Vulnerable Web Applications | XSS 11</title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>XSS 11<h1>
        <?php
        $url = $_GET['from'];
        if (preg_match('^javascript',$url)) {
            $url = "http://localhost";
        }
        ?>
        <a href="<?php  echo $url;  ?>">Back</a>

        <hr><textarea rows="10" cols="100"><script>alert(1)</script></textarea>

</body>
</html>