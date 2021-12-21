<html>  
<head>  
    <title>Р¤РѕСЂРјР°</title>  
    <meta charset="UTF-8">  
</head>  
<body>  
  
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">  
      
    <select name="f3" required="required">  
        <option value="">Тип палива°</option>  
        <option value="1">Бензин</option>  
        <option value="2">Дизель</option>  
    
    </select>  
    <br>  
      
      
    Об'єм двигуна ( куб см) : <input type="number" name="f1" required="required"><br>  
    Рік випуску(1970-2021) : <input type="number" name="f2" required="required"><br>  
    Вартість: <input type="number" name="f4" required="required"><br>  
       
    <input type="submit">  
</form>  
<?php  
if ((!empty($_POST['f2'])) and (!empty($_POST['f1'])) and (!empty($_POST['f3'])) and (!empty($_POST['f4']))) {  
    $f2 = test_input($_POST['f2']);  
    $f1 = test_input($_POST['f1']);  
    $f3=test_input($_POST['f3']);  
    $f4=test_input($_POST['f4']);  
      
    if ( (is_numeric($f2)) and ($f2>=1970) and ($f2<=2021) and (is_numeric($f1)) and (is_numeric($f4))) {  
          
        if ($f3==1)  
        {  
        $f5=50;  
        } else  
              
        {  
        $f5=75;  
        }  
              
        $f6=  $f1/1000;  
        $f7= date("Y")-$f2-1;  
        if ($f7===0) $f7=1;  
          
        $f8 = $f5*$f6*$f7;  
           
          
          
        echo ("Акциз: $f8");  
          
    } else   
    {  
      echo ("Погані дані введіть заново");  
          
    }  
}  
  
function test_input($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  
?>  
</body>  
</html>
