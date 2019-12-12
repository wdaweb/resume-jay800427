
    <h1>我的個人資料</h1>
<form action="./api/edit.php" method="post">
<table style="width:600px;margin:auto;">
<tr>
    <td>姓名</td>
    <td><input type="text" name="name" id="name" value=""></td>
  
  </tr>
  <tr>
    <td>出生年月日</td>
    <td><input type="date" name="birthday" id="addr" value=""></td>
   
  </tr> 
  <tr>
    <td>戶籍地</td>
    <td><input type="text" name="city" id="city" value=""></td>
   
  </tr>
  <tr>
    <td>地址</td>
    <td><input type="text" name="addr" id="addr" value=""></td>
   
  </tr> 
  <tr>
    <td>學歷</td>
    <td><input type="text" name="school" id="school" value=""></td>  
  </tr> 
  <tr>
    <td>經歷</td>
    <td><input type="text" name="exp" id="exp" value=""></td>  
  </tr>
  <tr>
    <td>技能</td>
    <td><input type="text" name="skill" id="skill" value=""></td>  
  </tr>
  <tr>
    <td>電話</td>
    <td><input type="text" name="tel" id="tel" value=""></td>  
  </tr>
  <tr>
    <td>信箱</td>
    <td><input type="text" name="email" id="email" value=""></td>  
  </tr>
    <tr>
        <td colspan="2" class="cent">
            <!--我們透過admin頁面底下的title檔案傳了一個id值過來，因為是用網址帶值的方式來判斷id值所以這裡用Get-->
            <input type="hidden" name="id" value="<?=$_r['id'];?>">
            <input type="submit" value="更新">
            <input type="reset" value="重置">
        </td>
    </tr>
</table>

</form>