<?php

	class p_model extends CI_Model{
		
		function __construct(){
			
			parent::__construct();
			
		}
		
		function p_insert($form,$values){
			
			$this->db->insert($form,$values);
			
		}
		
		function p_select($form){
			
			return $this->db->get($form)->row_array();
			
		}
		
		function sel_banner($form){
			
			return $this->db->get($form)->result();
			
		}
		
		function p_select_order($form, $order){
			
			$this->db->order_by($order);
			
			return $this->db->get($form)->result();
			
		}
		
		
		function fy_n($form){
			
			return $this->db->get($form)->num_rows();
			
		}
		
		function fy_info($form,$value){
			
			$this->db->order_by($value['order']);
			$this->db->limit($value['size'],$value['start']);
			return $this->db->get($form)->result();
			
		}
		
		function p_where($form,$where){
			
			$this->db->where($where);
			return $this->db->get($form)->row();
			
		}
				
		function p_row($form,$where){
			
			$this->db->where($where);
			return $this->db->get($form)->row();
			
		}
		
		function p_update($form,$where,$value){
			
			$this->db->where($where);
			$this->db->update($form,$value);	
			
		}
		
		function p_delete($name,$where){
			
			$this->db->delete($name,$where);
			
		}
		
		function p_one($form){
			
			return $this->db->get($form)->row();
			
		}
				
		function p_limit($form, $order, $limit){
			
			$this->db->order_by($order);
			$this->db->limit($limit);
			return $this->db->get($form)->result();
			
		}
		
		function p_w_limit($form, $where, $order, $limit){
			
			$this->db->where($where);
			$this->db->order_by($order);
			$this->db->limit($limit);
			return $this->db->get($form)->result();
			
		}
		
		function p_num($form,$where){
			
			$this->db->where($where);
			
			return $this->db->get($form)->num_rows();
			
		}		
		
		function p_w_num($form, $where){
			
			if(isset($where['where'])):
			
				$this->db->where($where['where']);
			
			endif;
			if(isset($where['like'])):
			
				$this->db->like($where['like'])	;
			
			endif;
			
			return $this->db->get($form)->num_rows();
			
		}
		
		function fy_w_info($form, $where, $value){
			
			if(isset($where['where'])):
			
				$this->db->where($where['where']);
			
			endif;
			if(isset($where['like'])):
			
				$this->db->like($where['like'])	;
			
			endif;
			
			$this->db->order_by($value['order']);
			$this->db->limit($value['size'],$value['start']);
			
			return $this->db->get($form)->result();
			
		}

		function p_s_one($form, $select){
			
			$this->db->select($select);
			return $this->db->get($form)->row();
			
		}
		
		function p_s_one_w($form, $select, $where){
			
			$this->db->select($select);
			$this->db->where($where);
			return $this->db->get($form)->row();
			
		}
		
		function num_where($form, $where){
			
			$this->db->where($where);
			return $this->db->get($form)->num_rows();
			
		}
		
		function fy_wher($form, $where, $value){
			
			$this->db->where($where);
			$this->db->order_by($value['order']);
			$this->db->limit($value['size'],$value['start']);
			return $this->db->get($form)->result();
			
		}


		function p_last($form,$where,$id){
			
			$this->db->where('id >',$id);
			//$this->db->where($where);
			$this->db->order_by('id','asc');
			$this->db->limit(1);
			return $this->db->get($form)->row();
			
		}
		
		function p_next($form,$where,$id){
			$this->db->where($where);
			$this->db->where('id <',$id);
			
			//
			$this->db->order_by('id','desc');
			$this->db->limit(1);
			return $this->db->get($form)->row();
			
		}		
		
	}

?>