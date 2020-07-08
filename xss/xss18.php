<html>
<head>
<title>Kraud Vulnerable Web Applications | XSS 18</title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>XSS 18<h1>


        <hr><textarea rows="10" cols="100">--><script>alert(1)</script><\!--</textarea>
        <hr>
        Следует установить X-Forwarded-For в браузере
        <!-- X-Forwarded-For: <?php echo $_SERVER['X-Forwarded-For'];  ?> -->
        <!-- X-Forwarded-For: <?php echo $_SERVER['HTTP_X_FORWARDED_FOR'];  ?> -->
</body>
</html>

<?php

//echo var_dump(get_defined_vars());

?>