<style type="text/css">
h2{height:42px; line-height:38px; background:#f1f1f1; margin-bottom:20px; font-size:12px; color:#666; font-weight:normal;}
#myFocus{ width:674px; height:282px;}
</style>
<script type="text/javascript">
//设置
myFocus.set({
	id:'myFocus',//ID
	pattern:'mF_taobao2010',//风格
	wrap:false
});
</script>
<div id="yingxiao_main">
	<?php $this->load->view('job_top');?>
    
    <div class="yingxiao_right" style="float:left;_margin-bottom:0px;">
    	<div class="urhear">当前位置：<a href="<?php echo base_url();?>">首页</a>>><a href="welcome/anli">营销案例</a></div>
    </div>
    <div class="anli_top">
    	<div class="anli_banner">
		
			<div id="myFocus"><!--焦点图盒子-->
			  <div class="loading"><img src="images/loading.gif" alt="请稍候..." /></div><!--载入画面(可删除)-->
			  <div class="pic"><!--图片列表-->
				<ul>
					<?php foreach ($slideshow as $slideshow_i):?>
						<li><a href="<?php echo $slideshow_i->url;?>" target="_blank"><img src="<?php echo base_url($slideshow_i->img);?>" thumb="" title="<?php echo $slideshow_i->seo_t;?>" alt="<?php echo $slideshow_i->seo_a;?>" text="" /></a></li>
					<?php endforeach;?>
				</ul>
			  </div>
			</div>
		
        </div>
       <!-- js开始 -->
        <div class="anli_right">
			<div class="anli_date">
				<span><?php echo $showtime=date("m", time()+8*60*60);?></span>
				<span class="day"><?php echo $showtime=date("d", time()+8*60*60);?></span>
			</div>
			<ul class="an_txc">
			<?php 
				$k = 1;
            	foreach ($report as $report_i):
			?>
				<li onmousemove="setTab('one',<?php echo $k;?>,5);" id="one<?php echo $k;?>" style="cursor:pointer;">
					<span class="right_box2">
						<?php
                    	echo anchor('welcome/anli_hangye_info/report/'.$report_i->c_id.'/'.$report_i->id,mb_substr($report_i->title, 0, 10),array('title' =>$report_i->title));
						?>
					</span>
				</li>
				<li class="an_y <?php if($k != 1){echo 'dis';}?>" id="con_one_<?php echo $k;?>">
					<a href="welcome/anli_hangye_info/report/<?php echo $report_i->c_id,'/',$report_i->id;?>" title="<?php echo $report_i->title;?>">
						<img src="<?php echo $report_i->img;?>" alt="<?php echo $report_i->title;?>">
					</a>
					<b>
					<?php
                    	echo anchor('welcome/anli_hangye_info/report/'.$report_i->c_id.'/'.$report_i->id,mb_substr($report_i->title, 0, 10),array('title' =>$report_i->title));
					?>
					</b>
					<p >
					<?php
                    	echo anchor('welcome/anli_hangye_info/report/'.$report_i->c_id.'/'.$report_i->id,mb_substr(strip_tags($report_i->content), 0, 200));
					?>
					</p>
				</li>
			<?php
				$k++;
            	endforeach;
			?>
			</ul>
        </div>
		<!-- 结束 -->
    </div>
    <div class="anli_content">
		
    	<div class="anlibox1">
        	<a href="<?php echo base_url();?>welcome/anli_hangye/1" ><img src="images/anli_box1.jpg" /></a>
			<?php 
				$wh_c_id['c_id'] = 1;
				$case = $this->p_model->p_w_limit('case', $wh_c_id,'sort desc, addtime desc', 4);
				//print_r($data['case']);
				foreach($case as $case_i):
			?>
            <div class="anlibox_font"><a href="<?php echo base_url();?>welcome/anli_hangye_info/case/<?php echo $case_i->c_id;?>/<?php echo $case_i->id;?>" title="<?php echo $case_i->title;?>">▪ <?php echo mb_substr($case_i->title, 0, 18);?></a><span class="cx_timea"><?php echo date('Y-m-d', $case_i->addtime);?></span></div>
			<?php endforeach;?>
        </div>

        <div class="anlibox2">
        	<a href="<?php echo base_url();?>welcome/anli_hangye/2" ><img src="images/anli_box2.jpg" /></a>
            <?php 
				$wh_c_id['c_id'] = 2;
				$case = $this->p_model->p_w_limit('case', $wh_c_id,'sort desc, addtime desc', 4);
				//print_r($data['case']);
				foreach($case as $case_i):
			?>
            <div class="anlibox_font"><a href="<?php echo base_url();?>welcome/anli_hangye_info/case/<?php echo $case_i->c_id;?>/<?php echo $case_i->id;?>" title="<?php echo $case_i->title;?>">▪ <?php echo mb_substr($case_i->title, 0, 18);?></a><span class="cx_timea"><?php echo date('Y-m-d', $case_i->addtime);?></span></div>
			<?php endforeach;?>
        </div>
        <div class="anlibox3">
        	<a href="<?php echo base_url();?>welcome/anli_hangye/3" ><img src="images/anli_box3.jpg" /></a>
           <?php 
				$wh_c_id['c_id'] = 3;
				$case = $this->p_model->p_w_limit('case', $wh_c_id,'sort desc, addtime desc', 4);
				//print_r($data['case']);
				foreach($case as $case_i):
			?>
            <div class="anlibox_font"><a href="<?php echo base_url();?>welcome/anli_hangye_info/case/<?php echo $case_i->c_id;?>/<?php echo $case_i->id;?>" title="<?php echo $case_i->title;?>">▪ <?php echo mb_substr($case_i->title, 0, 18);?></a><span class="cx_timea"><?php echo date('Y-m-d', $case_i->addtime);?></span></div>
			<?php endforeach;?>
        </div>
        <div class="anlibox4">
        	<a href="<?php echo base_url();?>welcome/anli_hangye/4" ><img src="images/anli_box4.jpg" /></a>
            <?php 
				$wh_c_id['c_id'] = 4;
				$case = $this->p_model->p_w_limit('case', $wh_c_id,'sort desc, addtime desc', 4);
				//print_r($data['case']);
				foreach($case as $case_i):
			?>
            <div class="anlibox_font"><a href="<?php echo base_url();?>welcome/anli_hangye_info/case/<?php echo $case_i->c_id;?>/<?php echo $case_i->id;?>" title="<?php echo $case_i->title;?>">▪ <?php echo mb_substr($case_i->title, 0, 18);?></a><span class="cx_timea"><?php echo date('Y-m-d', $case_i->addtime);?></span></div>
			<?php endforeach;?>
        </div>
    </div>
    <div class="anli_se">
	<img style="float:right; padding-top:15px;" src="images/maobi.jpg" alt="东方盛思一切为您放心服务！" title="东方盛思一切为您放心服务！"/>
    <img src="images/cehua_pic.jpg"  alt="营销力策划" title="营销力策划"/>
    <img src="images/phone_pic.jpg" alt="服务电话" title="服务电话"/>
    </div>
    <div class="anli_ad"><img src="images/anli_ad.jpg" /></div>
    
</div>
<script type="text/javascript">
function setTab(name,cursel,n){
 for(i=1;i<=n;i++){
  var menu=document.getElementById(name+i);
  var con=document.getElementById("con_"+name+"_"+i);
  menu.className=i==cursel?"hover":"";
  con.style.display=i==cursel?"block":"none";
 }
}
</script>