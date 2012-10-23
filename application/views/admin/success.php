<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>提交成功页面</title>
<style type="text/css">
	*{font-size:12px; color:#333}
	a{color:#FF3300; text-decoration:none}
	a:link{}
	a:visited{}
	a:hover{color:#FF8000; text-decoration:underline;}
	a:active{}
</style>
</head>
<body>
<div style="background-image:url(<?php echo base_url(); ?>images/ts_bg.png); width:400px; height:80px; margin:auto; margin-top:5%; padding:100px 80px;">
	<div style="display:block">
		<div style="float:left">
		<img src="<?php echo base_url(); ?>images/apply.png" height="80" />
		</div>
		<div style="float:left; margin:20px 10px;">
			<div style="font-size:14px;line-height:25px;"><?php echo @$title; ?></div>
			
			<div style="">3秒后浏览器将会自动跳转页面，<a href="<?php echo @$url; ?>">没有反应点这里</a></div>
			</div>
		</div>
	</div>
</div>
	<meta http-equiv="refresh" content="1;url=<?php echo @$url; ?>" />
</body>
</html>
