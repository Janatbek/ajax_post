<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Post');
	}

	public function partial_view()
	{
		$result['posts'] = $this->Post->get_all();
		$this->load->view('partials/post_data', $result);

	}
	public function send_to_db()
	{
		$data = $this->input->post();
		$this->Post->add_posts($data);
		$result["posts"] = $this->Post->get_all();
		$this->load->view("partials/post_data", $result);
	}
	public function index(){
		$this->load->view('ajax');
	}
}
