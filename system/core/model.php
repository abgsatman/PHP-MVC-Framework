<?php

class MODEL extends CONTROLLER {
	
	public function __construct( $views = NULL ) {
		
		parent::__construct();
		
		foreach($views as $viewsEach) {
			
			$this->load->view($viewsEach);
			
		}
		
		
	}
}
?>