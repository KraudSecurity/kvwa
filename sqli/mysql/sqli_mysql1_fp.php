<?php $start = microtime(true); ?>
<html>
<head>
<title>Kraud Vulnerable Web Applications | XSS 1</title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>SQLi MySQL 1<h1>

        <form action="" method="POST">
            <input name="search" value='<?php echo $_POST['search']; ?>'>
            <input type="submit">
        </form>
        <br>

        <?php
        try {
            $user = 'kvwa';
            $pass = 'kvwa';
            $search = $_POST['search'];
            $dbh = new PDO('mysql:host=localhost;dbname=kvwa', $user, $pass);
            if ($search) {
                $rands = rand(5,20);
                sleep($rands);
            } else {
                foreach($dbh->query('SELECT * from users') as $row) {
                    print_r($row);
                }
            }

            $dbh = null;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
        }
        ?>

        <hr>

        <?php $finish = microtime(true); $delta=$finish-$start;
        echo "Time:" . $delta;
        ?>
</body>
</html>