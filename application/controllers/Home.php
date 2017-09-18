<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{	
		$load="";
		if(!isset($_SESSION['login'])){
			$load = array(
				'login' => FALSE
			);
			
			$this->session->set_userdata( $load );
		}
		//$this->load->model('M_Regis');
		//$load['data'] = $this->M_Regis->getAll("data_properti");
		//$this->load->view('beranda', $load);
		$this->load->view('header', $load);
		$this->load->view('index', $load);
		$this->load->view('footer');
	}

	public function projects()
	{
		$this->load->view('header');
		$this->load->view('projects');
		$this->load->view('footer');
	}

	public function newcampaign()
	{
		$this->load->view('header');
		$this->load->view('newcampaign');
		$this->load->view('footer');
	}

	public function register()
	{
		$this->load->view('header');
		$this->load->view('register');
		$this->load->view('footer');
	}

	public function nofound()
	{
		$this->load->view('header');
		$this->load->view('404');
		$this->load->view('footer');
	}

	public function superqurban()
	{
		$this->load->view('header');
		$this->load->view('superqurban');
		$this->load->view('footer');
	}

	public function ramadhan()
	{
		$this->load->view('header');
		$this->load->view('ramadhan');
		$this->load->view('footer');
	}

	public function about()
	{
		$this->load->view('header');
		$this->load->view('about');
		$this->load->view('footer');
	}

	public function faqs()
	{
		$this->load->view('header');
		$this->load->view('faqs');
		$this->load->view('footer');
	}

	public function donasi()
	{
		$this->load->view('headernoaffix');
		$this->load->view('donasi');
		$this->load->view('footer');
	}

	public function donated()
	{
		$this->load->view('headernoaffix');
		$this->load->view('donated');
		$this->load->view('footer');
	}

	public function profile()
	{
		$this->load->view('header');
		$this->load->view('profile');
		$this->load->view('footer');
	}

	public function campaignpage()
	{
		$this->load->view('headernoaffix');
		$this->load->view('campaignpage');
		$this->load->view('footer');
	}

	public function createcampaign()
	{
		$this->load->view('header');
		$this->load->view('createcampaign');
		$this->load->view('footer');
	}

	public function loginfail()
	{
		$this->load->view('header');
		$this->load->view('loginfail');
		$this->load->view('footer');
	}		

	public function admin()
	{
		$this->load->view('admin/index');
	}
}
