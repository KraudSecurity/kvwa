<html>
<head>
<title>Kraud Vulnerable Web Applications | XSS 8 </title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>XSS 8<h1>

        <form action="" method="POST">
            <input name="type" value=''>
            <input type="submit">
        </form><br>

        <textarea>
            <?php  echo $_POST['type']; ?>
        </textarea>

        <hr>
        <plaintext>

            </textarea><script>alert(1)</script>

        </plaintext>

</body>
</html>