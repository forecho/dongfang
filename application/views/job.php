<div id="yingxiao_main">
	<div class="job_top">
        	<img src="images/job_ad.jpg" />
    </div>
	<div class="urhear">当前位置：<a href="<?php echo base_url();?>">首页</a>>><a href="welcome/job/careers">招贤纳士</a>>>
	<?php
	switch(@$this->uri->segment(3))
	{
		case 'careers':
			echo "招贤纳士";
			break;
		case 'growth':
			echo "成长路径";
			break;
	}
	?>
	</div>
    <div class="yingxiao_left">
    	<!-- <img src="images/job_logo.jpg" /> -->
		<div class="dongtai_news">
			<a href="welcome/job/careers"><img src="images/job_03.png" title="招贤纳士" alt="招贤纳士" /></a>
			<a href="welcome/job/growth"><img src="images/job_05.png" title="成长路径" alt="成长路径" /></a>
		</div>
		<?php $this->load->view('left_2');?>
    </div>
    <div class="right">
		<div class="job_info">
			<?php
				switch(@$this->uri->segment(3))
				{
					case 'careers':
						echo $careers->careers;
						break;
					case 'growth':
						echo $careers->growth;
						break;
				}
			?>
		</div>
    </div>
</div>