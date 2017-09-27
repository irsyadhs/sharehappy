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
	public function MyInfo()
	{
		$this->load->view('header');
		$this->load->view('Profile/MyInfo');
		//$this->load->view('footer');
	}
	public function EditPass()
	{
		$this->load->view('header');
		$this->load->view('Profile/EditPass');
		//$this->load->view('footer');
	}
	public function VerifyAkun()
	{
		$this->load->view('header');
		$this->load->view('Profile/VerifyAkun');
		//$this->load->view('footer');
	}
		public function VerifyCommunity()
	{
		$this->load->view('header');
		$this->load->view('Profile/VerifyCommunity');
		//$this->load->view('footer');
	}

	public function EditProfilePic()
	{
		$this->load->view('header');
		$this->load->view('Profile/EditProfilePic');
		//$this->load->view('footer');
	}
}
