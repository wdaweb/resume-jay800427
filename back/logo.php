
<?php include "./base.php";
  $userData="logo";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>大頭貼</title>
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
  </style>
</head>
<body>

  <h1>我的大頭貼</h1>
  <form action="./api/edit.php" method="post">
    <table border="1">
        <tr>
          <td>網站頭貼</td>
          <td>替代文字</td>
          <td>顯示</td>
          <td>刪除</td>
          <td>操作</td>
        </tr>
        <?php
        // 從資料庫裡撈資料，用迴圈來產生資料列表
          $rows=all($userData);
          foreach($rows as $r){
        ?>
        <tr>
          <td><img src="./images/<?=$r['file'];?>" style="width:100px;height:100px"></td>
          <td><input type="text" name="text[]" value="<?=$r['text'];?>"></td>
          <td><input type="radio" name="sh" value="<?=$r['id'];?>" <?=($r['sh']==1)?"checked":"";?>></td>
          <td><input type="checkbox" name="del[]" value="<?=$r['id']?>"></td>
          <td>
              <input type="button" onclick="op('#cover','#cvr','./view/update_<?=$userData;?>.php?id=<?=$r['id']?>&table=<?=$userData;?>')" value="更新圖片">
          </td>
            <!--這裹帶入一個隱藏欄位用來存放資料表名稱，以利api識別要處理的目標資料表-->
            <input type="hidden" name="table" value="<?=$userData;?>">
            <input type="hidden" name="id[]" value="<?=$r['id'];?>">
        </tr>
        <?php
          }
          ?>
        </table>
       <table>
        <tr>
          <td><input type="button"
              onclick="op('#cover','#cvr','./view/<?=$userData;?>.php?table=<?=$userData;?>')" value="新增大頭貼"></td>
          <td colspan="4"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
        </tr>
    </table>
  </form>
</body>
</html>
