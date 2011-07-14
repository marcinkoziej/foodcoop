/* -*- php -*- */

define('REGULAR_USER', '0');
define('COORDINATOR_USER', '1');
define('ADMIN_USER', '2');

class User extends CI_Model {
  var $username = '';
  var $password = '';
  var $coop = null;
  var $role = $REGULAR;

  function __construct()
  {
    parent::__construct();
  }

};
