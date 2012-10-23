<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Industry extends CI_Controller{
		
		function __construct(){
			
			parent::__construct();
			$this->load->database();
			$this->load->model('p_model');
			date_default_timezone_set('PRC');
						
		}
		
		function index(){
			
			$data['left'] = 'left_2';
			
			$data['partner'] = $this->p_model->p_select_order('partner', 'sort desc, addtime desc');
			
			$data['company'] = $this->p_model->p_s_one('company', 'address, service, email, copyright');
			
			$data['info'] = $this->p_model->p_s_one('industry', 'intro, model,diy_intro');
			$data['link'] = $this->p_model->p_select_order('link', 'sort desc, addtime desc');
			
			$this->load->view('head', $data);
			$this->load->view('industry');
			$this->load->view('foot');
				
		}

		function info(){
			
			$data['what'] = $what = $this->uri->segment(3, 0);
			
			if($what !== 0){

				$data['left'] = 'left_2';
				
				$data['partner'] = $this->p_model->p_select_order('partner', 'sort desc, addtime desc');
				
				$data['company'] = $this->p_model->p_s_one('company', 'address, service, email, copyright');
				
				$data['array'] = array('intro'=>'营销力策划简介', 'diy_intro'=>'自定义营销力策划简介','model'=>'营销力策划模型', 'agriculture'=>'农资企业营销力策划', 'alcohol'=>'农产品企业营销力策划', 'tea'=>'酒水企业营销力策划', 'health'=>'创意农业营销策划', 'food'=>'建材家具营销策划', 'fast'=>'服装鞋帽行业策划', 'build'=>'食品饮料营销力策划', 'other'=>'定制模式企业策划');
				$data['arr'] = array('intro', 'model');
				
				$data['info_all'] = $this->p_model->p_s_one('industry', 'intro, model,diy_intro');
				
				$data['info'] = $this->p_model->p_s_one('industry', $what);
				
				$data['link'] = $this->p_model->p_select_order('link', 'sort desc, addtime desc');
				
				$this->load->view('head', $data);
				$this->load->view('industry_info');
				$this->load->view('foot');
				
			}else{
				
				redirect('home');
				
			}
			
		}
		
	}

?>
