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

    echo "<table border='1' cellspacing='5' cellpadding='10'><tr><td>#</td><td>MSG</td></tr>";
    while ($row = $res->fetchArray()) {
        echo "<tr><td>".$row['id']."</td><td>".$row['msg']."</td></tr>";
    }
    echo "</table>";

?>

</body>
</html>