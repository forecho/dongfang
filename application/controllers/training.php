<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Training extends CI_Controller{
		
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
			
			$data['info'] = $this->p_model->p_s_one('training', 'intro');
			
			$this->load->view('head', $data);
			$this->load->view('training');
			$this->load->view('foot');
				
		}
		
	}

?>
