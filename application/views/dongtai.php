<div id="yingxiao_main">
	<div class="job_top">
        <img src="images/job_ad.jpg" />
    </div>
    <div class="urhear">当前位置：<a href="welcome/index">首页</a>>><a href="welcome/dongtai">营销力动态</a></div>
    <div class="yingxiao_left">
   		
		<img src="images/worm.jpg" />
		<div class="touzi_font">
			全是文字
		</div>
		<img src="images/service.jpg" />
    </div>
    <div class="yingxiao_right">
    	<div class="yingxiao_content">
        	<div class="yingxiao_news">
            	<div class="news_title">营销力动态</div>
				<?php foreach ($new_list['admin'] as $new_list_i):?>
                <div class="line_content"><?php echo anchor('welcome/yingxiao_info/'.$new_list_i->id, '·'.$new_list_i->title);?></div>
				<?php endforeach;?>
				<?php //echo $new_list['pag_links']; ?>
			</div>
		 </div>
    <div class="peixun_box">        
        <div class="touzibox">
			<img src="images/touzi_1ad.jpg" />
			<div class="touzibox_font">
				<div class="touzi_title">投资的注意事项</div>
				<div class="touzi_content">&nbsp;&nbsp;&nbsp;&nbsp;投资的注意事项投资的注意事项投资的注意事项投资的注意事项投资的注意事项投资的注意事项投资的注意事项投资的注意事项</div>
			</div>
		</div>
		<img src="images/touzi_line.jpg" /> 
		<div class="touzibox">
			<img src="images/touzi_ad2.jpg" />
			<div class="touzibox_font">
				<div class="touzi_title">投资的注意事项</div>
				<div class="touzi_content">&nbsp;&nbsp;&nbsp;&nbsp;投资的注意事项投资的注意事项投资的注意事项投资的注意事项投资的注意事项投资的注意事项投资的注意事项投资的注意事项</div>
			</div>
		</div>
		<img src="images/touzi_line.jpg" /> 
		<div class="touzibox">
			<img src="images/touzi_ad3.jpg" />
			<div class="touzibox_font">
				<div class="touzi_title">投资的注意事项</div>
				<div class="touzi_content">&nbsp;&nbsp;&nbsp;&nbsp;投资的注意事项投资的注意事项投资的注意事项投资的注意事项投资的注意事项投资的注意事项投资的注意事项投资的注意事项</div>
			</div>
		</div>
    </div>  
    <img style="float:right; margin-left:20px;" src="images/phone_pic.jpg" />
    <img style="float:right" src="images/cehua_pic.jpg" />     
        </div>
    </div>
</div>