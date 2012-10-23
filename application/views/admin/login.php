<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $title; ?></title>
<style type="text/css">
<!--
body {
	background-repeat: no-repeat;
	background-color: #9CDCF9;
	background-position: 0px 0px;

}
a{ color:#008EE3}
a:link  { text-decoration: none;color:#008EE3}
A:visited {text-decoration: none;color:#666666}
A:active {text-decoration: underline}
A:hover {text-decoration: underline;color: #0066CC}
A.b:link {
	text-decoration: none;
	font-size:12px;
	font-family: "Helvetica,微软雅黑,宋体";
	color: #FFFFFF;
}
A.b:visited {
	text-decoration: none;
	font-size:12px;
	font-family: "Helvetica,微软雅黑,宋体";
	color: #FFFFFF;
}
A.b:active {
	text-decoration: underline;
	color: #FF0000;

}
A.b:hover {text-decoration: underline; color: #ffffff}

.table1 {
	border: 1px solid #CCCCCC;
}
.font {
	font-size: 12px;
	text-decoration: none;
	color: #999999;
	line-height: 20px;
	

}
.input {
	font-size: 12px;
	color: #999999;
	text-decoration: none;
	border: 0px none #999999;


}

td {
	font-size: 12px;
	color: #007AB5;
}
form {
	margin: 1px;
	padding: 1px;
}
input {
	border: 0px;
	height: 26px;
	color: #007AB5;

	.unnamed1 {
	border: thin none #FFFFFF;
}
.unnamed1 {
	border: thin none #FFFFFF;
}
select {
	border: 1px solid #cccccc;
	height: 18px;
	color: #666666;

	.unnamed1 {
	border: thin none #FFFFFF;
}
.tablelinenotop {
	border-top: 0px solid #CCCCCC;
	border-right: 1px solid #CCCCCC;
	border-bottom: 0px solid #CCCCCC;
	border-left: 1px solid #CCCCCC;
}
.tablelinenotopdown {

	border-top: 1px solid #eeeeee;
	border-right: 1px solid #eeeeee;
	border-bottom: 1px solid #eeeeee;
	border-left: 1px solid #eeeeee;
}
.style6 {FONT-SIZE: 9pt; color: #7b8ac3; }
.error{
	color:#F00;
}

-->
</style>
</head>
<body>
<table width="681" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:120px">
  <tr>
    <td width="353" height="259" align="center" valign="bottom" background="<?php echo base_url(); ?>images/login_1.gif"><table width="90%" border="0" cellspacing="3" cellpadding="0">
      
    </table></td>
    <td width="195" background="<?php echo base_url(); ?>images/login_2.gif"><table width="190" height="106" border="0" align="center" cellpadding="2" cellspacing="0">
      <?php echo form_open('orient/login');?>
            <tr>
              <td height="50" colspan="2" align="left">&nbsp;</td>
            </tr>
            <tr>
				<td colspan="2">
					<span class="error" style="color:#F00;"><?php echo $error; ?></span>
				</td>
			</tr>
            <tr>
              <td width="60" height="30" align="right">用户名：</td>
              <td><input name="user" type="TEXT" value="<?php echo set_value('user')?>" style="background:url(<?php echo base_url(); ?>images/login_6.gif) repeat-x; border:solid 1px #27B3FE; height:20px; background-color:#FFFFFF" id="UserName"size="14"></td>
            </tr>
            <tr>
				<td colspan="2">
					<span class="error"><?php echo form_error('user'); ?></span>
				</td>
			</tr>            
            <tr>
              <td height="30" align="right">密码：</td>
              <td><input name="pwd" TYPE="PASSWORD" style="background:url(<?php echo base_url(); ?>images/login_6.gif) repeat-x; border:solid 1px #27B3FE; height:20px; background-color:#FFFFFF" id="Password" size="16"></td>
            </tr>
            <tr>
				<td colspan="2">
					<span class="error"><?php echo form_error('pwd'); ?></span>
				</td>
			</tr>             
            <tr>
              <td height="40" colspan="3" align="center"><img src="<?php echo base_url(); ?>images/tip.gif" width="16" height="16"> 请勿非法登陆！</td>
          <tr>
              <td colspan="3" align="center"><input type="submit" name="submit"  style="background:url(<?php echo base_url(); ?>images/login_5.gif) no-repeat;width:69px;cursor:pointer;" value=" 登  陆 ">
			  <input type="reset" name="Submit" style="background:url(<?php echo base_url(); ?>images/login_5.gif) no-repeat;width:69px;cursor:pointer;" value=" 取  消 "></td>
            <tr>
              <td height="5" colspan="3"></td>
        <?php echo form_close();?>
    </table></td>
    <td width="133" background="<?php echo base_url(); ?>images/login_3.gif">&nbsp;</td>
  </tr>
  <tr>
    <td height="161" colspan="3" background="<?php echo base_url(); ?>images/login_4.gif"></td>
  </tr>
</table>
</body>
</html>