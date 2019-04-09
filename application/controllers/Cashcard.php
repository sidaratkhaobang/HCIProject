<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cashcard extends CI_Controller {


	public function index()
	{
		$this->load->view('template/headmenuhome');
		$this->load->view('home_menu/cashcard/cashcard');
	}
}
