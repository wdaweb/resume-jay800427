<?php
include "../base.php";


    $tex=$_POST['tex'];
    $id=$_POST['id'];//這邊的id是抓member頁面的，而不是我資料庫那邊的id


//底下才是透過資料庫的語法去變更我資料庫的檔案(所以當我要設計登入系統時，表單內容必須要和資料庫內容要一致)
//$sql="update user set name='$name',addr='$addr',tel='$tel',birthday='$birthday',email='$email' where id='".$_SESSION['id']."'";
//資料庫語法:update(更新) user(我資料庫裡有的一張user表單) set(更改) where id(從我表單裡的所有列表)
$sql="update tex set tex='$tex' where id='$id'";//更新我資料庫那裏的檔案

$pdo->exec($sql);//用PDO的連結方式把$sql語法傳給資料庫
header("location:../new.php?do=tex");//因為是在本地端，編輯完成會看不出有沒有編輯成功(所以為了方便知道而多了一個編輯完成的提示)




?>

?>