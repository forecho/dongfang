<?php

	class Notice extends CI_Controller{
		
		function __construct(){
			
			parent::__construct();
			$this->load->database();
			$this->load->model('p_model');
			date_default_timezone_set('PRC');
						
		}
		
		function show(){
			
			$data['top']='top.php';
			$data['foot']='foot.php';
			$data['class']=array('婚礼动画', '动画广告', '摄影摄像', '三维动画', '宣传片');
			
			$data['company']=$this->p_model->p_one('company');
			
			$data['photo']=$this->p_model->p_limit('photos', 'sort desc, addtime desc', 4);
			
			$data['link']=$this->p_model->p_limit('link', 'sort desc, addtime desc', 13);
			$data['l_num']=$this->p_model->fy_n('link');
			
			$data['notice']=$this->p_model->p_limit('notices', 'sort desc, addtime desc', 6);
			
			$data['list']=$this->p_fenye('notices', 'notice/show/', 11, 'sort desc, addtime desc');	
			
			$this->load->view('notice', $data);
			
		}
		
		function show_info(){
			
			$where['id']=$this->uri->segment(3,0);
			if($where['id']!=0){
			
				$num = $this->p_model->num_where('works', $where);
				if($num!=0){
					
					$data['top']='top.php';
					$data['foot']='foot.php';
					$data['class']=array('婚礼动画', '动画广告', '摄影摄像', '三维动画', '宣传片');
					
					$data['company']=$this->p_model->p_one('company');
					
					$data['photo']=$this->p_model->p_limit('photos', 'sort desc, addtime desc', 4);
					
					$data['link']=$this->p_model->p_limit('link', 'sort desc, addtime desc', 13);
					$data['l_num']=$this->p_model->fy_n('link');
					
					$data['notice']=$this->p_model->p_limit('notices', 'sort desc, addtime desc', 6);
					
					$data['info'] = $this->p_model->p_where('notices', $where);
					
					$data['title'] = $data['info']->title;
					
					$this->load->view('notice_info', $data);
					
				}else{
					
					redirect('notice/show');
					
				}
				
			}else{
				
				redirect('notice/show');
				
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