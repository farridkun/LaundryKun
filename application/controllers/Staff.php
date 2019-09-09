<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Staff extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['title_before'] = 'Staff';
        $data['nama_role'] = 'Staff Laundry';
        $data['pengguna'] = $this->db->get_where('pengguna', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('staff/index', $data);
        $this->load->view('templates/footer');
    }
}
