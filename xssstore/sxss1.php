<html>
<head>
    <title>Kraud Vulnerable Web Applications | SXSS 1 </title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>SXSS 1<h1>

<?php
error_reporting(7);

if($_POST["msg"] != '') {

    class MyDB extends SQLite3
    {
        function __construct()
        {
            $this->open('sxss.db');
        }
    }

    $db = new MyDB();

    $sql ="INSERT INTO comments(msg) VALUES('".$_POST['msg']."')";
    //print($sql);
    $db->exec($sql);
    $last_row_id = $db->lastInsertRowID();
    echo "Successfully $last_row_id<br>";
    $db->close();
    unset($db);
}
?>

        <form action="" method="POST">
            <input name="msg">
            <input type="submit">
        </form><br>



</body>
</html>