<html>
<head>
    <title>Kraud Vulnerable Web Applications | SXSS 2 </title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>SXSS 2<h1>

<?php
error_reporting(7);

if($_POST["msg"] != '') {

    class MyDB extends SQLite3
    {
        function __construct()
        {
            $this->open('sxss2.db');
        }
    }

    $db = new MyDB();
    $msg = $_POST['msg'];
    $pos = strpos($msg, '<svg');

    # пропускаем только svg payload
    if ($pos === false) {
        $msg = htmlspecialchars($msg);
    } else {
        $msg = $msg;
    }

    $sql ="INSERT INTO comments(msg) VALUES('".$msg."')";
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

        <!-- Reflected cross-site scripting vulnerabilities arise when data is copied from a request and echoed into the application's immediate response in an unsafe way. An attacker can use the vulnerability to construct a request that, if issued by another application user, will cause JavaScript code supplied by the attacker to execute within the user's browser in the context of that user's session with the application. //-->

</body>
</html>