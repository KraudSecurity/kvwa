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

echo "<table align='center' width='70%' border='1' cellspacing='1' cellpadding='10'>
<tr>
<td width='10' align='center'>#</td>
<td align='center'>data</td>
<td align='center'>uri</td>
<td align='center'>referer</td>
<td align='center'>xffor</td>
<td align='center'>httpxffor</td>
<td align='center'>ip</td>
<td align='center'>ua</td>
</tr>";
while ($row = $res->fetchArray()) {
    $id = $row[0];
    echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td></tr>";
}
echo "</table>";

$sql = "DELETE FROM users WHERE id = '".intval($id)."'";
print($sql);
$db->exec($sql);

$db->close();
unset($db);
?>