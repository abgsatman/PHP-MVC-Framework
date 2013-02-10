<?php
class CONTROLLER {
	
	public $load;
	
	public function __construct() {
		
		$this->load = new Load;	
		$this->myIndex();
	}
	
	public function myIndex() {
		
		$url = @$_GET[ 'url' ];
		$url = explode( '/', $url );
		
		foreach( $url as $urlItems ) {
			
			if( $urlItems == NULL) {
				$this->load->view( 'menu.php' );
				$this->load->view( 'index.php' );
				exit();
			}
			else {
			
				foreach( get_class_methods( $this ) as $methods ) {
					
					if($urlItems == $methods) {
					
						$this->$methods();
					}
				}
			}
		}
	}
}
?>