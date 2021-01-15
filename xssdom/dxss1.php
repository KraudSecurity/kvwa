<html>
<head>
    <title>Kraud Vulnerable Web Applications | XSS 1</title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>DXSS 1<h1>


        Select your language:

        <select><script>

                document.write("<OPTION value=1>"+document.location.href.substring(document.location.href.indexOf("default=")+8)+"</OPTION>");

                document.write("<OPTION value=2>English</OPTION>");

            </script></select>

        <hr><textarea rows="10" cols="100">

            ?default=<script>alert(document.cookie)</script>
        </textarea>

</body>
</html>