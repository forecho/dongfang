<div id="yingxiao_main">
	<?php $this->load->view('job_top');?>
	<div class="urhear">当前位置：<a href="<?php echo base_url();?>">首页</a>>><a href="about/company/advisory">关于我们</a>>><a href="welcome/team">专家团队</a></div>
    <div class="yingxiao_left">
		<?php
			$data['team_expert'] = $this->p_model->p_select_order('expert','sort desc');
            $this->load->view('left',$data);
        ?>
    </div>
    <div class="yingxiao_right">
    	
        <div class="yingxiao_content">
		<?php //print_r($expert);?>
			<?php foreach($expert['admin'] as $team_expert_i){?>
        	<div class="team">
            	<div class="team_left"><a href="welcome/team_info/<?php echo $team_expert_i->id?>" title="<?php echo $team_expert_i->name?>"><img src="<?php echo $team_expert_i->img?>" /></a></div>
                <div class="team_right">
                	<div class="team_title"><b><a href="welcome/team_info/<?php echo $team_expert_i->id?>"><?php echo $team_expert_i->name?></a></b></div>
                    <div class="team_content"><?php echo mb_substr(strip_tags($team_expert_i->content), 0, 300);?>
					</div>
                </div>
            </div>
			<?php }?>
			<div class="ly_fy">
			 共&nbsp;<?php echo $expert['total']; ?>&nbsp;条&nbsp;第&nbsp;<?php echo ($expert['start']/$expert['size']+1).'/'.ceil($expert['total']/$expert['size']);?>&nbsp;页&nbsp;&nbsp;<?php echo $expert['fy']; ?>
			</div>
	   </div>
    </div>
    <div class="happy">
		<img src="images/happy.jpg" />
    </div>
	<div class="photo">
		<img src="images/photo.jpg" />
    </div>
</div>