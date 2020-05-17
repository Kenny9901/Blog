//检查是否选择全选按钮
function checkall(form) 
{
	for (var i=0;i<form.elements.length;i++) 
	{
		var e = form.elements[i];
		if (e.name != 'CBox' && e.type=='checkbox')
			e.checked = form.CBox.checked;
	}
}
//弹出对话框确认删除
function delcfm() 
{
	if (!confirm("确认要删除？")) 
	{
		window.event.returnValue = false;
	}
}
//检查两次密码是否一致<form id="form1" name="form1" method="post" action="" onsubmit="return check()">
function check()
{	
	if(document.form1.password1.value=="")
	{   alert("请输入新密码！");
       	document.form1.password1.focus();
		return false;
	}
	if(document.form1.password2.value=="" || document.form1.password2.value!=document.form1.password1.value)
	{   alert("两次输入的密码不一致！");
       	document.form1.password2.focus();
		return false;
	}
}