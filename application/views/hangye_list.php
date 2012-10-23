<div id="yingxiao_main">
	<div class="job_top">
        <img src="images/job_ad.jpg" />
    </div>
    <div class="urhear">当前位置：<a href="welcome/index">首页</a>>><a href="welcome/yingxiao">营销力动态</a></div>
    <div class="yingxiao_left">
   		<?php $this->load->view('left_3');?> 
    </div>
    <div class="yingxiao_right">
    	<?php if($this->uri->segment(3) == ""):?>
        <div class="yingxiao_content">
        	<div class="yingxiao_news">
            	<div class="news_title">企业新闻</div>
				<?php foreach ($plan_qiye as $plan_qiye_i):?>
                <div class="line_content"><?php echo anchor('welcome/yingxiao_info/'.$plan_qiye_i->c_id.'/'.$plan_qiye_i->id, '·'.$plan_qiye_i->title);?></div>
				<?php endforeach;?>    
			</div>
		 </div>
        
        <div class="yingxiao_content">
        	<div class="yingxiao_news">
            	<div class="news_title">行业资讯</div>
               <?php foreach ($plan_hangye as $plan_hangye_i):?>
                <div class="line_content"><?php echo anchor('welcome/yingxiao_info/'.$plan_hangye_i->c_id.'/'.$plan_hangye_i->id, '·'.$plan_hangye_i->title);?></div>
				<?php endforeach;?>  
			</div>
		 </div>
        <?php endif;?>
        <?php if($this->uri->segment(3) == 1):?>
		<?php //print_r($qiye_list);?>
        <div class="yingxiao_content">
        	<div class="yingxiao_news">
            	<div class="news_title">企业新闻</div>
        				<?php foreach ($qiye_list as $qiye_list_i):?>
                <div class="line_content"><?php echo anchor('welcome/anli_hangye_info/'.$qiye_list_i['id'], '·'.$qiye_list_i['title']);?></div>
        				<?php endforeach;?>    
        </div>
        <?php endif;?>
        		<?php if($this->uri->segment(3) == "2"):?>
        <div class="yingxiao_content">
        	<div class="yingxiao_news">
            	<div class="news_title">行业资讯</div>
        				<?php foreach ($plan_qiye as $plan_qiye_i):?>
                <div class="line_content"><?php echo anchor('welcome/anli_hangye_info/'.$plan_qiye_i->id, '·'.$plan_qiye_i->title);?></div>
        				<?php endforeach;?>    
        </div>
        <?php endif;?>
		
			<?php $this->load->view('peixun_box');?> 
        </div>
    </div>
</div>