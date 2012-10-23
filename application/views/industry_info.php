<div id="yingxiao_main">
	<?php $this->load->view('job_top');?>
    <div class="urhear">当前位置：<a href="<?php echo base_url();?>">首页</a> >><a href="industry">营销力策划</a>>><?php echo $array[$what]?></div>
    <div class="yingxiao_left">
   		<?php $this->load->view('left_2');?>
    </div>
    <div class="yingxiao_right">
        <div class="yingxiao_content industry">
        	<div class="jianjie">
            <?php
				if(in_array($what, $arr) == false):
			?>
                <div class="hangye_box1">
                <?php
                	echo anchor('industry/info/intro', "<img src='".base_url('images/box_jianjie.jpg')."' />");
				?>
                    <div class="hangye_content">
						<?php echo $info_all->diy_intro; ?>
                    </div>
                </div>
                <!-- <div class="hangye_box2">
                <?php
                	echo anchor('industry/info/model', "<img src='".base_url('images/box_moxing.jpg')."' />");
                				?>
                    <div class="hangye_content">
                						<?php echo mb_substr(strip_tags($info_all->model), 0, 120).'......'; ?>
                    </div>
                </div> -->
            <?php
				endif;
				if(in_array($what, $arr)):
			?>
                <div class="hangye_info">
                <div class="hangye_info_title"><?php //echo $array[$what]?></div>
                	<?php echo $info->$what;?>
                </div>
            <?php
				endif;
			?>
            </div>
            <div class="hangye_pic">
            <?php
				if(in_array($what, $arr) == false):
			?>
                <div style="clear:both;"></div>
                <div class="hangye_info_i">
                <div class="hangye_info_title_i"><?php //echo $array[$what]?></div>
                	<?php echo $info->$what;?>
                </div>
            <?php
				endif;
			?>
            <?php
				if(in_array($what, $arr)):
					echo anchor('industry/info/agriculture', '<img src='.base_url('images/hangye_03.gif').' alt="农资企业营销力策划" title="农资企业营销力策划"/>');
					echo anchor('industry/info/alcohol', '<img src='.base_url('images/hangye_05.gif').' class="hangye_img" alt="农产品企业营销力策划" title="农产品企业营销力策划"/>');
					echo anchor('industry/info/tea', '<img src='.base_url('images/hangye_07.gif').' class="hangye_img" alt="酒水企业营销力策划" title="酒水企业营销力策划"/>');
					echo anchor('industry/info/build', '<img src='.base_url('images/hangye_09.gif').'  class="hangye_img" alt="食品饮料营销力策划" title="食品饮料营销力策划"/>');
					echo anchor('industry/info/health', '<img src='.base_url('images/hangye_12.gif').' alt="创意农业营销策划" title="创意农业营销力策划"/>');
					echo anchor('industry/info/food', '<img src='.base_url('images/hangye_14.gif').' class="hangye_img" alt="科技农业营销策划" title="科技农业营销力策划"/>');
					echo anchor('industry/info/fast', '<img src='.base_url('images/hangye_16.gif').' class="hangye_img" alt="服装鞋帽行业策划" title="服装鞋帽行业策划"/>');
					echo anchor('industry/info/other', '<img src='.base_url('images/hangye_18.gif').' class="hangye_img" alt="定制模式企业策划" title="定制模式企业策划"/>');
				endif;
			?>
            </div>     
			<?php $this->load->view('peixun_box');?>     

        </div>
    </div>
</div>