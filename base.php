<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=resume"; //連結資料庫
$pdo=new PDO($dsn,'root','');
// session_start();
//查詢及取得特定條件的單筆資料
function find($table,...$arg){//$arg 是一個陣列
    global $pdo;//轉全域變數(因為和資料庫有關)

    $sql="select * from $table where ";
    if(is_array($arg[0])){//如果這是個陣列的話
        //["acc"=>"jay","pw"=>"1234"];
        foreach($arg[0] as $key => $value){//鍵值陣列
            $tmp[]=sprintf("`%s`='%s'",$key,$value);   
        }
        //tmp=["`acc`='jay'","`pw`='1234']
        $sql=$sql . implode(" && ",$tmp);//陣列變成字串
    }else{
        //不是陣列的話預設是id

        $sql=$sql . " id='".$arg[0]."'";
    }
     
    return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
}


//抓取全部的資料
function all($table,...$arg){
    global $pdo;

    $sql="select * from $table ";

    if(!empty($arg[0])){
        foreach($arg[0] as $key => $value){
            $tmp[]=sprintf("`%s`='%s'",$key,$value);
        }

        $sql = $sql . " where " . implode(" && ",$tmp);

    }

    if(!empty($arg[1])){
        $sql=$sql . $arg[1];
    }

    // echo $sql . "<BR>";

   return $pdo->query($sql)->fetchAll();
}

//計算資料筆數
function nums($table,...$arg){
    global $pdo;
  
    $sql="select count(*) from $table";
  
      if(!empty($arg[0])){
  
        foreach($arg[0] as $key => $value){
  
          $tmp[]=sprintf("`%s`='%s'",$key,$value);
  
        }
  
        $sql=$sql . " where " . implode(" && ",$tmp);
  
      }    
  
      if(!empty($arg[1])){
  
        $sql=$sql . $arg[1];
  
      }
  
    //echo $sql;
  
    return $pdo->query($sql)->fetchColumn();  
  
  }
//刪除功能
function del($table,...$arg){
    global $pdo;
    
    $sql="delete  from $table where ";
    if(is_array($arg[0])){
        //["acc"=>"jay","pw"=>"1234"];
        foreach($arg[0] as $key => $value){
            $tmp[]=sprintf("`%s`='%s'",$key,$value);
        }
        //tmp=["`acc`='jay'","`pw`='1234']
        $sql=$sql . implode(" && ",$tmp);//陣列變成字串
    }else{
        //不是陣列的話預設是id

        $sql=$sql . " id='".$arg[0]."'";
    }
    // echo $sql;
    return $pdo->exec($sql);
}

//跳頁功能
function to($path){
    header("location:".$path);
}


//新增與更新功能
function save($table,$data){
    global $pdo;

    if(!empty($data['id'])){
        //update
        foreach($data as $key => $value){
            if($key!="id"){//判斷id不是key值
            $tmp[]=sprintf("`%s`='%s'",$key,$value);
            }
        }

        $sql="update $table set ".implode(",",$tmp)." where `id` ='".$data['id']."'";
        

    }else{
            //insert
            $keys=array_keys($data);
            $keys_str="`" . implode("`,`",$keys) ."`"; //acc`,`pw
            $value_str="'" . implode("','",$data) . "'";
            //["acc"=>"jay","pw"=>"1234];
            //"insert into $table (`".implode("`,`",array_keys($data))."`) values('".implode("','",$data)."')";
      $sql="insert into $table ($keys_str) values($value_str)";
  }
//   echo $sql;
    return $pdo->exec($sql);
}
?>