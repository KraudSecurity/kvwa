<html>
<head>
    <title>Kraud Vulnerable Web Applications | SXSS 1 </title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>SXSS 1<h1>

<?php

if($_POST["msg"] != '') {
    $db = new SQLite3('sxss.db');
    //$db->exec("CREATE TABLE comments(id INTEGER PRIMARY KEY, msg TEXT)");
    $sql ="INSERT INTO comments(id, msg) VALUES(NULL, ".$_POST['msg'].")";
    //print($sql);
    $db->exec($sql);
    echo "Successfully<br>";
}
?>

        <form action="" method="POST">
            <input name="msg">
            <input type="submit">
        </form><br>



</body>
</html>