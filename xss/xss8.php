<html>
<head>
<title>Kraud Vulnerable Web Applications | XSS 5 </title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>XSS 5<h1>

        <form action="" method="POST">
            <input name="type" value=''>
            <input type="submit">
        </form><br>

        <script>
            var name = "<?php  echo $_POST['type'];  ?>";
        </script>

        <hr><textarea rows="10" cols="100">"</script><script>alert(1)</script></textarea>

</body>
</html>