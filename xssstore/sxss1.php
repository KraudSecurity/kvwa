<html>
<head>
    <title>Kraud Vulnerable Web Applications | SXSS 1 </title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>XSS 4<h1>

<?php

if(isset($_POST["submit"])) {
    $db = new SQLite3('sxss.db');
    //$db->exec("CREATE TABLE comments(id INTEGER PRIMARY KEY, msg TEXT)");
    $db->exec("INSERT INTO comments(msg) VALUES(".$_POST['msg'].")");
    echo "Successfully<br>";
}
?>

        <form action="" method="GET">
            <input name="msg">
            <input type="submit">
        </form><br>



</body>
</html>