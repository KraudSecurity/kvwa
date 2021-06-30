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
                foreach($dbh->query("SELECT * from users where `name` like '%" . $search . "%'") as $row) {
                    print_r($row);
                    echo "2";
                }
            } else {
                foreach($dbh->query('SELECT * from users') as $row) {
                    print_r($row);
                    echo "1";
                }
            }

            $dbh = null;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
        }
        ?>

        <hr>
        <plaintext>

            </textarea><script>alert(1)</script>

        </plaintext>

</body>
</html>