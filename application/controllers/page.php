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
			'title' => 'title',
			'slug' => 'title',
			'order' => '2',
			'body' => 'This is the new body'
		);
		$id = $this->page_m->save($data);
		var_dump($id);
	}

	public function delete() {
		$this->page_m->delete(4);
	}
}
