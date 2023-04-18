<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		if(ENVIRONMENT == 'development'){
			$url = 'http://127.0.0.1:8000';
		} elseif(ENVIRONMENT == 'production') {
			$url = 'https://kaliandiundang.com';
		}
		redirect($url, 'refresh');
	}

	public function getUndangan()
	{

		if(ENVIRONMENT == 'development'){
			$url = 'http://127.0.0.1:8000';
		} elseif(ENVIRONMENT == 'production') {
			$url = 'https://kaliandiundang.com';
		}

		$slug = $this->uri->segment(1);
        if($slug){
			$curl = curl_init();
			curl_setopt_array($curl, array(
				CURLOPT_URL => $url.'/api/wedding-data/?slug='.$slug,
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
			$resApi = json_decode($response, true);

			if($resApi['error'] == true){
				redirect($url, 'refresh');
			} else {
				$data = [
					'response'	=> $resApi,
					'to'		=> $this->input->get('to')	
				];
				$this->load->view($resApi['template'], $data);
			}

        }
	}


}
