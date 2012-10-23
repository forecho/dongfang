<div id="yingxiao_main">
	<?php $this->load->view('job_top');?>
    <div class="urhear">当前位置：<a href="<?php echo base_url();?>">首页</a>>>
	<?php echo $name->name;?>
	</div>
    <div class="yingxiao_left">
	<?php $this->load->view('left_2');?>
    </div>
    <div class="right">
		<div class="video">
			<p>影视作品欣赏</p>
		<?php foreach($case_list['admin'] as $case_i){?>
		   
		   <div class="video_list">
				<div class="video_pic"><a href="<?php echo base_url();?>welcome/video_info/report/<?php echo $case_i->c_id.'/'.$case_i->id;?>"><img src="<?php echo $case_i->img;?>" alt="<?php echo $case_i->title;?>" title="<?php echo $case_i->title;?>"/></a></div>
				<div class="video_title"><a href="<?php echo base_url();?>welcome/video_info/report/<?php echo $case_i->c_id.'/'.$case_i->id;?>" title="<?php echo $case_i->title;?>"><?php echo $case_i->title;?></a></div>
			</div>
			
		<?php };?>
			<div style="clear:both;"></div>
			<div class="ly_fy">
			 共&nbsp;<?php echo $case_list['total']; ?>&nbsp;条&nbsp;第&nbsp;<?php echo ($case_list['start']/$case_list['size']+1).'/'.ceil($case_list['total']/$case_list['size']);?>&nbsp;页&nbsp;&nbsp;<?php echo $case_list['fy']; ?>
			</div>
		</div>
			 <?php $this->load->view('peixun_box');?> 
    </div>
		   
        </div>
    </div>
</div>