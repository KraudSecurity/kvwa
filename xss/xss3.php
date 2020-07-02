<html>
<head>
<title>Kraud Vulnerable Web Applications | XSS 3 </title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>XSS 3<h1>

        <form action="" method="POST">
            <input name="type" value='<?php  echo $_POST['type'];  ?>'>
            <input type="submit">
        </form><br>

        <hr><textarea rows="10" cols="100">'><script>alert(1)</script></textarea>

</body>
</html>