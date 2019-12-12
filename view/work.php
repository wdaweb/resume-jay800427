<h1>作品集新增</h1>
<hr>
<form action="./api/work_add.php" method="post" enctype="multipart/form-data">
<table style="width:600px;margin:auto;">
    <tr>
        <td>標題區圖片:</td>
        <td><input type="file" name="file"></td>
    </tr>
    <tr>
        <td>標題區替代文字:</td>
        <td><input type="text" name="text"></td>
    </tr>
    <tr>
        <td>網址路徑:</td>
        <td><input type="text" name="href"></td>
    </tr>
    <tr>
        <td colspan="2" class="cent">
            <input type="hidden" name="table" value="<?=$_GET['table'];?>">
            <input type="submit" value="新增">
            <input type="reset" value="重置">
        </td>
    </tr>
</table>
</form>