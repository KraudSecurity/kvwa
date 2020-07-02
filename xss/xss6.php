<html>
<head>
<title>Kraud Vulnerable Web Applications | XSS 6 </title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>XSS 6<h1>

        <form action="" method="POST">
            <input name="type" value=''>
            <input type="submit">
        </form><br>

        <style type="text/css">
            table {
                color: <?php  echo $_POST['type'];  ?>;
            }
        </style>

        <hr><textarea rows="10" cols="100"></style><script>alert(1)</script></textarea>

</body>
</html>