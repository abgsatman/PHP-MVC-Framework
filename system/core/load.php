<?php
class Load {
	
	public function view( $file_name ) {
		
		include( 'application/views/'.$file_name );
	}
	
	public function model( $filename ) {
		
		include( 'application/models/'.$filename );	
	}
}
?>