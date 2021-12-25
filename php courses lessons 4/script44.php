<html>
<head>
    <title>4</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Enter words but no more than forty characters in the word: <input type="text" name="name"><br>
    <input type="submit">
</form>
<?php
if (!empty($_POST['name'])) {
    $f1 = $_POST['name'];
$f2 = explode(' ',$f1); 
foreach ($f2 as $key => $value) {
 if (mb_strlen($f2[$key])>40) {
echo "Please observe the input conditions";
exit;
}
} 
$strlen = 0; 
$array = []; 
$i = 0; 
foreach($f2 as $value){ 
 $strlen++; 
 $strlen += mb_strlen($value); 
 if($strlen >= 40){ 
  $i++; 
  $strlen = 0; 
 } 
 $array[$i] .= $value." "; 
} 
$result = implode("<br>",$array); 
print_r($result); 
echo $newtext; 

}
?>

</body>
</html>
