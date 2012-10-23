<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class About extends CI_Controller{
		
		function __construct(){
			
			parent::__construct();
			$this->load->database();
			$this->load->model('p_model');
			date_default_timezone_set('PRC');
						
		}
		
		function company(){
			
			$data['what'] = $what = $this->uri->segment(3, 0);
			
			if($what !== 0){

				$data['left'] = 'left';
				
				$data['info'] = $this->p_model->p_s_one('company', $what);
				
				$data['partner'] = $this->p_model->p_select_order('partner', 'sort desc, addtime desc');
				
				$data['company'] = $this->p_model->p_s_one('company', 'address, service, email, copyright');
				$data['team_expert'] = $this->p_model->p_select_order('expert','sort desc');
				
				$data['link'] = $this->p_model->p_select_order('link', 'sort desc, addtime desc');
				
				$this->load->view('head', $data);
				$this->load->view('company');
				$this->load->view('foot');
				
			}else{
				
				redirect('home');
				
			}
			
		}
		
	}

?>
