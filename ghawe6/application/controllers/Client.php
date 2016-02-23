<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Client extends CI_controller {
		function index() {
			$data['view'] = 'client/client_job_list';
			// $data['nav'] = false;
			$data['foot'] = true;

			$this->load->view('index', $data);
		}

		function search() {
			$data['view'] = 'client/freelancer_result';
			// $data['nav'] = false;
			$data['foot'] = true;

			$this->load->view('index', $data);	
		}

		public function choose() {
			$data['view'] = 'client/choose_client';
			// $data['nav'] = false;
			$data['foot'] = true;

			$this->load->view('index', $data);	
		}

		function browse() {
			$data['view'] = 'client/freelancer_browse';
			// $data['nav'] = false;
			$data['foot'] = true;

			$this->load->view('index', $data);	
		}

		function proposals() {
			$data['view'] = 'client/see_proposal';
			// $data['nav'] = false;
			$data['foot'] = true;

			$this->load->view('index', $data);
		}
	}