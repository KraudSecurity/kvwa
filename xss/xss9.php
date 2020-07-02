<html>
<head>
<title>Kraud Vulnerable Web Applications | XSS 9 </title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>XSS 9<h1>

        <?php

        $type = $_POST['type'];
        $type = str_replace(">", "&gt;", $type);
        ?>

        <form action="" method="POST">
            <input name="type" value='<?php echo $type; ?>'>
            <input type="submit">
        </form><br>

        <hr><textarea rows="10" cols="100">'><script>alert(1)</script></textarea>

</body>
</html>