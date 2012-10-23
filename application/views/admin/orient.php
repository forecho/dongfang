<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Orient extends CI_Controller{

		public $type;
		public $stop;
		
		function __construct(){
			
			parent::__construct();
			$this->load->database();
			$this->load->model('p_model');
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>');
			date_default_timezone_set('PRC');
			$this->type=array('application/pdf','application/vnd.ms-powerpoint','application/vnd.openxmlformats-officedocument.wordprocessingml.document','application/msword','application/octet-stream','application/x-zip', 'application/zip', 'application/x-zip-compressed','application/vnd.openxmlformats-officedocument.presentationml.presentation','image/jpeg','image/x-jpg','image/x-jpeg','image/JPG','image/JPEG','image/X-JPG','image/jpg','image/X-JPEG');
			$this->stop="<script type='text/javascript'>window.parent.location.href='".base_url('orient/login.html')."';</script>";
			$this->load->helper('download');	
		}
		
		function index(){
		
			if($this->session->userdata('user')){
				
				$this->load->view('admin/admin_index');

			}else{
			
				echo $this->stop;
			
			}	
				
		} 
		
		function top(){
		
			if($this->session->userdata('user')){
				
				$this->load->view('admin/top');
				
			}else{
			
				echo $this->stop;
			
			}
				
		}
		
		function left(){
		
			if($this->session->userdata('user')){
			
				$this->load->view('admin/left');

			}else{
			
				echo $this->stop;
			
			}		
				
		}
			
		function welcome(){
		
			if($this->session->userdata('user')){		
			
				$this->load->view('admin/welcome');
			
			}else{
			
				echo $this->stop;
			
			}
		
		}
		
		function login(){
			
			$login['title']='东方盛思后台管理系统';
			
			$this->form_validation->set_rules('user','登录名','required');
			$this->form_validation->set_rules('pwd','登录密码','required');
			
			$check=FALSE;
			$login['error']='';
			
			if($this->form_validation->run()==TRUE):
			
				$where=array(
				
					'user'=>$this->input->post('user'),
					'pwd'=>md5($this->input->post('pwd'))
				
				);
			
				if($this->p_model->p_num('admin',$where)==0){
				
					$login['error']='登录名或密码错误';
				
				}else{
					
					$check=TRUE;
					
				}
				
			
			endif;
			
			if($this->form_validation->run()==FALSE || $check==FALSE){

				$this->load->view('admin/login',$login);
		
			}else{
				
				$this->session->set_userdata('user',$this->input->post('user'));
				
				redirect('orient');
				
			}					
						
		}
		
		function edit_admin(){
			
			if($this->session->userdata('user')){
			
				$this->form_validation->set_rules('user','用户名','required|min_length[4]|max_length[8]');
				$this->form_validation->set_rules('ypwd','原密码','required');
				$this->form_validation->set_rules('pwd','新密码','required|min_length[6]');
				$this->form_validation->set_rules('pwds','重复密码','required|matches[pwd]');
				
				$pwd=FALSE;
				$edit['error']='';
				
				if($this->form_validation->run()==TRUE):
								
					$where['id']=$this->input->post('id');
						
					$check['pwd']=$this->p_model->p_row('admin',$where);

					if(md5($this->input->post('ypwd'))==$check['pwd']->pwd){
						
						$pwd=TRUE;
						
					}else{
							
						$edit['error']='原密码错误';
							
					}
						
				endif;
								
				if($this->form_validation->run()==FALSE || $pwd==FALSE){
					
					$edit['admin']=$this->p_model->p_one('admin');					
					
					$this->load->view('admin/editadmin',$edit);
					
				}else{
					
					$admin['set']=array(
					
						'user'=>$this->input->post('user'),
						'pwd'=>md5($this->input->post('pwd'))
					
					);

					$admin['where']=array(
						
						'id'=>$this->input->post('id')
						
					);
										
					$this->p_model->p_update('admin', $admin['where'], $admin['set']);
					$this->session->sess_destroy();
					
					$success['title']='管理员信息更新成功，请重新登录';
					$success['url']=base_url('orient');
					
					$this->load->view('admin/success',$success);
					
				}
			
			}else{
				
				echo $this->stop;
				
			}
			
		}		
		
		function out(){
			
			$this->session->sess_destroy();
			
			echo $this->stop;
			
		}
		
		function photo_list(){
		
			if($this->session->userdata('user')){
				
				$data=$this->p_fenye('photos', 'orient/photo_list', 10, 'sort desc, addtime desc');
				
				$this->load->view('admin/photo_list', $data);
			
			}else{
				
				echo $this->stop;
				
			}
			
		}
		
		
		function banner_list(){
		
			if($this->session->userdata('user')){
				
				$data['banner']=$this->p_model->sel_banner('banner');
				//print_r($data);
				
				$this->load->view('admin/banner_list', $data);
			
			}else{
				
				echo $this->stop;
				
			}
			
		}
		function banner_edit(){
			if($this->session->userdata('user')){
				$where['id']=$this->uri->segment(3);
				$data['edit']=$this->p_model->p_where('banner', $where);
				$this->load->view('admin/banner_edit', $data);
			}else{
				echo $this->stop;
			}
		}
		function banner_edit_ok(){
			if($this->session->userdata('user')){
				$where['id']=$_POST['id'];
				$img=$this->p_model->p_where('banner', $where);
				
				$config['upload_path'] = './p_file/';//绝对路径  
				$config['allowed_types'] = 'gif|jpg|png';//文件支持类型  
				$config['max_size'] = '2000';  
				$config['encrypt_name'] = true;//重命名文件  
				$this->load->library('upload',$config);  
		  
				if ($this->upload->do_upload('file')) {  
						
					unlink($img->img);
					
					$upload_data = $this->upload->data();
					$imgname=$upload_data['file_name'];
					
					$config['create_thumb'] = FALSE;
					$config['source_image'] = "p_file/".$imgname;
					//$config['new_image'] = "uploads/".$imgname;
					$this->load->library('image_lib'); 
					$config['image_library'] = 'GD2';
					$config['width'] = 960;
					$config['height'] = 183;
					$this->image_lib->initialize($config);
					$this->image_lib->resize(); //生成缩略图
					
					$_POST['img']='p_file/'.$imgname;
					//调用模型，写入数据库  
					$this->p_model->p_update('banner', $where, $_POST);
					
					$this->success($img->name.'图片信息更新成功', 'orient/banner_list');
				}  
				else {  
					redirect('orient/banner_edit/'.$img->id);
				}
			}else{
				echo $this->stop;
			}
		}
		
		
		
		
		
		
		
		function slideshow_list(){
		
			if($this->session->userdata('user')){
				
				$data=$this->p_fenye('slideshow', 'orient/slideshow_list', 10, 'sort desc, addtime desc');
				
				$this->load->view('admin/slideshow_list', $data);
			
			}else{
				
				echo $this->stop;
				
			}
			
		}
		
		function slideshow_add(){
			
			if($this->session->userdata('user')){
				
				$data['error']['value']=TRUE;
				$data['error']['error']='';
				$data['error']['type']='';
				$data['error']['size']='';
				
				$this->form_validation->set_rules('url','图片链接','required');
				$this->form_validation->set_rules('seo_t','Title','required');
				$this->form_validation->set_rules('seo_a','Alt','required');
				$this->form_validation->set_rules('sort','排序','required');
				
				if($this->form_validation->run()==TRUE):
						
					$data['error']=$this->file_error();
					
				endif;
				
				if($this->form_validation->run()==FALSE || $data['error']['value']==FALSE){
					
					$this->load->view('admin/slideshow_add', $data);
					
				}else{
					
					$file['path']='p_file/';
					$file['file']='file';
					$file['width'] = 674;
					$file['height'] = 282;
					
					$this->load->library('p_file', $file);
					$info=$this->p_file->uploads();
					if($info==FALSE){
						
						redirect('orient/slideshow_add');
						
					}else{
						
						$_POST['img']=$lj=$file['path'].$info['file_name'];
						
						$this->p_file->img($lj);
						
						$_POST['addtime']=time();
											
						$this->p_model->p_insert('slideshow', $_POST);
						
						$this->success('案例图片添加成功', 'orient/slideshow_add');

					}	

				}
				
			}else{
				
				echo $this->stop;
				
			}	
			
		}
		
		
		function slideshow_edit(){
			
			if($this->session->userdata('user')){
			
				$where['id']=$this->uri->segment(3);
				if(isset($_POST['id'])):
				
					$where['id']=$_POST['id'];
				
				endif;
				if($where['id']!=0){
									
					$num=$this->p_model->p_num('slideshow', $where);
					
					if($num!=0){			
				
						$data['error']['value']=TRUE;
						$data['error']['error']='';
						$data['error']['type']='';
						$data['error']['size']='';
						
						$this->form_validation->set_rules('url','图片链接','required');
						$this->form_validation->set_rules('seo_t','Title','required');
						$this->form_validation->set_rules('seo_a','Alt','required');
						$this->form_validation->set_rules('sort','排序','required');
								
						if($this->form_validation->run()==TRUE):
		
							if($_FILES['file']['error']==0):
						
								$data['error']=$this->file_error();
							
							endif;	
								
						endif;
													
						if($this->form_validation->run()==FALSE || $data['error']['value']==FALSE){
						
							$data['edit']=$this->p_model->p_where('slideshow', $where);
							
						 	$this->load->view('admin/slideshow_edit', $data);
						
						}else{
							
							if($_FILES['file']['error']==0):
							
								$file['path']='p_file/';
								$file['file']='file';
								$file['width'] = 674;
								$file['height'] = 282;
															
								$this->load->library('p_file', $file);
								$info=$this->p_file->uploads();
								if($info==FALSE){
									
									redirect('orient/slideshow_list');
								
								}else{
									
									$img=$this->p_model->p_where('slideshow', $where);
									unlink($img->img);
									
									$_POST['img']=$lj=$file['path'].$info['file_name'];
										
									$this->p_file->img($lj);							
									
								}	
									
							endif;

							array_splice($_POST, 0, 1);
														
							$this->p_model->p_update('slideshow', $where, $_POST);
							
							$this->success('案例滚动图片信息更新成功', 'orient/slideshow_list');
							
						}
						
					}else{
						
						redirect('orient/slideshow_list');
						
					}
					
				}else{
					
					redirect('orient/slideshow_list');
					
				}
			
			}else{
				
				echo $this->stop;
				
			}
			
		}
		
		function del_slideshow(){
			
			if($this->session->userdata('user')){
			
				if(isset($_POST['checkbox'])){
					
					while(list($key,$value)=each($delete)){
							
						$where['id']=$value;
						$info=$this->p_model->p_where('slideshow', $where);
						unlink($info->img);
																		
						$this->p_model->p_delete('slideshow', $where);			
				
					}
						
					$this->success('案例滚动图片信息删除成功', 'orient/slideshow_list');
					
				}else{
					
					redirect('orient/slideshow_list');
					
				}

			}else{
			
				echo $this->stop;
			
			}			
			
		}
		
		function delo_slideshow(){
			
			if($this->session->userdata('user')){
			
				$where['id']=$this->uri->segment(3,0);
				if($where['id']!=0){
									
					$num=$this->p_model->p_num('slideshow', $where);
					
					if($num!=0){

						$info=$this->p_model->p_where('slideshow', $where);
						unlink($info->img);
						
						$this->p_model->p_delete('slideshow', $where);			
					
						$this->success('案例滚动图片信息删除成功', 'orient/slideshow_list');
					
					}else{
						
						redirect('orient/slideshow_list');
						
					}	
						
				}else{
					
					redirect('orient/slideshow_list');
					
				}

			}else{
			
				echo $this->stop;
			
			}			
			
		}
		
		
		
		
		
		
		
		
		
		function photo_add(){
			
			if($this->session->userdata('user')){
				
				$data['error']['value']=TRUE;
				$data['error']['error']='';
				$data['error']['type']='';
				$data['error']['size']='';
				
				$this->form_validation->set_rules('url','图片链接','required');
				$this->form_validation->set_rules('seo_t','Title','required');
				$this->form_validation->set_rules('seo_a','Alt','required');
				$this->form_validation->set_rules('sort','排序','required');
				
				if($this->form_validation->run()==TRUE):
						
					$data['error']=$this->file_error();
					
				endif;
				
				if($this->form_validation->run()==FALSE || $data['error']['value']==FALSE){
					
					$this->load->view('admin/photo_add', $data);
					
				}else{
					
					$file['path']='p_file/';
					$file['file']='file';
					$file['width'] = 960;
					$file['height'] = 400;
					
					$this->load->library('p_file', $file);
					$info=$this->p_file->uploads();
					if($info==FALSE){
						
						redirect('orient/photo_add');
						
					}else{
						
						$_POST['img']=$lj=$file['path'].$info['file_name'];
						
						$this->p_file->img($lj);
						
						$_POST['addtime']=time();
											
						$this->p_model->p_insert('photos', $_POST);
						
						$this->success('滚动图片添加成功', 'orient/photo_add');

					}	

				}
				
			}else{
				
				echo $this->stop;
				
			}	
			
		}
		
		function photo_edit(){
			
			if($this->session->userdata('user')){
			
				$where['id']=$this->uri->segment(3);
				if(isset($_POST['id'])):
				
					$where['id']=$_POST['id'];
				
				endif;
				if($where['id']!=0){
									
					$num=$this->p_model->p_num('photos', $where);
					
					if($num!=0){			
				
						$data['error']['value']=TRUE;
						$data['error']['error']='';
						$data['error']['type']='';
						$data['error']['size']='';
						
						$this->form_validation->set_rules('url','图片链接','required');
						$this->form_validation->set_rules('seo_t','Title','required');
						$this->form_validation->set_rules('seo_a','Alt','required');
						$this->form_validation->set_rules('sort','排序','required');
								
						if($this->form_validation->run()==TRUE):
		
							if($_FILES['file']['error']==0):
						
								$data['error']=$this->file_error();
							
							endif;	
								
						endif;
													
						if($this->form_validation->run()==FALSE || $data['error']['value']==FALSE){
						
							$data['edit']=$this->p_model->p_where('photos', $where);
							
						 	$this->load->view('admin/photo_edit', $data);
						
						}else{
							
							if($_FILES['file']['error']==0):
							
								$file['path']='p_file/';
								$file['file']='file';
								$file['width'] = 960;
								$file['height'] = 400;
															
								$this->load->library('p_file', $file);
								$info=$this->p_file->uploads();
								if($info==FALSE){
									
									redirect('orient/photo_list');
								
								}else{
									
									$img=$this->p_model->p_where('photos', $where);
									unlink($img->img);
									
									$_POST['img']=$lj=$file['path'].$info['file_name'];
										
									$this->p_file->img($lj);							
									
								}	
									
							endif;

							array_splice($_POST, 0, 1);
														
							$this->p_model->p_update('photos', $where, $_POST);
							
							$this->success('首页滚动图片信息更新成功', 'orient/photo_list');
							
						}
						
					}else{
						
						redirect('orient/photo_list');
						
					}
					
				}else{
					
					redirect('orient/photo_list');
					
				}
			
			}else{
				
				echo $this->stop;
				
			}
			
		}
		
		function del_photos(){
			
			if($this->session->userdata('user')){
			
				if(isset($_POST['checkbox'])){
					
					while(list($key,$value)=each($delete)){
							
						$where['id']=$value;
						$info=$this->p_model->p_where('photos', $where);
						unlink($info->img);
																		
						$this->p_model->p_delete('photos', $where);			
				
					}
						
					$this->success('首页滚动图片信息删除成功', 'orient/photo_list');
					
				}else{
					
					redirect('orient/photo_list');
					
				}

			}else{
			
				echo $this->stop;
			
			}			
			
		}
		
		function delo_photo(){
			
			if($this->session->userdata('user')){
			
				$where['id']=$this->uri->segment(3,0);
				if($where['id']!=0){
									
					$num=$this->p_model->p_num('photos', $where);
					
					if($num!=0){

						$info=$this->p_model->p_where('photos', $where);
						unlink($info->img);
						
						$this->p_model->p_delete('photos', $where);			
					
						$this->success('首页滚动图片信息删除成功', 'orient/photo_list');
					
					}else{
						
						redirect('orient/photo_list');
						
					}	
						
				}else{
					
					redirect('orient/photo_list');
					
				}

			}else{
			
				echo $this->stop;
			
			}			
			
		}
		
		function class_list(){
			
			if($this->session->userdata('user')){
			
				$data['what'] = $this->uri->segment(3,0);

				if($data['what'] !== 0){

					$form = $data['what'].'_class';
					
					$data['list'] = $this->p_model->p_select_order($form, 'sort desc, cid asc');

					$this->load->view('admin/class_list', $data);
					
				}else{
				
					redirect('orient/welcome');
				
				}				
				
			}else{
			
				echo $this->stop;
			
			}							
			
		}
		
		function class_add(){
		
			if($this->session->userdata('user')){
			
				$data['what'] = $this->uri->segment(3,0); 
				if(isset($_POST['what'])):
				
					$data['what'] = $_POST['what'];
				
				endif;
				if($data['what'] !== 0){
			
					$this->form_validation->set_rules('name','分类名称','required');
					
					if($this->form_validation->run()==FALSE){
						
						$this->load->view('admin/class_add', $data);
					
					}else{
					
						$url = 'orient/class_add/'.$_POST['what'];
						
						$form = $_POST['what'].'_class';
						
						array_splice($_POST, 0, 1);
						
						$this->p_model->p_insert($form, $_POST);
						
						$this->success('分类信息添加成功', $url);
					
					}
			
				}else{
				
					redirect('orient/welcome');
				
				}
			
			}else{
			
				echo $this->stop;
			
			}			
		
		}
		
		function class_edit(){
			
			if($this->session->userdata('user')){
			
				$data['what'] = $this->uri->segment(3, 0);
				$where['cid'] = $this->uri->segment(4, 0); 
				if(isset($_POST['what'])):
				
					$data['what'] = $_POST['what'];
				
				endif;
				if(isset($_POST['cid'])):
				
					$where['cid'] = $_POST['cid'];
				
				endif;
				
				if($data['what'] !== 0 && $where['cid']!==0){
			
					$form = $data['what'].'_class';
					
					$this->form_validation->set_rules('name','分类名称','required');
					
					if($this->form_validation->run()==FALSE){
						
						$data['edit'] = $this->p_model->p_where($form, $where);
						
						$this->load->view('admin/class_edit', $data);
					
					}else{
					
						$url = 'orient/class_list/'.$_POST['what'];
						
						array_splice($_POST, 0, 2);
						
						$this->p_model->p_update($form, $where, $_POST);
						
						$this->success('分类信息修改成功', $url);
					
					}
			
				}else{
				
					redirect('orient/welcome');
				
				}
			
			}else{
			
				echo $this->stop;
			
			}						
			
		}
		
		function del_class(){
			
			if($this->session->userdata('user')){
			
				if(isset($_POST['checkbox'])){
					
					$form = $_POST['what'].'_class';
					
					while(list($key,$value)=each($delete)){
							
						$where['cid'] = $value;
						$this->p_model->p_delete($form, $where);			
				
					}
						
					$this->success('分类信息删除成功', 'orient/class_list/'.$_POST['what']);
					
				}else{
					
					redirect('orient/class_list/'.$_POST['what']);
					
				}

			}else{
			
				echo $this->stop;
			
			}			
			
		}
		
		function delo_class(){
			
			if($this->session->userdata('user')){
			
				$data['what'] = $this->uri->segment(3, 0);
				$where['cid'] = $this->uri->segment(4, 0); 
				if(isset($_POST['what'])):
				
					$data['what'] = $_POST['what'];
				
				endif;
				if(isset($_POST['cid'])):
				
					$where['cid'] = $_POST['cid'];
				
				endif;
				
				if($data['what'] !== 0 && $where['cid']!==0){

					$form = $data['what'].'_class';
					
					$num=$this->p_model->p_num($form, $where);
					
					if($num!=0){

						$this->p_model->p_delete($form, $where);			
					
						$this->success('分类信息删除成功', 'orient/class_list/'.$data['what']);
					
					}else{
						
						redirect('orient/class_list/'.$data['what']);
						
					}	
						
				}else{
					
					redirect('orient/class_list/'.$data['what']);
					
				}

			}else{
			
				echo $this->stop;
			
			}			
			
		}
		
		function plan(){
			
			if($this->session->userdata('user')){			

				$data['class'] = $this->p_model->p_select_order('plan_class', 'sort desc, cid asc');
				
				$this->session->unset_userdata('s_class');
				$this->session->unset_userdata('s_title');
				
				$this->load->view('admin/plan',$data);
				
			}else{
			
				echo $this->stop;
			
			}	
			
		}
		
		function plan_list(){
			
			if($this->session->userdata('user')){			
				
				$where="";
				if(isset($_POST['c_id'])):
					
					$this->session->unset_userdata('s_class');
					$this->session->unset_userdata('s_title');
				
					if($_POST['c_id']!="请选择策划类型"):
				
						$where['where']['c_id']=$_POST['c_id'];
						$this->session->set_userdata('s_class', $_POST['c_id']);
					
					endif;
					if($_POST['title']!=""):
					
						$where['like']['title']=trim($_POST['title']);
						$this->session->set_userdata('s_title', trim($_POST['title']));
					
					endif;
					
				endif;
				
				if($this->session->userdata('s_class')):
				
					$where['where']['c_id']=$this->session->userdata('s_class');
				
				endif;
				if($this->session->userdata('s_title')):
				
					$where['like']['title']=$this->session->userdata('s_title');
				
				endif;
				
				$data = $this->p_w_fenye('plan', 'orient/plan_list', $where, 3, 'sort desc, addtime desc');
				$data['class'] = $this->class_arr('plan_class');
								
				$this->load->view('admin/plan_list',$data);
				
			}else{
			
				echo $this->stop;
			
			}	
			
		}
		
		function plan_add(){
			
			if($this->session->userdata('user')){			

				$this->form_validation->set_rules('title','标题','required');
				$this->form_validation->set_rules('content','内容','required');
				//$this->form_validation->set_rules('keywords','关键词','required');
				//$this->form_validation->set_rules('description','描述','required');
					
				if($this->form_validation->run()==FALSE){
					
					$data['class'] = $this->p_model->p_select_order('plan_class', 'sort desc, cid asc');
					
					$this->load->view('admin/plan_add', $data);
					
				}else{
					
					$_POST['addtime'] = time();
					
					$this->p_model->p_insert('plan', $_POST);
					
					$this->success('策划信息添加成功', 'orient/plan_add');
					
				}
				
				
			}else{
			
				echo $this->stop;
			
			}	
			
		}
		
		function plan_edit(){
			
			if($this->session->userdata('user')){

				$where['id']=$this->uri->segment(3,0);
				if(isset($_POST['id'])):
				
					$where['id']=$_POST['id'];
				
				endif;
				if($where['id']!=0){
									
					$num=$this->p_model->p_num('plan', $where);
					
					if($num!=0){

						$this->form_validation->set_rules('title','标题','required');
						$this->form_validation->set_rules('content','内容','required');
							
						if($this->form_validation->run()==FALSE){
							
							$data['class'] = $this->p_model->p_select_order('plan_class', 'sort desc, cid asc');
							$data['edit'] = $this->p_model->p_where('plan', $where);
							
							$this->load->view('admin/plan_edit', $data);
							
						}else{
							
							array_splice($_POST, 0, 1);
							
							$this->p_model->p_update('plan', $where, $_POST);
							
							$this->success('策划信息更新成功', 'orient/plan');
							
						}
						
					}else{
						
						redirect('orient/plan');
						
					}
					
				}else{
					
					redirect('orient/plan');
					
				}				
				
			}else{
			
				echo $this->stop;
			
			}	
			
		}
		
		function del_plan(){
			
			if($this->session->userdata('user')){
			
				if(isset($_POST['checkbox'])){
					
					$this->load->library('p_del');
					
					while(list($key,$value)=each($delete)){
							
						$where['id']=$value;
						$info=$this->p_model->p_where('plan', $where);
						$this->p_del->p_image($info->content);
																		
						$this->p_model->p_delete('plan', $where);			
				
					}
						
					$this->success('策划信息删除成功', 'orient/plan');
					
				}else{
					
					redirect('orient/plan');
					
				}

			}else{
			
				echo $this->stop;
			
			}			
			
		}
		
		function delo_plan(){
			
			if($this->session->userdata('user')){
			
				$where['id']=$this->uri->segment(3,0);
				if($where['id']!=0){
									
					$num=$this->p_model->p_num('plan', $where);
					
					if($num!=0){

						$this->load->library('p_del');
						$info=$this->p_model->p_where('plan', $where);
						$this->p_del->p_image($info->content);
						
						$this->p_model->p_delete('plan', $where);			
					
						$this->success('策划信息删除成功', 'orient/plan');
					
					}else{
						
						redirect('orient/plan');
						
					}	
						
				}else{
					
					redirect('orient/plan');
					
				}

			}else{
			
				echo $this->stop;
			
			}			
			
		}
		
		function info(){
			
			if($this->session->userdata('user')){			

				$data['what'] = $this->uri->segment(3,0);
				
				if($data['what'] !== 0){				
				
					$form = $data['what'].'_class';
				
					$data['class'] = $this->p_model->p_select_order($form, 'sort desc,cid asc');
					
					$this->session->unset_userdata('s_class');
					$this->session->unset_userdata('s_title');
					
					$this->load->view('admin/info', $data);
								
				}else{
					
					redirect('orient/welcome');
					
				}	
					
			}else{
			
				echo $this->stop;
			
			}	
			
		}
		
		function info_list(){
			
			if($this->session->userdata('user')){			
				
				$data['what'] = $this->uri->segment(3,0); 
				if(isset($_POST['what'])):
				
					$data['what'] = $_POST['what'];
				
				endif;
				if($data['what'] !== 0){

					$form = $data['what'].'_class';
					
					$where="";
					if(isset($_POST['c_id'])):
						
						$this->session->unset_userdata('s_class');
						$this->session->unset_userdata('s_title');
					
						if($_POST['c_id']!="请选择类型"):
					
							$where['where']['c_id']=$_POST['c_id'];
							$this->session->set_userdata('s_class', $_POST['c_id']);
						
						endif;
						if($_POST['title']!=""):
						
							$where['like']['title']=trim($_POST['title']);
							$this->session->set_userdata('s_title', trim($_POST['title']));
						
						endif;
						
					endif;
					
					if($this->session->userdata('s_class')):
					
						$where['where']['c_id']=$this->session->userdata('s_class');
					
					endif;
					if($this->session->userdata('s_title')):
					
						$where['like']['title']=$this->session->userdata('s_title');
					
					endif;
					
					$data['list'] = $this->p_w_fenye_u($data['what'], 'orient/info_list/'.$data['what'], $where, 5, 'sort desc, addtime desc');
					$data['class'] = $this->class_arr($form);
									
					$this->load->view('admin/info_list',$data);
					
				}else{
					
					echo "<script type='text/javascript'>window.parent.location.href='".base_url('orient/welcome.html')."';</script>";
					
				}	
				
			}else{
			
				echo $this->stop;
			
			}	
			
		}
		
		function info_add(){

			if($this->session->userdata('user')){

				$data['what'] = $this->uri->segment(3,0); 
				if(isset($_POST['what'])):
				
					$data['what'] = $_POST['what'];
				
				endif;
				if($data['what'] !== 0){				
				
					$form = $data['what'].'_class';
					
					$this->form_validation->set_rules('title','标题','required');
					$this->form_validation->set_rules('content','内容','required');
					$this->form_validation->set_rules('keywords','关键词','required');
					$this->form_validation->set_rules('description','描述','required');
	
					$data['error']['value']=TRUE;
					$data['error']['error']='';
					$data['error']['type']='';
					$data['error']['size']='';
					
					if($this->form_validation->run()==TRUE):
							
						$data['error']=$this->file_error();
						
					endif;
					
					if($this->form_validation->run()==FALSE || $data['error']['value']==FALSE){
						
						$data['class'] = $this->p_model->p_select_order($form, 'sort desc, cid asc');
						
						$this->load->view('admin/info_add', $data);
					
					}else{
						
						array_splice($_POST, 0, 1);
						
						$file['path']='thumb_file/';
						$file['file']='file';
						$file['width'] = 135;
						$file['height'] = 85;
												
						$this->load->library('p_file', $file);
						$info=$this->p_file->uploads();
						if($info==FALSE){
							
							redirect('orient/info_add/'.$data['what']);
							
						}else{
							
							$_POST['img']=$lj=$file['path'].$info['file_name'];
							
							$this->p_file->img($lj);
								
						}	
											
						$_POST['addtime']=time();
												
						$this->p_model->p_insert($data['what'], $_POST);
							
						$this->success('信息添加成功', 'orient/info_add/'.$data['what']);
						
					}
					
				}else{
					
					redirect('orient/welcome');
					
				}
			
			}else{
			
				echo $this->stop;
			
			}
			
		}
		
		function info_edit(){

			if($this->session->userdata('user')){
			
				$data['what'] = $this->uri->segment(3, 0);
				$where['id'] = $this->uri->segment(4, 0); 
				if(isset($_POST['what'])):
				
					$data['what'] = $_POST['what'];
				
				endif;
				if(isset($_POST['id'])):
				
					$where['id'] = $_POST['id'];
				
				endif;
				
				if($data['what'] !== 0 && $where['id']!==0){
			
					$form = $data['what'].'_class';
													
					$num=$this->p_model->p_num($data['what'], $where);
					
					if($num!=0){
					
						$this->form_validation->set_rules('title','标题','required');
						$this->form_validation->set_rules('content','内容','required');
								
						$data['error']['value']=TRUE;
						$data['error']['error']='';
						$data['error']['type']='';
						$data['error']['size']='';
																
						if($this->form_validation->run()==TRUE):
		
							if($_FILES['file']['error']==0):
						
								$data['error']=$this->file_error();
							
							endif;	
								
						endif;
						
						if($this->form_validation->run()==FALSE || $data['error']['value']==FALSE){
							
							$data['class'] = $this->p_model->p_select_order($form, 'sort desc, cid asc');
							
							$data['edit']=$this->p_model->p_where($data['what'], $where);
							
							$this->load->view('admin/info_edit', $data);
						
						}else{
							
							array_splice($_POST, 0, 2);
							
							if($_FILES['file']['error']==0):
															
								$file['path']='thumb_file/';
								$file['file']='file';
								$file['width'] = 135;
								$file['height'] = 85;
								
								$this->load->library('p_file', $file);
								$info=$this->p_file->uploads();
								if($info==FALSE){
									
									redirect('orient/info/'.$data['what']);
								
								}else{
									
									$img=$this->p_model->p_where($data['what'], $where);
									unlink($img->img);
									
									$_POST['img']=$lj=$file['path'].$info['file_name'];
										
									$this->p_file->img($lj);							
									
								}	
									
							endif;
							
							$info=$this->p_model->p_where($data['what'], $where);
							$config['old']=$info->content;
							$config['content']=$_POST['content'];
							$this->load->library('p_img', $config);
							$this->p_img->p_upimg();
							
							$this->p_model->p_update($data['what'], $where, $_POST);
								
							$this->success('信息更新成功', 'orient/info/'.$data['what']);
										
						}
						
					}else{
						
						redirect('orient/info/'.$data['what']);
						
					}	
					
				}else{
					
					redirect('orient/info/'.$data['what']);
					
				}
			
			}else{
			
				echo $this->stop;
			
			}
			
		}
		
		function del_info(){
			
			if($this->session->userdata('user')){
			
				if(isset($_POST['checkbox']) && isset($_POST['what'])){
					
					$what = $_POST['what'];
					
					$this->load->library('p_del');
					
					while(list($key,$value)=each($delete)){
							
						$where['id']=$value;
						$info=$this->p_model->p_where($what, $where);
						unlink($info->img);
						$this->p_del->p_image($info->content);
																		
						$this->p_model->p_delete($what, $where);			
				
					}
						
					$this->success('作品信息删除成功', 'orient/info/'.$what);
					
				}else{
					
					redirect('orient/info/'.$what);
					
				}

			}else{
			
				echo $this->stop;
			
			}			
			
		}
		
		function delo_info(){
			
			if($this->session->userdata('user')){
			
				$what = $this->uri->segment(3, 0);
				$where['id'] = $this->uri->segment(4, 0); 
				if($what !== 0 && $where['id'] !== 0){
									
					$num=$this->p_model->p_num($what, $where);
					
					if($num!=0){

						$this->load->library('p_del');
						$info=$this->p_model->p_where($what, $where);
						unlink($info->img);
						$this->p_del->p_image($info->content);
						
						$this->p_model->p_delete($what, $where);			
					
						$this->success('作品信息删除成功', 'orient/info/'.$what);
					
					}else{
						
						redirect('orient/info/'.$what);
						
					}	
						
				}else{
					
					redirect('orient/works');
					
				}

			}else{
			
				echo $this->stop;
			
			}			
			
		}
				
		function leave_words(){
			
			if($this->session->userdata('user')){
				
				$data=$this->p_fenye('leaves', 'orient/leave_words', '10', 'l_time desc');
				
				$this->load->view('admin/leave_list', $data);
				
			}else{
				
				$this->stop;
				
			}
			
		}
		
		function leave_edit(){
			
			if($this->session->userdata('user')){
			
				$where['id']=$this->uri->segment(3,0);
				if(isset($_POST['id'])):
				
					$where['id']=$_POST['id'];
				
				endif;
				if($where['id']!=0){
									
					$num=$this->p_model->p_num('leaves', $where);
					
					if($num!=0){
					
						$this->form_validation->set_rules('reply','回复','required');
								
						if($this->form_validation->run()==FALSE){
							
							$data['edit']=$this->p_model->p_where('leaves', $where);
							
							$this->load->view('admin/leave_edit', $data);
						
						}else{
							
							array_splice($_POST, 0, 1);
							$_POST['r_time']=time();
							
							$this->p_model->p_update('leaves', $where, $_POST);
								
							$this->success('留言信息更新成功', 'orient/leave_words');
										
						}
						
					}else{
						
						redirect('orient/leave_words');
						
					}	
					
				}else{
					
					redirect('orient/leave_words');
					
				}
			
			}else{
			
				echo $this->stop;
			
			}
			
		}
		
		function del_leaves(){
			
			if($this->session->userdata('user')){
			
				if(isset($_POST['checkbox'])){
					
					while(list($key,$value)=each($delete)){
							
						$where['id']=$value;
																		
						$this->p_model->p_delete('leaves', $where);			
				
					}
						
					$this->success('留言信息删除成功', 'orient/leave_words');
					
				}else{
					
					redirect('orient/leave_words');
					
				}

			}else{
			
				echo $this->stop;
			
			}			
			
		}
		
		function delo_leave(){
			
			if($this->session->userdata('user')){
			
				$where['id']=$this->uri->segment(3,0);
				if($where['id']!=0){
									
					$num=$this->p_model->p_num('leaves', $where);
					
					if($num!=0){
						
						$this->p_model->p_delete('leaves', $where);			
					
						$this->success('留言信息删除成功', 'orient/leave_words');
					
					}else{
						
						redirect('orient/leave_words');
						
					}	
						
				}else{
					
					redirect('orient/leave_words');
					
				}

			}else{
			
				echo $this->stop;
			
			}			
			
		}
		
		function partner_list(){

			if($this->session->userdata('user')){
		
				$data=$this->p_fenye('partner', 'orient/partner_list', 10, 'sort desc, addtime desc');
				
				$this->load->view('admin/partner_list',$data);
				
			}else{
			
				echo $this->stop;
			
			}	
			
		}	
		
		function partner_add(){
			
			if($this->session->userdata('user')){
			
				$this->form_validation->set_rules('name','名称','required|max_length[20]');
				$this->form_validation->set_rules('url','地址','required|');
				$this->form_validation->set_rules('sort','排序','required');
				
				$data['error']['value']=TRUE;
				$data['error']['error']='';
				$data['error']['type']='';
				$data['error']['size']='';
								
				if($this->form_validation->run()==TRUE):
						
					$data['error']=$this->file_error();
					
				endif;
				
				if($this->form_validation->run()==FALSE || $data['error']['value']==FALSE){
								
					$this->load->view('admin/partner_add', $data);
				
				}else{
					
					$file['path']='par_file/';
					$file['file']='file';
					$file['width'] = 200;
					$file['height'] = 70;
					
					$this->load->library('p_file', $file);
					$info=$this->p_file->uploads();
					if($info==FALSE){
						
						redirect('orient/partner_add');
						
					}else{
						
						$_POST['img']=$lj=$file['path'].$info['file_name'];
						
						$this->p_file->img($lj);
						
					
						$_POST['addtime']=time();
						$this->p_model->p_insert('partner',$_POST);

						$this->success('合作伙伴信息添加成功','orient/partner_add');
						
					}
					
				}

			}else{
			
				echo $this->stop;
			
			}
				
		}

		function partner_edit(){

			if($this->session->userdata('user')){
			
				$where['id']=$this->uri->segment(3,0);
				if(isset($_POST['id'])):
				
					$where['id']=$_POST['id'];
				
				endif;
				if($where['id']!=0){
									
					$num=$this->p_model->p_num('partner', $where);
					
					if($num!=0){
							
						$this->form_validation->set_rules('name','名称','required|max_length[20]');
						$this->form_validation->set_rules('url','地址','required|');
						$this->form_validation->set_rules('sort','排序','required');
												
						$data['error']['value']=TRUE;
						$data['error']['error']='';
						$data['error']['type']='';
						$data['error']['size']='';
																
						if($this->form_validation->run()==TRUE):
		
							if($_FILES['file']['error']==0):
						
								$data['error']=$this->file_error();
							
							endif;	
								
						endif;
						
						if($this->form_validation->run()==FALSE || $data['error']['value']==FALSE){
													
							$data['edit']=$this->p_model->p_where('partner',$where);
							
							$this->load->view('admin/partner_edit',$data);
							
						}else{
							
							if($_FILES['file']['error']==0):
							
								$file['path']='par_file/';
								$file['file']='file';
								$file['width'] = 200;
								$file['height'] = 70;
															
								$this->load->library('p_file', $file);
								$info=$this->p_file->uploads();
								if($info==FALSE){
									
									redirect('orient/partner_list');
								
								}else{
									
									$img=$this->p_model->p_where('partner', $where);
									unlink($img->img);
									
									$_POST['img']=$lj=$file['path'].$info['file_name'];
										
									$this->p_file->img($lj);							
									
								}	
									
							endif;

							array_splice($_POST, 0, 1);														
							
							$this->p_model->p_update('partner',$where,$_POST);
							
							$this->success('合作伙伴信息更新成功','orient/partner_list');
							
						}
					}else{
						
						redirect('orient/partner_list');
						
					}
					
				}else{
					
					redirect('orient/partner_list');
					
				}
			
			}else{
			
				echo $this->stop;
			
			}
						
		}
		
		function del_partner(){
			
			if($this->session->userdata('user')){

				if(isset($_POST['checkbox'])){
					
					while(list($key,$value)=each($_POST['checkbox'])){
							
						$where['id']=$value;
						$info=$this->p_model->p_where('partner', $where);
						unlink($info->img);
																		
						$this->p_model->p_delete('partner', $where);			
				
					}
						
					$this->success('合作伙伴信息删除成功', 'orient/partner_list');
					
					
				}else{
					
					redirect('orient/partner_list');
					
				}
			
			}else{
			
				echo $this->stop;
			
			}
			
		}

		function delo_partner(){
			
			if($this->session->userdata('user')){

				$where['id']=$this->uri->segment(3,0);
				if($where['id']!=0){
									
					$num=$this->p_model->p_num('partner', $where);
					
					if($num!=0){
											
						$info=$this->p_model->p_where('partner', $where);
						unlink($info->img);
																		
						$this->p_model->p_delete('partner', $where);			
				
					}
						
					$this->success('合作伙伴信息删除成功', 'orient/partner_list');
					
					
				}else{
					
					redirect('orient/partner_list');
					
				}
			
			}else{
			
				echo $this->stop;
			
			}
			
		}
		
		
		
		
		
		
		//上传文件
		function file_list(){

			if($this->session->userdata('user')){
		
				$data=$this->p_fenye('file', 'orient/file_list', 10, 'sort desc, addtime desc');
				
				$this->load->view('admin/file_list',$data);
				
			}else{
			
				echo $this->stop;
			
			}	
			
		}	
		
		function file_add(){
			
			if($this->session->userdata('user')){
			
				$this->form_validation->set_rules('name','文档名','required|max_length[50]');
				$this->form_validation->set_rules('author','作者','required|max_length[20]');
				$this->form_validation->set_rules('star','推荐指数','required');
				$this->form_validation->set_rules('sort','排序','required');
				
				$data['error']['value']=TRUE;
				$data['error']['error']='';
				$data['error']['type']='';
				$data['error']['size']='';
								
				if($this->form_validation->run()==TRUE):
						
					$data['error']=$this->file_error();
					
				endif;
				
				if($this->form_validation->run()==FALSE || $data['error']['value']==FALSE){
								
					$this->load->view('admin/file_add', $data);
				
				}else{
					
					$file['path']='par_file/';
					$file['file']='file';
					$file['width'] = 200;
					$file['height'] = 70;
					
					$this->load->library('p_file', $file);
					$info=$this->p_file->uploads();
					if($info==FALSE){
						
						redirect('orient/file_add');
						
					}else{
						
						$_POST['file']=$lj=$file['path'].$info['file_name'];
						
						$this->p_file->img($lj);
						
					
						$_POST['addtime']=time();
						$this->p_model->p_insert('file',$_POST);

						$this->success('文档上传信息添加成功','orient/file_add');
						
					}
					
				}

			}else{
			
				echo $this->stop;
			
			}
				
		}

		function file_edit(){

			if($this->session->userdata('user')){
			
				$where['id']=$this->uri->segment(3,0);
				if(isset($_POST['id'])):
				
					$where['id']=$_POST['id'];
				
				endif;
				if($where['id']!=0){
									
					$num=$this->p_model->p_num('file', $where);
					
					if($num!=0){
							
						$this->form_validation->set_rules('name','文档名','required|max_length[50]');
						$this->form_validation->set_rules('author','作者','required|max_length[20]');
						$this->form_validation->set_rules('star','推荐指数','required');
						$this->form_validation->set_rules('sort','排序','required');
												
						$data['error']['value']=TRUE;
						$data['error']['error']='';
						$data['error']['type']='';
						$data['error']['size']='';
																
						if($this->form_validation->run()==TRUE):
		
							if($_FILES['file']['error']==0):
						
								$data['error']=$this->file_error();
							
							endif;	
								
						endif;
						
						if($this->form_validation->run()==FALSE || $data['error']['value']==FALSE){
													
							$data['edit']=$this->p_model->p_where('file',$where);
							
							$this->load->view('admin/file_edit',$data);
							
						}else{
							
							if($_FILES['file']['error']==0):
							
								$file['path']='par_file/';
								$file['file']='file';
								$file['width'] = 200;
								$file['height'] = 70;
															
								$this->load->library('p_file', $file);
								$info=$this->p_file->uploads();
								if($info==FALSE){
									
									redirect('orient/file_list');
								
								}else{
									
									$img=$this->p_model->p_where('file', $where);
									unlink($img->file);
									
									$_POST['file']=$lj=$file['path'].$info['file_name'];
										
									$this->p_file->img($lj);							
									
								}	
									
							endif;

							array_splice($_POST, 0, 1);														
							
							$this->p_model->p_update('file',$where,$_POST);
							
							$this->success('文档上传信息更新成功','orient/file_list');
							
						}
					}else{
						
						redirect('orient/file_list');
						
					}
					
				}else{
					
					redirect('orient/file_list');
					
				}
			
			}else{
			
				echo $this->stop;
			
			}
						
		}
		
		function del_file(){
			
			if($this->session->userdata('user')){

				if(isset($_POST['checkbox'])){
					
					while(list($key,$value)=each($_POST['checkbox'])){
							
						$where['id']=$value;
						$info=$this->p_model->p_where('file', $where);
						unlink($info->file);
																		
						$this->p_model->p_delete('file', $where);			
				
					}
						
					$this->success('文档上传信息删除成功', 'orient/file_list');
					
					
				}else{
					
					redirect('orient/file_list');
					
				}
			
			}else{
			
				echo $this->stop;
			
			}
			
		}

		function delo_file(){
			
			if($this->session->userdata('user')){

				$where['id']=$this->uri->segment(3,0);
				if($where['id']!=0){
									
					$num=$this->p_model->p_num('file', $where);
					
					if($num!=0){
											
						$info=$this->p_model->p_where('file', $where);
						unlink($info->file);
																		
						$this->p_model->p_delete('file', $where);			
				
					}
						
					$this->success('文档上传信息删除成功', 'orient/file_list');
					
					
				}else{
					
					redirect('orient/file_list');
					
				}
			
			}else{
			
				echo $this->stop;
			
			}
			
		}
		
		
		//上传文件结束
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		function company_info(){
			
			if($this->session->userdata('user')){

				$data['array'] = array('advisory'=>'顾问寄语', 'intro'=>'公司简介', 'structure'=>'组织架构', 'culture'=>'企业文化', 'hushiming'=>'说胡世明');
				
				$data['what'] = $this->uri->segment(3, 0); 
				if(isset($_POST['what'])):
				
					$data['what'] = $_POST['what'];
				
				endif;
				
				if($data['what'] !== 0){
				
					$select = "id, ".$data['what'];
					
					$this->form_validation->set_rules($data['what'], $data['array'][$data['what']], 'required');
								
					if($this->form_validation->run()==FALSE){
					
						$data['edit'] = $this->p_model->p_s_one('company', $select);
					
						$this->load->view('admin/company_info', $data);
						
					}else{
						
						$where['id']=$_POST['id'];
						
						array_splice($_POST, 0, 1);
						
						$info = $this->p_model->p_s_one_w('company', $select, $where);
						$config['old'] = $info->$data['what'];
						$config['content'] = $_POST[$data['what']];
						$this->load->library('p_img', $config);
						$this->p_img->p_upimg();
						
						$this->p_model->p_update('company', $where, $_POST);
						
						$this->success($data['array'][$data['what']].'信息更新成功', 'orient/company_info/'.$data['what']);
						
					}
				
				}else{
					
					redirect('orient/welcome');
					
				}
				
			}else{
				
				echo $this->stop;
				
			}
			
		}
		
		function expert_list(){

			if($this->session->userdata('user')){
		
				$data=$this->p_fenye('expert', 'orient/expert_list', 5, 'sort desc');
				
				$this->load->view('admin/expert_list',$data);
				
			}else{
			
				echo $this->stop;
			
			}	
			
		}	
		
		function expert_add(){
			
			if($this->session->userdata('user')){
								
				$this->form_validation->set_rules('name','姓名','required');
				$this->form_validation->set_rules('content','介绍','required');
				$this->form_validation->set_rules('sort','排序','required');
				
				$data['error']['value']=TRUE;
				$data['error']['error']='';
				$data['error']['type']='';
				$data['error']['size']='';
								
				if($this->form_validation->run()==TRUE):
						
					$data['error']=$this->file_error();
					
				endif;
				
				if($this->form_validation->run()==FALSE){
					
					$this->load->view('admin/expert_add', $data);
					
				}else{
					
					$file['path']='e_file/';
					$file['file']='file';
					$file['width'] = 271;
					$file['height'] = 308;
					
					$this->load->library('p_file', $file);
					$info=$this->p_file->uploads();
					if($info==FALSE){
						
						redirect('orient/expert_add');
						
					}else{
						
						$_POST['img']=$lj=$file['path'].$info['file_name'];
						
						$this->p_file->img($lj);
						
						$this->p_model->p_insert('expert', $_POST);

						$this->success('专家团队信息添加成功','orient/expert_add');
						
					}
					
				}
				
			}else{
				
				echo $this->stop;
				
			}
			
		}
		
		function expert_edit(){

			if($this->session->userdata('user')){
			
				$where['id']=$this->uri->segment(3,0);
				if(isset($_POST['id'])):
				
					$where['id']=$_POST['id'];
				
				endif;
				if($where['id']!=0){
									
					$num=$this->p_model->p_num('expert', $where);
					
					if($num!=0){
							
						$this->form_validation->set_rules('name','姓名','required');
						$this->form_validation->set_rules('content','介绍','required');
						$this->form_validation->set_rules('sort','排序','required');
						
						$data['error']['value']=TRUE;
						$data['error']['error']='';
						$data['error']['type']='';
						$data['error']['size']='';
																
						if($this->form_validation->run()==TRUE):
		
							if($_FILES['file']['error']==0):
						
								$data['error']=$this->file_error();
							
							endif;	
								
						endif;
						
						if($this->form_validation->run()==FALSE || $data['error']['value']==FALSE){
													
							$data['edit']=$this->p_model->p_where('expert',$where);
							
							$this->load->view('admin/expert_edit',$data);
							
						}else{
							
							if($_FILES['file']['error']==0):
							
								$file['path']='e_file/';
								$file['file']='file';
								$file['width'] = 271;
								$file['height'] = 308;
															
								$this->load->library('p_file', $file);
								$info=$this->p_file->uploads();
								if($info==FALSE){
									
									redirect('orient/expert_list');
								
								}else{
									
									$img=$this->p_model->p_where('expert', $where);
									unlink($img->img);
									
									$_POST['img']=$lj=$file['path'].$info['file_name'];
										
									$this->p_file->img($lj);							
									
								}	
									
							endif;

							array_splice($_POST, 0, 1);														
							
							$this->p_model->p_update('expert', $where, $_POST);
							
							$this->success('专家团队信息更新成功','orient/expert_list');
							
						}
					}else{
						
						redirect('orient/expert_list');
						
					}
					
				}else{
					
					redirect('orient/expert_list');
					
				}
			
			}else{
			
				echo $this->stop;
			
			}
						
		}
		
		function del_expert(){
			
			if($this->session->userdata('user')){

				if(isset($_POST['checkbox'])){
					
					while(list($key,$value)=each($_POST['checkbox'])){
							
						$where['id']=$value;
						$info=$this->p_model->p_where('expert', $where);
						unlink($info->img);
																		
						$this->p_model->p_delete('expert', $where);			
				
					}
						
					$this->success('专家团队信息删除成功', 'orient/expert_list');
					
					
				}else{
					
					redirect('orient/expert_list');
					
				}
			
			}else{
			
				echo $this->stop;
			
			}
			
		}

		function delo_expert(){
			
			if($this->session->userdata('user')){

				$where['id']=$this->uri->segment(3,0);
				if($where['id']!=0){
									
					$num=$this->p_model->p_num('expert', $where);
					
					if($num!=0){
											
						$info=$this->p_model->p_where('expert', $where);
						unlink($info->img);
																		
						$this->p_model->p_delete('expert', $where);			
				
					}
						
					$this->success('专家团队信息删除成功', 'orient/expert_list');
					
					
				}else{
					
					redirect('orient/expert_list');
					
				}
			
			}else{
			
				echo $this->stop;
			
			}
			
		}
		
		function talent_list(){

			if($this->session->userdata('user')){
		
				$data = $this->p_fenye('talent', 'orient/talent_list', 10, 'sort desc, addtime desc');
				
				$this->load->view('admin/talent_list',$data);
				
			}else{
			
				echo $this->stop;
			
			}	
			
		}	
		
		function talent_add(){
			
			if($this->session->userdata('user')){
				
				$this->form_validation->set_rules('name','职位名称','required');
				$this->form_validation->set_rules('address','工作地点','required');
				$this->form_validation->set_rules('exp','工作年限','required');
				$this->form_validation->set_rules('description','职位描述','required');
				$this->form_validation->set_rules('requirement','岗位要求','required');
				
				if($this->form_validation->run()==FALSE){
				
					$this->load->view('admin/talent_add');
				
				}else{
					
					$_POST['addtime'] = time();
					
					$this->p_model->p_insert('talent', $_POST);
					
					$this->success('人才招聘信息添加成功', 'orient/talent_add');
					
				}
				
			}else{
				
				echo $this->stop;
				
			}
			
		}		
		
		function talent_edit(){
			
			if($this->session->userdata('user')){
			
				$where['id']=$this->uri->segment(3,0);
				if(isset($_POST['id'])):
				
					$where['id']=$_POST['id'];
				
				endif;
				if($where['id']!=0){
									
					$num=$this->p_model->p_num('talent', $where);
					
					if($num!=0){
						
						$this->form_validation->set_rules('name','职位名称','required');
						$this->form_validation->set_rules('address','工作地点','required');
						$this->form_validation->set_rules('exp','工作年限','required');
						$this->form_validation->set_rules('description','职位描述','required');
						$this->form_validation->set_rules('requirement','岗位要求','required');
						$this->form_validation->set_rules('sort','排序','required');
						
						if($this->form_validation->run()==FALSE){
						
							$data['edit'] = $this->p_model->p_where('talent', $where);
							
							$this->load->view('admin/talent_edit', $data);
						
						}else{
							
							array_splice($_POST, 0, 1);
							
							$this->p_model->p_update('talent', $where, $_POST);
							
							$this->success('人才招聘信息更新成功', 'orient/talent_list');
							
						}						
						
					}else{
						
						redirect('orient/talent_list');
						
					}
					
				}else{
					
					redirect('orient/talent_list');
					
				}
				
			}else{
				
				echo $this->stop;
				
			}
			
		}
		
		function del_talent(){
			
			if($this->session->userdata('user')){

				if(isset($_POST['checkbox'])){
					
					while(list($key,$value)=each($_POST['checkbox'])){
							
						$where['id']=$value;
						
						$this->p_model->p_delete('talent', $where);			
				
					}
						
					$this->success('人才招聘信息删除成功', 'orient/talent_list');
					
					
				}else{
					
					redirect('orient/talent_list');
					
				}
			
			}else{
			
				echo $this->stop;
			
			}
			
		}

		function delo_talent(){
			
			if($this->session->userdata('user')){

				$where['id']=$this->uri->segment(3,0);
				if($where['id']!=0){
									
					$num=$this->p_model->p_num('talent', $where);
					
					if($num!=0){
																													
						$this->p_model->p_delete('talent', $where);			
				
					}
						
					$this->success('人才招聘信息删除成功', 'orient/talent_list');
					
					
				}else{
					
					redirect('orient/talent_list');
					
				}
			
			}else{
			
				echo $this->stop;
			
			}
			
		}
		
		function contact(){
			
			if($this->session->userdata('user')){
				
				$this->form_validation->set_rules('tel','电话','required');
				$this->form_validation->set_rules('service','客服','required');
				$this->form_validation->set_rules('qq','QQ','required');
				$this->form_validation->set_rules('email','邮箱','required');
				$this->form_validation->set_rules('copyright','版权','required');
				$this->form_validation->set_rules('address','地址','required');
				$this->form_validation->set_rules('map','地图','required');
							
				if($this->form_validation->run()==FALSE){
				
					$data['contact']=$this->p_model->p_one('company');
				
					$this->load->view('admin/contact', $data);
					
				}else{
					
					$where['id']=$_POST['id'];
					
					array_splice($_POST, 0, 1);
					
					$this->p_model->p_update('company', $where, $_POST);
					
					$this->success('联系我们信息更新成功', 'orient/contact');
					
				}
				
			}else{
				
				echo $this->stop;
				
			}
							
		}
		
		function link_list(){

			if($this->session->userdata('user')){
		
				$data=$this->p_fenye('link', 'orient/link_list', 10, 'sort desc, addtime desc');
				
				$this->load->view('admin/link_list',$data);
				
			}else{
			
				echo $this->stop;
			
			}	
			
		}	
		
		function link_add(){
			
			if($this->session->userdata('user')){
			
				$this->form_validation->set_rules('name','名称','required|max_length[20]');
				$this->form_validation->set_rules('url','地址','required|');
				$this->form_validation->set_rules('sort','排序','required');
				
				if($this->form_validation->run()==FALSE){
								
					$this->load->view('admin/link_add');
				
				}else{
					
					$_POST['addtime']=time();
					$this->p_model->p_insert('link',$_POST);

					$this->success('友情链接信息添加成功','orient/link_add');
						
				}

			}else{
			
				echo $this->stop;
			
			}
				
		}

		function link_edit(){

			if($this->session->userdata('user')){
			
				$where['id']=$this->uri->segment(3,0);
				if(isset($_POST['id'])):
				
					$where['id']=$_POST['id'];
				
				endif;
				if($where['id']!=0){
									
					$num=$this->p_model->p_num('link', $where);
					
					if($num!=0){
							
						$this->form_validation->set_rules('name','名称','required|max_length[20]');
						$this->form_validation->set_rules('url','地址','required|');
						$this->form_validation->set_rules('sort','排序','required');
												
						if($this->form_validation->run()==FALSE){
													
							$data['edit']=$this->p_model->p_where('link',$where);
							
							$this->load->view('admin/link_edit',$data);
							
						}else{
							
							array_splice($_POST, 0, 1);														
							
							$this->p_model->p_update('link',$where,$_POST);
							
							$this->success('友情链接信息更新成功','orient/link_list');
							
						}
					}else{
						
						redirect('orient/link_list');
						
					}
					
				}else{
					
					redirect('orient/link_list');
					
				}
			
			}else{
			
				echo $this->stop;
			
			}
						
		}
		
		function del_link(){
			
			if($this->session->userdata('user')){

				if(isset($_POST['checkbox'])){
					
					while(list($key,$value)=each($_POST['checkbox'])){
							
						$where['id']=$value;
																		
						$this->p_model->p_delete('link', $where);			
				
					}
						
					$this->success('友情链接信息删除成功', 'orient/link_list');
					
					
				}else{
					
					redirect('orient/link_list');
					
				}
			
			}else{
			
				echo $this->stop;
			
			}
			
		}

		function delo_link(){
			
			if($this->session->userdata('user')){

				$where['id']=$this->uri->segment(3,0);
				if($where['id']!=0){
									
					$num=$this->p_model->p_num('link', $where);
					
					if($num!=0){
																													
						$this->p_model->p_delete('link', $where);			
				
					}
						
					$this->success('友情链接信息删除成功', 'orient/link_list');
					
					
				}else{
					
					redirect('orient/link_list');
					
				}
			
			}else{
			
				echo $this->stop;
			
			}
			
		}
		
		function industry(){
			
			if($this->session->userdata('user')){

				$data['array'] = array('intro'=>'营销力策划简介', 'diy_intro'=>'自定义营销力策划简介','model'=>'营销力策划模型', 'agriculture'=>'农资企业营销力策划', 'alcohol'=>'农产品企业营销力策划', 'tea'=>'酒水企业营销力策划', 'health'=>'创意农业营销策划', 'food'=>'建材家居营销策划', 'fast'=>'服装鞋帽行业策划', 'build'=>'食品饮料营销力策划', 'other'=>'定制模式企业策划');
				
				$data['what'] = $this->uri->segment(3, 0); 
				if(isset($_POST['what'])):
				
					$data['what'] = $_POST['what'];
				
				endif;
				
				if($data['what'] !== 0){
				
					$select = "id, ".$data['what'];
					
					$this->form_validation->set_rules($data['what'], $data['array'][$data['what']], 'required');
								
					if($this->form_validation->run()==FALSE){
					
						$data['edit'] = $this->p_model->p_s_one('industry', $select);
					
						$this->load->view('admin/industry', $data);
						
					}else{
						
						$where['id']=$_POST['id'];
						
						array_splice($_POST, 0, 1);
						
						$info = $this->p_model->p_s_one_w('industry', $select, $where);
						$config['old'] = $info->$data['what'];
						$config['content'] = $_POST[$data['what']];
						$this->load->library('p_img', $config);
						$this->p_img->p_upimg();
						
						$this->p_model->p_update('industry', $where, $_POST);
						
						$this->success($data['array'][$data['what']].'信息更新成功', 'orient/industry/'.$data['what']);
						
					}
				
				}else{
					
					redirect('orient/welcome');
					
				}
				
			}else{
				
				echo $this->stop;
				
			}
			
		}
		
		function training(){
			
			if($this->session->userdata('user')){

				$data['array'] = array('intro'=>'营销力培训简介', 'president'=>'总裁营销力', 'team'=>'团队营销力', 'network'=>'网络营销力', 'product'=>'产品营销力', 'other'=>'企业营销力内训', 'plan'=>'营销力策划');
				
				$data['what'] = $this->uri->segment(3, 0); 
				if(isset($_POST['what'])):
				
					$data['what'] = $_POST['what'];
				
				endif;
				
				if($data['what'] !== 0){
				
					$select = "id, ".$data['what'];
					
					$this->form_validation->set_rules($data['what'], $data['array'][$data['what']], 'required');
								
					if($this->form_validation->run()==FALSE){
					
						$data['edit'] = $this->p_model->p_s_one('training', $select);
					
						$this->load->view('admin/training', $data);
						
					}else{
						
						$where['id']=$_POST['id'];
						
						array_splice($_POST, 0, 1);
						
						$info = $this->p_model->p_s_one_w('training', $select, $where);
						$config['old'] = $info->$data['what'];
						$config['content'] = $_POST[$data['what']];
						$this->load->library('p_img', $config);
						$this->p_img->p_upimg();
						
						$this->p_model->p_update('training', $where, $_POST);
						
						$this->success($data['array'][$data['what']].'信息更新成功', 'orient/training/'.$data['what']);
						
					}
				
				}else{
					
					redirect('orient/welcome');
					
				}
				
			}else{
				
				echo $this->stop;
				
			}
			
		}

		function idea(){
			
			if($this->session->userdata('user')){

				$data['array'] = array('thought'=>'思想体系', 'core_value'=>'核心价值', 'expert'=>'专家专栏');
				
				$data['what'] = $this->uri->segment(3, 0); 
				if(isset($_POST['what'])):
				
					$data['what'] = $_POST['what'];
				
				endif;
				
				if($data['what'] !== 0){
				
					$select = "id, ".$data['what'];
					
					$this->form_validation->set_rules($data['what'], $data['array'][$data['what']], 'required');
								
					if($this->form_validation->run()==FALSE){
					
						$data['edit'] = $this->p_model->p_s_one('idea', $select);
					
						$this->load->view('admin/idea', $data);
						
					}else{
						
						$where['id']=$_POST['id'];
						
						array_splice($_POST, 0, 1);
						
						$info = $this->p_model->p_s_one_w('idea', $select, $where);
						$config['old'] = $info->$data['what'];
						$config['content'] = $_POST[$data['what']];
						$this->load->library('p_img', $config);
						$this->p_img->p_upimg();
						
						$this->p_model->p_update('idea', $where, $_POST);
						
						$this->success($data['array'][$data['what']].'信息更新成功', 'orient/idea/'.$data['what']);
						
					}
				
				}else{
					
					redirect('orient/welcome');
					
				}
				
			}else{
				
				echo $this->stop;
				
			}
			
		}
		
		function cooperation(){
			
			if($this->session->userdata('user')){

				$data['array'] = array('cooperate'=>'零风险合作', 'process'=>'服务流程', 'commitment'=>'我们的承诺');
				
				$data['what'] = $this->uri->segment(3, 0); 
				if(isset($_POST['what'])):
				
					$data['what'] = $_POST['what'];
				
				endif;
				
				if($data['what'] !== 0){
				
					$select = "id, ".$data['what'];
					
					$this->form_validation->set_rules($data['what'], $data['array'][$data['what']], 'required');
								
					if($this->form_validation->run()==FALSE){
					
						$data['edit'] = $this->p_model->p_s_one('cooperation', $select);
					
						$this->load->view('admin/cooperation', $data);
						
					}else{
						
						$where['id']=$_POST['id'];
						
						array_splice($_POST, 0, 1);
						
						$info = $this->p_model->p_s_one_w('cooperation', $select, $where);
						$config['old'] = $info->$data['what'];
						$config['content'] = $_POST[$data['what']];
						$this->load->library('p_img', $config);
						$this->p_img->p_upimg();
						
						$this->p_model->p_update('cooperation', $where, $_POST);
						
						$this->success($data['array'][$data['what']].'信息更新成功', 'orient/cooperation/'.$data['what']);
						
					}
				
				}else{
					
					redirect('orient/welcome');
					
				}
				
			}else{
				
				echo $this->stop;
				
			}
			
		}
		
		
		function careers(){
			
			if($this->session->userdata('user')){

				$data['array'] = array('careers'=>'招贤纳士', 'growth'=>'成长路径');
				
				$data['what'] = $this->uri->segment(3, 0); 
				if(isset($_POST['what'])):
				
					$data['what'] = $_POST['what'];
				
				endif;
				
				if($data['what'] !== 0){
				
					$select = "id, ".$data['what'];
					
					$this->form_validation->set_rules($data['what'], $data['array'][$data['what']], 'required');
								
					if($this->form_validation->run()==FALSE){
					
						$data['edit'] = $this->p_model->p_s_one('careers', $select);
					
						$this->load->view('admin/careers', $data);
						
					}else{
						
						$where['id']=$_POST['id'];
						
						array_splice($_POST, 0, 1);
						
						$info = $this->p_model->p_s_one_w('careers', $select, $where);
						$config['old'] = $info->$data['what'];
						$config['content'] = $_POST[$data['what']];
						$this->load->library('p_img', $config);
						$this->p_img->p_upimg();
						
						$this->p_model->p_update('careers', $where, $_POST);
						
						$this->success($data['array'][$data['what']].'信息更新成功', 'orient/careers/'.$data['what']);
						
					}
				
				}else{
					
					redirect('orient/welcome');
					
				}
				
			}else{
				
				echo $this->stop;
				
			}
			
		}
		
		
		function strategy(){
			
			if($this->session->userdata('user')){

				$data['array'] = array('strategy'=>'战略投融资','activity'=>'首页活动');
				
				$data['what'] = $this->uri->segment(3, 0); 
				if(isset($_POST['what'])):
				
					$data['what'] = $_POST['what'];
				
				endif;
				
				if($data['what'] !== 0){
				
					$select = "id, ".$data['what'];
					
					$this->form_validation->set_rules($data['what'], $data['array'][$data['what']], 'required');
								
					if($this->form_validation->run()==FALSE){
					
						$data['edit'] = $this->p_model->p_s_one('strategy', $select);
					
						$this->load->view('admin/strategy', $data);
						
					}else{
						
						$where['id']=$_POST['id'];
						
						array_splice($_POST, 0, 1);
						
						$info = $this->p_model->p_s_one_w('strategy', $select, $where);
						$config['old'] = $info->$data['what'];
						$config['content'] = $_POST[$data['what']];
						$this->load->library('p_img', $config);
						$this->p_img->p_upimg();
						
						$this->p_model->p_update('strategy', $where, $_POST);
						
						$this->success($data['array'][$data['what']].'信息更新成功', 'orient/strategy/'.$data['what']);
						
					}
				
				}else{
					
					redirect('orient/welcome');
					
				}
				
			}else{
				
				echo $this->stop;
				
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
			$data['admin'] = $this->p_model->fy_info($form, $info);
			
			return $data;
			
		}
		
		function p_w_fenye($form, $url, $where, $size, $order){
			
			
			$fy['url'] = $url;
			$fy['total'] = $data['total'] = $this->p_model->p_w_num($form, $where);
			$fy['size'] = $data['size'] =$info['size'] = $size;
			$fy['uri'] = 3;
			$this->load->library('p_fy', $fy);
			$data['fy'] = $this->p_fy->fy();
			$info['start'] = $data['start'] = $this->uri->segment(3, 0);
			$info['order'] = $order;
			$data['admin'] = $this->p_model->fy_w_info($form, $where, $info);
			
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
		
		function file_error(){
			
			$error['value']=TRUE;
			$error['error']='';
			$error['type']='';
			$error['size']='';
			
			if($_FILES['file']['error']>0){
			
				$error['error']='请选择所要上传的图片';
				$error['value']=FALSE;
			
			}else{
				
				if(in_array($_FILES['file']['type'], $this->type)==FALSE):
				
					$error['type']='图片格式错误';
					$error['value']=FALSE;
				
				endif;
			
				if($_FILES['file']['size']>1048576):
				
					$error['size']='图片过大';
					$error['value']=FALSE;
				
				endif;
				
			}	
				
			return $error;
			
		}
		
		function success($title,$url){
			
			$success['title']=$title;
			$success['url']=base_url($url);
						
			$this->load->view('admin/success',$success);			
			
		}
		
		protected function class_arr($form){
			
			$class = $this->p_model->p_select_order($form, 'sort desc, cid asc');
			
			foreach ($class as $class_i):
			
				$arr[$class_i->cid] = $class_i->name;
			
			endforeach;
			
			return $arr;
			
		}
		
	}

?>