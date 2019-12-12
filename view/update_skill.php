
<H1>更新技能頁面</H1>
<form action="./api/skill_edit.php" method="post" enctype="multipart/form-data">
<table style="width:600px;margin:auto;">
    <tr>
        <td>標題區圖片:</td>
        <td><input type="file" name="file"></td>
    </tr>
    <tr>
        <td colspan="2" class="cent">
            <!--我們透過admin頁面底下的title檔案傳了一個id值過來，因為是用網址帶值的方式來判斷id值所以這裡用Get-->
            <input type="hidden" name="id" value="<?=$_GET['id'];?>">
            <input type="hidden" name="table" value="<?=$_GET['table'];?>">
            <input type="submit" value="更新">
            <input type="reset" value="重置">
        </td>
    </tr>
</table>
</form>