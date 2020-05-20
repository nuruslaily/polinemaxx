<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('polinemaxx_model');
	}

	public function index()
	{
		$judul['title']='Polinemaxx | Login Admin';
        $this->load->view('polinemaxx/admin/login-page', $judul);
	}

	public function dashboard()
	{
		$data['title'] = 'Polinemaxx | Dashboard Admin';
		$data['film'] = $this->polinemaxx_model->jumlahFilm();
		$data['member'] = $this->polinemaxx_model->jumlahMember();
		$data['theater'] = $this->polinemaxx_model->jumlahTheater();
		$this->load->view('polinemaxx/admin/dashboard', $data);

	}

	//film

	public function film()
	{
		$data = array(
            'title' => 'Polinemaxx | Data Film',
            'film' => $this->polinemaxx_model->datatabelsFilm()
        );
		$this->load->view('polinemaxx/admin/film', $data);
	}

	public function detailFilm($id_film)
	{
		$data['title'] = 'Polinemaxx | Detail Film';
		$data['film'] = $this->polinemaxx_model->getFilmId($id_film);
		$this->load->view('polinemaxx/admin/detail_film', $data);
	}

	public function tambahFilm()
	{
		$data['title'] = 'Polinemaxx | Tambah Film';
		$this->form_validation->set_rules('nama', 'nama', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('polinemaxx/admin/tambah_film');
        } else {
            $config['upload_path'] = APPPATH.'../assets/film/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png|avi|flv|wmv|mp4';
            $config['max_size']  = '600000';
            $config['overwrite'] = FALSE;
            
            $this->load->library('upload', $config);

            $this->upload->initialize($config);
            
            $data['nama'] = $this->input->post('nama',TRUE);
            $data['dimensi'] = $this->input->post('dimensi',true);
            $data['usia'] = $this->input->post('usia',true);
            $data['kategori'] = $this->input->post('kategori',true);
            $data['durasi'] = $this->input->post('durasi',true);
            $data['produser'] = $this->input->post('produser',true);
            $data['direktor'] = $this->input->post('direktor',true);
            $data['penulis'] = $this->input->post('penulis',true);
            $data['cast'] = $this->input->post('cast',true);
            $data['deskripsi'] = $this->input->post('deskripsi',true);
            
            if ( ! $this->upload->do_upload('gambar') && ! $this->upload->do_upload('trailer') ){
                $error = array('error' => $this->upload->display_errors(),
            					'film' => $this->polinemaxx_model->datatabelsFilm());
                $this->load->view('polinemaxx/admin/film', $error);
            }
            else{
               $upload_data = $this->upload->data();
               $data['gambar'] = $upload_data['file_name'];
               $data['trailer'] = $upload_data['file_name'];
               $this->polinemaxx_model->tambahFilm($data);
            redirect('polinemaxx/admin/film','refresh');
            }
        }
	}

	public function hapusFilm($id_film)
	{
		$this->polinemaxx_model->hapusfilms($id_film);
        $this->session->set_flashdata('flash-data','dihapus');
        redirect('polinemaxx/admin/film','refresh');
	}

	//member

	public function member()
	{
		$data = array(
            'title' => 'Polinemaxx | Data Member',
            'member' => $this->polinemaxx_model->datatabelsMember()
        );
		$this->load->view('polinemaxx/admin/member', $data);
	}

	public function detailMember($id_user)
	{
		$data['title'] = 'Polinemaxx | Detail Member';
		$data['member'] = $this->polinemaxx_model->getMemberId($id_user);
		$this->load->view('polinemaxx/admin/detail_member', $data);
	}

	public function tambahMember()
	{
		$judul['title'] = 'Polinemaxx | Tambah Member';
		$this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('nohp', 'nohp', 'required');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == FALSE) {
        	$this->load->view('polinemaxx/admin/tambah_member', $judul);
        }else{
        	$data['nama'] = $this->input->post('nama');
            $data['alamat'] = $this->input->post('alamat');
            $data['nohp'] = $this->input->post('nohp');
            $data['email'] = $this->input->post('email');
            $data['password'] = $this->input->post('password');
            $this->polinemaxx_model->daftarmember($data);
            $this->session->set_flashdata('flash-data','ditambah');
            redirect('admin/member','refresh');
        }
	}

	public function editMember($id_user)
	{
		$data['title'] = 'Polinemaxx | Edit Member';
		$data['member'] = $this->polinemaxx_model->getMemberId($id_user);

		$this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('nohp', 'nohp', 'required');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == FALSE) {
        	$this->load->view('polinemaxx/admin/edit_member', $data);
        }else{
            $this->polinemaxx_model->ubahmember();
        	$this->session->set_flashdata('flash-data','diubah');
            redirect('admin/member','refresh');
        }
	}

	public function hapusMember($id_user)
	{
		$this->polinemaxx_model->hapusmembers($id_user);
        $this->session->set_flashdata('flash-data','dihapus');
        redirect('admin/member','refresh');
	}

	// end member

	// theatrer

	public function theater()
	{
		$data = array(
            'title' => 'Polinemaxx | Data Theater',
            'theater' => $this->polinemaxx_model->datatabels()
        );
		$this->load->view('polinemaxx/admin/theater', $data);
	}

	public function detailTheater($id)
	{
		$data['title'] = "Polinemaxx | Detail Theater";
		$data['theater'] = $this->polinemaxx_model->getTheaterId($id);
		$this->load->view('polinemaxx/admin/detail_theater', $data);
	}

	public function tambahTheater()
	{
		$judul['title'] = 'Polinemaxx | Tambah Theater';
		$this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('telp', 'telp', 'required');
        $this->form_validation->set_rules('bioskop', 'bioskop', 'required');

        if ($this->form_validation->run() == FALSE) {
        	$this->load->view('polinemaxx/admin/tambah_theater', $judul);
        }else{
        	$data['nama'] = $this->input->post('nama');
            $data['alamat'] = $this->input->post('alamat');
            $data['nohp'] = $this->input->post('nohp');
            $data['email'] = $this->input->post('email');
            $data['password'] = $this->input->post('password');
            $this->polinemaxx_model->tambahtheater($data);
            $this->session->set_flashdata('flash-data','ditambah');
            redirect('admin/theater','refresh');
        }
	}

	public function editTheater($id)
	{
		$data['title'] = 'Polinemaxx | Edit Theater';
		$data['theater'] = $this->polinemaxx_model->getTheaterId($id);

		$this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('telp', 'telp', 'required');
        $this->form_validation->set_rules('bioskop', 'bioskop', 'required');

        if ($this->form_validation->run() == FALSE) {
        	$this->load->view('polinemaxx/admin/edit_theater', $data);
        }else{
            $this->polinemaxx_model->ubahmember();
        	$this->session->set_flashdata('flash-data','diubah');

            redirect('admin/theater','refresh');
        }
	}

	public function hapusTheater($id)
	{
		$this->polinemaxx_model->hapustheaters($id);
        $this->session->set_flashdata('flash-data','dihapus');
        redirect('admin/theater','refresh');
	}

	// end theater

	//laporan

	public function laporan()
	{
		$data = array(
            'title' => 'Polinemaxx | Laporan',
            'laporan' => $this->polinemaxx_model->datatabelsLaporan()
        );
		$this->load->view('polinemaxx/admin/laporan', $data);
	}

	// end laporan

	//login logout

	public function logout()
    {
        $this->session->sess_destroy();
        
        redirect('admin/','refresh');
    }

    public function proses_login()
    {
        $username = htmlspecialchars($this->input->post('username'));
        $password = htmlspecialchars($this->input->post('password'));

        $cekLogin = $this->polinemaxx_model->loginAdmin($username,$password);

        if ($cekLogin) {
            foreach ($cekLogin as $key){
                $session_data = array(
                'id'   => $key->id,
               'nama'   => $key->nama,
                'username' => $key->username,
                'password' => $key->password
            );
                $this->session->set_userdata($session_data);
                redirect('admin/dashboard','refresh');
            }
        }else{
            redirect('admin/dashboard','refresh');
        }
    }

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */
?>