<div class="about_left">
        	<div class="allleft_about">
    			<img src="<?php echo base_url();?>images/about.jpg" />
                <?php
                	echo anchor('about/company/advisory', '<img src='.base_url('images/team_03.png').' alt="顾问寄语" title="顾问寄语"/>');
                	echo anchor('about/company/intro', '<img src='.base_url('images/team_05.png').' alt="公司简介" title="公司简介"/>');
                	echo anchor('about/company/structure', '<img src='.base_url('images/team_09.png').' alt="组织架构" title="组织架构"/>');
                	echo anchor('about/company/culture', '<img src='.base_url('images/team_10.png').' alt="企业文化" title="企业文化"/>');
                	echo anchor('about/company/hushiming', '<img src='.base_url('images/team_13.png').' alt="说胡世明" title="说胡世明"/>');
                	echo anchor('welcome/team', '<img src='.base_url('images/team_14.png').' alt="专家团队" title="专家团队"/>');
				?>
            </div>
            <div class="allleft_blog">
    			<img src="<?php echo base_url();?>images/teamblog.jpg" />
				<?php foreach($team_expert as $team_expert_i){?>
					<a href="<?php echo $team_expert_i->blog?>" title="<?php echo $team_expert_i->name?>" target="_blank">
						<img src="<?php echo $team_expert_i->img?>" />
					</a>
				<?php }?>
            </div>
</div>