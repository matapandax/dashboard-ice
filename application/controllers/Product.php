<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function index()
	{
        check_not_login();
		$this->load->view('dashboard/product.php');

	}
}
