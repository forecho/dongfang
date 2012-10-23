<?php
	
	class Message extends CI_Controller{
		
		function __construct(){
			
			parent::__construct();
			$this->load->database();
			$this->load->model('p_model');
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>');
			date_default_timezone_set('PRC');
						
		}
		
		function index(){
			
			$data['top']='top.php';
			$data['foot']='foot.php';
			$data['class']=array('婚礼动画', '动画广告', '摄影摄像', '三维动画', '宣传片');
			$data['words']="";
			if($this->session->userdata('leaves')):

				$data['words']="留言成功！谢谢！";
			
			endif;
			
			$data['company']=$this->p_model->p_one('company');
			
			$data['photo']=$this->p_model->p_limit('photos', 'sort desc, addtime desc', 4);
			
			$data['link']=$this->p_model->p_limit('link', 'sort desc, addtime desc', 13);
			$data['l_num']=$this->p_model->fy_n('link');
			
			$data['notice']=$this->p_model->p_limit('notices', 'sort desc, addtime desc', 6);
			
			$data['list']=$this->p_fenye('leaves', 'message/index/', 3, 'l_time desc');	
			
			$this->session->unset_userdata('leaves');
			
			$this->load->view('message', $data);
			
		}
		
		function message_do(){
			
			if(isset($_POST['name']) && isset($_POST['content'])){

				$_POST['l_time']=time();
				$this->p_model->p_insert('leaves', $_POST);
				$this->session->set_userdata('leaves', 'success');
				
				redirect('message');
			
			}else{
				
				redirect('message');
				
			}
			
		}
		
		function p_fenye($form, $url, $size, $order){
			
			$fy['url'] = $url;
			$fy['total'] = $data['total'] = $this->p_model->fy_n($form);
			$fy['size'] = $data['size'] = $info['size'] = $size;
			$fy['uri'] = 3;
			$this->load->library('p_fy', $fy);
			$data['fy'] = $this->p_fy->fy();
			$info['start'] = $data['start'] = $this->uri->segment(3, 0);
			$info['order'] = $order;
			$data['list'] = $this->p_model->fy_info($form, $info);
			
			return $data;
			
		}
		
	}

?>