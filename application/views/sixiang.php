<div id="yingxiao_main">
	<?php $this->load->view('job_top');?>
    
   <div class="urhear">当前位置：<a href="<?php echo base_url();?>">首页</a>>>
   <?php
   if($this->uri->segment(3) != 'report' ){
	    echo '
   <a href="welcome/column_info/think/1/1">营销思想</a>>>';
   }
   ?>
	<?php 
		switch(@$this->uri->segment(3))
		{
		case 'thought':
			echo "思想体系";
			break;
		case 'think':
			echo "思想体系";
			break;

		case 'core_value':
			echo "核心价值";
			break;
		case 'expert':
			echo "专家专栏";
			break;
		case 'report':
			echo"媒体报道";
			break;
		case 'column':
				echo $column_class->name;
				break;
		}
	?>
	</div>
	
    <div class="yingxiao_left">
		<?php $this->load->view('left_3');?>  
    </div>
    <div class="right">
	
	
	
	<?php if($this->uri->segment(3) == "thought" || $this->uri->segment(3) == "core_value" || $this->uri->segment(3) == "expert"):?>
	
	<div class="sixiang_info">
		<?php 
			switch(@$this->uri->segment(3))
			{
			case 'thought':
				echo $idea->thought;
				break;
			case 'core_value':
				echo $idea->core_value;
				break;
			case 'expert':
				echo $idea->expert;
				break;
			}
		?>
	</div>
    <?php else:?>

		<div class="yingxiao_news">
            	<div class="news_title">
				<?php
				echo $column_class->name;
				?>
				</div>
        				<?php foreach ($column['list'] as $column_i):?>
                <div class="line_content"><?php echo anchor('welcome/column_info/'.$this->uri->segment(3).'/'.$this->uri->segment(4).'/'.$column_i->id, '▪ '.mb_substr($column_i->title, 0, 22),array('title' =>$column_i->title));?><span class="cx_time"><?php echo date('Y-m-d', $column_i->addtime);?>&nbsp;&nbsp;&nbsp;&nbsp;</span></div>
        		<?php endforeach;?>    
				<div class="ly_fy">共&nbsp;<?php echo $column['total']; ?>&nbsp;条&nbsp;第&nbsp;<?php echo ($column['start']/$column['size']+1).'/'.ceil($column['total']/$column['size']);?>&nbsp;页&nbsp;&nbsp;<?php echo $column['fy']; ?></div>
        </div>
	<?php endif;?>		
			<?php $this->load->view('peixun_box');?>

	</div>
</div>
<script type="text/javascript">
$(document).ready(function () {
    $('img.menu_class').click(function () {
		$(this).next('.the_menu').slideToggle('medium');
    });
});
</script>