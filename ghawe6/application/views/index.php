<?php
if(isset($nav)) 
	$this->load->view('template/' . $nav);
else
	$this->load->view('template/navbar_uni');


	$this->load->view($view);
	if ($foot) {
		$this->load->view('template/footer');
	}

?>