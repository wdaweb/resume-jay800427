<?php
include "base.php";
session_start();
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
  $_SESSION['login']=1;//判斷登入有無成功
  $_SESSION['id']=$data['id'];//判斷登入後有沒有抓到id的資料
  header("location:new.php");
}else{
  echo "登入失敗";
  header("location:login.php?err=1");
}

?>