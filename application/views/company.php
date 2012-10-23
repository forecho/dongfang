<div id="yingxiao_main">
	<?php $this->load->view('job_top');?>
	<div class="urhear">当前位置：<a href="<?php echo base_url();?>">首页</a>>><a href="about/company/advisory">关于我们</a>>>
	<?php
	switch (@$this->uri->segment(3)) {
		case 'advisory':
			echo "顾问寄语";
			break;
		case 'intro':
			echo "公司简介";
			break;
		case 'structure':
			echo "组织架构";
			break;
		case 'culture':
			echo "企业文化";
			break;
		case 'hushiming':
			echo "说胡世明";
			break;
	}
	?>
	</div>
    <div class="yingxiao_left">
	<?php
		$this->load->view($left);
	?>
    </div>
    <div class="team__info">
		<?php
            echo $info->$what;
		?>
    </div>
    <div class="happy">
		<img src="images/happy.jpg" />
    </div>
	<div class="photo">
		<img src="images/photo.jpg" />
    </div>
</div>