<!--尾部开始-->

	<div class="foot">
    	<div class="hezuo"><img src="images/hezuo.jpg" /></div>
		
		<div  class="hezuo_img" id="demo" style="overflow:hidden;" onmouseover="stopscroll();"onmouseout="doscroll()"> 
			<div id="demo1" style="white-space:nowrap;padding:0;"> 
				<?php
				//print_r($partner);
				foreach ($partner as $partner_i):
            ?> 
				<a href="<?php echo $partner_i->url;?>" title="<?php echo $partner_i->name;?>"><img src="<?php echo base_url($partner_i->img);?>" /></a>
            <?php
				endforeach;
			?>
			</div> 
		</div>
		
    	<div class="contact" id="liuyan">
			<form action="welcome/liuyan_ok" method="post" onSubmit="return chkinput(this)">
				<div class="notice">▪ 如果您有问题向东方盛思咨询，可以在线留下您的联系方式，我们将有专业的顾问和您联系。</div>
				<div class="notice_img"><a href="#"><img src="images/notice.jpg" /></a></div>      
				<div class="people">
					<font>姓名：</font><input class="" type="text" size="15" name="name">
					<font>手机：</font><input class="" type="text" size="15" name="phone">
					<font>公司：</font><input class="" type="text" size="15" name="company">
					<font>职位：</font><input class="" type="text" size="15" name="position">
				</div>
				<div class="need">
					<font>需求：</font><textarea type="text" name="content" class="need_content" id="title"/></textarea>
						<input class="button_publish" type="submit" value="提交" />
						<input class="button_view" type="reset" value="重置" />
				</div>
			</form>
        </div>
		<?php if($this->uri->segment(1) == "" ):?>
		<div class="links_more">
        	<div class="links_title"><font>友情链接</font></div>
        	<div class="subnav_more">
				<ul>
				<?php foreach($link as $link_i):?>
					<li><a href="<?php echo $link_i->url;?>" title="点击访问<?php echo $link_i->name;?>" target="_banck"><?php echo $link_i->name;?></a></li>			
				<?php endforeach;?>
				</ul>
                </div>
       </div>
	   <?php endif;?>
       <div class="links">
			<div class="subnav">
				<ul>
							<li><a href="welcome">首&nbsp;&nbsp;&nbsp;页</a></li>
                            <li>|</li>
							<li><a href="industry">营销力策划 </a></li>
                            <li>|</li>
							<li><a href="welcome/peixun">营销力培训</a></li>
							<li>|</li>
							<li><a href="<?php echo base_url();?>welcome/video/3">视频专区</a></li>
                            <li>|</li>
							<li><a href="http://www.dofaith.cn">中国营销培训网</a></li>
							<li>|</li>
							<li><a href="<?php echo base_url();?>welcome/file_list">文档下载</a></li>
							<li>|</li>
							<li><a href="<?php echo base_url();?>welcome/mianze">免责声明</a></li>
							<li>|</li>
							<li><a href="<?php echo base_url();?>welcome/map">网站地图</a></li>
                            <li>|</li>
							<li><a href="welcome/contact">联系我们</a></li>
                            <li>|</li>
                            <li><a href="<?php echo base_url();?>welcome/liuyan">留言板</a></li>
				</ul>
                <div class="weibo"><a href="http://weibo.com/u/2905103512?wvr=3.6&lf=reg"><img src="images/weibo.jpg">公司微博</a><a href="http://weibo.com/u/1340102630?wvr=3.6&lf=reg"><img src="images/weibo.jpg">胡世明微博</a></div>
			</div>
            			 <?php
            	$address_arr = explode('@', $company->address);
				$service_arr = explode('@', $company->service);
				$email_arr = explode(',', $company->email);
			?>
			<div style="clear:both"></div>
			<div class="address">地&nbsp;&nbsp;&nbsp;址：   <?php echo $address_arr[0];?>    　<?php echo $address_arr[1];?>　　 　　 全国客服电话：<?php echo $service_arr[0];?>　　邮箱：<?php echo $email_arr[0];?></div>
			<div class="copyright">
			东方盛思<a href="http://www.dofaith.net/" style="TEXT-DECORATION:none ; color:#6A6767;">营销策划公司</a>，中国企业营销力策划第一机构，中国最具责任心的<a href="http://www.dofaith.net/" style="TEXT-DECORATION:none ; color:#6A6767;">营销咨询公司</a>。
			版权所有：<?php echo $company->copyright;?><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2804034389&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:2804034389:46" alt="欢迎给东方盛思留言！" title="欢迎给东方盛思留言！"></a>
            <script src="http://s9.cnzz.com/stat.php?id=4396377&web_id=4396377&show=pic" language="JavaScript"></script>
          

            </div>
		</div>
    </div>
<!--尾部结束-->
</div>
<div style="display:none;"> <script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fb65820e6df5bdc0177ee6c6cb287772d' type='text/javascript'%3E%3C/script%3E"));
</script></div>
</body>
</html>
<!--滚动的javascript--> 
<script> 
var t=demo.scrollWidth 
demo1.innerHTML+=demo1.innerHTML 
function doMarquee() 
{ 
demo.scrollLeft=demo.scrollLeft<demo.scrollWidth-demo.offsetWidth?demo.scrollLeft+1:t-demo.offsetWidth 
} 
function doscroll() 
{ 
   sc=setInterval(doMarquee,20) 
} 
function stopscroll() 
{ 
   clearInterval(sc) 
} 
doscroll() 
</script> 
<!--滚动的javascript结束--> 
<script language="javascript">
function chkinput(form)
{
	if(form.name.value=="")
	{
		alert("请输入您的姓名!");
		return(false);
	}
	if(form.phone.value=="")
	{
		alert("请输入您的手机号码!");
		return(false);
	}if(form.company.value=="")
	{
		alert("请输入您的公司!");
		return(false);
	}if(form.position.value=="")
	{
		alert("请输入您在您公司的职位!");
		return(false);
	}if(form.content.value=="")
	{
		alert("请输入您的需求!");
		return(false);
	}
		return(true);
}
</script>