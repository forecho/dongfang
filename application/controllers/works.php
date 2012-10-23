<?php

	class Works extends CI_Controller{
		
		function __construct(){
			
			parent::__construct();
			$this->load->database();
			$this->load->model('p_model');
			date_default_timezone_set('PRC');
						
		}
		
		function show(){
			
			$where['class']=$this->uri->segment(3,0);
			
			$data['top']='top.php';
			$data['foot']='foot.php';
			$data['class']=array('婚礼动画', '动画广告', '摄影摄像', '三维动画', '宣传片');
			
			$data['company']=$this->p_model->p_one('company');
			
			$data['photo']=$this->p_model->p_limit('photos', 'sort desc, addtime desc', 4);
			
			$data['link']=$this->p_model->p_limit('link', 'sort desc, addtime desc', 13);
			$data['l_num']=$this->p_model->fy_n('link');
			
			$data['notice']=$this->p_model->p_limit('notices', 'sort desc, addtime desc', 6);
			
			$where['w_first']=0;
			$data['list']=$this->p_w_fenye('works', 'works/show/'.$where['class'], $where, 12, 'sort desc, addtime desc');	
			
			$this->load->view('show', $data);
			
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
					
					$data['info'] = $this->p_model->p_where('works', $where);
					
					$data['title'] = $data['info']->name;
					
					$this->load->view('show_info', $data);
					
				}else{
					
					redirect('works/show');
					
				}
				
			}else{
				
				redirect('works/show');
				
			}
			
		}
		
		protected function p_w_fenye($form, $url, $where, $size, $order){
						
			$fy['url'] = $url;
			$fy['total'] = $data['total'] = $this->p_model->num_where($form, $where);
			$fy['size'] = $data['size'] =$info['size'] = $size;
			$fy['uri'] = 4;
			$this->load->library('p_fy', $fy);
			$data['fy'] = $this->p_fy->fy();
			$info['start'] = $data['start'] = $this->uri->segment(4, 0);
			$info['order'] = $order;
			$data['list'] = $this->p_model->fy_wher($form, $where, $info);
			
			return $data;
			
		}
		
	}

?>