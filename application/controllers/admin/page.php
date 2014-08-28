<?php

class Page extends Frontend_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("page_m");
	}

	public function index() {
		$pages = $this->page_m->get_by(array('slug' => '/'));
		var_dump($pages);
	}

	public function save() {
		$data = array(
			'body' => 'This is the new body',
		);
		$id = $this->page_m->save($data, 3);
		var_dump($id);
	}
}
