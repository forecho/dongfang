<div id="yingxiao_main">
	<?php $this->load->view('job_top');?>
    <div class="urhear">当前位置：<a href="<?php echo base_url();?>">首页</a>>>
	<?php if($this->uri->segment(2) =='column_info'):?>
		<?php if($this->uri->segment(3) != 'report'):?>
		<a href="welcome/column_info/think/1/1">营销力思想</a>>>
		<?php echo $column_class->name;?>
		<?php else:?>
			<a href="welcome/sixiang/report/1">媒体报道</a>
		<?php endif?>
	<?php endif?>
	<?php if($this->uri->segment(2) == 'yingxiao_info' && $this->uri->segment(3) != '3'):?>
		<a href="welcome/yingxiao">营销力动态</a>>>
	<?php
	switch (@$this->uri->segment(3)) {
		case '1':
			echo '<a href="welcome/yingxiao/1">企业新闻</a>';
			break;
		case '2':
			echo '<a href="welcome/yingxiao/2">行业资讯</a>';
			break;
	}
	endif;?>
	<?php if($this->uri->segment(2) =='video_info' && $this->uri->segment(3) == 'report'):?>
		<a href="welcome/video/3/">视频专区</a>
	<?php endif;?>
	</div>
    <div class="left">
   		<?php $this->load->view('left_3');?> 
    </div>
    <div class="right">
    	

			<div class="info">
				<h2><?php echo $plan->title;?></h2>
				<?php if($this->uri->segment(2) =='video_info' && $this->uri->segment(3) == 'report'):?>
					<div class="dateinfo">作者：东方盛思营销顾问  时间：<?php echo date("Y-m-d H:i:s", $plan->addtime);?></div>
				<?php else:?>
					<div class="dateinfo">本文由 东方盛思营销顾问 撰写于 <?php echo date("Y-m-d H:i:s", $plan->addtime);?></div>
				<?php endif;?>
				<?php echo $plan->content;?>
		
			<?php
			if($this->uri->segment(2) =='video_info' && $this->uri->segment(3) == 'report'):
				if(count($last)>0):
			?>		
				<br />
				<div class="link"><a href="<?php echo base_url('welcome/video_info/report/3/'.$last->id);?>" class="per" title="上一个">上一篇：<span><?php echo $last->title;?></span></a></div>
					
			 <?php
				endif;
				if(count($next)>0):
			 ?>
				<div class="link"><a href="<?php echo base_url('welcome/video_info/report/3/'.$next->id);?>" class="next" title="下一个">下一篇：<span><?php echo $next->title;?></span></a></div>
			<?php
			endif;
				endif;
			 ?>
			</div>
       
		
		<?php $this->load->view('peixun_box');?>   
    </div>
</div>
<script type="text/javascript" src="js/jquery-1.4a2.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    $('img.menu_class').click(function () {
		$(this).next('ul.the_menu').slideToggle('medium');
    });
});
</script>