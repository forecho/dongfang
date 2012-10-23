<?php

	class P_File{
		
		protected $CI;
		protected $path;
		protected $file;
		protected $width;
		protected $height;
		
		function __construct($value){
			
			$this->path = $value['path'];
			$this->file = $value['file'];
			$this->width = $value['width'];
			$this->height = $value['height'];
			$this->CI = & get_instance();
			
		}
		
		function uploads(){
			
			return $this->file();
			
		}
		
		protected function file(){
			
			$config['upload_path'] = $this->path;
			$config['allowed_types'] = 'pdf|ppt|docx|doc|zip|rar|pptx|jpg';
			$config['max_size'] = 0;
			$config['encrypt_name']=TRUE;
			
			$this->CI->load->library('upload', $config);
			$this->CI->upload->do_upload($this->file);
			
			if($this->CI->upload->display_errors()){
				
				return false;
			
			}else{
				
				return $this->CI->upload->data();
				
			}	
			
		}
		
		function img($image){
			
			$this->img_lib($image);
			
		}
		
		protected function img_lib($lj){
			
			$config['image_library'] = 'gd2';
			$config['source_image'] = $lj;
			$config['create_thumb'] = FALSE;
			$config['maintain_ratio'] = TRUE;
			$config['width'] = $this->width;
			$config['height'] = $this->height;
			
			$this->CI->load->library('image_lib', $config);
			$this->CI->image_lib->resize();
			
		}
		
	}

?>