<html>
<head>
<title>Kraud Vulnerable Web Applications | XSS 15 </title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>XSS 15<h1>

        <?php
        $type = preg_replace('#<script(.*?)>(.*?)</script>#is', '', $_POST['type']);

        ?>

        <form action="" method="POST">
            <input name="type" value='<?php  echo $type;  ?>'>
            <input type="submit">
        </form><br>

        <hr><textarea rows="10" cols="100">
            пока не найден
            </textarea>

</body>
</html>