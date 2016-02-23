<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Home extends CI_controller {
		function index() {
			$data['view'] = 'body';
			//$data['pagetitle'] = "WELCOME to ghawee";
			$data['nav'] = 'navbar';
			$data['foot'] = true;

			$this->load->view('index', $data);
		}
	}