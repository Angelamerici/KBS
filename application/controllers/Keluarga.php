<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keluarga extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Keluarga_model');
    }

    public function index()
    {
        $data['title'] = 'Keluarga Terdata';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['keluarga'] = $this->Keluarga_model->getAllKeluarga();
        if ($this->input->post('keyword')) {
            $data['keluarga'] = $this->Keluarga_model->cariDataKeluarga();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('keluarga/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah Data Keluarga';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->form_validation->set_rules('nkk', 'No KK', 'required|numeric');
        $this->form_validation->set_rules('suami', 'Nama Suami', 'required');
        $this->form_validation->set_rules('istri', 'Nama Istri', 'required');
        $this->form_validation->set_rules('rt', 'Rt', 'required|numeric');
        $this->form_validation->set_rules('dusun', 'Dusun', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('keluarga/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Keluarga_model->tambahDataKeluarga();
            redirect('keluarga');
        }
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Data Keluarga';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['keluarga'] = $this->Keluarga_model->getKeluargaById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('keluarga/detail', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data['title'] = 'Form Edit Data Keluarga';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['keluarga'] = $this->Keluarga_model->getKeluargaById($id);

        $data['desa'] = ['Gunung Sugih', 'Gunung Sugih Raya', 'Terbanggi Subing', 'Terbanggi Agung', 'Gunung Sari', 'Fajar Bulan', 'Komering Putih', 'Komering Agung', 'Seputih Jaya', 'Wonosari', 'Buyut Udik', 'Buyut Ilir', 'Putra Buyut', 'Buyut Utara', 'Bangun Rejo'];

        $this->form_validation->set_rules('nkk', 'No KK', 'required|numeric');
        $this->form_validation->set_rules('suami', 'Nama Suami', 'required');
        $this->form_validation->set_rules('istri', 'Nama Istri', 'required');
        $this->form_validation->set_rules('rt', 'Rt', 'required|numeric');
        $this->form_validation->set_rules('dusun', 'Dusun', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('keluarga/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Keluarga_model->editDataKeluarga();
            redirect('keluarga');
        }
    }

    public function hapus($id)
    {
        $this->Keluarga_model->hapusDataKeluarga($id);
        redirect('keluarga');
    }
}
