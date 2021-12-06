<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['segment'] = $this->uri->segment(1);
        $this->load->view('home.php',$data);
	}
}
