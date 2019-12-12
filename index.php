<?php
    include "base.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>履歷首頁</title>
    <link rel="stylesheet" href="./css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Noto+Sans+TC:400,700&display=swap');
        @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

        body{
            background-image:url(./images/Paradise.jpg);
            font-family: fantasy, 'Noto Sans TC',sans-serif;
            background-size:contain;  
            }
        h1{
            text-align:center;
            margin-top:50px;
            margin-bottom:50px;
            text-shadow:3px 3px 1px #888888;
            color: linear-gradient(yellow,red);
        }
        h3{
            text-align:center;
           
            }
        .menu{
            width:800px;
            height:30px;
            background: linear-gradient(to bottom right,#97ABFF,#123597);
            margin:auto;
            margin-top:30px;
            border-radius:10px;
            box-shadow: 8px 8px 3px #7A7A7A; 
            }
        #box{
            width:800px;
            height:300px;
            background: linear-gradient(to bottom right,#C2FFD8,#465EFB);
            margin:auto;
            margin-top:30px;
            border-radius:10px;
            box-shadow: 8px 8px 3px #7A7A7A; 
            
            }
        #box2{
            width:800px;
            height:500px;
            background: linear-gradient(to bottom right,#C2FFD8,#465EFB);
            margin:auto;
            margin-top:30px;
            text-align:center;
            border-radius:10px;
            box-shadow: 8px 8px 3px #7A7A7A; 
            }
        #box3{
            width:800px;
            height:600px;
            background: linear-gradient(to bottom right,#C2FFD8,#465EFB);
            margin:auto;
            margin-top:30px;
            text-align:center;
            border-radius:10px;
            box-shadow: 8px 8px 3px #888888; 
            }
        #box4{
            width:800px;
            height:500px;
            background: linear-gradient(to bottom right,#C2FFD8,#465EFB);
            margin:auto;
            margin-top:30px;
            text-align:center;
            border-radius:10px;
            box-shadow: 8px 8px 3px #888888; 
            }
        .footer{
            width:800px;
            height:30px;
            background: linear-gradient(to bottom right,#97ABFF,#123597);
            margin:auto;
            margin-top:30px;
            border-radius:10px;
            box-shadow: 8px 8px 3px #888888; 
            }
        #photo{
            width:300px;
            height:300px;
            float:left;
            background-color:blue;
            text-align:center;
        }
        #profile{
            width:500px;
            height:300px;
            float:right;
            background: linear-gradient(to bottom right,#FD6E6A,#FFC600);
            border-radius:0 10px 10px 0;  
            } 
        .art{
            width:180px;
            height:180px;
            display:inline-block;
            margin-right:35px; 
            margin-top:20px; 
            margin-left:20px; 
        }     
        
        table{
            margin:auto;
        }
        #btn1{
            float:right;
            background-color:yellow;
            border-radius:15px;
            weight:50px;
            height:30px;
            
        }
        #list{
            text-align:center;
        }
        #list li{
            display:inline;
            border:2px;
            line-height:30px;
            margin-right:50px;
            font-size:20px;
            border-radius:5px;
            background-color:#E0B5FF;
            box-shadow:2px 2px 1px #888888;
        }
        a{
            color:black;
        }
    </style>
</head>
<body>
    <h1><i class="fas fa-grin-tears">&nbsp;</i>~ Welcome &nbsp; to &nbsp; my &nbsp; resume ~&nbsp;<i class="fas fa-grin-tears"></i></h1>
        <div class="menu">
            <ul id="list">
                <li><a href="#" style="text-decoration:none;float:left;">Jay's&nbsp;Resume</a></li>
                <li><a href="#box" style="text-decoration:none;">My&nbsp;Profile</a></li>
                <li><a href="#box2" style="text-decoration:none;">Skill</a></li>
                <li><a href="#box3" style="text-decoration:none;">Experience</a></li>
                <li><a href="#box4" style="text-decoration:none;">My&nbsp;Item</a></li>
                <input type="button" onclick="location.href='login.php'" value="login" id="btn1" style="font-family:fantasy;">
            </ul>
        </div>
        <div id="box">
            <div id="profile">
            <h3><i class="fas fa-street-view"></i>&nbsp;:&nbsp;<?=find("member",1)['name']?>&nbsp;<?=find("member",1)['eng_name']?></h3>
                <hr>
                <?=find("member",1)['exp']?>
                <br>
                <br>
                &nbsp;<i class="fas fa-user-graduate"></i>&nbsp;:&nbsp;<?=find("member",1)['school']?>
                <br>
                &nbsp;<i class="fas fa-city"></i>&nbsp;:&nbsp;<?=find("member",1)['city']?>
                <br>
                &nbsp;<i class="fas fa-tools"></i>&nbsp;:&nbsp;<?=find("member",1)['skill']?>
                <br>
                &nbsp;<i class="fas fa-envelope-square"></i>&nbsp;:&nbsp;<?=find("member",1)['email']?>
                
            </div>
            <div id="photo">
            <img src="./images/<?=find("logo",3)['file']?>" alt="" style="height:100%;width:100%;border-radius:50%;">
            </div>
        </div>
         <div id="box2">
         <h3>技能</h3>
         <?php
                 $rows=all("skill",['sh'=>1]);
                 foreach($rows as $r){
        ?>
                    <table border="1">
                        <tr>
                            <td>職業技能</td>
                            <td><img src='./images/<?=$r['file'];?>' style='width:50px;height:50px;'></td>
                            <td>技能項目</td>
                            <td><input type="text" name="text" id="text" value="<?=$r['text'];?>"></td>
                        </tr>      
                    </table>
             <?php
                }
             ?>
        </div>
        <div id="box3">
        <h3>經歷</h3>
                    <textarea name="tex" id="tex" cols="100" rows="30"><?=find("tex",1)['tex']?></textarea>
        </div>
        <div id="box4">
        <h3>作品集</h3>
               <?php
                    $work=all("work",['sh'=>1]);
                    foreach($work as $w){
               ?>
                    <div class="art"><img src="./images/<?=$w['file'];?>"style="height:100%;width:100%;"><a href="./MyItem/<?=$w['href']?>/" target="_blank"><?=$w['text']?></div></a>
               <?php
               }
               ?>
        </div>
        <div class="footer">
            <h3>創作者資訊:&nbsp;<?=find("creater",1)['text'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-caret-square-up">&nbsp;<a href="#" style="text-decoration:none;">回置頂端</a></i></h3>
        </div>
</body>
</html>