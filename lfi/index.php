
<html>
<head>
    <title>Kraud Vulnerable Web Applications | LFI</title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>LFI 1<h1>

        <?php
        $file = rawurldecode($_REQUEST['file']);
        #$file = preg_replace('/^.+[\\\\\\/]/', $file);
        $url = "./1/$file";
        print($url);
        include($url);

        ?>

        <a href="index.php?file=lfi1.php">LFI 1</a>

        <hr><textarea rows="10" cols="100">

        </textarea>

</body>
</html>
