<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Category extends ORM {

    protected $_has_many = array(
            'product' => array(),
        );

    public function  __construct($id = NULL) {
        parent::__construct($id);
    }
}
?>
