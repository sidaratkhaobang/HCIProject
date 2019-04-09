<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Onlineshopping extends CI_Controller {


	public function index()
	{
		$this->load->view('template/headmenuhome');
		$this->load->view('home_menu/onlineshopping/onlineshopping');
	}
}
