<div id="yingxiao_main">
	<?php $this->load->view('job_top');?>
    <div class="urhear">当前位置：<a href="<?php echo base_url();?>">首页</a>>><a href="welcome/yingxiao">营销力动态</a>
	<?php
	switch(@$this->uri->segment(3))
	{
	case '1':
		echo ">>企业新闻";
		break;
	case '2':
		echo ">>行业资讯";
		break;
	}
	?>
	</div>
    <div class="yingxiao_left">
   		<?php $this->load->view('left_3');?> 
    </div>
    <div class="yingxiao_right">
    	<?php if($this->uri->segment(3) == ""):?>
        <div class="yingxiao_content">
        	<div class="yingxiao_news">
            	<div class="news_title">企业新闻<span class="yingxiao_more"><a href="welcome/yingxiao/1">more</a></span></div>
				<?php foreach ($plan_qiye as $plan_qiye_i):?>
                <div class="line_content"><?php echo anchor('welcome/yingxiao_info/'.$plan_qiye_i->c_id.'/'.$plan_qiye_i->id,'·'.mb_substr($plan_qiye_i->title, 0, 18),array('title' =>$plan_qiye_i->title));?> <span class="cx_time"><?php echo date('Y-m-d', $plan_qiye_i->addtime);?>&nbsp;&nbsp;&nbsp;&nbsp;</span></div>
				<?php endforeach;?>    
			</div>
		 </div>
        
        <div class="yingxiao_content">
        	<div class="yingxiao_news">
            	<div class="news_title">行业资讯<span class="yingxiao_more"><a href="welcome/yingxiao/2">more</a></span></div>
               <?php foreach ($plan_hangye as $plan_hangye_i):?>
                <div class="line_content"><?php echo anchor('welcome/yingxiao_info/'.$plan_hangye_i->c_id.'/'.$plan_hangye_i->id, '·'.mb_substr($plan_hangye_i->title, 0, 18),array('title' =>$plan_hangye_i->title));?><span class="cx_time"><?php echo date('Y-m-d', $plan_qiye_i->addtime);?>&nbsp;&nbsp;&nbsp;&nbsp;</span></div>
				<?php endforeach;?>  
			</div>
		 </div>
        <?php else:?>
       
        <div class="yingxiao_content">
        	<div class="yingxiao_news">
            	<div class="news_title">
				<?php
				switch(@$this->uri->segment(3))
				{
				case '1':
					echo "企业新闻";
					break;
				case '2':
					echo "行业资讯";
					break;
				}
				?>
				</div>
        				<?php foreach ($qiye_list['list'] as $qiye_list_i):?>
                <div class="line_content"><?php echo anchor('welcome/yingxiao_info/1/'.$qiye_list_i->id, '·'.mb_substr($qiye_list_i->title, 0, 18),array('title' =>$qiye_list_i->title));?><span class="cx_time"><?php echo date('Y-m-d', $qiye_list_i->addtime);?>&nbsp;&nbsp;&nbsp;&nbsp;</span></div>
        		<?php endforeach;?>    
				<div class="ly_fy">共&nbsp;<?php echo $qiye_list['total']; ?>&nbsp;条&nbsp;第&nbsp;<?php echo ($qiye_list['start']/$qiye_list['size']+1).'/'.ceil($qiye_list['total']/$qiye_list['size']);?>&nbsp;页&nbsp;&nbsp;<?php echo $qiye_list['fy']; ?></div>
        </div>
        <?php endif;?>
		
			<?php $this->load->view('peixun_box');?> 
        </div>
    </div>
</div>