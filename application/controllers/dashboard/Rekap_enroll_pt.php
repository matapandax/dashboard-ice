<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekap_enroll_pt extends CI_Controller {

	public function index()
	{
		$data['segment'] = $this->uri->segment(2);
        $data['payload'] = $this->Data_dashboard->init_rekap_enroll_pt()->result();
		$this->load->view('dashboard/rekap_enroll_pt.php',$data);

	}

    public function search_mk()
	{
        $mk_institusi = $this->input->post('mk_institusi');
        $mk_diikuti   = $this->input->post('mk_diikuti');
        $pt_pendaftar = $this->input->post('pt_pendaftar');

        $post = array(
            'mk_institusi'  => $mk_institusi,
            'mk_diikuti'    => $mk_diikuti,
            'pt_pendaftar'  => $pt_pendaftar
        );
        
        $data['segment'] = $this->uri->segment(2);
        $data['payload'] = $this->Data_dashboard->get_rekap_enroll_pt($post)->result();
		$this->load->view('dashboard/rekap_enroll_pt.php',$data);

	}
}
