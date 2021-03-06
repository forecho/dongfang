<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>公告修改</title>
<link rel="stylesheet" href="<?php echo base_url(); ?>kindeditor/themes/default/default.css" />
<script charset="utf-8" src="<?php echo base_url(); ?>kindeditor/kindeditor.js"></script>
<script charset="utf-8" src="<?php echo base_url(); ?>kindeditor/lang/zh_CN.js"></script>
<script type="text/javascript">
KindEditor.ready(function(K) {
	K.create('#content',{
	items : ['source', 'clearhtml','|','plainpaste', 'wordpaste', '|','formatblock', 'fontname', 'fontsize','|', 'justifyleft', 'justifycenter', 'justifyright', 'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', '|', 'forecolor', 'bold', 'underline', 'lineheight', 'removeformat', '|','quickformat', '|', 'fullscreen', '|', 'multiimage']
	});
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
.submit{
	cursor:pointer;
}
</style>
</head>

<body><div id="wrapper" style="margin-top:15px;">
<h2 style="margin:12px 10px 10px 7px " >公告修改</h2>
<?php 
	echo form_open('chihiro/notice_edit');
	echo form_hidden('id', $edit->id);
?> 
	<div style="width:900px; height:535px; border:#D2D2D2 solid 1px; margin-left:110px; font-size:12px;">
    	<div style="margin-left:50px; margin-top:30px;">
    	<p>公告标题：<input type="text" name="title" value="<?php echo $edit->title; ?>" class="input"/>&nbsp;&nbsp;<?php echo form_error('title'); ?></p>
        <p>公告内容：&nbsp;&nbsp;<?php echo form_error('content'); ?></p>
        <div style="margin-left:60px;"><textarea id="content" name="content" style="width:700px;height:320px;visibility:hidden;"><?php echo $edit->content; ?></textarea></div>
        <p style="margin-left:22px;">排序：<input name="sort" type="text" value="<?php echo $edit->sort; ?>" size="5" /></p>
        <p style="margin-left:250px;"><input type="submit" value="提交内容" class="submit" /></p>
        </div>
    </div>
<?php 
	echo form_close();
?>
</div>
</body>
</html>
