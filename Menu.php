<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>菜单</title>
<link href="css/Index.css" rel="stylesheet" />
</head>
<body>
<div  class="menu">
    <div class="accordion-group">                        
         <div class="accordion-title">
             <img class="menu-icon" src="images/settings.png" /><span class="menu-title">管理菜单</span>
         </div>
		 <?php
		 	include "Fun.php";
			if(isset($_SESSION["role"]))
			{
				$sql = "select * from menu where role='".$_SESSION["role"]."'";
		 		$result=mysqli_query($conn,$sql);
				$row=mysqli_fetch_array($result); //$row为数组名,键名可以是整数和字段名。
				while($row)
				{
		?>
		 <div class="accordion-inner">
			<img class="menu-icon-child" src="images/menu-icon-child.png" /><span class="menu-body"> <a href="<?php echo @$_SESSION["role"] ?>/<?php echo @$row["url"] ?>" target="main"><?php echo @$row["menuname"] ?> </a></span>
        </div>
		<?php
					$row=mysqli_fetch_array($result); 
				}
				
				mysqli_free_result($result);
				mysqli_close($conn);
			} 
		 ?>
    </div>
</div>
</body>
</html>
