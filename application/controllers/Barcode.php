<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barcode extends CI_Controller {


	public function index()
	{
		$this->load->view('Barcode/Barcode');
	}
}
