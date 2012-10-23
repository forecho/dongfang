<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>友情链接</title>
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
.error{
	color:#F00;
}
.input{
	width:320px;
}
</style>
</head>

<body><div id="wrapper" style="margin-top:15px;">
<h2 style="margin:12px 10px 10px 7px " >友情链接修改</h2>
<?php 
	echo form_open('orient/link_edit');
	echo form_hidden('id', $edit->id);
?> 
	<div style="width:900px; height:200px; border:#D2D2D2 solid 1px; margin-left:110px; font-size:12px;">
    	<div style="margin-left:100px; margin-top:30px;">
    	<p style="margin-left:24px;">名称：<input type="text" name="name" value="<?php echo $edit->name; ?>" class="input" />&nbsp;&nbsp;<?php echo form_error('name'); ?></p>
        <p style="margin-left:24px;">地址：<input type="text" name="url" value="<?php echo $edit->url; ?>" class="input" />&nbsp;&nbsp;<?php echo form_error('url'); ?></p>
        <p style="margin-left:24px;">排序：<input type="text" name="sort" value="<?php echo $edit->sort; ?>" size="2" />&nbsp;&nbsp;<?php echo form_error('sort'); ?></p>
        <p style="margin-left:300px;"><input type="submit" value="提交内容" style="cursor:pointer;" /></p>
        </div>
    </div>
<?php 
	echo form_close();
?>
</div>
</body>
</html>
