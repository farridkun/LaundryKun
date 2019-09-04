<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Center LaundryKun';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            // validasi sukses login
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $pengguna = $this->db->get_where('pengguna', ['email' => $email])->row_array();

        //kalo akunnya ada
        if ($pengguna) {
            // kalo akunnya aktif
            if ($pengguna['is_active'] == 1) {
                //cek passwordnya
                if (password_verify($password, $pengguna['password'])) {
                    $data = [
                        'email' => $pengguna['email'],
                        'role_id' => $pengguna['role_id']
                    ];
                    $this->session->set_userdata($data);
                    redirect('member');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Azzz, Passwordnya salah nih, inget nggak?</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Hmmm, Akunnya belum aktif nih</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Waaahh, Emailnya belum terdaftar nih!</div>');
            redirect('auth');
        }
    }

    public function daftar()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Waduh, <strong>Nama</strong>nya diisi dulu dong...'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[pengguna.email]', [
            'required' => 'Lhoo, Aku juga harus tau <strong>Email</strong> kamu !',
            'is_unique' => 'Aduhh, Email ini udah terdaftar nih.'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Daftar Center LaundryKun';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/daftar');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama')),
                'email' => htmlspecialchars($this->input->post('email')),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('pengguna', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Hoorraaayy!!, Akun telah berhasil dibuat. Kuy Login...
          </div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            ByeBye~, Berhasil keluar, See you next!
          </div>');
        redirect('auth');
    }
}
