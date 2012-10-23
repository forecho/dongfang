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
        	<div class="team_info">
            	<div class="team_info_left"><a href="welcome/team_info/<?php echo $team_expert->id?>" title="<?php echo $team_expert->name?>"><img src="<?php echo $team_expert->img?>" /></a></div>
                <div class="team_info_right">
                	<div class="team_title"><b><a href="welcome/team_info/<?php echo $team_expert->id?>"><?php echo $team_expert->name?></a></b></div>
                    <div class="team_content"><?php echo $team_expert->content;?>
					</div>
                </div>
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