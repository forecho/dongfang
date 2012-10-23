<?php 

	class P_Img{
		
		public $content;
		public $array_img;
		public $ylqc;
		
		public $old;
		public $before;
		public $un;
		
		public $key;
		public $value;
		
		function __construct($img){
			
			$this->content=$img['content'];
						
			$this->old=$img['old'];
				
			$this->ylqc="/<(img|IMG)(.*)(src|SRC)=[\"|']{0,}([h|\/].*(jpg|JPG|gif|GIF|png|PNG))[\"|'|\s]{0,}/";
			
		}
				
		function p_upimg(){

			preg_match_all($this->ylqc,$this->old,$this->before);
						
			if(count($this->before[4])>0):
			
				preg_match_all($this->ylqc,$this->content,$this->array_img);

				while (list($this->key, $this->value)=each($this->before[4])):
								
					if(count($this->array_img[4])>0){

						if(in_array($this->value,$this->array_img[4])){
									
						}else{

							unlink(substr($this->value, 6));
								
						}
							
					}else{
								
						unlink(substr($this->value, 6));
								
					}
				
				endwhile;
				
 			endif;		
								
		}
		
	}

?>