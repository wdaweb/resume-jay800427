<?php
include "base.php";

?>
<?php

$acc=$_POST['acc'];//抓input那邊傳過來的name
$pw=$_POST['pw'];

echo $acc;
echo "<br>";
echo $pw;

$sql="select id from user where acc='$acc' &&  pw='$pw'";

$data=$pdo->query($sql)->fetch();

echo "<br>";
print_r($data);

if(!empty($data)){
  echo "<br>";
  echo "登入成功";
  header("location:new.php");
}else{
  echo "登入失敗";
  header("location:login.php?err=1");
}

?>