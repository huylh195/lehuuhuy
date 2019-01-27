<?php 
	/**
	* 
	*/
	class DbModel 
	{
		public function connect(){
			$this->con = mysqli_connect('localhost', 'root', '', 'project');
        if(!$this->con){
            echo 'ket noi that bai';
            exit();
        }
        else{
            mysqli_set_charset($this->con, 'utf8');
            
        	}
        	return $this->con;
		}
		
	}
 ?>