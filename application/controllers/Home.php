<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$this->load->view('home/home');
	}

	public function homenotlogin()
	{
		$this->load->view('home/homenotlogin');
	}
	
}
