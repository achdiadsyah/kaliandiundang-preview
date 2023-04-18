<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Preview extends CI_Controller {

	public function index()
	{
		redirect('https://kaliandiundang.com', 'refresh');
	}
}
