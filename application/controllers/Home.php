<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		redirect('https://kaliandiundang.com', 'refresh');
	}

	public function getUndangan()
	{
		$slug = $this->uri->segment(1);
        if($slug){
			$curl = curl_init();
			curl_setopt_array($curl, array(
				CURLOPT_URL => 'https://kaliandiundang.com/api/wedding-data/?slug='.$slug,
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => '',
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 0,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => 'GET',
				CURLOPT_HTTPHEADER => array(
					'X_TOKEN: jpldvKNTA9kqQINcCvI9',
				),
			));

			$response = curl_exec($curl);
			curl_close($curl);
			$resApi = json_decode($response);

			$data = [
				'response'	=> $resApi,
				'to'		=> $this->input->get('to')	
			];

            $this->load->view($resApi->template, $data);
        }
	}


}
