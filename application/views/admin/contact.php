<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>联系我们</title>
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
	width:380px;
}
.submit{
	cursor:pointer;
}
.textarea{
	widows:390px;
	height:50px;
}
</style>
</head>

<body><div id="wrapper" style="margin-top:15px;">
<h2 style="margin:12px 10px 10px 7px " >联系我们</h2>
<?php 
	echo form_open('orient/contact');
	echo form_hidden('id', $contact->id);
?> 
	<div style="width:900px; height:520px; border:#D2D2D2 solid 1px; margin-left:110px; font-size:12px;">
    	<div style="margin-left:50px; margin-top:30px;">
    	<p style="margin-left:24px;">电话：<input type="text" name="tel" value="<?php echo $contact->tel; ?>" class="input"/>&nbsp;&nbsp;多个电话中间请用英文字符的逗号（,）隔开&nbsp;&nbsp;<?php echo form_error('tel'); ?></p>
        <p style="margin-left:24px;">客服：<input type="text" name="service" value="<?php echo $contact->service; ?>" class="input"/>&nbsp;&nbsp;多个手机中间请用英文字符的逗号（,）隔开&nbsp;&nbsp;<?php echo form_error('service'); ?></p>
        <p style="margin-left:24px;">Q&nbsp;&nbsp;Q：<input type="text" name="qq" value="<?php echo $contact->qq; ?>" class="input"/>&nbsp;&nbsp;多个QQ中间请用英文字符的逗号（,）隔开&nbsp;&nbsp;<?php echo form_error('qq'); ?></p>
        <p style="margin-left:24px;">邮箱：<input type="text" name="email" value="<?php echo $contact->email; ?>" class="input"/>&nbsp;&nbsp;多个email中间请用英文字符的逗号（,）隔开&nbsp;&nbsp;<?php echo form_error('email'); ?></p>
        <p style="margin-left:24px;">版权：<input type="text" name="copyright" value="<?php echo $contact->copyright; ?>" class="input"/>&nbsp;&nbsp;<?php echo form_error('copyright'); ?></p>
        <p style="margin-left:24px;">地址：多个地址之间请用（@）隔开&nbsp;&nbsp;<?php echo form_error('address'); ?></p>
        <div style="margin-left:60px;"><textarea name="address" style="width:550px;height:50px;"><?php echo $contact->address; ?></textarea></div>
        <p style="margin-left:24px;">地图：&nbsp;&nbsp;地图代码请到<a href="http://api.map.baidu.com/mapCard/" target="_blank">http://api.map.baidu.com/mapCard/</a>获取&nbsp;&nbsp;<?php echo form_error('map'); ?></p>
        <div style="margin-left:60px;"><textarea name="map" style="width:550px;height:100px;"><?php echo $contact->map; ?></textarea></div>
        <p style="margin-left:250px;"><input type="submit" value="提交内容" class="submit" /></p>
        </div>
    </div>
<?php 
	echo form_close();
?>
</div>
</body>
</html>
