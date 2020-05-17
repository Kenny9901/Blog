<a href="Index.php"><B>首页</B></a>
<hr>
<?php
include("..\Fun.php"); //引入连接数据库
    if (!empty($_GET['id'])) {        
    $id = $_GET['id'];        
    $sql ="select * from article where id='$id'";    
        $query = mysqli_query($conn,$sql);        
        $rs = mysqli_fetch_array($query);        
        $sqlup = "update article set hits=hits+1 where id='$id'";        
        mysqli_query($conn,$sqlup);
    }?>
<h2>标题: <?php echo $rs['title'];?> </h2>
<h3>作者: <?php echo $rs['author']; ?></h3>
<h3>日期: <?php echo $rs['date'];?>  
点击量: <?php echo $rs['hits']; ?></h3>
<hr>
<p>内容: <br /><pre><?php echo $rs['contents']; ?></pre></p>
<hr />