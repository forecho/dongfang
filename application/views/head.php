<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$keywords = '营销策划公司,营销咨询公司,营销顾问专家';
$description = '东方盛思营销顾问机构为中国企业营销力提升第一机构，国内首创企业营销力策划体系，致力于农产品、酒、茶、食品、耐用消费品等领域的营销策划、营销咨询服务,是一家专业的营销咨询策划公司。服务电话：400-886-1357';
$title = '营销咨询公司|营销策划公司|营销顾问专家';
if(@$this->uri->segment(2) == 'yingxiao_info'){
	$keywords = $plan->keywords;
	$description = $plan->description;
	$title = $plan->title;
}
if(@$this->uri->segment(2) == 'peixun'){	
	switch(@$this->uri->segment(3))
		{
		case '':
			$title =  "营销力培训简介";
			break;
		case 'president':
			$title =  "总裁营销力";
			break;
		case 'team':
			$title =  "亮剑营销力";
			break;
		case 'network':
			$title =  "网络营销力";
			break;
		case 'product':
			$title =  "产品营销力";
			break;
		case 'other':
			$title =  "企业营销力内训";
			break;
		case 'plan':
			$title =  "营销力策划";
			break;
		}
}
if(@$this->uri->segment(2) == 'anli'){
	$title = "营销力案例";
}
if(@$this->uri->segment(2) == 'anli_hangye'){
	$title =  $name->name;
}
if(@$this->uri->segment(2) == 'sixiang'){
	$title = "营销力思想";
	switch(@$this->uri->segment(3))
		{
		case 'thought':
			$title = "思想体系";
			break;
		case 'think':
			$title = "思想体系";
			break;

		case 'core_value':
			$title = "核心价值";
			break;
		case 'report':
			$title = "媒体报道";
			break;
		case 'expert':
			$title = "专家专栏";
			break;
		default:
		   $title = "专家专栏";
		   break;
		}
}
if(@$this->uri->segment(2) == 'column_info' || $this->uri->segment(2) == 'video_info'){
	$keywords = $plan->keywords;
	$description = $plan->description;
	$title = $plan->title;
}
if(@$this->uri->segment(2) == 'yingxiao'){
	$title = "营销力动态";
	switch(@$this->uri->segment(3))
		{
		case '1':
			$title = "企业新闻";
			break;
		case '2':
			$title = "行业资讯";
			break;
		}
}
if(@$this->uri->segment(2) == 'touzi'){
	$title = "战略投融资";
}
if(@$this->uri->segment(2) == 'file_list'){
	$title = "文档下载";
}
if(@$this->uri->segment(2) == 'video'){
	$title = "视频专区";
}
if(@$this->uri->segment(2) == 'company'){
	switch(@$this->uri->segment(3))
		{
		case 'advisory':
			$title = "顾问寄语";
			break;
		case 'intro':
			$title = "公司简介";
			break;
		case 'structure':
			$title = "组织架构";
			break;
		case 'culture':
			$title = "企业文化";
			break;
		case 'hushiming':
			$title = "说胡世明";
			break;
		}
}
if(@$this->uri->segment(2) == 'team'){
	$title = "专家团队";
}
if(@$this->uri->segment(2) == 'team_info'){
	$title = $team_expert->name;
}
if(@$this->uri->segment(2) == 'job'){
	switch (@$this->uri->segment(3)) {
		case 'careers':
			$title = '招贤纳士';
			break;
		case 'growth':
			$title = '成长路径';
			break;
	}
}
if(@$this->uri->segment(2) == 'map'){
	$title = "网站地图";
}
if(@$this->uri->segment(2) == 'contact'){
	$title = "联系我们";
}
if(@$this->uri->segment(2) == 'liuyan'){
	$title = "留言板";
}
if(@$this->uri->segment(2) == 'anli_hangye_info'){
	switch (@$this->uri->segment(3)) {
		case 'case':
			$keywords = $case->keywords;
			$description = $case->description;
			$title = $case->title;
			break;
		case 'report':
			$keywords = $case->keywords;
			$description = $case->description;
			$title = $case->title;
			break;
		}
}
if(@$this->uri->segment(1) == 'industry'){
	if(@$this->uri->segment(2) == ""){
		$title =  '营销力策划'; 
	}else{
		$title =  @$array[$what];
	}
}
// else{
	// switch (@$this->uri->segment(3)) {
		// case 'case':
			// $keywords = $case->keywords;
			// $description = $case->description;
			// $title = $case->title;
			// break;
		// case 'report':
			// $keywords = $case->keywords;
			// $description = $case->description;
			// $title = $case->title;
			// break;
		// default:
			// $keywords = '营销策划机构,营销顾问公司,营销咨询公司';
			// $description = '东方盛思营销顾问机构为中国企业营销力提升第一机构，国内首创"企业营销力策划"体系，致力于农产品、酒、茶、食品、耐用消费品等领域的营销策划、营销咨询服务。服务电话：400-886-1357';
			// $title = '营销咨询公司|营销策划机构|营销顾问公司';
	// }
// }
?>
<title><?php echo $title;?>-东方盛思营销顾问机构</title>
<link rel="shortcut icon" href="<?php echo base_url();?>fav.ico" type="image/x-icon" />
<meta name="keywords" content="<?php echo $keywords;?>" />
<meta name="description" content="<?php echo $description;?>" />
<base href="<?php echo base_url();?>" />
<link href="<?php echo base_url();?>css/common.css" rel="stylesheet" type="text/css"  />
<script type="text/javascript" src="js/myfocus-2.0.1.min.js"></script>
<link rel="shortcut icon" href="fav.ico" type="image/x-icon" />
<meta name="google-site-verification" content="WpirK0JswYlyrtusGdHRqvvLiBVfCLHmerQqIEZoOVI" />
<!-- <script type="text/javascript" src="js/DD_belatedPNG_0.0.8a.js"></script>
[if lte IE 6]>
<script src="DD_belatedPNG_0.0.8a.js" type="text/javascript"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('div, ul, img, li, input , a');
    </script>
