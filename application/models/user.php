/* -*- php -*- */

define('REGULAR_USER', '0');
define('COORDINATOR_USER', '1');
define('ADMIN_USER', '2');

class User extends CI_Model {
  public static $fields = array(
				/*				'user_id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => 5, 
                                                 'unsigned' => TRUE,
                                                 'auto_increment' => TRUE
						 ),*/
				'username' => array(
						    'type' => 'VARCHAR',
						    'constraint' => '100',
						    ),
				'password' => array(
						    'type' =>'VARCHAR',
						    'constraint' => '100',
                                          ),
				'coop' => array(
						'type' => 'INT',
                                                 'null' => FALSE,
							    ),
				);

  var $username = '';
  var $password = '';
  var $coop = null;
  var $role = $REGULAR;

  function __construct()
  {
    parent::__construct();
  }

};
