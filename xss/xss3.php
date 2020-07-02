<html>
<head>
<title>Kraud Vulnerable Web Applications | XSS 3 </title>
</head>
<body>

<h1>XSS 3<h1>

        <form action="" method="POST">
            <input name="type" value="<?php  echo $_POST['type'];  ?>">
            <input type="submit">
        </form><br>

</body>
</html>