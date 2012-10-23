<div id="yingxiao_main">
	<?php $this->load->view('job_top');?>
    	<div class="urhear">当前位置：<a href="<?php echo base_url();?>">首页</a>>><a href="welcome/activity">最新活动</a></div>
	<div class="touzi_left">
		<div class="touzi_left_font">
		<?php echo $strategy->activity;?>
		</div>
		<?php $this->load->view('peixun_box');?>		
	</div>
	
	<?php $this->load->view('left_3');?> 
	
</div>