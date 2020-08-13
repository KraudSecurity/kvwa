<html>
<head>
    <title>Kraud Vulnerable Web Applications | SXSS 1 </title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>SXSS 1<h1>


<?php

    $db = new SQLite3('sxss.db');
    $res = $db->query('SELECT * FROM comments');

    echo "<table align='center' width='70%' border='1' cellspacing='1' cellpadding='0'><tr><td>#</td><td>MSG</td></tr>";
    while ($row = $res->fetchArray()) {
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td></tr>";
    }
    echo "</table>";

?>

</body>
</html>