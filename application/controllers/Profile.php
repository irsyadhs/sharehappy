<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {


	public function index()
	{
		$this->load->view('header');
		$this->load->view('Profile/index');

	}

	public function MyCampaign()
	{
		$this->load->view('header');
		$this->load->view('Profile/MyCampaign');
		//$this->load->view('footer');
	}
	public function MyDonation()
	{
		$this->load->view('header');
		$this->load->view('Profile/MyDonation');
		//$this->load->view('footer');
	}
	public function Setting()
	{
		$this->load->view('header');
		$this->load->view('Profile/Setting');
		//$this->load->view('footer');
	}
}
