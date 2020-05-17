<a href="index.php"><B>首页</B></a>
<hr>
<?php    
    include("..\Fun.php"); //引入连接数据库
    if (!empty($_GET['id'])) {        
             $del = $_GET['id'];  //删除blog
        $sql= "delete from article where id='$del' ";        
        mysqli_query($conn,$sql);        
        echo "删除成功!";
}?>