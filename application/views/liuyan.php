<div id="yingxiao_main">
	<div class="job_top">
        	<img src="images/job_ad.jpg" />
    </div>
    <div class="urhear">当前位置：<a href="<?php echo base_url();?>">首页</a>>>留言板</div>
    <div class="yingxiao_left">
	<?php $this->load->view('left_2');?>
    </div>
    <div class="yingxiao_right">
    	
        <div class="yingxiao_content">
        	<div class="liuyan">
            	<div class="liuyan_top"><a href="welcome/liuyan#liuyan"><img src="images/liuyan_but.jpg" /></a>(留言<?php echo $leaves['total']; ?>条)</div>
				<?php //print_r($leaves);?>
				<?php foreach($leaves['admin'] as $leaves_i):?>
                <div class="liuyan_cont">
                	<div class="liuyan_peo"><?php echo $leaves_i->name;?> &nbsp;<span><?php echo $leaves_i->company,'&nbsp;',$leaves_i->position?></span> 
						<span class="liuyan_time"><?php echo date("Y-m-d H:i:s", $leaves_i->l_time);?></span>
					</div>
                    <div class="liuyan_content"><?php echo $leaves_i->content;?></div>
                   
					<?php if($leaves_i->reply!=""):?>
                    <div class="huifu">管理员回复
						<span class="liuyan_time"><?php echo date("Y-m-d H:i:s", $leaves_i->r_time);?></span>
					</div>
                    <div class="huifu_cont"><?php echo $leaves_i->reply;?></div>
					
					<?php endif;?>
				</div>
                <?php endforeach;?>

            </div>
            <div class="ly_fy">
			 共&nbsp;<?php echo $leaves['total']; ?>&nbsp;条&nbsp;第&nbsp;<?php echo ($leaves['start']/$leaves['size']+1).'/'.ceil($leaves['total']/$leaves['size']);?>&nbsp;页&nbsp;&nbsp;<?php echo $leaves['fy']; ?>
             </div>
        </div>
    </div>
    <div class="mianze_bo">

        <img style="float:right; margin-left:20px;" src="images/phone_pic.jpg" />
        <img style="float:right" src="images/cehua_pic.jpg" />
        
    </div>
</div>