<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{		
		$this->load->library('facebook');

		$data['login_url'] = $this->facebook->get_login_url();
		$data['user_me'] =  $this->facebook->get_user();
		$data['logout_url'] = $this->facebook->get_logout_url();
		
		$this->load->view('welcome_message',$data);
             
	}

}

