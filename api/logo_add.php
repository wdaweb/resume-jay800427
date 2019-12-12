<?php
include_once "../base.php";

//取得要編輯資料的資料表名稱
$table=$_POST['table'];

//判斷是否有成功上傳檔案，進行取得檔名及搬移檔案的動作
if(!empty($_FILES['file']['tmp_name'])){
    $data['file']=$_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'],"../images/".$data['file']);
}

//依據不同的資料表來做不同的動作
switch($table){
    case "member":
        $data['name']=$_POST['name'];
        $data['birthday']=$_POST['birthday'];   
        $data['city']=$_POST['city'];  
        $data['addr']=$_POST['addr'];  
        $data['school']=$_POST['school'];  
        $data['exp']=$_POST['exp'];  
        $data['skill']=$_POST['skill'];       
        $data['eng_name']=$_POST['eng_name']; 
        $data['email']=$_POST['email'];         
    break;

    case "tex":
        $data['tex']=$_POST['tex'];                  
    break;
    default:
       //判斷是否有傳遞text欄位的資料，有的話就進行資料的取得
    if(!empty($_POST['text'])){
        $data['text']=$_POST['text'];
        }  
    }


//利用save()函式將該筆資料寫回資料表
save($table,$data);

to("../new.php?do=$table");

?>