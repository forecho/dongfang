<?php

	class P_Del{

		public $ylqc;
		
		function __construct(){
			
			$this->ylqc="/<(img|IMG)(.*)(src|SRC)=[\"|']{0,}([h|\/].*(jpg|JPG|gif|GIF|png|PNG))[\"|'|\s]{0,}/";
			
		}
		
		function p_image($content){
			
			preg_match_all($this->ylqc,$content,$array);
			if(count($array[4])>0):
			
				while (list($key, $value)=each($array[4])):
				
					unlink(substr($value, 6));
				
				endwhile;
			
			endif;
			
		}
			
	 }

?>