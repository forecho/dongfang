<?php
  
    class P_Fy{
          
        protected $url;
        protected $total;
        protected $size;
        protected $se;
        protected $CI;
          
        function __construct($value){
              
            $this->url=$value['url'];
            $this->size=$value['size'];
            $this->total=$value['total'];
            $this->se=$value['uri'];
              
            $this->CI=& get_instance();
              
            $this->CI->load->library('pagination');
              
        }
          
        function fy(){
              
            return $this->page();
              
        }
          
        protected function page(){
              
            $config['base_url']=base_url($this->url);
            $config['total_rows']=$this->total;
            $config['per_page']=$this->size;
            $config['uri_segment']=$this->se;
            $config['num_links']=3;
            $config['first_link']='首页';
            $config['last_link']='尾页';
            $config['prev_link']='上一页';
            $config['next_link']='下一页';
                          
//          $this->CI->load->library('pagination', $config);
              
            $this->CI->pagination->initialize($config);
              
            return $this->CI->pagination->create_links();
              
        }
          
    }
  
?>