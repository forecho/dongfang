<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>首页滚动图片添加</title>
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
	color:#FF0000;
}
.input{
	width:320px;
}
.rank{
	width:20px;
}
.submit{
	cursor:pointer;
}
</style>
</head>

<body><div id="wrapper" style="margin-top:15px;">
<h2 style="margin:12px 10px 10px 7px " >案例滚动图片添加</h2>
<?php 
	echo form_open_multipart('orient/slideshow_add');
?> 
	<div style="width:900px; height:270px; border:#D2D2D2 solid 1px; margin-left:110px; font-size:12px;">
    	<div style="margin-left:100px; margin-top:30px;">
		<p>图片地址：<input name='file' type="file">&nbsp;&nbsp;（图片尺寸：674*282）&nbsp;&nbsp;图片格式：.jpg&nbsp;&nbsp;<span class="error"><?php echo $error['error']; ?></span>&nbsp;&nbsp;<span class="error"><?php echo $error['type']; ?></span>&nbsp;&nbsp;<span class="error"><?php echo $error['size']; ?></span></p>
        <p>图片链接：<input type="text" name="url" value="<?php echo set_value('url'); ?>" class="input" />&nbsp;&nbsp;请填写完整的（带）http://的链接地址&nbsp;&nbsp;<?php echo form_error('url'); ?></p>
        <p style="margin-left:18px;">Title：<input name="seo_t" type="text" value="<?php echo set_value('seo_t'); ?>" class="input" />&nbsp;&nbsp;<?php echo form_error('seo_t'); ?></p>
        <p style="margin-left:30px;">Alt：<input name="seo_a" type="text" value="<?php echo set_value('seo_a'); ?>" class="input" />&nbsp;&nbsp;<?php echo form_error('seo_a'); ?></p>
        <p style="margin-left:24px;">排序：<input type="text" name="sort" value="0" size="5" />&nbsp;&nbsp;<?php echo form_error('sort'); ?></p>
        <p style="margin-left:180px;"><input type="submit" value="提交内容" class="submit" /></p>
        </div>
    </div>
<?php
	echo form_close();
?>
</div>
</body>
</html>
