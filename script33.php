<html> 
<head> 
    <title>Форма</title> 
    <meta charset="UTF-8"> 
</head> 
<body> 
 
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post"> 
    Висота піраміди: <input type="number" name="$f1"><br> 
    <input type="submit"> 
</form> 
    <p align="right"> 
<?php 
    $f1 = $_POST['$f1']; 
    if ($f1 >= 1 and  $f1 <= 15) 
    { 
    echo "all good". "<br>"; 
    } 
    else { 
        echo "all bad";  
    } 
        if ($f1 >= 1 and  $f1 <= 15) 
    { 
    for ($f2 = 0; $f2 < $f1; $f2++) 
    { 
        for ($f3 = 0; $f3 < $f1 - 1 - $f2; $f3++) 
        { 
            echo " "; 
        } 
        for ($f3 = 0; $f3 < $f2 + 1; $f3++) 
        { 
            echo "#"; 
        } 
        echo "<br>"; 
    } 
    } 
?> 
    </p> 
</body> 
</html>
