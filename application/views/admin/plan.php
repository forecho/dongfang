<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
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
.input{
	width:320px;
}
.submit{
	cursor:pointer;
}
</style>
</head>

<body>
<div id="wrapper" style="margin-top:15px;">
<h2 style="margin:12px 10px 10px 7px " >信息类表</h2> 
<div class="td" style="margin:0px 0px 0px 7px;">
  <?php echo form_open('orient/plan_list', "target='mainList'");?>
  <table width="99%" cellspacing="0" cellpadding="0" border="0" style="font-size:12px; text-align: center;border:none;margin-bottom:10px;">
  	<tr height="30">
    	<td style="border:none;" width="5%" align="right">策划类型：</td>
        <td style="border:none;" width="5%" align="left"><select name="c_id"><option value="请选择策划类型">请选择策划类型</option>
            <?php
            	foreach ($class as $class_i):
					
					echo "<option value='$class_i->cid'>$class_i->name</option>";
				
				endforeach;
			?>
        </select>    
        </td>
    	<td style="border:none;" width="5%" align="right">策划标题：</td>
    	<td style="border:none;" width="20%" align="left"><input name="title" type="text" value="" class="input" /></td>
    	<td style="border:none;" width="40%" align="left"><input type="submit" value="搜索" class="submit" /></td>
    </tr>	
  </table>
  <?php echo form_close();?>
  <iframe src="<?php echo base_url('orient/plan_list'); ?>" width="99%" height="550" frameborder="0" name="mainList"></iframe>
</div>
</div>
</body>
</html>