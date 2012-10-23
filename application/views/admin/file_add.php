<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>专家团队添加</title>
<link rel="stylesheet" href="<?php echo base_url(); ?>kindeditor/themes/default/default.css" />
<script charset="utf-8" src="<?php echo base_url(); ?>kindeditor/kindeditor.js"></script>
<script charset="utf-8" src="<?php echo base_url(); ?>kindeditor/lang/zh_CN.js"></script>
<script type="text/javascript">
	KindEditor.ready(function(K) {
		K.create('#intro');
	});	
</script>
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
<h2 style="margin:12px 10px 10px 7px " >文档添加</h2>
<?php 
	echo form_open_multipart('orient/file_add');
?> 
	<div style="width:900px; height:560px; border:#D2D2D2 solid 1px; margin-left:110px; font-size:12px;">
    	<div style="margin-left:100px; margin-top:30px;">
		<p style="margin-left:24px;">文档名：<input type="text" name="name" value="<?php echo set_value('name'); ?>" class="input" />&nbsp;&nbsp;<?php echo form_error('name'); ?></p>
    	<p style="margin-left:24px;">文&nbsp;&nbsp;档：<input type="file" name="file" class="input" />&nbsp;&nbsp;<span class="error"><?php echo $error['error']; ?></span>&nbsp;&nbsp;<span class="error"><?php echo $error['type']; ?></span>&nbsp;&nbsp;<span class="error"><?php echo $error['size']; ?></span></p>
        <!-- gin-left:24px;">尺寸：<span class="error">271*308</span>&nbsp;&nbsp;图片格式：<span class="error">只限.jpg</span></p>
            	<p style="margin -->
    	<p style="margin-left:24px;">作&nbsp;&nbsp;者：<input type="text" name="author" value="<?php echo set_value('author'); ?>" class="input" />&nbsp;&nbsp;<?php echo form_error('author'); ?></p>
        <p style="margin-left:24px;">介绍：&nbsp;&nbsp;<?php echo form_error('content'); ?></p>
        <div style="margin-left:62px;"><textarea id="intro" name="content" style="width:670px;height:270px;visibility:hidden;"><?php echo set_value('content'); ?></textarea></div>
    	<p style="margin-left:24px;">推荐指数：
		<select name="star">
		  <option value ="1">1颗星</option>
		  <option value ="2">2颗星</option>
		  <option value ="3" selected="selected">3颗星</option>
		  <option value ="4">4颗星</option>
		  <option value ="5">5颗星</option>
		</select>
		</p>
        <p style="margin-left:24px;">排序：<input type="text" name="sort" value="0" size="2" /></p>
        <p style="margin-left:300px;"><input type="submit" value="提交内容" style="cursor:pointer;" /></p>
        </div>
    </div>
<?php 
	echo form_close();
?>
</div>
</body>
</html>
