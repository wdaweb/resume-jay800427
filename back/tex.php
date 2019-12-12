<?php
include "base.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>自傳</title>
    <style>
    @import url('https://fonts.googleapis.com/css?family=Noto+Sans+TC:400,700&display=swap');

        body{/*字型和背景 */
                font-family: 'Noto Sans TC', sans-serif;
             }
        h1{
            text-align:center;
          }
        table{
            font-size:20px;
            margin:auto;
            text-align:center;
        }
        textarea{
            background-color:#FFDDAA;
        }
    </style>
</head>
<body>
<h1>我的自傳</h1>
<?php
$sql="select * from tex where 1";
$data=$pdo->query($sql)->fetch();
?>
<form action="./api/tex_edit.php" method="post">
    <table border="1">
        <tr>
            <td colspan="2">自傳</td>
        </tr>
        <tr>
            <td>內容</td>
            <td><textarea name="tex" id="tex" cols="100" rows="20" style="font-size:15px;color:blue;font-family:'Noto Sans TC';'background-color:#FFF0D4;'"><?=$data['tex'];?></textarea></td>
        </tr>
        <tr>
            <td colspan="2"><!--合併儲存格(橫向)，rowspan(縱向))-->
                <input type="hidden" name="id" value="<?=$data['id'];?>"><!--透過表單的方式傳一個id值給edit_user的這張網頁-->
                <input type="submit" value="編輯" onclick="window.alert('資料已修改完成'); ">
            </td>
        </tr>
    </table>
    </form>
</body>
</html>