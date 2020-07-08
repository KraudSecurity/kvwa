<html>
<head>
<title>Kraud Vulnerable Web Applications | XSS 19</title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>XSS 19<h1>


        <hr><textarea rows="10" cols="100">?--><script>alert(1)</script></textarea>
        <hr>

        <!-- REQUEST_URI: <?php  echo $_SERVER['REQUEST_URI'];  ?> -->

</body>
</html>