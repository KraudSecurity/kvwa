<html>
<head>
<title>Kraud Vulnerable Web Applications | XSS 21</title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>XSS 21<h1>

        <form action="" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
        </form>

        <?php
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        ?>


        <hr><textarea rows="10" cols="100">javascript:alert(1)</textarea>
        <hr>
        Требуется клик по Back
        <br>
        Следует установить Referer в браузере

</body>
</html>