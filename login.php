<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap" rel="stylesheet">
    <title>登入畫面</title>
    <style>
    h1{
        text-align:center;
        font-size:40px;
    }
    body{
        background: linear-gradient(#3d72b4,#ffffff);
        background-size:cover;
        background-repeat:no-repeat;
        font-family: 'Noto Sans TC', sans-serif;
    }
    table{/*版型置中，陰影，寬度，字型 */
    margin:auto;
    width:600px;
    text-align:center;
    font-size:25px;
    background-color:#99BBFF;
    margin-top:80px;
        }
    tr{
       height:80px;
       padding:10px;
      }
    .btn{/*按鈕樣式設定 */
    width:120px;
    height:40px;
    background-color:#FFFF78;
    border-radius:10px;
    border:1px black double;
    font-size:20px;
    } 
    .menu{
        position:absolute;
        margin:auto;
        width:800px;
        height:150px;
        /* background-color:#DDAA00; */
        background: linear-gradient(#94716b,#b79891);
        border-radius: 10px 10px 0 0;
    }
    .main{
        position:relative;
        margin:auto;
        width:800px;
        height:550px;
        background-color:blue;
        border-radius:10px;
        top:220px;
    }
    .main2{
        position:absolute;
        margin:auto;
        top:150px;
        width:800px;
        height:400px;
        background-color:#FFDDAA;
        border-radius: 0 0 10px 10px;
    }
    </style>
</head>
<body>

<?php
if(!empty($_GET['s'])){
  echo "註冊成功，請輸入帳密以登入";
}
if(!empty($_GET['err'])){
  echo "帳號或密碼有誤，請重新輸入";
}
?>


<div class="main">
<div class="menu"><h1>會&nbsp;員&nbsp;登&nbsp;入&nbsp;頁</h1></div>
<div class="main2">
<form action="./login_api.php" method="post">
<table border="1">
<tr>
    <td>帳號:</td>
    <td><input type="text" name="acc" id="acc" style="font-size:30px;"></td>
</tr>
<tr>
    <td>密碼:</td>
    <td><input type="password" name="pw" id="pw" style="font-size:30px;"></td>
</tr>
<tr>
    <td><input type="button" onclick="location.href='index.php'" value="回首頁" class="btn" style="font-family: 'Noto Sans TC', sans-serif;"></td>
    <td>
    <input type="submit" value="登入" class="btn" style="font-family: 'Noto Sans TC', sans-serif;">
    <input type="reset" value="重置" class="btn" style="font-family: 'Noto Sans TC', sans-serif;">
    </td>
</tr>

</table>
</form>
</div>
</div>

</body>
</html>