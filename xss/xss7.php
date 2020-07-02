<html>
<head>
<title>Kraud Vulnerable Web Applications | XSS 7 </title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>XSS 7<h1>

        <form action="" method="POST">
            <input name="type" value=''>
            <input type="submit">
        </form><br>

        <noscript> test string  <?php  echo $_POST['type'];  ?> test string </noscript>

        <hr><textarea rows="10" cols="100"></noscript><script>alert(1)</script></textarea>

</body>
</html>