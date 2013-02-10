<?php
class myController extends CONTROLLER {
	
	public function main() {
		
		$this->load->view( 'header.php' );
		$this->load->view( 'menu.php' );	
		$this->load->view( 'index.php' );
	}
	
	public function userlist() {
		
		$this->load->model( 'userlist.php' );	
	}
	
	public function adduser() {
	
		$this->load->model( 'adduser.php' );	
	}
		
	public function __destruct() {
		
		$this->load->view( 'footer.php' );	
	}
}
?>