<?php

class Panel extends CI_Controller {

	public function create()
	{
	  $this->load->dbforge();
	  $this->load->model('User');

	  $this->dbforge->add_field(User::fields);
	  $this->dbforge->add_key("user_id");
	  $this->dbforge->create_table('user');
	  echo('test');

	  $this->load->view('panel/db_create');
	  
	}
	public function index()
	{
	  $this->load->view('panel/db_create');
 
	}
}
?>