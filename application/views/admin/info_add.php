<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>信息添加</title>
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
<h2 style="margin:12px 10px 10px 7px " >信息添加</h2>
<?php 
	echo form_open_multipart('orient/info_add', "name='myform'");
	echo form_hidden('what', $what);
?> 
	<div style="width:900px; height:630px; border:#D2D2D2 solid 1px; margin-left:110px; font-size:12px;">
    	<div style="margin-left:50px; margin-top:30px;">
    	<p style="margin-left:24px;">图片：<input type="file" name="file" class="input" />&nbsp;&nbsp;<span class="error"><?php echo $error['error']; ?></span>&nbsp;&nbsp;<span class="error"><?php echo $error['type']; ?></span>&nbsp;&nbsp;<span class="error"><?php echo $error['size']; ?></span></p>
        <p style="margin-left:24px;">尺寸：<span class="error">133*85</span>&nbsp;&nbsp;图片格式：<span class="error">只限.jpg</span></p>
    	<p style="margin-left:24px;">标题：<input type="text" name="title" value="<?php echo set_value('title'); ?>" class="input"/>&nbsp;&nbsp;<?php echo form_error('title'); ?></p>
        <p style="margin-left:24px;">内容：&nbsp;&nbsp;<?php echo form_error('content'); ?></p>
        <div style="margin-left:62px;"><textarea id="intro" name="content" style="width:670px;height:270px;visibility:hidden;"><?php echo set_value('content'); ?></textarea></div>
        <p style="margin-left:24px;">类型：<select name="c_id">
            <?php
            	foreach ($class as $class_i):
					
					echo "<option value='$class_i->cid'>$class_i->name</option>";
				
				endforeach;
			?>
        </select>
       	</p>
        <p style="margin-left:0px;">Keywords：<input name="keywords" type="text" value="<?php echo set_value('keywords'); ?>" class="input" />&nbsp;&nbsp;<?php echo form_error('keywords'); ?></p>
        <p style="margin-left:-18px;">Description：<input name="description" type="text" value="<?php echo set_value('description'); ?>" class="input" />&nbsp;&nbsp;<?php echo form_error('description'); ?></p>


        <p style="margin-left:22px;">排序：<input name="sort" type="text" value="0" size="5" /></p>
        <p style="margin-left:300px;"><input type="submit" value="提交内容" style="cursor:pointer;" onclick="return check_class()" /></p>
        </div>
    </div>
<?php 
	echo form_close();
?>
</div>
</body>
</html>
