<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Proses extends CI_Controller {
		public function __construct(){
			parent::__construct();
		}
	
		public function index()
		{
			if(!isset($_SESSION['login'])){
				$load = array(
					'login' => FALSE
				);
				
				$this->session->set_userdata( $load );
			}
			//$this->load->model('M_Regis');
			//$load['data'] = $this->M_Regis->getAll("data_properti");
			//$this->load->view('beranda', $load);
			
			$this->load->view('home', $load);
		}

		public function login(){
			//$this->load->model('M_Regis');
			//LOAD DARI DATABASE
			$userdb = "irsyadharfiansyah@gmail.com";
			$passdb = "hahaha";
			$name = "Irsyad Harfiansyah";
			$tlp = "08111019966";

			$email = $this->input->post('email');
			$pass = $this->input->post('password');
			/*if($this->M_Regis->CheckLogin($user, $pass)==TRUE){
				$data = array(
					'username' => $user,
					'login' => TRUE
				);
				$this->session->set_userdata($data);
				redirect('C_House');
			}*/

			if(($email == $userdb)&&($pass == $passdb)){
				$data = array(
					'email' => $email,
					'tlp' => $tlp,
					'name' => $name,
					'login' => TRUE
				);
				$this->session->set_userdata($data);
				redirect('profile');
			}else{
				$data['message'] = $this->session->set_flashdata('message', 'Sorry, username does not exist or password you entered did not match.');
				redirect('trylogin');
			}
		}

		public function logout(){
			$data = array('login' => FALSE);
			$this->session->set_userdata($data);
			redirect('Home','refresh');

		}

		public function registration(){
			$this->load->model('M_Regis');
			$this->form_validation->set_rules('name', 'name', 'required|max_length[40]');
			$this->form_validation->set_rules('username', 'username', 'required');
			$this->form_validation->set_rules('email', 'email', 'required');
			$this->form_validation->set_rules('telepon', 'telepon', 'required');
			if($this->form_validation->run() == true){
				$nama = $this->input->post('name');
				$user = $this->input->post('username');
				$email = $this->input->post('email');
				$telp = $this->input->post('telepon');
				$pass = rand(12345, 5678910);
				$passs = md5($pass);

				if($this->M_Regis->CheckUser($user,$email)==TRUE){
					$data['message'] = $this->session->set_flashdata('message', 'Sorry, the username or email you entered have been already registered');
					$this->load->view('V_Regis', $data);
				}else{
					$datauser = array(
						'username' => $user,
						'name' => $nama,
						'telepon' => $telp,
						'email' => $email,
						'member' => "free"
					);
					$this->M_Regis->insertData("data_user", $datauser);
					$data = array(
						'username' => $user,
						'name' => $nama,
						'password' => $passs,
						'email' => $email,
						'telepon' => $telp,
						'status' => 1
					);
					$this->M_Regis->insertData("login", $data);
					$data['pass'] = substr($passs, 0, 12);
					$this->session->set_userdata($data);
					$this->load->view('Regis_berhasil', $data);
				}
			}else{
				$data['message'] = $this->session->set_flashdata('message', 'Please, fill in all the blank space');
				$this->load->view('V_Regis', $data);
			}
		}

		public function donated(){
			//$id = $_GET['id'];
			//$peminat = $_SESSION['username'];
			//$this->load->model('M_Regis');
			//$this->M_Regis->updateUser("data_properti", "status", 1, $id, "id_rumah");
			/*$pengiklan = $this->M_Regis->getBy("data_properti", $id, "id_rumah");
			foreach ($pengiklan as $key) {
				$pengiklann = $key['pengirim'];
			}
			$data = array(
				'peminat' => $peminat,
				'pengiklan' =>$pengiklann,
				'id_rumah' => $id 
				);
			$this->M_Regis->insertData("interested", $data);*/
			$this->form_validation->set_rules('nominal', 'nominal', 'required|numeric',
				array(
					'required' => 'Kolom nominal wajib diisi',
					'numeric' => 'Isi nominal donasi dengan angka saja'
					)
				);
			$this->form_validation->set_rules('tlp', 'tlp', 'required|numeric', 
				array(
					'required' => 'Kolom nomor ponsel wajib diisi',
					'numeric' => 'Isi nomor ponsel dengan angka saja'
					)
				);
			$this->form_validation->set_rules('nama', 'nama', 'required', 
				array(
					'required' => 'Kolom nama wajib diisi'
					)
				);
			$this->form_validation->set_rules('email', 'email', 'required|valid_email',
				array(
					'required' => 'Alamat email wajib diisi',
					'valid_email' => 'Tulis alamat email yang sesuai'
					)
				);

			


			if($this->form_validation->run() == TRUE){
				$nominal = $this->input->post('nominal');
				$tlp = $this->input->post('tlp');
				$komentar = $this->input->post('komentar');
				$payment = $this->input->post('payment');
				$anom = $this->input->post('anom');
				$nama = $this->input->post('nama');
				$email = $this->input->post('email');
				$data = array(
							'nominal' => $nominal,
							'tlp' => $tlp,
							'komentar' => $komentar,
							'payment' => $payment,
							'anom' => $anom,
							'nama' => $nama,
							'email' => $email
						);

				$this->load->view('headernoaffix');
				$this->load->view('donated', $data);
				$this->load->view('footer');
			}else{
				$this->load->view('headernoaffix');
				$this->load->view('donasi');
				$this->load->view('footer');

			}
			
			
		}

		public function pagelogin(){
			$this->load->view('V_Login');
		}

		public function upgrade(){
			$this->load->model('M_Regis');
			$uname = $_GET['uname'];
			$this->M_Regis->updateUser("data_user", "member", "premium",$_SESSION['username'],"username");
			redirect('C_House/pageprofil?uname='.$uname);
		}

		public function terjual(){
			$this->load->model('M_Regis');
			$id = $_GET['id'];
			$uname = $_GET['u'];
			$this->M_Regis->updateUser("data_properti", "status", 2, $id, "id_rumah");
			redirect('C_House/selling?u='.$uname);
		}

		public function nonaktif(){
			$this->load->model('M_Regis');
			$id = $_GET['id'];
			$uname = $_GET['u'];
			$this->M_Regis->updateUser("data_properti", "status", 3, $id, "id_rumah");
			redirect('C_House/selling?u='.$uname);
		}

		public function aktifkan(){
			$this->load->model('M_Regis');
			$id = $_GET['id'];
			$uname = $_GET['u'];
			$this->M_Regis->updateUser("data_properti", "status", 0, $id, "id_rumah");
			redirect('C_House/selling?u='.$uname);
		}

		

		public function pageminat(){
			$this->load->model('M_Regis');
			$user = $_SESSION['username'];
			$load['data'] = $this->M_Regis->getBy("interested", $user, "pengiklan");
			$this->load->view('pageminat', $load);
		}

		public function pageiklan(){
			$this->load->view('V_Iklan');
		}

		public function pagedaftar(){
			$this->load->view('V_Regis');
		}

		public function seting(){
			$this->load->model('M_Regis');
			$id = $_GET['id'];
			$load['data'] = $this->M_Regis->getBy("data_user", $id, "id_user");
			$this->load->view('seting', $load);
		}

		public function selling(){
			$this->load->model('M_Regis');
			$uname = $_GET['u'];
			$load['data'] = $this->M_Regis->getBy("data_properti", $uname, "pengirim");
			$this->load->view('selling', $load);
		}

		public function pagechange(){
			$this->load->model('M_Regis');
			$uname = $_GET['u'];
			$load['data'] = $this->M_Regis->getBy("login", $uname, "username");
			$this->load->view('Change_pass', $load);
		}

		public function changepass(){
			$this->load->model('M_Regis');
			$uname = $this->input->post('uname');
			$passcek = $this->input->post('pass');
			$newpass = $this->input->post('newpass');
			$newpass2 = $this->input->post('newpass2');
			$oldpass = $this->input->post('oldpass');
			if($passcek == $oldpass){
				if($newpass == $newpass2){
					$this->M_Regis->updateUser("login", "password", $newpass, $uname, "username");
					$this->load->view('cpsuccess');
					header('refresh: 3;url=pageprofil?uname='.$uname);
				}else{
					$data['message'] = $this->session->set_flashdata('message', "New password confirmation did not match. ");
					redirect('C_House/pagechange?u='.$uname,'refresh');
				}
			}else{
				$data['message'] = $this->session->set_flashdata('message', "Your old password did not match.");
				redirect('C_House/pagechange?u='.$uname,'refresh');
			}
		}

		public function saveseting(){
			$this->load->model('M_Regis');
			$job = $this->input->post('pekerjaan');
			$id = $this->input->post('id_user');
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$telepon = $this->input->post('telepon');
			$uname = $this->input->post('uname');
			$config['upload_path'] = './images/profil/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']  = '2048';
			$config['max_width']  = 0;
			$config['max_height']  = 0;
			
			$this->upload->initialize($config);
			
			if ( ! $this->upload->do_upload('foto_profil')){
				$error = $this->upload->display_errors();
				$data['message'] = $this->session->set_flashdata('message', $error);
				redirect('C_House/seting?id='.$id);
			}
			else{
				$data = $this->upload->data();
				$fn = $data['file_name'];
				$this->M_Regis->updateUser("data_user", "pekerjaan", $job, $id, "id_user");
				$this->M_Regis->updateUser("data_user", "foto_profil", $fn, $id, "id_user");
				$this->M_Regis->updateUser("data_user", "name", $nama, $id, "id_user");
				$this->M_Regis->updateUser("data_user", "email", $email, $id, "id_user");
				$this->M_Regis->updateUser("data_user", "telepon", $telepon, $id, "id_user");
				redirect('C_House/pageprofil?uname='.$uname);
			}
		}

		public function pageprofil(){
			$uname = $_GET['uname'];
			$this->load->model('M_Regis');
			$load['data'] = $this->M_Regis->getBy("data_user", $uname, "username");
			$this->load->view('profil', $load);
		}

		public function upload(){
			$this->load->model('M_Regis');
			$this->form_validation->set_rules('alamat', 'alamat', 'required');
			//$this->form_validation->set_rules('pemilik', 'pemilik', 'required');
			$this->form_validation->set_rules('luas_tanah', 'luas_tanah', 'required');
			$this->form_validation->set_rules('luas_bangunan', 'luas_bangunan', 'required');
			//$this->form_validation->set_rules('no_kontak', 'no_kontak', 'required');
			$this->form_validation->set_rules('harga', 'harga', 'required');
			$this->form_validation->set_rules('tingkat', 'tingkat', 'required');
			$this->form_validation->set_rules('sertifikat', 'sertifikat', 'required');
			$this->form_validation->set_rules('ruangan', 'ruangan', 'required');

			if($this->form_validation->run() == true){
				$alamat = $this->input->post('alamat');
				//$pemilik = $this->input->post('pemilik');
				$luas_tanah = $this->input->post('luas_tanah');
				$luas_bangunan = $this->input->post('luas_bangunan');
				//$no_kontak = $this->input->post('no_kontak');
				$kategori = $this->input->post('kategori');
				$harga = $this->input->post('harga');
				$tingkat = $this->input->post('tingkat');
				$sertifikat = $this->input->post('sertifikat');
				$ruangan = $this->input->post('ruangan');
				$pengirim = $this->input->post('pengirim');
				$waktu = $this->input->post('waktu_post');

				$config['upload_path'] = './images/';
				$config['allowed_types'] = 'jpeg|jpg|png';
				$config['overwrite'] = TRUE;
				$config['max_size']  = '8192';
				$config['max_width']  = 0;
				$config['max_height']  = 0;
				
				$this->upload->initialize($config);
				
				if ( ! $this->upload->do_upload('foto_rumah')){
					$error = $this->upload->display_errors();
					$data['message'] = $this->session->set_flashdata('message', $error);
					redirect('C_House/pageiklan');
				}
				else{
					$data = $this->upload->data();
					$fn = $data['file_name'];
					$data = array(
						'alamat' => $alamat,
						//'pemilik' => $pemilik,
						'luas_tanah' => $luas_tanah,
						'luas_bangunan' => $luas_bangunan,
						//'no_kontak' => $no_kontak,
						'harga' => $harga,
						'kategori' => $kategori,
						'tingkat' => $tingkat,
						'ruangan' => $ruangan,
						'sertifikat' => $sertifikat,
						'pengirim' => $pengirim,
						'waktu_post' => $waktu,
						'foto_rumah' => $fn
					);
					$this->M_Regis->insertData("data_properti", $data);
				}
				$this->load->view('adsuccess');
				header('refresh: 3;url=index');
			}else{
				$data['message'] = $this->session->set_flashdata('message', 'Please fill all the required field!');
				redirect('C_House/pageiklan');
			}
		}
	
	}
	
	/* End of file c_House.php */
	/* Location: ./application/controllers/c_House.php */