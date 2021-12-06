<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Total_mk_konsorsium extends CI_Controller {

	public function index()
	{
		$data['segment'] = $this->uri->segment(2);
        $data['payload'] = $this->Data_dashboard->init_total_mk_konsorsium()->result();
		$this->load->view('dashboard/total_mk_konsorsium.php',$data);
	}
}
