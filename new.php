
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap" rel="stylesheet">
    <title>會員頁</title>
    <link rel="stylesheet" href="./css/all.min.css">
    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/js.js"></script>
    <style>
        body{
            background: linear-gradient(#3d72b4,#ffffff);
            background-size:cover;
            background-repeat:no-repeat;
            font-family: 'Noto Sans TC', sans-serif;
        }
        .contain {/*大版面 */
            position:relative;
            top:20px;
            width: 1200px;
            height: 900px;
            background-color: #FFDDAA;
            margin:auto;
            border-radius:10px 10px 20px 20px;
                }
        .menu{/*選單區塊 */
            width: 75%;
            height: 5%;
            background: linear-gradient(#94716b,#b79891);
            border-radius:10px;
            position:absolute;
            top:180px;
            left:155px;
            }
        #main{/*上方大標題 */
            width:100%;
            height:150px;
            background: linear-gradient(#94716b,#b79891);
            text-align:center;
            line-height:140px;
            font-size:60px;
            border-radius:10px 10px 0 0;
            }
        #main2{/*下方內容區 */
            width:75%;
            height:auto;
            background-color:#99BBFF;
            position:absolute;
            top:28%;
            left:13%;
             }
        #box1{
            width: 15%;
            height: 80%;
            background-color:#84C1FF;
            border-radius:10px;
            position:absolute;
            top:10%;
            left:3%;
            text-align:center;
            line-height:35px;
        }
        #box2{
            width: 15%;
            height: 80%;
            background-color:#84C1FF;
            border-radius:10px;
            position:absolute;
            top:10%;
            left:23%;
            text-align:center;
            line-height:35px;
        }
        #box3{
            width: 15%;
            height: 80%;
            background-color:#84C1FF;
            border-radius:10px;
            position:absolute;
            top:10%;
            left:43%;
            text-align:center;
            line-height:35px;
        }
        #box4{
            width: 15%;
            height: 80%;
            background-color:#84C1FF;
            border-radius:10px;
            position:absolute;
            top:10%;
            left:63%;
            text-align:center;
            line-height:35px;
        }
        #box5{
            width: 15%;
            height: 80%;
            background-color:#84C1FF;
            border-radius:10px;
            position:absolute;
            top:10%;
            left:83%;
            text-align:center;
            line-height:35px;
        }
        .link{
            text-align:center;
            font-size:30px;
            text-decoration:none;
        }
        
        #cover{ /*對話視窗 */
            display:none;
            width:100%;
            height:100%;
            background:rgba(200,200,200,0.7);
            position:absolute;
            position:fixed;/*隨視窗移動 */
            z-index: 90;
            top:0;
            left:0;
             }
         #coverr{ /*對話視窗 */
            background:white;
            width:1000px;
            height:400px;
            position:absolute;
            left:435px;
            top:350px;
            border:1px solid #999;
            box-shadow: 0 0 5px #ccc;
            text-align: center;
            padding:20px;
        }
    </style>
</head>
<body>
  <div id="cover" style="display:none; ">
    <div id="coverr">
      <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"
        onclick="cl(cover)">X</a>
      <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
    </div>
  </div>
    <!-- 選單 -->
           
    <div class="contain">
            <div id="main">後&nbsp;台&nbsp;編&nbsp;輯&nbsp;區<i class="fas fa-sign-out-alt"input type="button" onclick="location.href='login.php'" value="會員登入" style="float:left"></i>      
            </div>
            <div class="menu">
                <div id="box1"><a href="?do=member" class="link">個人資料</a></div>
                <div id="box2"><a href="?do=tex" class="link">個人履歷</a></div>
                <div id="box3"><a href="?do=work" class="link">個人作品</a></div>
                <div id="box4"><a href="?do=skill" class="link">個人技能</a></div>
                <div id="box5"><a href="?do=logo" class="link">個人頭貼</a></div>
            </div>
            <div id="main2">
                 <?php
                    //利用網址傳值的方式來取得$_GET['do']的值，這個值代表我們要include進來的檔案
                    $do=(!empty($_GET['do']))?$_GET['do']:"member";

                    //我們將所有要include進來的後台功能檔案都放在 ./admin 目錄下，因此根據GET的值來組合include檔的完整路徑
                    $path="./back/" . $do . ".php";

                    //判斷檔案是否存在來決定是要匯入檔案還是預設匯入title.php
                    if(file_exists($path)){
                        include $path;
                    }else{
                        include "./back/member.php";
                        }
                 ?>
            </div>
    </div>

</body>
</html>