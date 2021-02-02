<html>
<head>
<title>Kraud Vulnerable Web Applications | XSS 25 </title>
</head>
<body>
<a href="/kvwa/">Home</a><br>
<h1>XSS 25<h1>

        <?php
        $jsxss="onabort,oncanplay,oncanplaythrough,ondurationchange,onemptied,onended,onerror,onloadeddata,onloadedmetadata,onloadstart,onpause,onplay,onplaying,onprogress,onratechange,onseeked,onseeking,onstalled,onsuspend,ontimeupdate,onvolumechange,onwaiting,oncopy,oncut,onpaste,ondrag,ondragend,ondragenter,ondragleave,ondragover,ondragstart,ondrop,onblur,onfocus,onfocusin,onfocusout,onchange,oninput,oninvalid,onreset,onsearch,onselect,onsubmit,onabort,onbeforeunload,onerror,onhashchange,onload,onpageshow,onpagehide,onresize,onscroll,onunload,onkeydown,onkeypress,onkeyup,altKey,ctrlKey,shiftKey,metaKey,key,keyCode,which,charCode,location,onclick,ondblclick,oncontextmenu,onmouseover,onmouseenter,onmouseout,onmouseleave,onmouseup,onmousemove,onwheel,altKey,ctrlKey,shiftKey,metaKey,button,buttons,which,clientX,clientY,detail,relatedTarget,screenX,screenY,deltaX,deltaY,deltaZ,deltaMode,animationstart,animationend,animationiteration,animationName,elapsedTime,propertyName,elapsedTime,transitionend,onerror,onmessage,onopen,ononline,onoffline,onstorage,onshow,ontoggle,onpopstate,ontouchstart,ontouchmove,ontouchend,ontouchcancel,persisted,javascript";
        $jsxss = explode(",",$jsxss);

        $type = preg_replace("'<script[^>]*?>.*?</script>'si", '', $_POST['type']);
        $type = str_replace($jsxss,"",$type);
        $type = str_replace (array("*","\\"), "", $type );
        $type = strip_tags($type);
        $type = htmlentities($type, ENT_QUOTES, "UTF-8");
        $type = htmlspecialchars($type, ENT_QUOTES);
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