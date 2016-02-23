<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Profile extends CI_controller {
		function index() {
			$data['view'] = 'freelancer/desc_profile';
			// $data['nav'] = false;
			$data['foot'] = true;

			$this->load->view('index', $data);
		}

		function edit() {
			$data['view'] = 'freelancer/edit_profile';
			// $data['nav'] = false;
			$data['foot'] = true;

			$this->load->view('index', $data);	
		}

		public function proposal() {
			$data['view'] = 'my_proposal';
			// $data['nav'] = false;
			$data['foot'] = true;

			$this->load->view('index', $data);	
		}

		public function details() {
			$data['view'] = 'det_proposal';
			// $data['nav'] = false;
			$data['foot'] = true;

			$this->load->view('index', $data);
		}
	}