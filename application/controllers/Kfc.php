<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kfc extends CI_Controller {


	public function index()
	{
		$this->load->view('home_menu/kfc/kfc');
	}
}
