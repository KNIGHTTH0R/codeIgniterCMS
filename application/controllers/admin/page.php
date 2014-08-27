<?php

class Page extends Frontend_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("page_m");
	}

	public function index() {
		$pages = $this->page_m->get_by(array('slug' => 'about'));
		var_dump($pages);
	}
}