<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Profil Saya';
        $data['title_before'] = 'Informasi';
        $data['pengguna'] = $this->db->get_where('pengguna', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('member/index', $data);
    }
}
