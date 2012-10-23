<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>留言列表</title>
<link rel="stylesheet" href="<?php echo base_url(); ?>kindeditor/themes/default/default.css" />
<script charset="utf-8" src="<?php echo base_url(); ?>kindeditor/kindeditor.js"></script>
<script charset="utf-8" src="<?php echo base_url(); ?>kindeditor/lang/zh_CN.js"></script>
<script type="text/javascript">
KindEditor.ready(function(K) {
	K.create('#content',{
	items : ['source', 'clearhtml','|','plainpaste', 'wordpaste', '|','formatblock', 'fontname', 'fontsize','|', 'justifyleft', 'justifycenter', 'justifyright', 'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', '|', 'forecolor', 'bold', 'underline', 'lineheight', 'removeformat', '|','quickformat', '|', 'fullscreen']
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
<h2 style="margin:12px 10px 10px 7px " >留言回复</h2>
<?php 
	echo form_open('orient/leave_edit');
	echo form_hidden('id', $edit->id);
?> 
	<div style="width:900px; height:535px; border:#D2D2D2 solid 1px; margin-left:110px; font-size:12px;">
    	<div style="margin-left:50px; margin-top:30px;">
    	<p style="margin-left:12px;">留言人：<?php echo $edit->name;?></p>
    	<p style="margin-left:12px;">手机：<?php echo $edit->phone;?></p>
    	<p style="margin-left:12px;">公司：<?php echo $edit->company;?></p>
    	<p style="margin-left:12px;">公司职位：<?php echo $edit->position;?></p>
    	<p>留言时间：<?php echo date('Y-m-d H:i:s', $edit->l_time);?></p>
    	<p style="margin-left:24px;">留言：</p>
        <div style="margin-left:60px;"><?php echo $edit->content;?></div>
        <p style="margin-left:24px;">回复：&nbsp;&nbsp;<?php echo form_error('reply'); ?></p>
        <div style="margin-left:60px;"><textarea id="content" name="reply" style="width:700px;height:230px;visibility:hidden;"><?php echo $edit->reply; ?></textarea></div>
        <p style="margin-left:250px;"><input type="submit" value="提交内容" class="submit" /></p>
        </div>
    </div>
<?php 
	echo form_close();
?>
</div>
</body>
</html>
