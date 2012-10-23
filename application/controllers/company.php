<?php
	
	class Company extends CI_Controller{
		
		function __construct(){
			
			parent::__construct();
			$this->load->database();
			$this->load->model('p_model');
			date_default_timezone_set('PRC');
						
		}
		
		function index(){
			
			$data['top']='top.php';
			$data['foot']='foot.php';
			$data['class']=array('婚礼动画', '动画广告', '摄影摄像', '三维动画', '宣传片');
			
			$data['company']=$this->p_model->p_one('company');
			
			$data['photo']=$this->p_model->p_limit('photos', 'sort desc, addtime desc', 4);
			
			$data['link']=$this->p_model->p_limit('link', 'sort desc, addtime desc', 13);
			$data['l_num']=$this->p_model->fy_n('link');
			
			$data['notice']=$this->p_model->p_limit('notices', 'sort desc, addtime desc', 6);
			
			$data['about']=$this->p_model->p_s_one('company', 'id, about');
			
			$this->load->view('about', $data);
			
		}
		
		function contact(){
			
			$data['top']='top.php';
			$data['foot']='foot.php';
			$data['class']=array('婚礼动画', '动画广告', '摄影摄像', '三维动画', '宣传片');
			
			$data['company']=$this->p_model->p_one('company');
			
			$data['photo']=$this->p_model->p_limit('photos', 'sort desc, addtime desc', 4);
			
			$data['link']=$this->p_model->p_limit('link', 'sort desc, addtime desc', 13);
			$data['l_num']=$this->p_model->fy_n('link');
			
			$data['notice']=$this->p_model->p_limit('notices', 'sort desc, addtime desc', 6);
			
			$data['about']=$this->p_model->p_s_one('company', 'id, about');
			
			$this->load->view('contact', $data);
			
		}
		
	}

?>