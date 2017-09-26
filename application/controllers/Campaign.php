<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campaign extends CI_Controller {


	public function index()
	{
		$this->load->view('header');
		
		$this->load->view('Campaign/index');

	}

	public function UpdateCampaign()
	{
		$this->load->view('header');
		$this->load->view('Campaign/UpdateCampaign');
		//$this->load->view('footer');
	}
	public function ListDonatur()
	{
		$this->load->view('header');
		$this->load->view('Campaign/ListDonatur');
		//$this->load->view('footer');
	}
	public function MyInfo()
	{
		$this->load->view('header');
		$this->load->view('Profile/Campaign/MyInfo');
		//$this->load->view('footer');
	}
	public function EditPass()
	{
		$this->load->view('header');
		$this->load->view('Profile/Campaign/EditPass');
		//$this->load->view('footer');
	}
	public function VerifyAkun()
	{
		$this->load->view('header');
		$this->load->view('Profile/Campaign/VerifyAkun');
		//$this->load->view('footer');
	}
		public function VerifyCommunity()
	{
		$this->load->view('header');
		$this->load->view('Profile/Campaign/VerifyCommunity');
		//$this->load->view('footer');
	}

	public function EditProfilePic()
	{
		$this->load->view('header');
		$this->load->view('Profile/EditProfilePic');
		//$this->load->view('footer');
	}
}