<![endif]  -->
<script type="text/javascript" src="js/jquery-1.4a2.min.js"></script>
<script type="text/javascript">
function addBookmark(title,url) {
if (window.sidebar) { 
window.sidebar.addPanel(title, url,""); 
} else if( document.all ) {
window.external.AddFavorite( url, title);
} else if( window.opera && window.print ) {
return true;
}
}
</script>
</head>
<body>
<div id="main">
<!--头部开始-->
	<div class="top">
    	<div class="head">
        	<div class="head_top">
				<!-- <ul>
					<?php
						echo "<li>".anchor(base_url(), '收藏本站')."</li>";
					?>
						<li class="line">|</li>
					<?php
						echo "<li>".anchor('welcome/job/careers', '招贤纳士',array('title' => '招贤纳士','alt' => '招贤纳士'))."</li>";
					?>
						<li class="line">|</li>
					<?php
						echo "<li>".anchor('welcome/map', '网站地图',array('title' => '网站地图','alt' => '网站地图'))."</li>";
					?>
						<li class="line">|</li>
					<?php
						echo "<li>".anchor('welcome/contact', '联系我们',array('title' => '联系我们','alt' => '联系我们'))."</li>";
					?>
				</ul> -->
				<a href="javascript:window.external.addFavorite('http://www.dofaith.net','东方盛思营销顾问机构')">收藏本站</a>
				<span>|</span><a href="<?php echo base_url();?>welcome/job/careers">招贤纳士</a><span>|</span><a href="<?php echo base_url();?>welcome/map">网站地图</a><span>|</span><a href="<?php echo base_url();?>welcome/contact">联系我们</a>
			</div>
            <div class="logo"><a href="<?php echo base_url();?>" title="东方盛思营销顾问机构" alt="东方盛思营销顾问机构" hidefocus="true"><img src="<?php echo base_url();?>images/logo.png" class="logo_bg"/></a></div>
            <div class="top_right">
                <div class="tel"><img src="<?php echo base_url();?>images/tel.jpg" /></div>
                <div class="nav">
						<ul>
                        <?php
                        	echo "<li>".anchor(base_url(), '首&nbsp;&nbsp;页')."</li>";
						?>
                            <li class="line">|</li>
                        <?php
							//7-28
                        	//echo "<li>".anchor('welcome/yingxiao', '营销力策划')."</li>";
                        	echo "<li>".anchor('industry', '营销力策划',array('title' => '营销力策划','alt' => '营销力策划'))."</li>";
						?>
                            <li class="line">|</li>
                        <?php
                        	echo "<li>".anchor('welcome/peixun', '营销力培训',array('title' => '营销力培训','alt' => '营销力培训'))."</li>";
						?>
                            <li class="line">|</li>
                        <?php
                        	echo "<li>".anchor('welcome/anli', '营销力案例',array('title' => '营销力案例','alt' => '营销力案例'))."</li>";
						?>
                            <li class="line">|</li>
                        <?php
                        	echo "<li>".anchor('welcome/column_info/think/1/1.html', '营销力思想',array('title' => '营销力思想','alt' => '营销力思想'))."</li>";
						?>
                            <li class="line">|</li>
                        <?php
							//7-27
                        	//echo "<li>".anchor('welcome/dongtai', '营销力动态')."</li>";
                        	echo "<li>".anchor('welcome/yingxiao', '营销力动态',array('title' => '营销力动态','alt' => '营销力动态'))."</li>";
						?>
                            <li class="line">|</li>
                        <?php
                        	echo "<li>".anchor('welcome/touzi', '战略投融资',array('title' => '战略投融资','alt' => '战略投融资'))."</li>";
						?>
                            <li class="line">|</li>
                        <?php
                        	echo "<li>".anchor('about/company/advisory', '关于我们',array('title' => '关于我们','alt' => '关于我们'))."</li>";
						?>
						</ul>
                </div>
            </div>
        </div>
        
    </div>
    <div class="sub_nav <?php if($this->uri->segment(1) == ""){echo 'po_left';}?>">
		<form action="">
			<div class="search">
			 <script type="text/javascript"> 
			function googlesearch () {
			var wq=document.getElementsByName("wq")[0].value;
			var link="http://www.google.com/search?domains=www.dofaith.net&sitesearch=www.dofaith.net&q="+wq;
			window.open(link); }
			</script>
			<input class="searchinput" type="text" name="wq" value=""><input class="subimg" type="submit" onclick="javascript:googlesearch()" value="搜索" /> 
			</div>
		</form>
        <div class="subheadnav">
        	<a href="<?php echo base_url();?>industry">营销策划</a>
            <a href="<?php echo base_url();?>industry/info/agriculture">农资营销策划</a>
            <a href="<?php echo base_url();?>industry/info/alcohol">农产品营销策划</a>
            <a href="<?php echo base_url();?>industry/info/tea">酒水营销策划</a>
            <a href="<?php echo base_url();?>industry/info/food">建材家居营销策划</a>
			<a href="<?php echo base_url();?>industry/info/build">食品饮料营销策划</a>
            <a href="<?php echo base_url();?>industry/info/health">创意农业营销策划</a>
            <a href="<?php echo base_url();?>industry/info/other">定制模式营销策划</a>
    	</div>
    </div>
<!--头部结束-->