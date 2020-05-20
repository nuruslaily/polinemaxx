<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class polinemaxx extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('polinemaxx_model');
    }

    public function index()
    {
        $data['title'] = 'PolinemaXX';
        $data['film']= $this->polinemaxx_model->getFilm();
        if ($this->input->post('keyword')){
            $data['film']=$this->polinemaxx_model->searchFilm();
        }
        $this->load->view('polinemaxx/index', $data);
        
    }

    public function detail($id)
    {
        $data['title']='PolinemaXX | Detail Film';
        $data['film']= $this->polinemaxx_model->getFilmId($id);
        $this->load->view('polinemaxx/detail',$data);
    }

    public function theater()
    {
        $data = array(
            'title' => 'PolinemaXX | Theater Malang',
            'theater' => $this->polinemaxx_model->datatabels()
        );
        $this->load->view('polinemaxx/theater', $data);
    }

    public function wilayah()
    {
        $data['title']='PolinemaXX | Lokasi Theater';
        $this->load->view('polinemaxx/wilayah', $data);
    }

    public function login()
    {
        $judul['title']='PolinemaXX | Login';
        $this->load->view('polinemaxx/login-page', $judul);
        
    }

    public function logout()
    {
        $this->session->sess_destroy();
        
        redirect('polinemaxx/login','refresh');
    }

    public function proses_login()
    {
        $email = htmlspecialchars($this->input->post('email'));
        $password = htmlspecialchars($this->input->post('password'));

        $cekLogin = $this->polinemaxx_model->login($email,$password);

        if ($cekLogin) {
            foreach ($cekLogin as $key){
                $session_data = array(
                    'id_user'   => $key->id_user,
                    'nama'   => $key->nama,
                    'alamat'   => $key->alamat,
                    'nohp'   => $key->nohp,
                    'email' => $key->email,
                    'password' => $key->password
                );
            $this->session->set_userdata($session_data);
            redirect('member','refresh'); 
            }
        }else{
            redirect('polinemaxx/login','refresh');
        }
    }

    public function daftar()
    {
        $judul['title']='PolinemaXX | Daftar';
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('nohp', 'nohp', 'required');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('ConfPassword','password','required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('polinemaxx/daftar',$judul);
        }else {
            $data['nama'] = $this->input->post('nama');
            $data['alamat'] = $this->input->post('alamat');
            $data['nohp'] = $this->input->post('nohp');
            $data['email'] = $this->input->post('email');
            $data['password'] = $this->input->post('password');
            $this->polinemaxx_model->daftarmember($data);
            redirect('polinemaxx/login','refresh');
        }
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('polinemaxx/tambah');
        } else {
            $config['upload_path'] = APPPATH.'../assets/film/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png|avi|flv|wmv|mp4';
            $config['max_size']  = '600000';
            $config['overwrite'] = FALSE;
            
            $this->load->library('upload', $config);

            $this->upload->initialize($config);
            
            $data['nama'] = $this->input->post('nama',TRUE);
            $data['kategori'] = $this->input->post('kategori',true);
            $data['durasi'] = $this->input->post('durasi',true);
            $data['produser'] = $this->input->post('produser',true);
            $data['direktor'] = $this->input->post('direktor',true);
            $data['penulis'] = $this->input->post('penulis',true);
            $data['cast'] = $this->input->post('cast',true);
            $data['deskripsi'] = $this->input->post('deskripsi',true);
            
            if ( ! $this->upload->do_upload('gambar') && ! $this->upload->do_upload('trailer') ){
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('polinemaxx', $error);
            }
            else{
               $upload_data = $this->upload->data();
               $data['gambar'] = $upload_data['file_name'];
               $data['trailer'] = $upload_data['file_name'];
               $this->polinemaxx_model->tambahFilm($data);
            redirect('polinemaxx','refresh');
            }
        }
    }

}

/* End of file polinemaxx.php */

?>