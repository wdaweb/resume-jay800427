<?php
include_once "../base.php";

//取得要編輯資料的資料表名稱
$table=$_POST['table'];

//利用迴圈來判斷資料要刪除還是更新內容
foreach($_POST['id'] as $key => $id){
    if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
        del($table,$id);
    }else{

        //先取出該筆資料
        $data=find($table,$id);

        //依據不同的資料表來做不同的動作
        switch($table){
            case "logo":
                //將欄位內容更新成表單傳遞過來的內容
                //有陣列才用key
                $data['text']=$_POST['text'][$key];
                $data['sh']=($id==$_POST['sh'])?1:0;
            break;
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
            case "skill":
                $data['text']=$_POST['text'][$key];
                $data['sh']=(in_array($id,$_POST['sh']))?1:0;//多筆資料要判斷陣列裡有沒有這筆id    
            break;
            case "work":
                $data['href']=$_POST['href'][$key];
                $data['text']=$_POST['text'][$key];
                $data['sh']=(in_array($id,$_POST['sh']))?1:0;//多筆資料要判斷陣列裡有沒有這筆id    
            break;
            case "tex":
                $data['tex']=$_POST['tex'];                  
            break;
            default:
                //將欄位內容更新成表單傳遞過來的內容
                $data['text']=$_POST['text'][$key];
                $data['sh']=(in_array($id,$_POST['sh']))?1:0;
        }


        //利用save()函式將該筆資料寫回資料表
        save($table,$data);
    }
}

//返回功能頁面
to("../new.php?do=$table");

?>