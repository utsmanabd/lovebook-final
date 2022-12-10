<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends MY_Controller 
{

    function __construct(){
		parent::__construct();		
		$this->load->model('Landing_m');
    }

	public function index()
	{
		$data['title']	= 'Home';
		$data['content'] = $this->Landing_m->get_product()->result();
		$data['fiksi'] = $this->Landing_m->get_fiksi()->result();
		$data['nonfiksi'] = $this->Landing_m->get_nonfiksi()->result();
		$data['page']	= 'pages/landing/index';
		
		$this->view($data);
	}

	public function about(){
		$data['title'] = 'Tentang Kami';
		$data['page'] = 'pages/landing/about';
		
		$this->view($data);
	}

}