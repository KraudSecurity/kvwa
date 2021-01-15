<html>
<head>
    <title>Kraud Vulnerable Web Applications | SXSS 1 </title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>SXSS 1<h1>


<?php

    $page = intval($_GET['page']);

    $db = new SQLite3('sxss.db');
    $count = $db->query('SELECT count(*) FROM comments');
    if ($page > 0) {
        $offset = $page * 5;
        $res = $db->query('SELECT * FROM comments LIMIT $offset, 5');
    } else {
        $res = $db->query('SELECT * FROM comments LIMIT 5');
    }


    $c = intval($count->fetchArray()[0]);

    print "Total: $c <br>";

    if ($c > 5) {
        print "Pages: ";

        $totalpage = intval($c/5);
        for ($i = 1; $i <= $totalpage; $i++) {
            print " <a href='/kvwa/xssstored/sxss1_msg.php?page=$i'>$i</a> | ";
        }

        print "<br><br>";
    }

    echo "<table align='center' width='70%' border='1' cellspacing='1' cellpadding='10'><tr><td width='10' align='center'>#</td><td align='center'>Message</td></tr>";
    while ($row = $res->fetchArray()) {
        echo "<tr><td>".$row[0]."</td><td align='center'>".$row[1]."</td></tr>";
    }
    echo "</table>";

?>

</body>
</html>