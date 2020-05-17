
<?php
if(!isset($_SESSION["role"]))               //判断用户是否登录，否则转到登录页面
{
   echo "<script>alert('你还没有登陆!');location.href='/Blog/Login.php';</script>";
}
?>