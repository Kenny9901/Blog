<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>个人博客</title>
</head>
<script language="JavaScript">
   if(window.top.location.href!=window.location.href)
   {
	   window.top.location.href=window.location.href;
   }
</script>

<body style="background:url(images/bizhi.jpg) no-repeat">
<form action="" method="post">
<table width="35%" border="1" align="center" cellspacing="0" bordercolor="#328EBE" style="margin-top:10%">
  <tr>
    <td align="center" valign="middle" bgcolor="#328EBE"><h2>个人博客</h2></td>
  </tr>
  <tr>
    <td height="133">
	<table width="328" border="0" align="center">
      <tr>
        <td width="98" height="30" align="center">用户名：</td>
        <td width="230" height="30"><input name="userid" type="text" size="26" placeholder="用户名"/></td>
      </tr>
      <tr>
        <td height="30" align="center">密 码：</td>
        <td height="30"><input name="password" type="password" size="26" placeholder="密码"/></td>
      </tr>
      <tr>
        <td height="30" colspan="2" align="center">
		   <input name="role" type="radio" value="admin" checked="checked" />管理员
		   <input name="role" type="radio" value="user" />用户       
         </td>
        </tr>
         <td height="30" colspan="2" align="center"><input type="submit" name="login" value="登    录" />&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="register" value="用户注册" /></td>
        </tr>
    </table>
	</td>
  </tr>
</table>
</form>

<?php
	session_start();      //启动会话
	session_destroy();	//删除会话所占空间。	
		
	include "Fun.php";//调用Fun.php文件
	if(isset($_POST["register"]))
	{
		echo "<script>location.href='register'</script>";
		}
	if(isset($_POST["login"]))
    {
		 $role=$_POST["role"];          //获取用户类别
		 $userid=trim($_POST["userid"]);//获取用户名
		 $pwd=trim($_POST["password"]); //密码
		 $sql= "select * from $role where ".$role."id='$userid' and pwd='$pwd'";
		 $result=mysqli_query($conn, $sql);				 
		 $row=mysqli_fetch_array($result);			
		 if($row)  
		 {
		 	//登陆成功则把用户类别及用户名写入SESSION
			$_SESSION["role"]=$role;
			$_SESSION["userid"]=$userid;
			echo "<script>location.href='Index.php';</script>"; 
		 }
		 else
		 {
			echo "<script>alert('用户名或密码错!');location.href='Login.php';</script>"; 
		 } 
	} 
?>
</body>
</html>