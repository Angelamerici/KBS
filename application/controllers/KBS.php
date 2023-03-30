<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KBS extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Kbs_model');
    }

    public function index()
    {
        $data['title'] = 'Keluarga Beresiko Stuting';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $data['kbs'] = $this->Kbs_model->getAllKbs();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kbs/index', $data);
        $this->load->view('templates/footer');
    }
}
