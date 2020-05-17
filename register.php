<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>用户注册</title>
</head>

<body style="background:url(images/bizhi.jpg) no-repeat">
<form action="" method="post">
<table width="35%" border="1" align="center" cellspacing="0" bordercolor="#328EBE" style="margin-top:10%">
  <tr>
    <td align="center" valign="middle" bgcolor="#328EBE"><h2>用户注册</h2></td>
  </tr>
  <tr>
    <td height="133">
	<table width="328" border="0" align="center">
      <tr>
        <td width="98" height="30" align="center">用户名：</td>
        <td width="230" height="30"><input name="username" type="text" size="26" placeholder="用户名"/></td>
      </tr>
      <tr>
        <td height="30" align="center">密 码：</td>
        <td height="30"><input name="password" type="password" size="26" placeholder="密码"/></td>
      </tr>
      <tr>
        <td height="30" align="center">手机号码：</td>
        <td height="30"><input name="telphone" type="tel" size="26" placeholder="手机号码"/></td>
      </tr>
      <tr>
        <td height="30" align="center">邮 箱：</td>
        <td height="30"><input name="email" type="text" size="26" placeholder="邮箱"/></td>
      </tr>

         <td height="30" colspan="2" align="center"><input type="submit" name="set" value="提    交" />&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="submit" name="back" value="返回登陆" /></td>
        </tr>
    </table>
	</td>
  </tr>
</table>
</form>
<?php
	header('Content-Type:text/html;charset=utf-8');
	session_start();      //启动会话
	session_destroy();	//删除会话所占空间。	
		
	include "Fun.php";//调用Fun.php文件
	if(isset($_POST["back"]))
	{
		echo "<script>location.href='Login'</script>";
		}
	if(isset($_POST["set"]))
	{
//	//查看提交的表单
//	var_dump($_POST);

	//获取注册用户的信息
	$_POST['username'];
	$_POST['password'];
	$_POST['telphone'];
	$_POST['email'];

//当没有表单提交时退出程序
if(empty($_POST)){
	die('没有表单提交，程序退出');
}

//判断表单中各字段是否都已填写
$chcek_fields = array('username','password','telphone','email');
foreach($chcek_fields as $v){
	if(empty($_POST[$v])){
		die('错误：'.$v.'字段不能为空！');
	}
}

//接收需要处理的表单字段
$username = $_POST['username'];
$password = $_POST['password'];
$telphone = $_POST['telphone'];
$email = $_POST['email'];

//防止SQL注入
$username = mysql_real_escape_string($username);
$telphone = mysql_real_escape_string($telphone);
$email = mysql_real_escape_string($email);

//判断用户名是否存在
$sql = "select `id` from `user` where `userid`='$username'";
$rst = mysqli_query($conn,$sql);
if(mysqli_fetch_row($rst)){
	die('用户名已经存在，请换个用户名。');
}

//拼接SQL语句
$sql = "insert into `user` (`userid`,`pwd`,`telphone`,`email`) values ('$username','$password','$telphone','$email')";

//执行SQL语句
$rst = mysqli_query($conn,$sql);

//输出执行的SQL语句和执行结果，便于调试程序
if($rst){
	echo "<h1 align='center'>注册成功！</h1>";
}else{
	echo '注册失败！'.mysql_error();
}
	}
?>
</body>
</html>