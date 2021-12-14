<html>
<head>
    <title>Форма</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Введіть список імен: <input type="text" name="name"><br>
    <input type="submit">
</form>
<?php
    $name = $_POST['name'];
    $name = str_replace(",", ";", $name);
    echo "$name!<br>";
?>

</body>
</html>
