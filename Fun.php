<?php
    //连接数据库
	
	$conn=mysqli_connect('localhost','root','','myblog');         //连接MySQL服务器
	
	mysqli_set_charset($conn, 'utf8');                    //设置字符集为utf8
	session_start();                                    //启动session会话
?>