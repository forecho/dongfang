<div id="yingxiao_main">
	<?php $this->load->view('job_top');?>
    <div class="urhear">当前位置：<a href="<?php echo base_url();?>">首页</a>>><?php 
	if(@$this->uri->segment(3) == "case"){
		echo '<a href="welcome/anli">营销力案例</a>>>';
		switch(@$this->uri->segment(4))
		{
		case '1':
			echo '<a href="welcome/anli_hangye/1">农产品行业</a>';
			break;
		case '2':
			echo '<a href="welcome/anli_hangye/2">酒行业</a>';
			break;
		case '3':
			echo '<a href="welcome/anli_hangye/3">茶行业</a>';
			break;
		case '4':
			echo '<a href="welcome/anli_hangye/4">其它行业</a>';
			break;
		}
	}
	if(@$this->uri->segment(3) == "report"){
		echo '<a href="welcome/sixiang/report/1">媒体报道</a>';
	}
	if(@$this->uri->segment(3) == "cooperation"){
		echo '合作流程>>';
		switch(@$this->uri->segment(4))
		{
		case 'cooperate':
			echo "零风险合作";
			break;
		case 'process':
			echo "服务流程";
			break;
		case 'commitment':
			echo "我们的承诺";
			break;
		}
	}
	?>
	</div>
    <div class="left">
		<?php if(@$this->uri->segment(3) == "cooperation"){?>
                <div class="fx">
                	<a href="http://www.dofaith.net/welcome/anli_hangye_info/cooperation/cooperate/1"><img src="images/hezou_03.png" title="零风险合作" alt="零风险合作"/></a>
                	<a href="http://www.dofaith.net/welcome/anli_hangye_info/cooperation/process/1"><img src="images/hezou_05.png" title="流程化服务" alt="流程化服务" /></a>
                	<a href="http://www.dofaith.net/welcome/anli_hangye_info/cooperation/commitment/1"><img src="images/hezou_08.png" title="我们的承诺" alt="我们的承诺" /></a>
                 </div>
		<?php }?>
		<?php $this->load->view('left_2');?>
    </div>
    <div class="right">
        <div class="info">
			<h2>
			<?php
				// switch (@$this->uri->segment(4)) {
					// case 'cooperate':
						// echo "零风险合作";
						// break;
					// case 'process':
						// echo "服务流程";
						// break;
					// case 'commitment':
						// echo "我们的承诺";
						// break;
					// default:
						// echo $case->title;
				// }
				echo @$case->title;
			?></h2>
			<div class="content_box">
			<?php if($this->uri->segment(3) != 'cooperation'){?>
				<div class="dateinfo">由 管理员 撰写于 <?php echo date("Y-m-d H:i:s", $case->addtime);?></div>
			<?php
				}
				switch (@$this->uri->segment(4)) {
					case 'cooperate':
						echo $case->cooperate;
						break;
					case 'process':
						echo $case->process;
						break;
					case 'commitment':
						echo $case->commitment;
						break;
					default:
						echo $case->content;
				}
			?>
			</div>
		</div>
        <?php $this->load->view('peixun_box');?>
    </div>
</div>