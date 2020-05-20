<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class polinemaxx_model extends CI_Model {

    
    //film
    public function getFilm(){
        return $this->db->get('film')->result_array();
    }

    public function getFilmId($id_film)
    {
        return $this->db->get_where('film',['id_film' => $id_film])->result_array();
    }

    public function hapusfilms($id_film)
    {
        $this->db->where('id_film', $id_film);
        $this->db->delete('film');
    }

    public function jumlahFilm()
    {
        $query = $this->db->get('film');
        if($query->num_rows()>0)
        {
          return $query->num_rows();
        }
        else
        {
          return 0;
        }
    }


    public function datatabelsFilm()
    {
        $query = $this->db->order_by('id_film','DESC')->get('film');
        return $query->result_array();
    }

    public function tambahFilm($data)
    {
        
            $insert_data['gambar'] = $data['gambar'];
            $insert_data['dimensi'] = $data['dimensi'];
            $insert_data['usia'] = $data['usia'];
            $insert_data['trailer'] = $data['trailer'];
            $insert_data['nama'] = $data['nama'];
            $insert_data['kategori'] = $data['kategori'];
            $insert_data['durasi'] = $data['durasi'];
            $insert_data['produser'] = $data['produser'];
            $insert_data['direktor'] = $data['direktor'];
            $insert_data['penulis'] = $data['penulis'];
            $insert_data['cast'] = $data['cast'];
            $insert_data['deskripsi'] = $data['deskripsi'];

            $query = $this->db->insert('film', $insert_data);
        
    }


    public function searchFilm(){
        $keyword=$this->input->post('keyword');
        $this->db->like('nama',$keyword);
        return $this->db->get('film')->result_array();
    }

    // end film

    // member

    public function daftarmember($data)
    {
        //$this->db->insert('Table', $object)
        $this->db->insert('user', $data);
    }

    public function datatabelsMember()
    {
        $query = $this->db->order_by('id_user','DESC')->get('user');
        return $query->result_array();
    }

    public function jumlahMember()
    {
        $query = $this->db->get('user');
        if($query->num_rows()>0)
        {
          return $query->num_rows();
        }
        else
        {
          return 0;
        }
    }

    public function getMemberId($id_user)
    {
        return $this->db->get_where('user',['id_user' => $id_user])->result_array();
    }

    public function hapusmembers($id_user)
    {
        $this->db->where('id_user', $id_user);
        $this->db->delete('user');
    }

    public function ubahmember()
    {
        $data = [
            "nama" => $this->input->post('nama',true),
            "alamat" => $this->input->post('alamat',true),
            "nohp" => $this->input->post('nohp',true),
            "email" => $this->input->post('email',true),
            "password" => $this->input->post('password',true)
        ];
        $this->db->where('id_user', $this->input->post('id_user'));
        $this->db->update('user', $data);
    }

    // end member

    // theater
    public function getTheater()
    {
        return $this->db->get('theater')->result_array();
        
    }

    public function getTheaterId($id)
    {
        return $this->db->get_where('theater',['id' => $id])->result_array();
    }

    public function hapustheaters($id)
    {
        $this->db->where('id', $id_user);
        $this->db->delete('theater');
    }

    public function ubahtheater()
    {
        $data = [
            "nama" => $this->input->post('nama',true),
            "alamat" => $this->input->post('alamat',true),
            "telp" => $this->input->post('telp',true),
            "bioskop" => $this->input->post('bioskop',true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('theater', $data);
    }

    public function jumlahTheater()
    {
        $query = $this->db->get('theater');
        if($query->num_rows()>0)
        {
          return $query->num_rows();
        }
        else
        {
          return 0;
        }
    }

    public function datatabels(){
        $query = $this->db->order_by('id','DESC')->get('theater');
        return $query->result_array();
    }

    // end theater

    //laporan
    public function datatabelsLaporan(){
        $query = $this->db->order_by('id_transaksi','DESC')->get('transaksi_pembelian');
        return $query->result_array();
    }

    public function getTransaksi()
    {
        return $this->db->get('transaksi_pembelian')->result_array();
        
    }

    public function getTransaksiId($id)
    {
        return $this->db->get_where('transaksi_pembelian',['id' => $id])->result_array();
    }
    
    public function tambahTransaksi()
    {
        $data = [
            "user" => $this->input->post('user',true),
            "film" => $this->input->post('film',true),
            "bioskop" => $this->input->post('bioskop',true),
            "jam" => $this->input->post('jam',true),
            "jumlah" => $this->input->post('jumlah',true),
            "harga" => $this->input->post('harga',true),
            "total" => $this->input->post('total',true),
            "kursi" => $this->input->post('kursi',true),
            "bayar" => $this->input->post('bayar',true)
        ];
        $this->db->where('id_transaksi', $this->input->post('id_transaksi'));
        $this->db->update('transaksi_pembelian', $data);
    }


    // end laporan


    public function login($email,$password)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $this->db->limit(1);

        $query = $this->db->get();
        if ($query->num_rows()==1) {
            return $query->result();
        }else{
            return false;
        }
    }

    public function loginAdmin($username,$password)
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->limit(1);

        $query = $this->db->get();
        if ($query->num_rows()==1) {
            return $query->result();
        }else{
            return false;
        }
    }

}

/* End of file polinemaxx_model.php */

?>