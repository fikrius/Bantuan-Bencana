<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('auth_model');
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function show_sakit_kepala(){

		echo ' 
			<select class="custom-select mb-4" id="pertanyaan">
				<option id="1" value="">Sakit bagian mana?</option>
				<option id="2" value="">Apakah Anda mengalami susah tidur?</option>
				<option id="3" value="">Apakah Anda mengalami pusing?</option>
				<option id="4" value="">Apakah mengalami panas?</option>
			</select>
			
		';

	}