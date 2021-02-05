<?php
class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('logger17.db');
    }
}
$db = new MyDB();

$res = $db->query('SELECT * FROM users LIMIT 5');

print_r($res);

$db->close();
unset($db);
?>