<?php

############### XSS Blind Detector ###############
$ip = $_SERVER['REMOTE_ADDR'];
$data = Date("Y-m-d  H:i:s");
$uri = $_SERVER['REQUEST_URI'];
$referer = $_SERVER["HTTP_REFERER"];
$xffor = $_SERVER['X-Forwarded-For'];
$httpxffor = $_SERVER['HTTP_X_FORWARDED_FOR'];
$ua = $_SERVER['HTTP_USER_AGENT'];


class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('xssblind/logger17.db');
    }
}
$db = new MyDB();

$sql ="insert into users (data, uri, referer, xffor, httpxffor, ip, ua) VALUES ('".$data."','". $uri."','". $referer."','". $xffor."','". $httpxffor."','". $ip."', '".$ua."')";
#print($sql);
$db->exec($sql);
$last_row_id = $db->lastInsertRowID();
#echo "$last_row_id";
$db->close();
unset($db);

##################################################
?>

<html>
<head>
<title>Kraud Vulnerable Web Applications</title>
</head>
<body>

<a href="index.php">Home</a><br>
<a href="link1.php">Links HTML</a><br>

<h1>XSS Clear</h1>

<a href="xss/xss1.php?phone=1234567890">XSS 1 (BODY)</a><br>

<a href='xss/xss2.php?phone=1234567890'>XSS 2 (TITLE)</a><br>

<a href='xss/xss3.php'>XSS 3 (FORM POST)</a><br>

<a href='xss/xss4.php'>XSS 4  (FORM GET)</a><br>

<a href='xss/xss5.php'>XSS 5  (FORM POST TAG SCRIPT)</a><br>

<a href='xss/xss6.php'>XSS 6  (FORM POST TAG STYLE)</a><br>

<a href='xss/xss7.php'>XSS 7  (FORM POST TAG NOSCRIPT)</a><br>

<a href='xss/xss8.php'>XSS 8  (FORM POST TAG TEXTAREA)</a><br>

<a href='xss/xss9.php'>XSS 9  (FORM GET TAG A)</a><br>

<a href='xss/xss10.php'>XSS 10  (USER-AGENT)</a><br>

<a href='xss/xss18.php'>XSS 18  (X-Forwarded-For)</a><br>

<a href='xss/xss19.php'>XSS 19  (REQUEST_URI)</a><br>

<a href='xss/xss20.php'>XSS 20  (HTTP_REFERER)</a><br>

<a href='xss/xss21.php'>XSS 21  (UPLOAD FILE)</a><br>

<a href='xss/xss16.php'>XSS 16  (COOKIES)</a><br>


<h1>XSS Filter</h1>

<a href='xss/xss11.php?from=https://yandex.ru/404/'>XSS 11  (TAG A Filter ^javascript )</a><br>

<a href='xss/xss12.php?from=https://yandex.ru/404/'>XSS 12  (TAG A Filter proto://host/string )</a><br>

<a href='xss/xss13.php'>XSS 13  (FORM POST Filter > )</a><br>

<a href='xss/xss14.php?from=https://yandex.ru/404/'>XSS 14  (TAG A Filter javascript )</a><br>

<a href='xss/xss15.php'>XSS 15  (FORM POST Filter script tags )</a><br>

<a href='xss/xss17.php?input=1234567890'>XSS 17</a><br>

<a href='xss/xss22.php'>XSS 22</a><br>


<h1>XSS Stored</h1>

<a href='xssstored/sxss1.php'>SXSS 1</a> <br>

<a href='xssstored/sxss1_msg.php'>SXSS 1 MSG</a> <br>

<a href='xssstored/sxss2.php'>SXSS 2 (htmlspecialchars)</a> <br>

<a href='xssstored/sxss2_msg.php'>SXSS 2 MSG</a> <br>


<h1>DOM Based XSS</h1>

<a href='xssdom/dxss1.php'>DXSS 1</a> <br>

<h1>AUTH</h1>

<a href='auth/login.php'>Login 1</a> <br>

<a href='admin/'>Login 2</a> <br>

<a href='auth/HTTPVerbTampering.php'>HTTP Verb Tampering</a> <br>


<h1>SCHEMA</h1>

<a href='schema/js.php'>Schema JS 1</a> <br>

<h1>XSS Invulnerable</h1>

<a href='xss/xss23.php'>XSS 23</a><br>

<a href='xss/xss24.php'>XSS 24</a><br>

<a href='xss/xss25.php'>XSS 25</a><br>


<h1>Disclosure Information</h1>

<a href='disclosure/info.php'>DI 1 (PhpInfo) </a><br>

<a href='disclosure/path.php'>DI 2 (Listing Paths) </a><br>

<a href='disclosure/listing1.php'>DI 3 (Listing Files) </a><br>

<a href='disclosure/mails.php'>DI 4 (E-mail Address)</a><br>


<h1>LFI</h1>

<a href='lfi/'>LFI</a><br>


<h1>SQLi</h1>

<a href='sqli/mysql/sqli_mysql1.php'>SQLi MySQL 1</a><br>

<a href='sqli/mysql/sqli_mysql1_fp.php'>SQLi MySQL 1 FP</a><br>


</body>
</html>