    <div class="yingxiao_left">

	<?php

		$column = $this->p_model->p_select_order('column_class', 'sort desc');

		$think = $this->p_model->p_select_order('think_class', 'sort desc');

		switch(@$this->uri->segment(2))

		{

		case 'sixiang':case 'column_info':

			 
			if($this->uri->segment(3)=="report"){
				'';
				}else{
					echo

				'<div class="sixiang_list">

					<div class="zhuanjia"><img src="images/sixiang_05.png" title="专家专栏" alt="专家专栏" class="menu_class" />

					<ul class="the_menu';

			if($this->uri->segment(3) == "column"){echo ' the_menuo"';};

			echo '">';

					

			foreach($column as $column_i):

				echo '<li><a href="welcome/sixiang/column/'.$column_i->cid.'"';

				if($this->uri->segment(3) == "column" && $this->uri->segment(4) == $column_i->cid){echo 'class="the_menua"';};

				echo '>▪ '.$column_i->name.'</a></li>';

			endforeach;

				echo '</ul></div>

					<a href="welcome/sixiang/think/1" title="思想体系" alt="思想体系"><img src="images/sixiang_03.png" title="思想体系" alt="思想体系"/></a>

					<a href="welcome/sixiang/core_value" title="核心价值" alt="核心价值"><img src="images/sixiang_08.png" title="核心价值" alt="核心价值"/></a>

				</div>',

				'<p></p>'

				;}

			break;

		case 'yingxiao':

			echo //'<img  src="images/dongtai_left.jpg" />',

				'<div class="dongtai_news">

       			<a href="welcome/yingxiao/1"><img src="images/dongtai_03.png" title="企业新闻" alt="企业新闻"/></a>

                <a href="welcome/yingxiao/2"><img src="images/dongtai_05.png" title="行业资讯" alt="行业资讯"/></a>

				</div>';

			break;

		}

	?>

		<!-- <img src="<?php echo base_url();?>images/worm.jpg" /> -->

		<div class="touzi_font">

			<p>行业高速细分的时代，专业人做专业事是必然的选择，企业选择咨询服务机构势在必行。</p>

			<p>然而，企业选择合作伙伴犹如人生选择生命伴侣，选对了幸福一生，选错了懊悔终生。准确选择咨询服务商，东方盛思顾问提醒您注意如下三点：</p>

			<ul>

				<li><span>1.</span>咨询顾问机构的专业水准，是否有属于自己知识产权和知识体系的咨询作业工具；</li>

				<li><span>2.</span>咨询顾问机构的敬业水准，因为方案执行的程度，最终与咨询机构的责任心紧密关联；</li>

				<li><span>3.</span>收费方式是否合理，一锤定音式的付费方式让客户没有任何余地。</li>

			</ul>

			<p>为打消您的顾虑，东方盛思特推出“零风险合作方案”，确保您的权益，并达成请顾问机构之目的！让您放心对待合作。</p>

			

		</div>

		<!-- <img src="<?php echo base_url();?>images/service.jpg" /> -->

    </div>