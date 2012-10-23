<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('p_model');
		$this->load->library('form_validation');
		date_default_timezone_set('PRC');
		$this->load->library('pagination');
	}
	
	function index(){
	
		$data['photo'] = $this->p_model->p_limit('photos', 'sort desc, addtime desc', 4);
		$data['case'] = $this->p_model->p_limit('case', 'sort desc, addtime desc', 4);
		$wh_new['c_id'] = 1;
		$data['new'] = $this->p_model->p_limit('new','sort desc, addtime desc', 4);
		$data['report'] = $this->p_model->p_w_limit('report',$wh_new, 'sort desc, addtime desc', 4);
		$data['partner'] = $this->p_model->p_select_order('partner', 'sort desc, addtime desc');
		$data['company'] = $this->p_model->p_s_one('company', 'address, service, email, copyright');
		$data['link'] = $this->p_model->p_select_order('link', 'sort desc, addtime desc');
	
		$this->load->view('head', $data);
		$this->load->view('index');
		$this->load->view('foot');
	}
	function yingxiao(){
		$wh_qiye['c_id'] = 1;
		$data['plan_qiye'] = $this->p_model->p_w_limit('new', $wh_qiye, 'sort desc, addtime desc', 7);
		
		$wh_hangye['c_id'] = 2;
		$data['plan_hangye'] = $this->p_model->p_w_limit('new', $wh_hangye, 'sort desc, addtime desc', 7);
		
		$data['partner'] = $this->p_model->p_select_order('partner', 'sort desc, addtime desc');
		$data['company'] = $this->p_model->p_s_one('company', 'address, service, email, copyright');
		$data['link'] = $this->p_model->p_select_order('link', 'sort desc, addtime desc');
		
		$wh_qiye['c_id'] = $this->uri->segment(3);
		$data['qiye_list'] = $this->p_w_fenye('new', 'welcome/yingxiao/'.$wh_qiye['c_id'] ,$wh_qiye, 6, 'sort desc, addtime desc');
		//$wh_hangye['c_id'] = 2;
		//$data['hangye_list'] = $this->p_w_fenye('new', 'welcome/yingxiao/2',$wh_hangye, 2, 'sort desc, addtime desc');
		
		

		
		$this->load->view('head', $data);
		$this->load->view('yingxiao');
		$this->load->view('foot');
	}
	function yingxiao_info(){
		$wh_id['id'] = $this->uri->segment(4);
		$data['plan'] = $this->p_model->p_where('new', $wh_id);
		//$data['plan'] = $this->p_model->p_where('new', $wh_id);
		//print_r($data['plan_qiye'] );
		
		$data['partner'] = $this->p_model->p_select_order('partner', 'sort desc, addtime desc');
		$data['company'] = $this->p_model->p_s_one('company', 'address, service, email, copyright');
		$data['link'] = $this->p_model->p_select_order('link', 'sort desc, addtime desc');
		
		$this->load->view('head', $data);
		$this->load->view('yingxiao_info', $data);
		$this->load->view('foot');
	}
	
	// function column(){
		// $wh_qiye['c_id'] = $this->uri->segment(3);
		// $data['column'] = $this->p_model->p_w_limit('column', $wh_qiye, 'sort desc, addtime desc', 7);
		
		// $data['partner'] = $this->p_model->p_select_order('partner', 'sort desc, addtime desc');
		// $data['company'] = $this->p_model->p_s_one('company', 'address, service, email, copyright');
		// $data['link'] = $this->p_model->p_select_order('link', 'sort desc, addtime desc');
		
		// $wh_qiye['c_id'] = $this->uri->segment(3);
		// $data['qiye_list'] = $this->p_w_fenye('new', 'welcome/column/'.$wh_qiye['c_id'] ,$wh_qiye, 6, 'sort desc, addtime desc');
		//// $wh_hangye['c_id'] = 2;
		//// $data['hangye_list'] = $this->p_w_fenye('new', 'welcome/yingxiao/2',$wh_hangye, 2, 'sort desc, addtime desc');
		
		

		
		// $this->load->view('head', $data);
		// $this->load->view('yingxiao');
		// $this->load->view('foot');
	// }
	function column_info(){
		//$data['plan'] = $this->p_model->p_where('new', $wh_id);
		//print_r($data['plan_qiye'] );
		
		$wh_id['id'] = $this->uri->segment(5);
		$form = $this->uri->segment(3);
		$data['plan'] = $this->p_model->p_where($form, $wh_id);
		
		$form = $this->uri->segment(3);
		$wh_cid['cid'] = $this->uri->segment(4);
		$data['column_class'] = $this->p_model->p_where($form.'_class', $wh_cid);
		
		$data['partner'] = $this->p_model->p_select_order('partner', 'sort desc, addtime desc');
		$data['company'] = $this->p_model->p_s_one('company', 'address, service, email, copyright');
		$data['link'] = $this->p_model->p_select_order('link', 'sort desc, addtime desc');
		
		$this->load->view('head', $data);
		$this->load->view('yingxiao_info', $data);
		$this->load->view('foot');
	}
	
	
	
	function peixun(){
		$wh_id['id'] = 1;
		$data['industry'] = $this->p_model->p_where('industry', $wh_id);
		$data['training'] = $this->p_model->p_where('training', $wh_id);
		
		$data['partner'] = $this->p_model->p_select_order('partner', 'sort desc, addtime desc');
		$data['company'] = $this->p_model->p_s_one('company', 'address, service, email, copyright');
		$data['link'] = $this->p_model->p_select_order('link', 'sort desc, addtime desc');
		
		$this->load->view('head', $data);
		$this->load->view('peixun');
		$this->load->view('foot');
	}
	function anli(){
		//$wh_c_id['c_id'] = $this->uri->segment(3,0);
		//$data['case_class'] = $this->p_model->p_where('case_class');
		$wh_new['c_id'] = 2;
		$data['report'] = $this->p_model->p_w_limit('report',$wh_new, 'sort desc, addtime desc', 4);
		$data['slideshow'] = $this->p_model->p_limit('slideshow', 'sort desc, addtime desc', 4);
		
		$data['partner'] = $this->p_model->p_select_order('partner', 'sort desc, addtime desc');
		$data['company'] = $this->p_model->p_s_one('company', 'address, service, email, copyright');
		$data['link'] = $this->p_model->p_select_order('link', 'sort desc, addtime desc');
		
		$this->load->view('head',$data);
		$this->load->view('anli');
		$this->load->view('foot');
	}
	function sixiang(){
		$wh_id['id'] = 1;
		$data['idea'] = $this->p_model->p_where('idea', $wh_id);
		if($this->uri->segment(3) != "core_value"){
		$from =	$this->uri->segment(3);
		
		$wh_qiye['c_id'] = $this->uri->segment(4);
		$data['column'] = $this->p__fenye($from, 'welcome/sixiang/'.$from.'/'.$wh_qiye['c_id'] ,$wh_qiye, 10, 'sort desc, addtime desc');
		
		$wh_cid['cid'] = $this->uri->segment(4);
		$data['column_class'] = $this->p_model->p_where($from.'_class', $wh_cid);
		
		}
		
		$data['partner'] = $this->p_model->p_select_order('partner', 'sort desc, addtime desc');
		$data['company'] = $this->p_model->p_s_one('company', 'address, service, email, copyright');
		$data['link'] = $this->p_model->p_select_order('link', 'sort desc, addtime desc');
		
		$this->load->view('head', $data);
		$this->load->view('sixiang');
		$this->load->view('foot');
	}
	function dongtai(){	
		$wh_id['id'] = 1;
		$data['new_list'] = $this->p_w_fenye_u('new', 'welcome/dongtai',$wh_id, 5, 'sort desc, addtime desc');
		//print_r($data['new_list']);
		
		$data['partner'] = $this->p_model->p_select_order('partner', 'sort desc, addtime desc');
		$data['company'] = $this->p_model->p_s_one('company', 'address, service, email, copyright');
		$data['link'] = $this->p_model->p_select_order('link', 'sort desc, addtime desc');
		
		$this->load->view('head', $data);
		$this->load->view('dongtai');
		$this->load->view('foot');
	}
	function dongtai_info(){	
		$wh_id['id'] = $this->uri->segment(3);
		$data['new'] = $this->p_model->p_where('new', $wh_id);
		//print_r($data['new_list']);
		
		$data['partner'] = $this->p_model->p_select_order('partner', 'sort desc, addtime desc');
		$data['company'] = $this->p_model->p_s_one('company', 'address, service, email, copyright');
		$data['link'] = $this->p_model->p_select_order('link', 'sort desc, addtime desc');
		
		$this->load->view('head', $data);
		$this->load->view('dongtai_info');
		$this->load->view('foot');
	}
	
	
	function touzi(){	
		$wh_id['id'] = 1;
		$data['strategy'] = $this->p_model->p_where('strategy', $wh_id);
		
		$data['partner'] = $this->p_model->p_select_order('partner', 'sort desc, addtime desc');
		$data['company'] = $this->p_model->p_s_one('company', 'address, service, email, copyright');
		$data['link'] = $this->p_model->p_select_order('link', 'sort desc, addtime desc');
		
		$this->load->view('head', $data);
		$this->load->view('touzi');
		$this->load->view('foot');
	}
	
	
	//8-5
	function activity(){	
		$wh_id['id'] = 1;
		$data['strategy'] = $this->p_model->p_where('strategy', $wh_id);
		
		$data['partner'] = $this->p_model->p_select_order('partner', 'sort desc, addtime desc');
		$data['company'] = $this->p_model->p_s_one('company', 'address, service, email, copyright');
		$data['link'] = $this->p_model->p_select_order('link', 'sort desc, addtime desc');
		
		$this->load->view('head', $data);
		$this->load->view('activity');
		$this->load->view('foot');
	}
	//8-5 over

	function team(){
		//$data['team_expert'] = $this->p_model->p_select_order('expert','sort desc');
		$data['expert'] = $this->p_fenye('expert', 'welcome/team', 3, 'sort desc');
		//print_r($data['team_expert']);
		
		$data['partner'] = $this->p_model->p_select_order('partner', 'sort desc, addtime desc');
		$data['company'] = $this->p_model->p_s_one('company', 'address, service, email, copyright');
		$data['link'] = $this->p_model->p_select_order('link', 'sort desc, addtime desc');
		
		$this->load->view('head',$data);
		$this->load->view('team');
		$this->load->view('foot');
	}
	
	function team_info(){
		$wh_id['id'] = $this->uri->segment(3);
		$data['team_expert'] = $this->p_model->p_where('expert', $wh_id);
		//print_r($data['team_expert']);
		
		$data['partner'] = $this->p_model->p_select_order('partner', 'sort desc, addtime desc');
		$data['company'] = $this->p_model->p_s_one('company', 'address, service, email, copyright');
		$data['link'] = $this->p_model->p_select_order('link', 'sort desc, addtime desc');
		
		$this->load->view('head',$data);
		$this->load->view('team_info');
		$this->load->view('foot');
	}

	function job(){
		$wh_id['id'] = 1;
		$data['careers'] = $this->p_model->p_where('careers', $wh_id);
	
		$data['partner'] = $this->p_model->p_select_order('partner', 'sort desc, addtime desc');
		$data['company'] = $this->p_model->p_s_one('company', 'address, service, email, copyright');
		$data['link'] = $this->p_model->p_select_order('link', 'sort desc, addtime desc');
		
		$this->load->view('head',$data);
		$this->load->view('job');
		$this->load->view('foot');
	}
	function map(){
		$data['partner'] = $this->p_model->p_select_order('partner', 'sort desc, addtime desc');
		$data['company'] = $this->p_model->p_s_one('company', 'address, service, email, copyright');
		$data['link'] = $this->p_model->p_select_order('link', 'sort desc, addtime desc');
		
		$this->load->view('head',$data);
		$this->load->view('map');
		$this->load->view('foot');
	}
	function contact(){
		$data['partner'] = $this->p_model->p_select_order('partner', 'sort desc, addtime desc');
		$data['company'] = $this->p_model->p_s_one('company', 'address, service, email, copyright');
		$data['link'] = $this->p_model->p_select_order('link', 'sort desc, addtime desc');
		
		$this->load->view('head',$data);
		$this->load->view('contact');
		$this->load->view('foot');
	}
	function grow(){
		$data['partner'] = $this->p_model->p_select_order('partner', 'sort desc, addtime desc');
		$data['company'] = $this->p_model->p_s_one('company', 'address, service, email, copyright');
		$data['link'] = $this->p_model->p_select_order('link', 'sort desc, addtime desc');
		
		$this->load->view('head',$data);
		$this->load->view('grow');
		$this->load->view('foot');
	}
	function mianze(){
		$data['partner'] = $this->p_model->p_select_order('partner', 'sort desc, addtime desc');
		$data['company'] = $this->p_model->p_s_one('company', 'address, service, email, copyright');
		$data['link'] = $this->p_model->p_select_order('link', 'sort desc, addtime desc');
		
		$this->load->view('head',$data);
		$this->load->view('mianze');
		$this->load->view('foot');
	}
	// function hangye(){
		// $data['partner'] = $this->p_model->p_select_order('partner', 'sort desc, addtime desc');
		// $data['company'] = $this->p_model->p_s_one('company', 'address, service, email, copyright');
		
		// $this->load->view('head',$data);
		// $this->load->view('hangye');
		// $this->load->view('foot');
	// }
	// function hangye_info(){
		// $data['partner'] = $this->p_model->p_select_order('partner', 'sort desc, addtime desc');
		// $data['company'] = $this->p_model->p_s_one('company', 'address, service, email, copyright');
		
		// $this->load->view('head',$data);
		// $this->load->view('hangye_info');
		// $this->load->view('foot');
	// }
	function liuyan(){
		$data['partner'] = $this->p_model->p_select_order('partner', 'sort desc, addtime desc');
		$data['company'] = $this->p_model->p_s_one('company', 'address, service, email, copyright');
		$data['link'] = $this->p_model->p_select_order('link', 'sort desc, addtime desc');
		
		$data['leaves'] = $this->p_fenye('leaves', 'welcome/liuyan', '5', 'l_time desc');
		
		
		$this->load->view('head',$data);
		$this->load->view('liuyan');
		$this->load->view('foot');
	}
	function anli_hangye(){
		///
		$wh_c_id['where']['c_id'] = $this->uri->segment(3,0);
		$wh_cid['cid'] = $this->uri->segment(3,0);
		//$data['case'] = $this->p_model->p_w_limit('case', $wh_c_id, 'sort desc, addtime desc', 5);
		$data['name'] = $this->p_model->p_where('case_class', $wh_cid);
		
		$data['case_list'] = $this->p_w_fenye_u('case', 'welcome/anli_hangye/'.$wh_c_id['where']['c_id'],$wh_c_id, 4, 'sort desc, addtime desc');
		/////
		//echo '<pre>';
		//print_r($data['case_list']);
		//print_r($data['name']);
		$data['partner'] = $this->p_model->p_select_order('partner', 'sort desc, addtime desc');
		$data['company'] = $this->p_model->p_s_one('company', 'address, service, email, copyright');
		$data['link'] = $this->p_model->p_select_order('link', 'sort desc, addtime desc');
		
		$this->load->view('head',$data);
		$this->load->view('anli_hangye');
		$this->load->view('foot');
	}
	function anli_hangye_info(){
		$wh_id['id'] = $this->uri->segment(5);
		$form = $this->uri->segment(3);
		$data['case'] = $this->p_model->p_where($form, $wh_id);
		
		$data['partner'] = $this->p_model->p_select_order('partner', 'sort desc, addtime desc');
		$data['company'] = $this->p_model->p_s_one('company', 'address, service, email, copyright');
		$data['link'] = $this->p_model->p_select_order('link', 'sort desc, addtime desc');
		
		$this->load->view('head',$data);
		$this->load->view('anli_hangye_info');
		$this->load->view('foot');

	}
	
	
	
	
	
	
	function video(){

		$wh_c_id['where']['c_id'] = $this->uri->segment(3,0);
		$wh_cid['cid'] = $this->uri->segment(3,0);

		$data['name'] = $this->p_model->p_where('report_class', $wh_cid);

		$data['case_list'] = $this->p_w_fenye_u('report', 'welcome/video/'.$wh_c_id['where']['c_id'],$wh_c_id, 12, 'sort desc, addtime desc');
		
		$data['partner'] = $this->p_model->p_select_order('partner', 'sort desc, addtime desc');
		$data['company'] = $this->p_model->p_s_one('company', 'address, service, email, copyright');
		$data['link'] = $this->p_model->p_select_order('link', 'sort desc, addtime desc');
		
		$this->load->view('head',$data);
		$this->load->view('video');
		$this->load->view('foot');
	}
	
	function video_info(){
		//$data['plan'] = $this->p_model->p_where('new', $wh_id);
		//print_r($data['plan_qiye'] );
		
		$wh_id['id'] = $this->uri->segment(5);
		$form = $this->uri->segment(3);
		$data['plan'] = $this->p_model->p_where($form, $wh_id);
		
		$form = $this->uri->segment(3);
		$wh_cid['cid'] = $this->uri->segment(4);
		$data['column_class'] = $this->p_model->p_where($form.'_class', $wh_cid);
		
		$wh_c_id['c_id'] = $this->uri->segment(4);
		$data['next']=$this->p_model->p_next($form,$wh_c_id,$wh_id['id']);
		$data['last']=$this->p_model->p_last($form,$wh_c_id,$wh_id['id']);
		
		//print_r($data['last']);
		
		$data['partner'] = $this->p_model->p_select_order('partner', 'sort desc, addtime desc');
		$data['company'] = $this->p_model->p_s_one('company', 'address, service, email, copyright');
		$data['link'] = $this->p_model->p_select_order('link', 'sort desc, addtime desc');
		
		$this->load->view('head', $data);
		$this->load->view('yingxiao_info', $data);
		$this->load->view('foot');
	}
	
	
	
	//文件下载
	function file_list(){
		$data['partner'] = $this->p_model->p_select_order('partner', 'sort desc, addtime desc');
		$data['company'] = $this->p_model->p_s_one('company', 'address, service, email, copyright');
		$data['link'] = $this->p_model->p_select_order('link', 'sort desc, addtime desc');
		
		$data['file'] = $this->p_fenye('file', 'welcome/file_list', '8', 'sort desc, addtime desc');
		//print_r($data['file']);
		
		$this->load->view('head',$data);
		$this->load->view('file_list');
		$this->load->view('foot');
	}
	
	
	
	
	
	function liuyan_ok(){
				$this->form_validation->set_rules('name','姓名','required');
				$this->form_validation->set_rules('phone','手机','required');
				$this->form_validation->set_rules('company','公司','required');
				$this->form_validation->set_rules('position','职位','required');
				$this->form_validation->set_rules('content','需求','required');
					
				if($this->form_validation->run()==FALSE){
					$this->load->view('welcome/index');
					
				}else{
					
					$_POST['l_time'] = time();
					
					$this->p_model->p_insert('leaves', $_POST);
					
					$this->success('留言成功', 'welcome/liuyan');
					
				}	

		}
			
			
			
	
	
	
	function p_fenye($form, $url, $size, $order){
			
			$fy['url'] = $url;
			$fy['total'] = $data['total'] = $this->p_model->fy_n($form);
			$fy['size'] = $data['size'] = $info['size'] = $size;
			$fy['uri'] = 3;
			$this->load->library('p_fy', $fy);
			$data['fy'] = $this->p_fy->fy();
			//print_r($data['fy']);
			$info['start'] = $data['start'] = $this->uri->segment(3, 0);
			$info['order'] = $order;
			$data['admin'] = $this->p_model->fy_info($form, $info);
			
			return $data;
			
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
	function p__fenye($form, $url, $where, $size, $order){

			$fy['url'] = $url;
			$fy['total'] = $data['total'] = $this->p_model->num_where($form, $where);
			$fy['size'] = $data['size'] =$info['size'] = $size;
			$fy['uri'] = 5;
			$this->load->library('p_fy', $fy);
			$data['fy'] = $this->p_fy->fy();
			$info['start'] = $data['start'] = $this->uri->segment(5, 0);
			$info['order'] = $order;
			$data['list'] = $this->p_model->fy_wher($form, $where, $info);

			return $data;

		}

	
	function p_w_fenye_u($form, $url, $where, $size, $order){
			
			
			$fy['url'] = $url;
			$fy['total'] = $data['total'] = $this->p_model->p_w_num($form, $where);
			$fy['size'] = $data['size'] =$info['size'] = $size;
			$fy['uri'] = 4;
			$this->load->library('p_fy', $fy);
			$data['fy'] = $this->p_fy->fy();
			$info['start'] = $data['start'] = $this->uri->segment(4, 0);
			$info['order'] = $order;
			$data['admin'] = $this->p_model->fy_w_info($form, $where, $info);
			
			return $data;
			
	}
	
	function success($title,$url){
			
			$success['title']=$title;
			$success['url']=base_url($url);
						
			$this->load->view('admin/success',$success);			
			
		}
	
}

