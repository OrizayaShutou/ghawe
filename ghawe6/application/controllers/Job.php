<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Job extends CI_controller {
		function index() {
			$data['view'] = 'job/job_list';
			// $data['nav'] = false;
			$data['foot'] = true;

			$this->load->view('index', $data);
		}

		function desc() {
			$data['view'] = 'job/desc_job';
			// $data['nav'] = false;
			$data['foot'] = true;

			$this->load->view('index', $data);
		}

		function proposal() {
			$data['view'] = 'freelancer/sbmt_prop';
			// $data['nav'] = false;
			$data['foot'] = true;

			$this->load->view('index', $data);	
		}

		function create() {
			$data['view'] = 'client/job_create';
			// $data['nav'] = false;
			$data['foot'] = true;

			$this->load->view('index', $data);	
		}
	}