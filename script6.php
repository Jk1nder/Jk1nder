<html>
<head>
    <title>Форма</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Текст: <input type="text" name="text"><br>
    <input type="submit">
</form>
<?php
if (!empty($_POST['text'])) {
    $text = $_POST['text'];      
    
    $pattern = '/\b(http|https|ftp|rtmp|rtsp|gopher|mailto|news|nntp|irc|smb|prospeto|telnet|wais|xmpp|file|data|tel|cid|mid|nfs|tg):\/\/([a-z0-9-]+\.)+[a-z]{2,4}(\/[a-z0-9-]+)*\/?\b/i';
   
    $text = preg_replace($pattern, '<a href="$0">$0</a>', $text);  
    
    echo $text;
    }
?>

</body>
</html>