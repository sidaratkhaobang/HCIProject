<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$this->load->view('template/headhome');
		$this->load->view('home/home');
		$this->load->view('template/footerhome');
	}

	public function homenotlogin()
	{
		$this->load->view('template/headhomelogin');
		$this->load->view('home/homenotlogin');
		$this->load->view('template/footerhomelogin');
		
	}
	
	public function homenotlogout()
	{
		$this->load->view('template/headhome');
		$this->load->view('home/homenotlogout');
		$this->load->view('template/footerhome');
		
	}
}
