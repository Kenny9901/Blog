<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>个人博客</title>
</head>
<?php session_start(); include "IsLogin.php";//判断用户是否登录 ?>
<frameset rows="106,*,26" cols="*" frameborder="no" border="0" framespacing="0"> 
  <frame name="top" scrolling="no" noresize src="Top.php" >
  <frameset rows="*" cols="190,*" framespacing="0" frameborder="NO" border="0" id="myFrame"> 
    <frame name="menu" noresize scrolling="auto" src="Menu.php">
    <frame name="main" scrolling="auto" src="<?php echo @$_SESSION['role'].'/Index.php';?>" >
  </frameset>
  <frame name="foot" noresize scrolling="no" src="Foot.php"> 
</frameset>
<noframes>
<body>
</body>
</noframes>
</html>
