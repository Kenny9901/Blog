<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>无标题文档</title>
<link href="css/Index.css" rel="stylesheet" />
</head>

<body>
    <div class="header">
        <label class="logo-title">个人博客</label>
       <embed src="music/ROOK1E,J'san - pure imagination.mp3" autostart="true" loop=-1 width="100" height="50" style="float:right"></embed>
    </div>
    <div class="nav">
	 <?php 
	      session_start();
		  $role="管理员";
		  if($_SESSION["role"]=="user") $role="用户";
		  echo "当前用户类别：".$role."，用户名：".$_SESSION["userid"];
	?>
    </div>
</body>
</html>
