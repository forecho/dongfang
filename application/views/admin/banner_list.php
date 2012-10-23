<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>首页轮播图片管理</title>
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

.fenye{
	text-align:center;
	font-size:12px;
}
.fenye a,.fenye strong{
	padding:2px 6px;
	margin-left:5px;
	margin-right:5px;
}
.fenye a{
	background-color:#E8E8E8;
	color:#504E4C;
	border:#CCC solid 1px;
}
.fenye strong{
	background-color:#CDC6B5;
	color:#504E4C;
	border:#C1B19D solid 1px;
} 
</style>
</head>
<body><div id="wrapper" style="margin-top:15px;">
<h2 style="margin:12px 10px 10px 7px " >二级页面图片管理</h2> 
<div class="td" style="margin:0px 0px 0px 7px;">
  <form name="form" method="post" action="<?php echo base_url('orient/del_photos'); ?>" id="form">
  <table width="60%" cellspacing="0" cellpadding="0" border="1" style="font-size:12px; text-align: center;">
    <tr>
		<td width="5%">所在页面</td>
		<td width="7%">图片地址</td>
		<td width="8%">操作</td>
    </tr>
	<?php foreach ($banner as $info):?>
    <tr>
      <td><?php echo $info->name; ?></td>
      <td><a href="<?php echo base_url($info->img); ?>" target="_blank">点击查看</a></td>
	  <td><?php echo anchor('orient/banner_edit/'.$info->id, '编辑', "target='main'");?></td>
    </tr>
<?php 
	endforeach;
?>
  </table>
</form>
</div>
</div>
</body>
</html>
