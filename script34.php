<html>
<head>
    <title>Форма</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Введіть цілі числа від які мають інтервал від 1 до 100 розділяючи їх комою: <input type="text" name="str"><br>
    <input type="submit">
</form>
    

    
<?php
if (!empty($_POST['str'])) {
    $f1 = $_POST['str'];
    $f1 = str_replace(" ", '', $f1);
   $f2 = explode(",", $f1);
   
     echo "<div></div>";
      foreach ($f2 as $f3 => $f4) {
         if (!is_numeric($f4)) {
              echo "Невірні значення , введіть будь ласка інші значення";
              exit;
         }
         
      }
     foreach ($f2 as $f3 => $f4) {
         
         $f4 = (int)$f4;
        
        if (!is_int($f4) or ($f4<1) or ($f4>100)) {
        echo "Невірні значення , введіть будь ласка інші значення";
        exit;
    
    }   
         
     }
foreach ($f2 as $f3 => $f4) {
    
    $f4 = (int)$f4;
    
     $f5=7*$f4;  
    echo "<div style='clear: left'>"; /* для коректної побуди діаграми тобто всі елементи будуть розміщенні один під одним */
    echo "<div style='height: 10px; width: $f5; margin-bottom: 4px; background:red; float: left; '></div>"; /* розміри діаграм , розташування , та колір */
    $f6=$f5+30;
   echo "<div  style='float: left; margin-left: 2px'>$f4</div>"; /* відстань цифри від рядку */
   
    
   
     echo "</div>";
    
}
}
?>


</body>
</html>