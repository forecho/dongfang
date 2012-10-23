<div id="yingxiao_main">
	<?php $this->load->view('job_top');?>
    <div class="urhear">当前位置：<a href="<?php echo base_url();?>">首页</a>>><a href="welcome/peixun">营销力培训</a>
	<?php 
		switch(@$this->uri->segment(3))
		{
		case '':
			echo ">>营销力培训简介";
			break;
		case 'president':
			echo ">>总裁营销力";
			break;
		case 'team':
			echo ">>亮剑营销力";
			break;
		case 'network':
			echo ">>网络营销力";
			break;
		case 'product':
			echo ">>产品营销力";
			break;
		case 'other':
			echo ">>企业营销力内训";
			break;
		case 'plan':
			echo ">>营销力策划";
			break;
		}
	?>
	</div>
    <div class="left">
		<?php $this->load->view('left_2');?>
    </div>
    <div class="right">
        <div class="peixun">
        	<p>
			
                <!-- <div class="hangye_info_title">
                				<?php 
                					// switch(@$this->uri->segment(3))
                					// {
                					// case '':
                						// echo "营销力培训简介";
                						// break;
                					// case 'president':
                						// echo "总裁营销力";
                						// break;
                					// case 'team':
                						// echo "团队营销力";
                						// break;
                					// case 'network':
                						// echo "网络营销力";
                						// break;
                					// case 'product':
                						// echo "产品营销力";
                						// break;
                					// case 'other':
                						// echo "企业营销力内训";
                						// break;
                					// case 'plan':
                						// echo "营销力策划";
                						// break;
                					// }
                				?>
                	</div> -->
					<?php 
						switch(@$this->uri->segment(3))
						{
						case '':
							echo $training->intro;
							break;
						case 'president':
							echo $training->president;
							break;
						case 'team':
							echo $training->team;
							break;
						case 'network':
							echo $training->network;
							break;
						case 'product':
							echo $training->product;
							break;
						case 'other':
							echo $training->other;
							break;
						case 'plan':
							echo $training->plan;
							break;
						}
					?>
				</p>
			</div>

			<div class="hangye_pic peixun_pic">
            	<a href="<?php echo base_url();?>welcome/peixun/president"><img src="images/peixun_03.png" alt="总裁营销力" title="总裁营销力"/></a>
                <a href="<?php echo base_url();?>welcome/peixun/team"><img src="images/peixun_05.png" class="peixun_img" alt="亮剑营销力" title="亮剑营销力"/></a>
                <a href="<?php echo base_url();?>welcome/peixun/network"><img src="images/peixun_07.png" class="peixun_img" alt="网络营销力" title="网络营销力"/></a>
                <a href="<?php echo base_url();?>welcome/peixun/other"><img src="images/peixun_09.png" class="peixun_img" alt="企业营销力内训" title="企业营销力内训"/></a>
            </div>

			<?php $this->load->view('peixun_box');?>
        </div>
    </div>
</div>