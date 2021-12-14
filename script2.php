<html>
    <head>
        <title>Форма</title>
        <meta charset="UTF-8">
    </head>
    <body>

    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        Ваша почта: <input type="text" name="email"><br>
        <input type="submit">
    </form>
<?php
$email = $_POST['email'];
$positionofdog =   strpos($email, "@");
$postochka= strpos($email, '.', $positionofdog);
if (($positionofdog>=1) and ($postochka>$positionofdog) and !strpos($email, ".", -1))
   {
       
        echo "all ok"; 
   } else 
   {
      echo "all bad"; 
   }
?>
</body>
</html>