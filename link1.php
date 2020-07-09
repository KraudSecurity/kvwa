
<html>
<head>
    <title>Kraud Vulnerable Web Applications</title>
</head>
<body>

<a href="index.php">Home</a><br>

<h1>Links</h1>

<script type="text/javascript">
    function GoUrl(url){
        location.href=url;
    }
</script>

<form action="links/link1.php"><button type="submit">Link1</button></form><br>

<a href="links/link2.php"><button>Link2</button></a><br>

<button onclick="location.href = 'links/link3.php'">Link3</button><br>

<input type="button" onclick="window.location.href = 'links/link4.php';" value="Link4"/><br>

<form action="links/link5.php" method="get" target="_blank"><button type="submit">Link5</button></form><br>

<form><button type="submit" formaction="links/link6.php">Link6</button></form><br>

<a href="links/link7.php"><img src="link.png"></a><br>

<button type="submit" onClick="GoUrl('links/link8.php')">Link8</button><br>

<form><button formaction="links/link9.php">Link9</button></form><br>

<button type="reset" onclick="location.href='links/link10.php'">Link10</button><br>

<form><input TYPE="button" VALUE="Link11" onclick="window.location.href='links/link11.php'"></form><br>

<button type="button"><a href="links/link12.php">Link12</a></button><br>

<button onclick='window.location.replace("links/link13.php")'>Link13</button><br>

<button onclick='window.location.href = "links/link14.php"'>Link14</button><br>

<button onclick='window.location = "links/link15.php"'>Link15</button><br>

<button onclick='window.open("links/link16.php","_self","","")'>Link16</button><br>

<button onclick='window.location.assign("links/link17.php")'>Link17</button><br>

<input type="submit" name="submit" onClick="window.location= 'links/link18.php'"><br>

</body>
</html>