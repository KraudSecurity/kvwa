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

        <!--  Users can be induced to issue the attacker's crafted request in various ways. For example, the attacker can send a victim a link containing a malicious URL in an email or instant message. They can submit the link to popular web sites that allow content authoring, for example in blog comments. And they can create an innocuous looking web site that causes anyone viewing it to make arbitrary cross-domain requests to the vulnerable application (using either the GET or the POST method). //-->

</body>
</html>