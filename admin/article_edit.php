<a href="Index.php"><B>首页</B></a>
<hr>
<?php
    include("..\Fun.php"); //引入连接数据库
//获取数据库表数据
	if (!empty($_GET['id'])) {    
    $edit = $_GET['id'];    
    $sql = "select * from article where id='$edit'";    
    $query = mysqli_query($conn,$sql);    
    $rs = mysqli_fetch_array($query);
}//更新数据库表数据
	if (!empty($_POST['sub'])) {    
    $title = $_POST['title'];  //获取title表单内容
	$author = $_POST['author'];   //获取author表单内容
    $con = $_POST['con'];      //获取contents表单内容
    $hid = $_POST['hid']; 
    $sql= "update article set title='$title', author='$author', contents='$con' where id='$hid' ";    
    mysqli_query($conn,$sql);    
    echo "<script>alert('修改成功！');location.href='Index.php'</script>";
}?>
<form action="article_edit.php" method="post">
    <input type="hidden" name="hid" value="<?php echo $rs['id'];?>">
    标题:<br>
    <input type="text" name="title" value="<?php echo $rs['title'];?>">
    <br><br>
    作者:<br />
    <input type="text" name="author" value="<?php echo $rs['author'];?>" />
    <br /><br />
    内容:<br>
    <textarea rows="20" cols="200" name="con" ><?php echo $rs['contents'];?></textarea><br><br>
    <input type="submit"  name="sub" value="更新">
</form>