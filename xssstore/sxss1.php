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
    $sql ="INSERT INTO comments(msg) VALUES(".$_POST['msg'].")";
    //print($sql);
    $db->exec($sql);
    $last_row_id = $db->lastInsertRowID();
    echo "Successfully $last_row_id<br>";
}
?>

        <form action="" method="POST">
            <input name="msg">
            <input type="submit">
        </form><br>



</body>
</html>