<?php


echo "<h1>Control Center</h1>";

class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('logger17.db');
    }
}
$db = new MyDB();

$res = $db->query('SELECT * FROM users LIMIT 1');

echo "<table align='center' width='70%' border='1' cellspacing='1' cellpadding='10'><tr><td width='10' align='center'>#</td><td align='center'>Users</td></tr>";
while ($row = $res->fetchArray()) {
    echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td></tr>";
}
echo "</table>";

$sql = "DELETE FROM users WHERE id = '".intval($row[0])."'";
print($sql);
$db->exec($sql);

$db->close();
unset($db);
?>