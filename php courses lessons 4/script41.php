<html>
<head>
    <title>Forms</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Your names: <input type="text" name="name"><br>
    <input type="submit">
</form>
<?php
if (!empty($_POST['name'])) { 
    $f1 = $_POST['name']; 
  $f2 = explode(",", $f1); 
  foreach ($f2 as $key => $value) {
      $f2[$key]=trim($value);
  }
   sort($f2, SORT_STRING);  
   echo implode(", ",$f2);
   
}
?>

</body>
</html>