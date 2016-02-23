<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Register extends CI_controller {
		function index() {
			$data['view'] = 'register/register';
			$data['nav'] = 'navbar_register';
			$data['foot'] = true;

			$this->load->view('index', $data);
		}

		function client() {
			$data['view'] = 'register/client_register';
			$data['nav'] = 'navbar_register';
			$data['foot'] = true;

			$this->load->view('index', $data);
		}

		function daftar() {
			$data['view'] = 'register/daftar';
			$data['nav'] = 'navbar_register';
			$data['foot'] = true;

			$this->load->view('index', $data);	
		}

		function reg() {
			$data['view'] = 'register/register';
			$data['nav'] = 'navbar_register';
			$data['foot'] = true;

			$this->load->view('index', $data);	
		}

		function regnext() {
			$data['view'] = 'register/second_phase';
			$data['nav'] = 'navbar_register';
			$data['foot'] = true;

			$this->load->view('index', $data);	
		}

		function login() {
			$data['view'] = 'rogin';
			$data['nav'] = 'navbar_register';
			$data['foot'] = true;

			$this->load->view('index', $data);	
		}
	}