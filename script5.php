<html>
<head>
    <title>Фform</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <input type="text" name="name"><br>
    <input type="submit">
</form>
<?php
$name = $_POST['name'];
$pattern = "/^[а-я\-\s]+$/iu";
var_dump(preg_match($pattern,$name));
echo $name;
?>
</body>
</html>