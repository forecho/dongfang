<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Home extends CI_Controller{
		
		function __construct(){
			
			parent::__construct();
			$this->load->database();
			$this->load->model('p_model');
			date_default_timezone_set('PRC');
						
		}
		
		function index(){
			
			$data['photo'] = $this->p_model->p_limit('photos', 'sort desc, addtime desc', 4);
			
			$data['case'] = $this->p_model->p_limit('case', 'sort desc, addtime desc', 5);
			
			$wh_new['c_id'] = 1;
			$data['new'] = $this->p_model->p_w_limit('new', $wh_new, 'sort desc, addtime desc', 5);
			
			$data['report'] = $this->p_model->p_limit('report', 'sort desc, addtime desc', 5);
			
			$data['partner'] = $this->p_model->p_select_order('partner', 'sort desc, addtime desc');
			
			$data['company'] = $this->p_model->p_s_one('company', 'address, service, email, copyright');
			
			$this->load->view('head', $data);
			$this->load->view('home');
			$this->load->view('foot');
			
		}		
		
	}

?>