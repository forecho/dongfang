<div id="yingxiao_main">
	<?php $this->load->view('job_top');?>
    <div class="urhear">当前位置：<a href="<?php echo base_url();?>">首页</a>>><a href="industry">行业营销力</a></div>
    <div class="yingxiao_left">
		<?php $this->load->view($left);?>
    </div>
    <div class="yingxiao_right">
        <div class="yingxiao_content">
        	<div class="jianjie">
                <div class="hangye_box1">
					<?php
						echo anchor('industry/info/intro', "<img src='".base_url('images/box_jianjie.jpg')."' />");
					?>
                    <div class="hangye_content">
						<?php echo $info->diy_intro; ?>
                    </div>
                </div>
                <!-- <div class="hangye_box2">
                					<?php
                						echo anchor('industry/info/model', "<img src='".base_url('images/box_moxing.jpg')."' />");
                					?>
                    <div class="hangye_content">
                						<?php echo mb_substr(strip_tags($info->model), 0, 120).'......'; ?>
                    </div>
                </div> -->
            </div>
            <div class="hangye_pic">
			<?php
				echo anchor('industry/info/agriculture', '<img src='.base_url('images/hangye_03.gif').' alt="农资企业营销力策划" title="农资企业营销力策划"/>');
				echo anchor('industry/info/alcohol', '<img src='.base_url('images/hangye_05.gif').' class="hangye_img" alt="农产品企业营销力策划" title="农产品企业营销力策划"/>');
				echo anchor('industry/info/tea', '<img src='.base_url('images/hangye_07.gif').' class="hangye_img" alt="酒水企业营销力策划" title="酒水企业营销力策划"/>');
				echo anchor('industry/info/build', '<img src='.base_url('images/hangye_09.gif').'  class="hangye_img" alt="食品饮料营销力策划" title="食品饮料营销力策划"/>');
				echo anchor('industry/info/health', '<img src='.base_url('images/hangye_12.gif').' alt="创意农业营销策划" title="创意农业营销力策划"/>');
				echo anchor('industry/info/food', '<img src='.base_url('images/hangye_14.gif').' class="hangye_img" alt="科技农业营销策划" title="科技农业营销力策划"/>');
				echo anchor('industry/info/fast', '<img src='.base_url('images/hangye_16.gif').' class="hangye_img" alt="服装鞋帽行业策划" title="服装鞋帽行业策划"/>');
				echo anchor('industry/info/other', '<img src='.base_url('images/hangye_18.gif').' class="hangye_img" alt="定制模式企业策划" title="定制模式企业策划"/>');
			?>
			
            <?php
                // echo anchor('industry/info/agriculture', "<img src='".base_url('images/hangye_1.jpg')."' />");
                // echo anchor('industry/info/alcohol', "<img src='".base_url('images/hangye_2.jpg')."' />");
                // echo anchor('industry/info/tea', "<img src='".base_url('images/hangye_3.jpg')."' />");
                // echo anchor('industry/info/health', "<img src='".base_url('images/hangye_4.jpg')."' />");
                // echo anchor('industry/info/food', "<img src='".base_url('images/hangye_5.jpg')."' />");
                // echo anchor('industry/info/fast', "<img src='".base_url('images/hangye_6.jpg')."' />");
                // echo anchor('industry/info/build', "<img src='".base_url('images/hangye_7.jpg')."' />");
                // echo anchor('industry/info/other', "<img src='".base_url('images/hangye_8.jpg')."' />");
				// echo anchor('welcome/contact', "<img src='".base_url('images/hangye_9.jpg')."' />");
			// ?>
            </div>
			<div class="model">
				<div class="hangye_info_title_i">主推：新品营销力策划</div>
				<div class="model_info"><?php echo $info->model;?></div> 
			</div>
			<?php $this->load->view('peixun_box');?>
        </div>
    </div>
</div>