<html>
<head>
    <title>Kraud Vulnerable Web Applications | XSS 4 </title>
</head>
<body>

<h1>XSS 4<h1>

        <form action="" method="GET">
            <input name="type" value="<?php  echo $_GET['type'];  ?>">
            <input type="submit">
        </form><br>

        <hr><pre>XSS: "><script>alert(1)</script></pre>

</body>
</html>