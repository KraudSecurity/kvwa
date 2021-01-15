<html>
<head>
    <title>Kraud Vulnerable Web Applications | SXSS 1 </title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>SXSS 1<h1>


<?php

    $db = new SQLite3('sxss.db');
    $count = $db->query('SELECT count(*) FROM comments');
    $res = $db->query('SELECT * FROM comments LIMIT 20');

    print "Total: $count<br>";

    echo "<table align='center' width='70%' border='1' cellspacing='1' cellpadding='10'><tr><td width='10' align='center'>#</td><td align='center'>Message</td></tr>";
    while ($row = $res->fetchArray()) {
        echo "<tr><td>".$row[0]."</td><td align='center'>".$row[1]."</td></tr>";
    }
    echo "</table>";

?>

</body>
</html>