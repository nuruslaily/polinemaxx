<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct()
	{
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
        $this->load->view('polinemaxx/user/index', $data);
	}

	public function detail($id)
    {
        $data['title']='PolinemaXX | Detail Film';
        $data['film']= $this->polinemaxx_model->getFilmId($id);
        $this->load->view('polinemaxx/user/detail',$data);
    }

    public function theater()
    {
        $data = array(
            'title' => 'PolinemaXX | Theater Malang',
            'theater' => $this->polinemaxx_model->datatabels()
        );
        $this->load->view('polinemaxx/user/theater', $data);
    }

    public function wilayah()
    {
        $data['title']='PolinemaXX | Lokasi Theater';
        $this->load->view('polinemaxx/user/wilayah', $data);
    }

    public function beli($id)
    {
    	$data['title'] = 'PolinemaXX | Beli Tiket';
        $data['film']= $this->polinemaxx_model->getFilmId($id);
    	$this->load->view('polinemaxx/user/kursi', $data);
    }

    public function pembayaran()
    {
        $data = array(
            'title' => 'PolinemaXX | Pembayaran Tiket',
            'theater' => $this->polinemaxx_model->datatabelsLaporan()
        );
        $this->load->view('polinemaxx/user/bayar', $data);
    }

    public function profile()
    {
        $data['title'] = 'PolinemaXX | Profile';
        $this->load->view('polinemaxx/user/profile', $data);
    }
}

/* End of file member.php */
/* Location: ./application/controllers/member.php */
?>