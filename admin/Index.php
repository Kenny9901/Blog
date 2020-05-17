<form action="" method="get" style='align:"right"'>
    <input type="text" name="keys" >
    <input type="submit" name="subs" value="查找" >
</form>
<hr>
<?php
    include("..\Fun.php"); //引入连接数据库
       if (!empty($_GET['keys'])) {        
       $key = $_GET['keys'];        
       $w = " title like '%$key%'";
    }else{        
    $w=1;
    }    
    $sql ="select * from article where $w order by id desc";    
    $query = mysqli_query($conn,$sql);    
    while ($rs = mysqli_fetch_array($query)) {
?>
<h2>标题: <a href="article_view.php?id=<?php echo $rs['id']; ?>"><?php echo $rs['title']; ?></a>
    | <a href="article_edit.php?id=<?php echo $rs['id']; ?>">编辑</a> 
    | <a href="article_del.php?id=<?php echo $rs['id']; ?>">删除</a> |
</h2>
<h3>作者: <?php echo $rs['author']; ?></h3>
<li>日期: <?php echo $rs['date']; ?></li>
<hr>
<?php
};?>
