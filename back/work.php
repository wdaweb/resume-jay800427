<?php include "./base.php";
  $userData="work";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>作品集</title>
    <style>
    h1{
        text-align:center;
        font-size:42px;
      }
      table{
            font-size:20px;
            margin:auto;
            text-align:center;
            vertical-align: middle;
        
        }
        td{
          border: 1px solid;
          vertical-align: middle;
        }
        #a{
          text-align:center;
        }
    </style>
</head>
<body>
    <h1>作品集</h1>
    <form action="./api/edit.php" method="post">
    <table border="1">
        <tr>
          <td>作品</td>
          <td>作品項目</td>
          <td>路徑</td>
          <td>顯示</td>
          <td>刪除</td>
          <td>操作</td>
        </tr>
        <?php
        // 先取得資料表中的總筆數(要注意是否有條件限制，比如顯示不顯示)
        $sum=nums($userData);

        // 決定每個頁面的筆數
        $div=3;

        // 計算總頁數(無條件進位法)
        $pages=ceil($sum/$div);

        // 採用網址參數的方式來取得當前頁，預設為第一頁
        $p=(!empty($_GET['p']))?$_GET['p']:1;

        // 計算資料的開始筆數((當前頁-1)*每頁筆數)
        $start=($p-1)*$div;

        // 下SQL查詢語法(LIMIT start,amount) 及 取出分頁資料
        $rows=all($userData,[]," LIMIT $start,$div");

        //以迴圈的方式逐筆列出資料
        foreach($rows as $r){
        ?>
        <tr>
          <td><img src="./images/<?=$r['file'];?>" style="width:100px;height:100px"></td>
          <td><input type="text" name="text[]" value="<?=$r['text'];?>"></td>
          <td><input type="text" name="href[]" value="<?=$r['href'];?>"></td>
          <td><input type="checkbox" name="sh[]" value="<?=$r['id'];?>" <?=($r['sh']==1)?"checked":"";?>></td>
          <td><input type="checkbox" name="del[]" value="<?=$r['id']?>"></td>
          <td>
              <input type="button" onclick="op('#cover','#cvr','./view/update_<?=$userData;?>.php?id=<?=$r['id']?>&table=<?=$userData;?>')" value="編輯">
          </td>
            <!--這裹帶入一個隱藏欄位用來存放資料表名稱，以利api識別要處理的目標資料表-->
            <input type="hidden" name="table" value="<?=$userData;?>">
            <input type="hidden" name="id[]" value="<?=$r['id'];?>">
        </tr>
        <?php
          }
          ?>
        </table>
        <div id="a">
    <?php

        if(($p-1)>0){
          echo "<a href='new.php?do=$userData&p=".($p-1)."' style='text-decoration:none'> < </a>";
        }

        for($i=1;$i<=$pages;$i++){
          $fontSize=($i==$p)?"24px":"16px";
          echo "<a href='new.php?do=$userData&p=$i' style='font-size:$fontSize;text-decoration:none'> ".$i." </a>";
        }

        if(($p+1)<=$pages){
          echo "<a href='new.php?do=$userData&p=".($p+1)."' style='text-decoration:none'> > </a>";
        }
    ?>
    </div> 
       <table>
        <tr>
          <td><input type="button"
              onclick="op('#cover','#cvr','./view/<?=$userData;?>.php?table=<?=$userData;?>')" value="新增作品"></td>
          <td colspan="4"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
        </tr>
    </table>
  </form>

</body>
</html>