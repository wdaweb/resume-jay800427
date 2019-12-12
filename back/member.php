<?php
  include "./base.php";
  $userData="member";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>會員資料</title>
  <style>
  h1{
    text-align:center;
  }
  table{
            font-size:20px;
            margin:auto;
            text-align:center;  
            
        }
        td{
          border: 1px solid;
        }
  </style>
</head>
<body>
    <?php
    // $sql="select * from member where 1";
    // $data=$pdo->query($sql)->fetch();
    // 從資料庫裡撈資料，用迴圈來產生資料列表
    $rows=all("$userData");
    foreach($rows as $r){
    ?>
    <h1>我的個人資料</h1>
  <form action="./api/member_edit.php" method="post">
  <table>
  <tr>
    <td>姓名</td>
    <td><input type="text" name="name" id="name" value="<?=$r['name'];?>"></td>
  
  </tr>
  <tr>
    <td>出生年月日</td>
    <td><input type="date" name="birthday" id="addr" value="<?=$r['birthday'];?>"></td>
   
  </tr> 
  <tr>
    <td>戶籍地</td>
    <td><input type="text" name="city" id="city" value="<?=$r['city'];?>"></td>
   
  </tr>
  <tr>
    <td>地址</td>
    <td><input type="text" name="addr" id="addr" value="<?=$r['addr'];?>"></td>
   
  </tr> 
  <tr>
    <td>學歷</td>
    <td><input type="text" name="school" id="school" value="<?=$r['school'];?>"></td>  
  </tr> 
  <tr>
    <td>經歷</td>
    <td><input type="text" name="exp" id="exp" value="<?=$r['exp'];?>"></td>  
  </tr>
  <tr>
    <td>技能</td>
    <td><input type="text" name="skill" id="skill" value="<?=$r['skill'];?>"></td>  
  </tr>
  <tr>
    <td>英文名子</td>
    <td><input type="text" name="eng_name" id="eng_name" value="<?=$r['eng_name'];?>"></td>  
  </tr>
  <tr>
    <td>信箱</td>
    <td><input type="text" name="email" id="email" value="<?=$r['email'];?>"></td>  
  </tr>
  <tr>
    <td colspan="2"><!--合併儲存格(橫向)，rowspan(縱向))-->
        <input type="hidden" name="table" value="<?=$userData;?>">
        <input type="hidden" name="id" value="<?=$r['id'];?>"><!--透過表單的方式傳一個id值給edit_user的這張網頁-->
        <input type="submit" value="編輯" onclick="window.alert('資料已修改完成'); ">
    </td>
  </tr>
  </table>
    <?php
        }
      ?> 
</form>
</body>
</html>