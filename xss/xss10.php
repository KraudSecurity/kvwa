<html>
<head>
<title>Kraud Vulnerable Web Applications | XSS 10</title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>XSS 10<h1>


        <hr><textarea rows="10" cols="100">--><script>alert(1)</script><\!--</textarea>
        <hr>
        Следует установить User-Agent в браузере
        <!-- User-Agent: <?php  echo $_SERVER['HTTP_USER_AGENT'];  ?> -->
</body>
</html>