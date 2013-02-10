<?php
##############################################################################
######################## DO NOT CHANGE THOSE LINES ###########################
##############################################################################

//displaying errors
ini_set( 'display_errors', 1);

define( 'BASE_PATH',     	dirname( realpath( '../'.__FILE__ ) ) );
define( 'APP_PATH',     	BASE_PATH.'application/' 			  );
define( 'CONTROLLER_PATH',  APP_PATH.'controllers/' 			  );
define( 'SYSTEM_PATH',   	BASE_PATH.'system/' 				  );
define( 'CORE_PATH',     	SYSTEM_PATH.'core/' 				  );
define( 'CONFIG_PATH',   	SYSTEM_PATH.'config/'                 );
define( 'DATABASE_PATH', 	SYSTEM_PATH.'config/'                 );
define( 'HTML_PATH', 	    SYSTEM_PATH.'html/'                   );

//core folder's files 					        
require CORE_PATH.'controller.php';
require CORE_PATH.'load.php';
require CORE_PATH.'model.php';

//config folder's files
require CONFIG_PATH.'config.php';

//controllers's folder files
require CONTROLLER_PATH.'index.php';

//call CONTROLLER class                           
new CONTROLLER;

//call CONFIG class
new CONFIG;

//call MODEL class
#new MODEL;
##############################################################################
######################## DO NOT CHANGE THOSE LINES ###########################
##############################################################################
?>