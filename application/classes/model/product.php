<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Product extends ORM {

    protected $_belongs_to = array(
            'category' => array(),
        );
    
    public function  __construct($id = NULL) {
        parent::__construct($id);
    }
}
?>
