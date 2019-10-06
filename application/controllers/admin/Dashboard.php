<?php
class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
		if(!$this->session->userdata('admin'))
			redirect('admin');
	}
	function index($offset=0)
	{
		$this->load->library('pagination');
		$config['base_url'] = site_url('admin/news/index');
		$config['total_rows'] = $this->news_model->countAll();
		$config['per_page'] = 3;
		$config['reuse_query_string'] = TRUE;
		$this->pagination->initialize($config);
		$data['news'] = $this->news_model->getAll($config['per_page'],$offset);
		$this->load->view('admin/dashboard',$data);
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect('admin');
	}
}