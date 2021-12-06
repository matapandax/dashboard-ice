<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('login/index.php');
	}
    
    public function process()
    {
    //     $post = $this->input->post(null,true);
    //     if(isset($post['login'])){
    //         $this->load->model('user_m');
    //         $query =$this->user_m->login($post);
    //     }
    //     if($query->num_row()>0){
    //         echo 'login berhasil';
    //     }else{
    //         echo 'login berhasil';
    //     }
        $this->load->view('dashboard/total_pt.php');
    }
}