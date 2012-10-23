<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>东方盛思后台管理系统</title>
<link href="<?php echo base_url(); ?>images/css1/top_css.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
	function queren(){
		var info=confirm('确认删除么？');
		if(info==true){
			return true;
		}else{
			return false;
		}
	}
</script>
</head>
<body bgcolor="#03A8F6">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="194" height="60" align="center" background="<?php echo base_url(); ?>images/top_logo.jpg"></td>
    <td align="center" style="background:url(<?php echo base_url(); ?>images/top_bg.jpg) no-repeat"><table cellspacing="0" cellpadding="0" border="0" width="100%" height="33">
      <tbody>
        <tr>
          <td width="320" align="left">&nbsp;</td>
        </tr>
      </tbody>
    </table>
    <table height="26" border="0" align="left" cellpadding="0" cellspacing="0" class="subbg" NAME=t1>
      <tbody>
        <tr align="middle">
          <td width="71" height="26" align="center" valign="middle" background="<?php echo base_url(); ?>images/top_tt_bg.gif"><a
            href="<?php echo base_url('orient/welcome')?>" 
          target="main" class="STYLE2">欢迎界面</a></td>
          <td align="center" class="topbar"><span class="STYLE2"> </span></td>
          <td align="center" class="topbar"><span class="STYLE2"> </span></td>
          <td width="71" align="center" valign="middle" background="<?php echo base_url(); ?>images/top_tt_bg.gif"><?php echo anchor('orient/out', '退出登录', array('target'=>'_top', 'class'=>'STYLE2', 'onClick'=>'return queren()'));?></td>
        </tr>
      </tbody>
    </table></td>
  </tr>
  <tr height="6">
    <td bgcolor="#1F3A65" background="<?php echo base_url(); ?>images/top_bg.jpg"></td>
  </tr>
</table>
<script language="javascript">
<!--
var displayBar=true;
function switchBar(obj){
	if (displayBar)
	{
		parent.frame.cols="0,*";
		displayBar=false;
		obj.title="打开左边管理菜单";
	}
	else{
		parent.frame.cols="195,*";
		displayBar=true;
		obj.title="关闭左边管理菜单";
	}
}
//-->
</script></body>
</html>
