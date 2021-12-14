<html>
<head>
    <title>Форма</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Введіть ПІБ: <input type="text" name="name"><br>
    <input type="submit">
</form>
<?php
if (!empty($_POST['name'])) {
    
   
    $f6 = trim($_POST['name']); 
    
    
    $f3=mb_strpos($f6, " ");
    $f4= mb_substr($f6,0,  $f3);
    $initials[0]=mb_strtoupper(mb_substr($f4, 0, 1));
    
    $f2= trim(mb_substr($f6, $f3, mb_strlen($f6)));
    
    $f3=mb_strpos($f2, " ");
    $f5= mb_substr($f2,0, $f3);
    $initials[1]=mb_strtoupper(mb_substr($f5, 0, 1));
    
    $f2= trim(mb_substr($f2, $f3, mb_strlen($f6)));
    
    $f1=mb_substr($f2,0, mb_strlen($f2));
    $initials[2]=mb_strtoupper(mb_substr($f1, 0, 1));   
    
    
    
    
    echo "Ініціали: $initials[0]$initials[1]$initials[2]";
   
   
   
   
}
?>

</body>
</html>