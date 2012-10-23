<div id="yingxiao_main">
	<?php $this->load->view('job_top');?>
    <div class="urhear">当前位置：<a href="<?php echo base_url();?>">首页</a>>><a href="welcome/anli">营销力案例</a>>>
	<?php echo $name->name;?>
	</div>
    <div class="yingxiao_left">
	<?php $this->load->view('left_2');?>
    </div>
    <div class="yingxiao_right">
    	
	<?php foreach($case_list['admin'] as $case_i){?>
        <div class="yingxiao_content">
        	    <div class="team">
            	<div class="team_left"><a href="<?php echo base_url();?>welcome/anli_hangye_info/case/<?php echo $case_i->c_id.'/'.$case_i->id;?>"><img src="<?php echo $case_i->img;?>" /></a></div>
                <div class="team_right">
                	<div class="team_title"><a href="<?php echo base_url();?>welcome/anli_hangye_info/case/<?php echo $case_i->c_id.'/'.$case_i->id;?>"><?php echo $case_i->title;?></a></div>
                    <div class="team_content">
					  <?php
                    	echo mb_substr(strip_tags($case_i->content), 0, 200);
					?>
					</div>
                </div>
            </div>
        </div>
	<?php };?>
			<div class="ly_fy">
			 共&nbsp;<?php echo $case_list['total']; ?>&nbsp;条&nbsp;第&nbsp;<?php echo ($case_list['start']/$case_list['size']+1).'/'.ceil($case_list['total']/$case_list['size']);?>&nbsp;页&nbsp;&nbsp;<?php echo $case_list['fy']; ?>
             </div>
			 
			 <?php $this->load->view('peixun_box');?> 
    </div>
		   
        </div>
    </div>
</div>