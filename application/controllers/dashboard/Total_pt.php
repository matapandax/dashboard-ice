<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Total_pt extends CI_Controller {

	public function index()
	{
		$data['segment'] = $this->uri->segment(2);
        $data['konsorsium'] = $this->Data_dashboard->init_total_pt_konsorsium()->result();
        $data['nonkonsorsium'] = $this->Data_dashboard->init_total_pt_nonkonsorsium()->result();
		$this->load->view('dashboard/total_pt.php',$data);
	}
}
