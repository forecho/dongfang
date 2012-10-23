<div class="job_top">


<?php


if(@$this->uri->segment(2) == 'peixun'){	


	$where['name'] = '营销力培训';


}


if(@$this->uri->segment(2) == 'anli' || @$this->uri->segment(2) == 'anli_hangye'|| @$this->uri->segment(2) == 'anli_hangye_info'){


	$where['name'] = "营销力案例";


}





if(@$this->uri->segment(2) == 'sixiang' || $this->uri->segment(2) == 'column_info'){


	$where['name'] = "营销力思想";


}


if(@$this->uri->segment(2) == 'yingxiao' || @$this->uri->segment(2) == 'yingxiao_info'||@$this->uri->segment(2) == 'activity'){


	$where['name'] = "营销力动态";


}





if(@$this->uri->segment(2) == 'touzi' || $this->uri->segment(2) == 'video' || $this->uri->segment(2) == 'video_info'||@$this->uri->segment(2) == 'file_list'){


	$where['name'] = "战略投融资";


}



if(@$this->uri->segment(2) == 'company' || $this->uri->segment(2) == 'team' || $this->uri->segment(2) == 'team_info'){


	$where['name'] = "关于我们";


}


if(@$this->uri->segment(1) == 'industry'){


	$where['name'] = '营销力策划';


}


$banner = $this->p_model->p_where('banner',$where);


 //print_r($banner);


 //echo $banner->img;


?>


    <img src="<?php echo base_url().$banner->img;;?>" />


</div>