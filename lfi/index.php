
<html>
<head>
    <title>Kraud Vulnerable Web Applications | LFI</title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>LFI<h1>

        <a href="index.php?file=lfi1.php">LFI 1</a><br>
        <a href="index.php?content=lfi2">LFI 2</a><br>

        <hr>

        <?php
        #### LFI 1 ####
        $file = rawurldecode($_REQUEST['file']);
        #$file = preg_replace('/^.+[\\\\\\/]/', $file);
        $url = "./1/$file";
        include($url);
        ?>

        <?php
        if (isset($_GET['content'])) {
            print($_GET['content']);
            include "./1/".$_GET['content'].".php";
        }
        ?>

        <hr><textarea rows="10" cols="100">
            LFI 1 - ?file=../../../../../../../etc/passwd
            LFI2 - ?
        </textarea>

</body>
</html>
