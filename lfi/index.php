
<html>
<head>
    <title>Kraud Vulnerable Web Applications | LFI 1</title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>LFI 1<h1>

        <?php
        $file = rawurldecode($_REQUEST['file']);
        $file = preg_replace('/^.+[\\\\\\/]/', $file);
        include("./1/{$file}");
        ?>

        <a href="index.php?file=1.php">1.php</a>

        <hr><textarea rows="10" cols="100">


        </textarea>

</body>
</html>
