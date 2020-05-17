<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="scripts/Com.js"></script>
<title>无标题文档</title>
</head>
<body>
<a href="Index.php"><B>首页</B></a>
<hr />
<center><font style="font-family:'华文新魏'; font-size:20px"  >密码修改</font></center>

<?php
 	include "..\Fun.php";//调用Fun.php文件
	if(isset($_POST["update"]))//判断是否点击修改按钮
    {    
	     $test=1;    //只要$test=0，则表单信息就无法提交
		 $role=$_SESSION["role"];//获取用户类别
		 $userid=$_SESSION["userid"];//获取用户名
		 
		 $pwd=$_POST["password"];//获取原密码
		 $newpwd=$_POST["password1"];//获取新密码
		 $confirm=$_POST["password2"];//获取确认密码
		 //若正则表达式含^、$，只有正则表达式与字符串完全匹配，该函数才返回1。
         if($pwd=="") {$pwd1="必须输入原密码！";$test=0;}
         else { $sql= "select * from ".$role." where ".$role."id='".$userid."' and pwd='$pwd'";
	            $result=mysqli_query($conn,$sql);
			    if (mysqli_num_rows($result)==0) {$pwd1="输入的原密码不存在,请重输!";$test=0;}
	       }
         if($newpwd=="") {$newpwd1="必须输入新密码！";$test=0;}
		 if (strcmp($newpwd,$confirm)!=0) {$confirm1="确认密码必须与新密码相同!";$test=0;}
		 if ($test==1)
		 {
		 	$sql="update ".$role." set pwd='$newpwd' where ".$role."id='".$userid."'";
			mysqli_query($conn,$sql);
            echo "<script language='javascript'> alert('修改成功!');</script>";
		 }
		
	}  
?>
<form name="form1" method="post" action="">

	<table width="500" border="1" align="center" cellspacing="0" bordercolor="#328EBE">
      <tr>
        <td width="150" height="30" align="center">原密码</td>
        <td width="350" height="30"><input type="password" name="password" value="<?php echo @$pwd; ?>"/><?php echo "<font size='2' color='FF0000'>".@$pwd1."</font>";?></td>
      </tr>
      <tr>
        <td width="150" height="30" align="center">新密码</td>
        <td width="350" height="30"><input type="password" name="password1" value="<?php echo @$newpwd; ?>"/><?php echo "<font size='2' color='FF0000'>".@$newpwd1."</font>";?></td>
      </tr>
      <tr>
        <td width="150" height="30" align="center">确认密码</td>
        <td width="350" height="30"><input type="password" name="password2" value="<?php echo @$confirm; ?>"/><?php echo "<font size='2' color='FF0000'>".@$confirm1."</font>";?></td>
      </tr>
         <td height="30" colspan="2" align="center">
          <input type="submit" name="update" value="修  改" />        
          </td>
        </tr>
    </table>
	
</form>

</body>
</html>