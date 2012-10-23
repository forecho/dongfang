<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理员信息修改</title>
<style type="text/css">
a{text-decoration: none;color: #2875CA;font-size:12px;}
table{border:#D2D2D2 solid 1px;border-right:none; border-bottom:none;}
table td {height:24px; line-height: 24px;color:#333; border:none; border-right:#D2D2D2 solid 1px; border-bottom:#D2D2D2 solid 1px;}
h2{ 
color:#526ea6; 
font-size:14px; 
margin-left:8px; 
} 
#wrapper{
	
width:97%; 
margin:0px auto;
padding:0px 0px 10px 0px; 
border:5px solid #F0F8FF; 
}
.submit{
	cursor:pointer;
}
.error{
	color:#F00;
} 
</style>
</head>

<body>
<div id="wrapper" style="margin-top:15px;">
<h2 style="margin:12px 10px 10px 7px " >管理员信息修改</h2>
<?php 
	echo form_open('orient/edit_admin');
?> 
	<div style="width:900px; height:220px; border:#D2D2D2 solid 1px; margin-left:110px; font-size:12px;">
    	<div style="margin-left:250px; margin-top:30px;">
	    	<p>用户名：<input type="text" name="user" value="<?php echo $admin->user; ?>" style="width:300px;"/>&nbsp;&nbsp;<?php echo form_error('user'); ?></p>
	        <p>原密码：<input type="password" name="ypwd" style="width:300px;"/>&nbsp;&nbsp;<?php echo form_error('ypwd'); ?>&nbsp;&nbsp;<span class="error"><?php echo $error; ?></span></p>
	        <p>新密码：<input type="password" name="pwd" style="width:300px;"/>&nbsp;&nbsp;<?php echo form_error('pwd'); ?></p>
	        <p style="margin-left:-24px;">重复新密码：<input type="password" name="pwds" style="width:300px;"/>&nbsp;&nbsp;<?php echo form_error('pwds'); ?></p>
	        <p style="margin-left:150px;">
            	<input type="hidden" name="id" value="<?php echo $admin->id; ?>" />
                <input type="submit" value="提交内容" class="submit" />
            </p>
        </div>
    </div>
<?php 
	echo form_close();
?>
</div>
</body>
</html>
