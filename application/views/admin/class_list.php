<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>分类列表</title>
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
<script>
function CheckOthers(form)
{
	  for (var i=0;i<form.elements.length;i++)
       {
              var e = form.elements[i];
			 if (e.name != 'chkall')
                     if (e.checked==false)
                     {
                            e.checked = true;
                     }
                     else
                     {
                            e.checked = false;
                     }
       }
}

function CheckAll(form)
{
       for (var i=0;i<form.elements.length;i++)
       {
              var e = form.elements[i];
			  if (e.name != 'chkall')
              e.checked = true
       }
}
</script>
<script type="text/javascript">
	function queren(){
		var info=confirm('确认删除么？');
		if(info==true){
			return true;
		}
		return false;
	}
</script>
</head>
<body><div id="wrapper" style="margin-top:15px;">
<h2 style="margin:12px 10px 10px 7px " >分类列表</h2> 
<div class="td" style="margin:0px 0px 0px 7px;">
  <?php 
  	echo form_open('orient/del_class', array('id'=>'form'));
	echo form_hidden('what', $what);
  ?>
  <table width="99%" cellspacing="0" cellpadding="0" border="1" style="font-size:12px; text-align: center;">
    <tr>
      <td width="5%">选择</td>
      <td width="60%">名称</td>
      <td width="20%">排序</td>
      <td width="10%">操作</td>
    </tr>
<?php 
	foreach ($list as $info):
		
?>
    <tr height="30">
      <td><input type="checkbox" name="checkbox[]" id="checkbox" value="<?php echo $info->cid; ?>" /></td>
      <td><?php echo $info->name; ?></td>
      <td><?php echo $info->sort; ?></td>
      <td><?php echo anchor('orient/class_edit/'.$what.'/'.$info->cid, '编辑', "target='main'").' | '.anchor('orient/delo_class/'.$what.'/'.$info->cid, '删除', array('onclick'=>"return queren()"))?></td>
    </tr>
<?php 
	endforeach;
?>
    <tr>
      <td colspan="7"><input value="全选"  onclick="CheckAll(this.form)" type="button" name="chkall" style="cursor:pointer" />
      &nbsp;&nbsp;&nbsp;<input onclick="CheckOthers(this.form)" type='button' value="反选" name='chkOthers'  style="cursor:pointer" />
      &nbsp;&nbsp;&nbsp;<input type="submit" value="删除选择" style="cursor:pointer" onclick="return queren()" />
      &nbsp;&nbsp;&nbsp;<input type="reset" value="重新选择" style="cursor:pointer" /></td>
    </tr>
  </table>
<?php
	echo form_close();
?>
</div>
</div>
</body>
</html>
