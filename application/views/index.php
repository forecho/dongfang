<!-- Baidu Button BEGIN -->
<script type="text/javascript" id="bdshare_js" data="type=slide&img=0&pos=left&uid=795728" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
		var bds_config = {"bdTop":260};
		document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours();
</script>
<style type="text/css">
h2{height:42px; line-height:38px; background:#f1f1f1; margin-bottom:20px; font-size:12px; color:#666; font-weight:normal;}
#myFocus{ width:960px; height:402px;}
</style>
<script type="text/javascript">
//设置
myFocus.set({
	id:'myFocus',//ID
	pattern:'mF_shutters',//风格
	wrap:false
});
</script>
<!-- Baidu Button END -->
<!--内容开始-->
	<div class="content">
	    <div class="banner">
			
			<div id="myFocus"><!--焦点图盒子-->
			  <div class="loading"><img src="images/loading.gif" alt="请稍候..." /></div><!--载入画面(可删除)-->
			  <div class="pic"><!--图片列表-->
				<ul>
					<?php foreach ($photo as $photo_i):?>
						<li><a href="<?php echo $photo_i->url;?>" target="_blank"><img src="<?php echo base_url($photo_i->img);?>" thumb="" title="<?php echo $photo_i->seo_t;?>" alt="<?php echo $photo_i->seo_a;?>" text="" /></a></li>
					<?php endforeach;?>
				</ul>
			  </div>
			</div>
		
		</div>
        <div class="box1">
        <?php
        	echo anchor('industry', "<img src='".base_url('images/box_1.jpg')."' alt='行业营销力' title='行业营销力'/>");
		?>
            <div class="box1_cont">
			<?php
                echo anchor('industry/info/agriculture', "<img src='".base_url('images/hangye_03.jpg')."' alt='农资营销策划' title='农资企业营销力策划'/>");
				echo anchor('industry/info/build', "<img src='".base_url('images/hangye_05.jpg')."' alt='食品饮料营销策划' title='食品饮料营销力策划'/>");
				 echo anchor('industry/info/alcohol', "<img src='".base_url('images/hangye_08.jpg')."' alt='农产品营销策划' title='农产品业营销力策划'/>");
				echo anchor('industry/info/tea', "<img src='".base_url('images/hangye_12.jpg')."' alt='酒水营销策划' title='酒水企业营销力策划'/>");
                echo anchor('industry/info/health', "<img src='".base_url('images/hangye_10.jpg')."' alt='创意农业营销策划' title='创意农业营销力策划'/>");
                echo anchor('industry/info/food', "<img src='".base_url('images/hangye_16.jpg')."' alt='建材家居营销策划' title='建材家居营销力策划'/>");
				echo anchor('industry/info/fast', "<img src='".base_url('images/hangye_14.jpg')."' alt='服装鞋帽营销策划' title='服装鞋帽行业策划'/>");
				  echo anchor('industry/info/other', "<img src='".base_url('images/hangye_18.jpg')."' alt='定制模式营销策划' title='定制模式企业策划'/>");
            ?> 

            </div>
        </div>
        <div class="box2">
        	<a href="<?php echo base_url();?>welcome/sixiang/think/1" ><img src="<?php echo base_url();?>images/box_2.jpg" alt="营销力思想" titlt="营销力思想"/></a>
            <div class="box2_cont">
            	<a href="<?php echo base_url();?>welcome/sixiang/think/1"><img src="<?php echo base_url();?>images/sx_1.jpg" alt="思想体系" title="思想体系"/></a>
                <a href="<?php echo base_url();?>welcome/sixiang/core_value"><img src="<?php echo base_url();?>images/sx_2.jpg" alt="核心价值" title="核心价值"/></a>
                <a href="<?php echo base_url();?>welcome/sixiang/column/1"><img src="<?php echo base_url();?>images/sx_3.jpg" alt="专家专栏" title="专家专栏"/></a>
            </div>
        </div>
        <div class="box3">
        	<a href="<?php echo base_url();?>welcome/anli" ><img src="<?php echo base_url();?>images/box_3.jpg" alt="营销力案例" titlt="营销力案例"/></a>
            <div class="box3_cont">
            <?php
				$i = 1;
            	foreach ($case as $case_i):
					if($i == 1){
						$case_img = "<img src='".base_url($case_i->img)."' />";
			?>
            	<div class="box3_img">
                <?php
					echo anchor('welcome/anli_hangye_info/case/'.$case_i->c_id.'/'.$case_i->id, $case_img ,array('title' =>$case_i->title));
				?>
                </div>
                <div class="box3_content">
                	<div class="box3_title">
                    <?php
                    	echo anchor('welcome/anli_hangye_info/case/'.$case_i->c_id.'/'.$case_i->id, '▪ '.mb_substr($case_i->title, 0, 18),array('title' =>$case_i->title));
					?>
                    </div>
                    <div class="box3_text">
                    <?php
                    	echo mb_substr(strip_tags($case_i->content), 0, 70);
					?>
                    </div>
                </div>
                <div class="clear"></div>
            <?php
					}else{
						
			?>
                <div class="box3_news"><?php echo anchor('welcome/anli_hangye_info/case/'.$case_i->c_id.'/'.$case_i->id, '▪ '.mb_substr($case_i->title, 0, 18),array('title' =>$case_i->title));?><span class="cx_time"><?php echo date('Y-m-d', $case_i->addtime);?></span></div>
            <?php
					}
			?>
            <?php
				$i++;
            	endforeach;
			?>    
            </div>
        </div>
        <div class="box4">
        	<a href="<?php echo base_url();?>welcome/yingxiao" ><img src="<?php echo base_url();?>images/box_4.jpg" alt="营销力动态"  title="营销力动态"/></a>
            <div class="box3_cont">
            <?php
				$j = 1;
            	foreach ($new as $new_i):
					if($j == 1){
						$new_img = "<img src='".base_url($new_i->img)."' />";
			?>
            	<div class="box3_img">
                <?php
					echo anchor('welcome/yingxiao_info/'.$new_i->c_id.'/'.$new_i->id, $new_img,array('title' =>$new_i->title));
				?>
                </div>
                <div class="box3_content">
                	<div class="box3_title">
                    <?php
                    	echo anchor('welcome/yingxiao_info/'.$new_i->c_id.'/'.$new_i->id, '▪ '.mb_substr($new_i->title, 0, 18),array('title' =>$new_i->title));
					?>
                    </div>
                    <div class="box3_text">
                    <?php
                    	echo mb_substr(strip_tags($new_i->content), 0, 70);
					?>
                    </div>
                </div>
                <div class="clear"></div>
            <?php
					}else{
						
			?>
                <div class="box3_news"><?php echo anchor('welcome/yingxiao_info/'.$new_i->c_id.'/'.$new_i->id, '▪ '.mb_substr($new_i->title, 0, 18),array('title' =>$new_i->title));?><span class="cx_time"><?php echo date('Y-m-d', $new_i->addtime);?></span></div>
            <?php
					}
			?>
            <?php
				$j++;
            	endforeach;
			?>    
            </div>
        </div>
        
         <div class="box4">
        	<a href="<?php echo base_url();?>welcome/sixiang/report/1" ><img src="<?php echo base_url();?>images/box_5.jpg"  alt="媒体报道" title="媒体报道"/></a>
            <div class="box3_cont">
            <?php
				$k = 1;
            	foreach ($report as $report_i):
					if($k == 1){
						$report_img = "<img src='".base_url($report_i->img)."' />";
			?>
            	<div class="box3_img">
                <?php
					echo anchor('welcome/anli_hangye_info/report/'.$report_i->c_id.'/'.$report_i->id, $report_img,array('title' =>$report_i->title));
				?>
                </div>
                <div class="box3_content">
                	<div class="box3_title">
                    <?php
                    	echo anchor('welcome/anli_hangye_info/report/'.$report_i->c_id.'/'.$report_i->id, '▪ '.mb_substr($report_i->title, 0, 18),array('title' =>$report_i->title));
					?>
                    </div>
                    <div class="box3_text">
                    <?php
                    	echo mb_substr(strip_tags($report_i->content), 0, 70);
					?>
                    </div>
                </div>
                <div class="clear"></div>
            <?php
					}else{
						
			?>
                <div class="box3_news"><?php echo anchor('welcome/anli_hangye_info/report/'.$report_i->c_id.'/'.$report_i->id, '▪ '.mb_substr($report_i->title, 0, 18),array('title' =>$report_i->title));?><span class="cx_time"><?php echo date('Y-m-d', $report_i->addtime);?></span></div>
            <?php
					}
			?>
            <?php
				$k++;
            	endforeach;
			?>    
            </div>
        </div>
        
        <div class="box4">
        	<a href="http://www.dofaith.net/welcome/anli_hangye_info/cooperation/cooperate/1"><img src="<?php echo base_url();?>images/box_6.jpg"  alt="合作流程" title="合作流程"/></a>
            <div class="box6_cont">
            	<div class="box6_font">
                	<a href="http://www.dofaith.net/welcome/anli_hangye_info/cooperation/cooperate/1">
                    <img src="<?php echo base_url();?>images/pic_hezuo.jpg" alt="零风险合作" title="零风险合作"/></a>
                    <div class="gift_font_1"><a href="http://www.dofaith.net/welcome/anli_hangye_info/cooperation/cooperate/1"><img src="<?php echo base_url();?>images/jiantou.jpg" alt="零风险合作" title="零风险合作"/></a><a href="welcome/anli_hangye_info/cooperation/cooperate/1" alt="零风险合作" title="零风险合作">零风险合作</a></div>
                </div>
                <div class="box6_font" style="width:155px; border-left:1px dashed #8D8D8D; border-right:1px dashed #8D8D8D;">
                	<a href="http://www.dofaith.net/welcome/anli_hangye_info/cooperation/process/1">
                    <img src="<?php echo base_url();?>images/pic_liucheng.jpg" alt="流程化服务" title="流程化服务"/></a>
                    <div class="gift_font_1" ><a href="http://www.dofaith.net/welcome/anli_hangye_info/cooperation/process/1"><img src="<?php echo base_url();?>images/jiantou.jpg" alt="流程化服务" title="流程化服务"/></a><a href="welcome/anli_hangye_info/cooperation/process/1" alt="流程化服务" title="流程化服务">流程化服务</a></div>
                </div>
                <div class="box6_font">
                	<a href="http://www.dofaith.net/welcome/anli_hangye_info/cooperation/commitment/1">
                    <img src="<?php echo base_url();?>images/pic_fuwu.jpg" alt="我们的承诺" title="我们的承诺"/></a>
                    <div class="gift_font_1"><a href="http://www.dofaith.net/welcome/anli_hangye_info/cooperation/commitment/1"><img src="<?php echo base_url();?>images/jiantou.jpg" alt="我们的承诺" title="我们的承诺"/></a><a href="welcome/anli_hangye_info/cooperation/commitment/1" alt="我们的承诺" title="我们的承诺">我们的承诺</a></div>
                </div>
            </div>
        </div>
        
        <!--8-5 -->
		<?php
			$where['name'] = '首页活动图片';
			$banner = $this->p_model->p_where('banner',$where);
		
		?>
        <div class="gift">
        	<div class="gift_img"><a href="welcome/activity"><img src="<?php echo base_url().$banner->img;?>" /></a></div>
            <div class="gift_font">
            	
              
                
            </div>
        </div>
		<!--8-5 over-->
    </div>
<!--内容结束-->