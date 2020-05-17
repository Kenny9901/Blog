<a href="Index.php"><B>首页</B></a>
<hr>
<?php
    include("..\Fun.php"); //引入连接数据库
    if (!empty($_POST['sub'])) {    
        $title = $_POST['title'];  //获取title表单内容
		$author = $_POST['author'];
        $con = $_POST['con'];      //获取contents表单内容
        $sql= "insert into article values (null,'0','$title','$author',now(),'$con')";    
        mysqli_query($conn,$sql);    
        echo "添加成功!";
}?>
<form action="article_add.php" method="post">
    标题:<br>
    <input type="text" name="title"><br><br>
    作者:<br>
    <input type="text" name="author"><br><br>
    内容:<br>
    <textarea rows="10" cols="200" name="con" wrap="hard"></textarea><br><br>
    <input type="submit"  name="sub" value="提交">
</form>