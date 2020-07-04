<html>
<head>
    <title>Kraud Vulnerable Web Applications | XSS 9 </title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>XSS 9<h1>

        <form action="" method="GET">
            <input name="url1" value="">
            <input type="submit">
        </form><br>

        <a href="<?php  echo $_GET['url1'];  ?>">URL</a>

        <hr><textarea rows="10" cols="100">javascript:alert(1)</textarea>
        <hr>
        Требуется клик по URL

</body>
</html>