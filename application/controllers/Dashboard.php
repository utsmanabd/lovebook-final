<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

    public function __construct()
	{
		parent::__construct();
		$this->load->model('Dashboard_m');
		$role = $this->session->userdata('role');
		if ($role != 'admin') {
			redirect(base_url('/'));
			return;
		}
	}

    public function index()
	{
        $data['title'] = "Dashboard";
		$data['order'] = $this->Dashboard_m->get_order()->num_rows();
		$data['user'] = $this->Dashboard_m->get_user()->result();
		$data['product'] = $this->Dashboard_m->get_product()->num_rows();
		$data['fiksi'] = $this->Dashboard_m->get_kategoriFiksi()->num_rows();
		$data['nonfiksi'] = $this->Dashboard_m->get_kategoriNonfiksi()->num_rows();
		$data['buku_terjual'] = $this->Dashboard_m->get_ordersDetail()->num_rows();
		$data['pendapatan'] = $this->db->query("Select SUM(total) as pendapatan from orders where status='delivered' or status='paid'")->row_array();

		$this->load->view('pages/dashboard/header', $data);
        $this->load->view('pages/dashboard/index');
        $this->load->view('pages/dashboard/footer');
	}
}
