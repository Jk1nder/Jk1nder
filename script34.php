<html>
<head>
    <title>�����</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    ������ ��� ����� �� �� ����� �������� �� 1 �� 100 ��������� �� �����: <input type="text" name="str"><br>
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
              echo "����� �������� , ������ ���� ����� ���� ��������";
              exit;
         }
         
      }
     foreach ($f2 as $f3 => $f4) {
         
         $f4 = (int)$f4;
        
        if (!is_int($f4) or ($f4<1) or ($f4>100)) {
        echo "����� �������� , ������ ���� ����� ���� ��������";
        exit;
    
    }   
         
     }
foreach ($f2 as $f3 => $f4) {
    
    $f4 = (int)$f4;
    
     $f5=7*$f4;  
    echo "<div style='clear: left'>"; /* ��� �������� ������ ������� ����� �� �������� ������ �������� ���� �� ����� */
    echo "<div style='height: 10px; width: $f5; margin-bottom: 4px; background:red; float: left; '></div>"; /* ������ ������ , ������������ , �� ���� */
    $f6=$f5+30;
   echo "<div  style='float: left; margin-left: 2px'>$f4</div>"; /* ������� ����� �� ����� */
   
    
   
     echo "</div>";
    
}
}
?>


</body>
</html>