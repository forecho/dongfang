<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<HTML> 
<HEAD> 
<TITLE>东方盛思后台管理系统</TITLE> 
<META NAME="Generator" CONTENT="EditPlus"> 
<META NAME="Author" CONTENT=""> 
<META NAME="Keywords" CONTENT=""> 
<META NAME="Description" CONTENT=""> 
<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 

<style> 
body{ 
color:#666; 
font-family:Tahoma,Verdana,sans-serif,simsun; 
font-size:12px; 
} 

select, label, textarea, input { 
font-family:'lucida grande',tahoma,verdana,arial,simsun,sans-serif; 
} 
ul { 
list-style-type:none; 
padding:0px; 
margin:0px; 
} 
h2{ 
color:#526ea6; 
font-size:14px; 
margin-left:8px; 
} 
a{
	color:#039BED;
	text-decoration: none;
} 
*{ 
margin:0px;padding:0px; 
} 
select{ 
border:1px solid #BDC7D8; 
padding:2px; 
width:100px; 
} 
#wrapper{
	
width:97%; 
margin:0px auto; 
border:5px solid #F0F8FF; 
} 
#contentWrapper{ 
padding:7px; 
} 
#ctrlPanl{ 
border:1px solid #ccc;height:30px;line-height:30px;padding:2px 
} 
#ctrlPanl #olink{ 
float:left; 
} 
#ctrlPanl #olink li{ 
float:left; 
} 
#ctrlPanl #olink li a{ 
display:block; 
padding:0px 4px; 
text-decoration:none; 
} 
#content{ 
margin:8px auto; 
} 
.gutter table{ 
width:100%; 
border-collapse:collapse; 
border:1px solid #ccc; 
} 
table th{ 
height:30px; 
border-right:1px solid #ccc; 
border-bottom:1px solid #ccc; 
background:#F0F8FF 
} 
table tbody td{ 
height:30px; 
text-align:center; 
border-bottom:1px solid #ccc; 
} 
table tbody tr:hover td{ 
background:#F0FFF0; 
} 
table tbody tr.select td{ 
background:#F5FFFA; 
} 
table tfoot td{ 
height:30px; 
background:#F0F8FF 
} 
.pagenav{
	float:left;
	padding-left: 8px;
} 
</style> 
</HEAD> 
<script> 
var $ = function(id){ 
return document.getElementById(id); 
} 
function jtable(f, ctrl, chkCallback){ 
var achkbox = $(f).getElementsByTagName("input"); 
var ochkbox = []; 
var otr = []; 
for(var i = 0; i < achkbox.length; i++){ 
if (achkbox[i].type.toLowerCase() == "checkbox" && achkbox[i].id != ctrl){ 
ochkbox.push(achkbox[i]); 
otr.push(achkbox[i].parentNode.parentNode); 
} 
} 
$(ctrl).onclick = function(call){ 
for(var i = 0; i < ochkbox.length; i++){ 
if (this.checked){ 
ochkbox[i].checked = 1; 
ochkbox[i].parentNode.parentNode.className = "select"; 
}else{ 
ochkbox[i].checked = 0; 
ochkbox[i].parentNode.parentNode.className = ""; 
} 
} 
chkCallback(); 
} 
for(var i = 0; i < otr.length; i++){ 
otr[i].onclick = function(){ 
if (this.x != "1"){ 
this.x="1"; 
this.className = "select"; 
this.getElementsByTagName("input")[0].checked = 1; 
} 
else{ 
this.x="0"; 
this.className = ""; 
this.getElementsByTagName("input")[0].checked = 0; 
} 
} 
otr[i].onmouseover = function(){ 
if(this.x != "1") 
this.style.background = "#F5F5F5"; 
else 
this.style.background = ""; 
} 
otr[i].onmouseout = function(){ 
if(this.x != "1") 
this.style.background = ""; 
} 
} 
} 

function Observer(){ 
} 
Observer.prototype.update = function(arg){ 
return; 
} 

//Subject class construct 
function Subject(){ 
this.Observers = []; 
} 
//Subject prototype methods 
Subject.prototype = { 
notify:function(context){ 
for(var i = 0; i < this.Observers.length; i++){ 
this.Observers[i].update(context); 
} 
}, 
addObserver:function(obj){ 
this.Observers.push(obj); 
} 
} 

Object.extend = function(d,s){ 
for(p in s){ 
d[p] = s[p]; 
} 
return d; 
} 
function deleteObserver(){} 
Object.extend(deleteObserver, Observer); 
deleteObserver.update = function(num){ 
if (num) 
{ 
document.getElementById("dbtn").style.color="#000"; 
}else{ 
document.getElementById("dbtn").style.color="#999"; 
} 
} 
var tt = 4; 
function chkIsAll(){}; 
chkIsAll.update = function(num){ 
if (num == 0) 
{ 
$("chkboxCtr").checked = 0; 
} 
if (num == 4) 
{ 
$("chkboxCtr").checked = 1; 
} 
} 
var oSub = new Subject(); 
oSub.addObserver(deleteObserver); 
oSub.addObserver(chkIsAll); 

