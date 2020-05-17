<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>个人信息查询</title>
<link href="../css/com.css" rel="stylesheet" />
<style type="text/css">
#table2 {
	width: 50%;
	margin: 0 auto;
}
</style>
<script src="../js/Com.js"></script>
</head>
<body>
<a href="Index.php"><B>首页</B></a>
<hr />
<div style="Display:none">
<?php 
	include "../Fun.php";      //选择数据库
	include "../IsLogin.php";  //判断用户是否登录
	$id=$_SESSION["userid"];	//登陆成功则把用户类别及用户名写入SESSION					
	$result=mysqli_query($conn,"select * from user where userid='$id'");
    $row=mysqli_fetch_array($result);  //数组的键名可以是整数和字段名。
?>
</div>

    <table border="1" cellpadding="4" cellspacing="0" width="500px" id="table2" bordercolor="#328EBE">
        <tr>
          <td colspan="2" align="center" bgcolor="#328EBE" style="font-family:'华文新魏'; font-size:20px"> 个人信息查询</td>
        </tr>
        <tr>
          <td width="35%" align="right">用户名：</td>
          <td><?php echo @$row['userid'];?></td>
        </tr>
        <tr>
          <td width="35%" align="right">密码：</td> 
          <td><?php echo @$row['pwd'];?></td>
        </tr>
        <tr>
          <td width="35%" align="right">手机号码：</td>
          <td><?php echo @$row['telphone'];?></td>
        </tr>        
        <tr>
          <td width="35%" align="right">邮箱：</td>
          <td><?php echo @$row['email'];?></td>
        </tr>		           
		<tr>
          <td colspan="2" align="center" bgcolor="#328EBE">&nbsp;</td>
        </tr>
    </table>
 
</body>
</html>
