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
	public function DonasiOffline()
	{
		$this->load->view('header');
		$this->load->view('Campaign/DonasiOffline');
		//$this->load->view('footer');
	}
	public function TambahDonasiOffline()
	{
		$this->load->view('header');
		$this->load->view('Campaign/TambahDonasiOffline');
		//$this->load->view('footer');
	}
	public function ListFundraiser()
	{
		$this->load->view('header');
		$this->load->view('Campaign/ListFundraiser');
		//$this->load->view('footer');
	}
}