var chkbox = { 
chkState:{}, 
check:function(name){ 
var aChkbox = document.getElementsByTagName("input"); 
var tCount = 0; 
for(var i = 0; i < aChkbox.length; i++){ 
if (aChkbox[i].type == "checkbox" && aChkbox[i].name == name &&aChkbox[i].checked) 
{ 
if (!chkbox.chkState[name]) 
{ 
chkbox.chkState[name] = 0; 
tCount += 1; 
}else{ 
tCount += 1; 
} 
} 
} 
if (tCount != chkbox.chkState[name]) 
{ 
oSub.notify(tCount); 
chkbox.chkState[name] = tCount; 
} 
} 
} 
</script> 
<BODY> 
<div id="wrapper" style="margin-top:15px; float:left; margin-left:10px;">
  <div id="mainContent"> 
    <div id="contentWrapper"> 
<h2 style="margin:4px auto " >欢迎界面</h2> 
<div id="ctrlPanl" style="margin-top:10px;"> 
<div id="olink"> 
<ul> 
<li><a href="#">感谢您使用 武汉乐点创意科技有限公司 网站管理系统程序</a></li> 
</ul> 
</div> 
</div> 
<div id="content"> 
<div class="gutter" style="margin-top:30px;"> 
	<div style="background:#F5FFFA; width:525px; float:left; border:#999 solid 1px;">
    <ul>
    	<li style="font-size:13px; font-weight:bold; margin-left:50px; margin-left:30px; margin-top:10px;"><img src="<?php echo base_url(); ?>images/001_54.gif" />乐点简介</li>
    	<li style=" width:500px;margin-left:20px; line-height:20px; font-size:12px; margin-top:10px; letter-spacing:2px; margin-bottom:10px;">
        乐点科技是提供互联网络与互动产品解决方案的专业网站设计。通过乐点科技——专业网站设计公司，我们可以协助您通过在线品牌的塑造，
        建立长久的企业价值。擅长于系统化解决企业品牌在互联网上的统一性传播，以及企业品牌在互动产品上的应用。我们关注您的企业品牌建设需求，
        擅长于系统化解决企业品牌在互联网上的统一性传播，以及企业品牌在互动 产品上的应用。擅长于系统化解决企业品牌在互联网上的统一性传播，
        以及企业品牌在互动产品上的应用。乐点科技为不同行业的企业提供网站建设、网络营销、推广等专业服务，在过程和细节中满足不同客户的需求，
        我们追求技术的精湛和视觉的完美，在整个网站中突出您的企业建设理念和产品形象,让您的企业在目前激烈的商业竞争中脱颖而出。客户的满意是
        我们永恒的追求。</li>
     </ul>
    </div> 
    <div style="background:#F5FFFA; width:525px; float:left; border:#999 solid 1px; margin-left:45px;">
    <ul>
    	<li style="font-size:13px; font-weight:bold; margin-left:50px; margin-left:30px; margin-top:10px;"><img src="<?php echo base_url(); ?>images/ys.png" />关于乐点</li>
    	<li style=" width:500px;margin-left:20px; line-height:20px; font-size:12px; margin-top:10px; letter-spacing:2px; margin-bottom:10px;">
        乐点创意科技有限公司是一家专注于企业形象、品牌宣传；致力于企业网站建设、虚拟主机、域名注册、服务器托管和网上业务推广的专业网络服务
        公司。 公司凭着较强的网站建设实力，在为企业信息化建设服务的道路上，不断推陈出新。作为互联网全面技术与服务的提供
        者，我们将以互联网为核心，客户导向为原则，满足大中小企业客户的需求，为其提供针对性的信息产品和服务！公司拥有一支
        年轻资深成熟的网络从业人士组成的专业团队，集策划、开发、设计、营销、管理等全方位专业化运作于一体,有着丰富的网络技
        术专业经验，项目管理经验、计算机及网络技术、服务器网络安全、主流操作系统和网站建设系统开发工具有相当深入的了解和实
        践。具备承接各类企业网站建设、学校网站建设项，以及相当规模与类型的电子商务平台建设项目的能力。</li>
     </ul>
    </div> 
    <div style="clear:both;"></div>
    <ul style="margin-top:20px;">
    <li><img src="<?php echo base_url(); ?>images/icon-mail2.gif" />客户服务邮箱：Ldcykjhr@foxmail.com</li>
    <li  style="margin-top:10px;"><img src="<?php echo base_url(); ?>images/icon-phone.gif" />联系我们：<a href="#">027--67886151</a></li>
    <li style="margin-top:10px;"><img src="<?php echo base_url(); ?>images/icon-demo.gif" />我们的网站：<a href="http://www.whldcy.com">www.whldcy.com</a></li>
    </ul>
</div> 
</div> 
</div> 
</div></div></div> 
</div> 
</BODY> 
</HTML> 
<script>jtable("pForm", "chkboxCtr", function(){chkbox.check('id')});</script> 