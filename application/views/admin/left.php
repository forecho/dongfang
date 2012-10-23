<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>东方盛思后台管理系统</title>
<link href="<?php echo base_url(); ?>images/css1/left_css.css" rel="stylesheet" type="text/css">
</head>
<SCRIPT language=JavaScript>
function showsubmenu(sid)
{
whichEl = eval("submenu" + sid);
if (whichEl.style.display == "none")
{
eval("submenu" + sid + ".style.display=\"\";");
}
else
{
eval("submenu" + sid + ".style.display=\"none\";");
}
}
</SCRIPT>
<body bgcolor="16ACFF">
<table width="98%" border="0" cellpadding="0" cellspacing="0" background="<?php echo base_url(); ?>images/tablemde.jpg">
	<tr>
    	<td height="5" background="<?php echo base_url(); ?>images/tableline_top.jpg" bgcolor="#16ACFF"></td>
  	</tr>
  	<tr>
        <td>
            <TABLE width="97%" border=0 align=right cellPadding=0 cellSpacing=0 class=leftframetable>
                <TBODY>
                    <TR>
                        <TD height="25" style="background:url(<?php echo base_url(); ?>images/left_tt.gif) no-repeat">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <TD width="20"></TD>
                                    <TD class=STYLE1 style="cursor:pointer" onclick=showsubmenu(1); height=25>系统设置</TD>
                                </tr>
                            </table>
                        </TD>
                    </TR>
                    <TR>
                        <TD>
                            <TABLE id=submenu1 style="display:none;" cellSpacing=0 cellPadding=0 width="100%" border=0>
                                <TBODY>
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/edit_admin', '管理员管理', array('target'=>'main'))?></TD>
                                    </TR>
                                </TBODY>
                            </TABLE>
                        </TD>
                    </TR>
                </TBODY>
            </TABLE>
        </td>
    </tr>
  	<tr>
        <td>
            <TABLE width="97%" border=0 align=right cellPadding=0 cellSpacing=0 class=leftframetable>
                <TBODY>
                    <TR>
                        <TD height="25" style="background:url(<?php echo base_url(); ?>images/left_tt.gif) no-repeat">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <TD width="20"></TD>
                                    <TD class=STYLE1 style="cursor:pointer" onclick=showsubmenu(2); height=25>滚动图、二级页面图</TD>
                                </tr>
                            </table>
                        </TD>
                    </TR>
                    <TR>
                        <TD>
                            <TABLE id=submenu2 style="display:none;" cellSpacing=0 cellPadding=0 width="100%" border=0>
                                <TBODY>
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/photo_list', '首页滚动图列表', array('target'=>'main'))?></TD>
                                    </TR>                                
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/photo_add', '首页滚动图添加', array('target'=>'main'))?></TD>
                                    </TR>
									
									 <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/slideshow_list', '案例滚动图列表', array('target'=>'main'))?></TD>
                                    </TR>                                
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/slideshow_add', '案例滚动图添加', array('target'=>'main'))?></TD>
                                    </TR>
									<TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/banner_list', '二级页面图列表', array('target'=>'main'))?></TD>
                                    </TR> 
                                </TBODY>
                            </TABLE>
                        </TD>
                    </TR>
                </TBODY>
            </TABLE>
        </td>
    </tr>
  	<tr>
        <td>
            <TABLE width="97%" border=0 align=right cellPadding=0 cellSpacing=0 class=leftframetable>
                <!-- <TBODY>
                    <TR>
                        <TD height="25" style="background:url(<?php echo base_url(); ?>images/left_tt.gif) no-repeat">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <TD width="20"></TD>
                                    <TD class=STYLE1 style="cursor:pointer" onclick=showsubmenu(3); height=25>营销力策划</TD>
                                </tr>
                            </table>
                        </TD>
                    </TR>
                    <TR>
                        <TD>
                            <TABLE id=submenu3 style="display:none;" cellSpacing=0 cellPadding=0 width="100%" border=0>
                                <TBODY>
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/plan', '策划列表', array('target'=>'main'))?></TD>
                                    </TR>                                
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/plan_add', '策划添加', array('target'=>'main'))?></TD>
                                    </TR>
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/class_list/plan', '分类列表', array('target'=>'main'))?></TD>
                                    </TR>                                
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/class_add/plan', '分类添加', array('target'=>'main'))?></TD>
                                    </TR>
                                </TBODY>
                            </TABLE>
                        </TD>
                    </TR>
                </TBODY> -->
            </TABLE>
        </td>
    </tr>
  	<tr>
        <td>
            <TABLE width="97%" border=0 align=right cellPadding=0 cellSpacing=0 class=leftframetable>
                <TBODY>
                    <TR>
                        <TD height="25" style="background:url(<?php echo base_url(); ?>images/left_tt.gif) no-repeat">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <TD width="20"></TD>
                                    <TD class=STYLE1 style="cursor:pointer" onclick=showsubmenu(4); height=25>营销力案例</TD>
                                </tr>
                            </table>
                        </TD>
                    </TR>
                    <TR>
                        <TD>
                            <TABLE id=submenu4 style="display:none;" cellSpacing=0 cellPadding=0 width="100%" border=0>
                                <TBODY>
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/info/case', '案例列表', array('target'=>'main'))?></TD>
                                    </TR>                                
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/info_add/case', '案例添加', array('target'=>'main'))?></TD>
                                    </TR>
                                   <!--  <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/class_list/case', '分类列表', array('target'=>'main'))?></TD>
                                    </TR>                                
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/class_add/case', '分类添加', array('target'=>'main'))?></TD>
                                    </TR> -->
                                </TBODY>
                            </TABLE>
                        </TD>
                    </TR>
                </TBODY>
            </TABLE>
        </td>
    </tr>
  	<tr>
        <td>
            <TABLE width="97%" border=0 align=right cellPadding=0 cellSpacing=0 class=leftframetable>
                <TBODY>
                    <TR>
                        <TD height="25" style="background:url(<?php echo base_url(); ?>images/left_tt.gif) no-repeat">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <TD width="20"></TD>
                                    <TD class=STYLE1 style="cursor:pointer" onclick=showsubmenu(5); height=25>营销力动态</TD>
                                </tr>
                            </table>
                        </TD>
                    </TR>
                    <TR>
                        <TD>
                            <TABLE id=submenu5 style="display:none;" cellSpacing=0 cellPadding=0 width="100%" border=0>
                                <TBODY>
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/info/new', '动态列表', array('target'=>'main'))?></TD>
                                    </TR>                                
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/info_add/new', '动态添加', array('target'=>'main'))?></TD>
                                    </TR>
                                </TBODY>
                            </TABLE>
                        </TD>
                    </TR>
                </TBODY>
            </TABLE>
        </td>
    </tr>
  	<tr>
        <td>
            <TABLE width="97%" border=0 align=right cellPadding=0 cellSpacing=0 class=leftframetable>
                <TBODY>
                    <TR>
                        <TD height="25" style="background:url(<?php echo base_url(); ?>images/left_tt.gif) no-repeat">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <TD width="20"></TD>
                                    <TD class=STYLE1 style="cursor:pointer" onclick=showsubmenu(25); height=25>媒体报道、鸣谢榜、视频</TD>
                                </tr>
                            </table>
                        </TD>
                    </TR>
                    <TR>
                        <TD>
                            <TABLE id=submenu25 style="display:none;" cellSpacing=0 cellPadding=0 width="100%" border=0>
                                <TBODY>
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/info/report', '信息列表', array('target'=>'main'))?></TD>
                                    </TR>                                
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/info_add/report', '信息添加', array('target'=>'main'))?></TD>
                                    </TR>
                                </TBODY>
                            </TABLE>
                        </TD>
                    </TR>
                </TBODY>
            </TABLE>
        </td>
    </tr>
  	<tr>
        <td>
            <TABLE width="97%" border=0 align=right cellPadding=0 cellSpacing=0 class=leftframetable>
                <TBODY>
                    <TR>
                        <TD height="25" style="background:url(<?php echo base_url(); ?>images/left_tt.gif) no-repeat">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <TD width="20"></TD>
                                    <TD class=STYLE1 style="cursor:pointer" onclick=showsubmenu(21); height=25>行业营销力（策划）</TD>
                                </tr>
                            </table>
                        </TD>
                    </TR>
                    <TR>
                        <TD>
                            <TABLE id=submenu21 style="display:none;" cellSpacing=0 cellPadding=0 width="100%" border=0>
                                <TBODY>
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/industry/intro', '营销力策划简介', array('target'=>'main'))?></TD>
                                    </TR>  
									<TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/industry/diy_intro', '自定义营销力策划简介', array('target'=>'main'))?></TD>
                                    </TR>
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/industry/model', '主推：新品营销力策划', array('target'=>'main'))?></TD>
                                    </TR>
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/industry/agriculture', '农资企业营销力策划', array('target'=>'main'))?></TD>
                                    </TR>
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/industry/alcohol', '农产品企业营销力策划', array('target'=>'main'))?></TD>
                                    </TR>
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/industry/tea', '酒水企业营销力策划', array('target'=>'main'))?></TD>
                                    </TR>
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/industry/health', '创意农业营销策划', array('target'=>'main'))?></TD>
                                    </TR>
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/industry/food', '建材家居营销策划', array('target'=>'main'))?></TD>
                                    </TR>
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/industry/fast', '服装鞋帽行业策划', array('target'=>'main'))?></TD>
                                    </TR>
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/industry/build', '食品饮料营销力策划', array('target'=>'main'))?></TD>
                                    </TR>
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/industry/other', '定制模式企业策划', array('target'=>'main'))?></TD>
                                    </TR>
                                </TBODY>
                            </TABLE>
                        </TD>
                    </TR>
                </TBODY>
            </TABLE>
        </td>
    </tr>
  	<tr>
        <td>
            <TABLE width="97%" border=0 align=right cellPadding=0 cellSpacing=0 class=leftframetable>
                <TBODY>
                    <TR>
                        <TD height="25" style="background:url(<?php echo base_url(); ?>images/left_tt.gif) no-repeat">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <TD width="20"></TD>
                                    <TD class=STYLE1 style="cursor:pointer" onclick=showsubmenu(22); height=25>营销力培训</TD>
                                </tr>
                            </table>
                        </TD>
                    </TR>
                    <TR>
                        <TD>
                            <TABLE id=submenu22 style="display:none;" cellSpacing=0 cellPadding=0 width="100%" border=0>
                                <TBODY>
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/training/intro', '营销力培训简介', array('target'=>'main'))?></TD>
                                    </TR>                                
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/training/president', '总裁营销力', array('target'=>'main'))?></TD>
                                    </TR>
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/training/team', '亮剑营销力', array('target'=>'main'))?></TD>
                                    </TR>
									<TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/training/network', '网络营销力', array('target'=>'main'))?></TD>
                                    </TR>
                                     <!--  <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/training/product', '产品营销力', array('target'=>'main'))?></TD>
                                    </TR> -->
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/training/other', '企业营销力内训', array('target'=>'main'))?></TD>
                                    </TR>
                                  <!--   <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/training/plan', '营销力策划', array('target'=>'main'))?></TD>
                                    </TR> -->
                                </TBODY>
                            </TABLE>
                        </TD>
                    </TR>
                </TBODY>
            </TABLE>
        </td>
    </tr>
  	<tr>
        <td>
            <TABLE width="97%" border=0 align=right cellPadding=0 cellSpacing=0 class=leftframetable>
                <TBODY>
                    <TR>
                        <TD height="25" style="background:url(<?php echo base_url(); ?>images/left_tt.gif) no-repeat">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <TD width="20"></TD>
                                    <TD class=STYLE1 style="cursor:pointer" onclick=showsubmenu(23); height=25>营销力思想</TD>
                                </tr>
                            </table>
                        </TD>
                    </TR>
                    <TR>
                        <TD>
                            <TABLE id=submenu23 style="display:none;" cellSpacing=0 cellPadding=0 width="100%" border=0>
                                <TBODY>
                                   <!--  <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/idea/thought', '思想体系', array('target'=>'main'))?></TD>
                                    </TR> -->                                
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/idea/core_value', '核心价值', array('target'=>'main'))?></TD>
                                    </TR>
                                    <!-- <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/idea/expert', '专家专栏', array('target'=>'main'))?></TD>
                                    </TR> -->
									<TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/info/column', '专家专栏列表', array('target'=>'main'))?></TD>
                                    </TR>                                
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/info_add/column', '专家专栏添加', array('target'=>'main'))?></TD>
                                    </TR>
                                   <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/class_list/column', '专家列表', array('target'=>'main'))?></TD>
                                    </TR>                                
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/class_add/column', '专家添加', array('target'=>'main'))?></TD>
                                    </TR>
									
									<TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/info/think', '思想体系列表', array('target'=>'main'))?></TD>
                                    </TR>                                
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/info_add/think', '思想体系添加', array('target'=>'main'))?></TD>
                                    </TR>
                                   <!-- <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/class_list/think', '体系列表', array('target'=>'main'))?></TD>
                                    </TR>                                
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/class_add/think', '体系添加', array('target'=>'main'))?></TD>
                                    </TR> -->
                                </TBODY>
                            </TABLE>
                        </TD>
                    </TR>
                </TBODY>
            </TABLE>
        </td>
    </tr>
	<tr>
        <td>
            <TABLE width="97%" border=0 align=right cellPadding=0 cellSpacing=0 class=leftframetable>
                <TBODY>
                    <TR>
                        <TD height="25" style="background:url(<?php echo base_url(); ?>images/left_tt.gif) no-repeat">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <TD width="20"></TD>
                                    <TD class=STYLE1 style="cursor:pointer" onclick=showsubmenu(33); height=25>合作流程</TD>
                                </tr>
                            </table>
                        </TD>
                    </TR>
                    <TR>
                        <TD>
                            <TABLE id=submenu33 style="display:none;" cellSpacing=0 cellPadding=0 width="100%" border=0>
                                <TBODY>
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/cooperation/cooperate', '零风险合作', array('target'=>'main'))?></TD>
                                    </TR>                                
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/cooperation/process', '服务流程', array('target'=>'main'))?></TD>
                                    </TR>
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/cooperation/commitment', '我们的承诺', array('target'=>'main'))?></TD>
                                    </TR>                                
                                </TBODY>
                            </TABLE>
                        </TD>
                    </TR>
                </TBODY>
            </TABLE>
        </td>
    </tr>
	
	<tr>
        <td>
            <TABLE width="97%" border=0 align=right cellPadding=0 cellSpacing=0 class=leftframetable>
                <TBODY>
                    <TR>
                        <TD height="25" style="background:url(<?php echo base_url(); ?>images/left_tt.gif) no-repeat">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <TD width="20"></TD>
                                    <TD class=STYLE1 style="cursor:pointer" onclick=showsubmenu(31); height=25>招贤纳士</TD>
                                </tr>
                            </table>
                        </TD>
                    </TR>
                    <TR>
                        <TD>
                            <TABLE id=submenu31 style="display:none;" cellSpacing=0 cellPadding=0 width="100%" border=0>
                                <TBODY>
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/careers/careers', '招贤纳士', array('target'=>'main'))?></TD>
                                    </TR>
									<TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/careers/growth', '成长路径', array('target'=>'main'))?></TD>
                                    </TR> 
                                </TBODY>
                            </TABLE>
                        </TD>
                    </TR>
                </TBODY>
            </TABLE>
        </td>
    </tr>
  	<tr>
        <td>
            <TABLE width="97%" border=0 align=right cellPadding=0 cellSpacing=0 class=leftframetable>
                <TBODY>
                    <TR>
                        <TD height="25" style="background:url(<?php echo base_url(); ?>images/left_tt.gif) no-repeat">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <TD width="20"></TD>
                                    <TD class=STYLE1 style="cursor:pointer" onclick=showsubmenu(24); height=25>战略投融资、首页活动</TD>
                                </tr>
                            </table>
                        </TD>
                    </TR>
                    <TR>
                        <TD>
                            <TABLE id=submenu24 style="display:none;" cellSpacing=0 cellPadding=0 width="100%" border=0>
                                <TBODY>
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/strategy/strategy', '战略投融资', array('target'=>'main'))?></TD>
                                    </TR>
									 <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/strategy/activity', '首页活动', array('target'=>'main'))?></TD>
                                    </TR>  
                                </TBODY>
                            </TABLE>
                        </TD>
                    </TR>
                </TBODY>
            </TABLE>
        </td>
    </tr>
  	<tr>
        <td>
            <TABLE width="97%" border=0 align=right cellPadding=0 cellSpacing=0 class=leftframetable>
                <TBODY>
                    <TR>
                        <TD height="25" style="background:url(<?php echo base_url(); ?>images/left_tt.gif) no-repeat">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <TD width="20"></TD>
                                    <TD class=STYLE1 style="cursor:pointer" onclick=showsubmenu(6); height=25>客户留言</TD>
                                </tr>
                            </table>
                        </TD>
                    </TR>
                    <TR>
                        <TD>
                            <TABLE id=submenu6 style="display:none;" cellSpacing=0 cellPadding=0 width="100%" border=0>
                                <TBODY>
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/leave_words', '留言列表', array('target'=>'main'))?></TD>
                                    </TR>                                
                                </TBODY>
                            </TABLE>
                        </TD>
                    </TR>
                </TBODY>
            </TABLE>
        </td>
    </tr>
  	<tr>
        <td>
            <TABLE width="97%" border=0 align=right cellPadding=0 cellSpacing=0 class=leftframetable>
                <TBODY>
                    <TR>
                        <TD height="25" style="background:url(<?php echo base_url(); ?>images/left_tt.gif) no-repeat">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <TD width="20"></TD>
                                    <TD class=STYLE1 style="cursor:pointer" onclick=showsubmenu(7); height=25>关于我们</TD>
                                </tr>
                            </table>
                        </TD>
                    </TR>
                    <TR>
                        <TD>
                            <TABLE id=submenu7 style="display:none;" cellSpacing=0 cellPadding=0 width="100%" border=0>
                                <TBODY>
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/company_info/advisory', '顾客寄语', array('target'=>'main'))?></TD>
                                    </TR>
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/company_info/intro', '公司简介', array('target'=>'main'))?></TD>
                                    </TR>
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/company_info/structure', '组织架构', array('target'=>'main'))?></TD>
                                    </TR>
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/company_info/culture', '企业文化', array('target'=>'main'))?></TD>
                                    </TR>
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/company_info/hushiming', '说胡世明', array('target'=>'main'))?></TD>
                                    </TR>
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/expert_list', '专家列表', array('target'=>'main'))?></TD>
                                    </TR>
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/expert_add', '专家添加', array('target'=>'main'))?></TD>
                                    </TR>
                                </TBODY>
                            </TABLE>
                        </TD>
                    </TR>
                </TBODY>
            </TABLE>
        </td>
    </tr>
  	<tr>
        <td>
            <TABLE width="97%" border=0 align=right cellPadding=0 cellSpacing=0 class=leftframetable>
                <TBODY>
                    <TR>
                        <TD height="25" style="background:url(<?php echo base_url(); ?>images/left_tt.gif) no-repeat">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <TD width="20"></TD>
                                    <TD class=STYLE1 style="cursor:pointer" onclick=showsubmenu(8); height=25>联系我们</TD>
                                </tr>
                            </table>
                        </TD>
                    </TR>
                    <TR>
                        <TD>
                            <TABLE id=submenu8 style="display:none;" cellSpacing=0 cellPadding=0 width="100%" border=0>
                                <TBODY>
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/contact', '联系我们', array('target'=>'main'))?></TD>
                                    </TR>                                
                                </TBODY>
                            </TABLE>
                        </TD>
                    </TR>
                </TBODY>
            </TABLE>
        </td>
    </tr>
  	<tr>
        <td>
            <TABLE width="97%" border=0 align=right cellPadding=0 cellSpacing=0 class=leftframetable>
                <TBODY>
                    <TR>
                        <TD height="25" style="background:url(<?php echo base_url(); ?>images/left_tt.gif) no-repeat">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <TD width="20"></TD>
                                    <TD class=STYLE1 style="cursor:pointer" onclick=showsubmenu(9); height=25>合作伙伴</TD>
                                </tr>
                            </table>
                        </TD>
                    </TR>
                    <TR>
                        <TD>
                            <TABLE id=submenu9 style="display:none;" cellSpacing=0 cellPadding=0 width="100%" border=0>
                                <TBODY>
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/partner_list', '合作伙伴列表', array('target'=>'main'))?></TD>
                                    </TR>                                
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/partner_add', '合作伙伴添加', array('target'=>'main'))?></TD>
                                    </TR>
                                </TBODY>
                            </TABLE>
                        </TD>
                    </TR>
                </TBODY>
            </TABLE>
        </td>
    </tr>
  	<!-- <tr>
  	        <td>
  	            <TABLE width="97%" border=0 align=right cellPadding=0 cellSpacing=0 class=leftframetable>
  	                <TBODY>
  	                    <TR>
  	                        <TD height="25" style="background:url(<?php echo base_url(); ?>images/left_tt.gif) no-repeat">
  	                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
  	                                <tr>
  	                                    <TD width="20"></TD>
  	                                    <TD class=STYLE1 style="cursor:pointer" onclick=showsubmenu(10); height=25>人才招聘</TD>
  	                                </tr>
  	                            </table>
  	                        </TD>
  	                    </TR>
  	                    <TR>
  	                        <TD>
  	                            <TABLE id=submenu10 style="display:none;" cellSpacing=0 cellPadding=0 width="100%" border=0>
  	                                <TBODY>
  	                                    <TR>
  	                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
  	                                        <TD height=23><?php echo anchor('orient/talent_list', '职位列表', array('target'=>'main'))?></TD>
  	                                    </TR>                                
  	                                    <TR>
  	                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
  	                                        <TD height=23><?php echo anchor('orient/talent_add', '职位添加', array('target'=>'main'))?></TD>
  	                                    </TR>
  	                                </TBODY>
  	                            </TABLE>
  	                        </TD>
  	                    </TR>
  	                </TBODY>
  	            </TABLE>
  	        </td>
  	    </tr> -->
  	<tr>
        <td>
            <TABLE width="97%" border=0 align=right cellPadding=0 cellSpacing=0 class=leftframetable>
                <TBODY>
                    <TR>
                        <TD height="25" style="background:url(<?php echo base_url(); ?>images/left_tt.gif) no-repeat">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <TD width="20"></TD>
                                    <TD class=STYLE1 style="cursor:pointer" onclick=showsubmenu(11); height=25>友情链接</TD>
                                </tr>
                            </table>
                        </TD>
                    </TR>
                    <TR>
                        <TD>
                            <TABLE id=submenu11 style="display:none;" cellSpacing=0 cellPadding=0 width="100%" border=0>
                                <TBODY>
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/link_list', '友情链接列表', array('target'=>'main'))?></TD>
                                    </TR>                                
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/link_add', '友情链接添加', array('target'=>'main'))?></TD>
                                    </TR>
                                </TBODY>
                            </TABLE>
                        </TD>
                    </TR>
                </TBODY>
            </TABLE>
        </td>
    </tr>  


	<tr>
        <td>
            <TABLE width="97%" border=0 align=right cellPadding=0 cellSpacing=0 class=leftframetable>
                <TBODY>
                    <TR>
                        <TD height="25" style="background:url(<?php echo base_url(); ?>images/left_tt.gif) no-repeat">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <TD width="20"></TD>
                                    <TD class=STYLE1 style="cursor:pointer" onclick=showsubmenu(55); height=25>下载文档</TD>
                                </tr>
                            </table>
                        </TD>
                    </TR>
                    <TR>
                        <TD>
                            <TABLE id=submenu55 style="display:none;" cellSpacing=0 cellPadding=0 width="100%" border=0>
                                <TBODY>
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/file_list', '下载文档列表', array('target'=>'main'))?></TD>
                                    </TR>                                
                                    <TR>
                                        <TD><IMG src="<?php echo base_url(); ?>images/closed.gif"></TD>
                                        <TD height=23><?php echo anchor('orient/file_add', '下载文档添加', array('target'=>'main'))?></TD>
                                    </TR>
                                </TBODY>
                            </TABLE>
                        </TD>
                    </TR>
                </TBODY>
            </TABLE>
        </td>
    </tr> 
    <tr>
        <td height="5" background="<?php echo base_url(); ?>images/tableline_bottom.jpg" bgcolor="#9BC2ED"></td>
    </tr>
</table>
</body>
</html>