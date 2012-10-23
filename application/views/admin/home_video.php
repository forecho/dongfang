<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>首页宣传视频</title>
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
<h2 style="margin:12px 10px 10px 7px " >首页宣传视频</h2>
<?php 
	echo form_open_multipart('chihiro/home_view');
	echo form_hidden('id', $info->id);
?> 
	<div style="width:900px; height:200px; border:#D2D2D2 solid 1px; margin-left:110px; font-size:12px;">
    	<div style="margin-left:50px; margin-top:30px;">
        <p>视频HTML代码：注：<span class="error">* 填写网络视频所在网站提供的分享到HTML代码即可！</span>&nbsp;&nbsp;<?php echo form_error('video'); ?></p>
        <div style="margin-left:86px;"><textarea name="video" style="width:700px;height:50px;"><?php echo $info->video; ?></textarea></div>
        <p style="margin-left:300px;"><input type="submit" value="提交内容" style="cursor:pointer;" /></p>
        </div>
    </div>
<?php 
	echo form_close();
?>
</div>
</body>
</html>
