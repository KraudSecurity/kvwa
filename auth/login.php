<html>
<head>
    <title>Kraud Vulnerable Web Applications | AUTH </title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>AUTH<h1>

        <?php
        session_start();

        error_reporting(7);
        ini_set('display_errors', 'On');

        $username = $_POST['username'];
        $password = $_POST['password'];

        if(isset($username)) {
            $db = new SQLite3('auth.db');

            $stmt = $db->prepare("SELECT * FROM users WHERE username = ? and password = ?");
            $stmt->bindParam(1, $username);
            $stmt->bindParam(2, $password);
            $result = $stmt->execute();

            $user = $result->fetchArray();

            if ($user[0] > 0) {
                $_SESSION["authenticated"] = true;
            } else {
                echo "<h3>Login Failed</h3>";
            }
        }

        if(isset($_SESSION["authenticated"])) {
            echo "<h3>Admin</h3>";
            echo "<a href='logout.php'>Logout</a>";
        } else {
            ?>
            <form action="" method="POST">
                <input name="username"><br>
                <input name="password"><br>
                <input type="submit">
            </form><br>
            <br>
            <table align='center' width='70%' border='1' cellspacing='1' cellpadding='10'>
                <tr><td><b>Login</b></td><td><b>Password</b></td></tr>
                <tr><td>admin</td><td>1234567890</td></tr>
                <tr><td>user</td><td>???</td></tr>
                <tr><td>operator</td><td>???</td></tr>
            </table>
        <?php
        }
        ?>



</body>
</html>