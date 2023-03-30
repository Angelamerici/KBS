<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sasaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Sasaran_model');
    }

    public function index()
    {
        $data['title'] = 'Keluarga Sasaran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $data['sasaran'] = $this->Sasaran_model->getAllSasaran();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('sasaran/index', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data['title'] = 'Form Edit Data Sasaran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['sasaran'] = $this->Sasaran_model->getSasaranById($id);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('sasaran/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Keluarga_model->editDataSasaran();
            redirect('sasaran');
        }
    }
}
