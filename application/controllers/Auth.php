<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
	public function index()
	{
		$this->load->view('auth/form_login');
	}

	public function proses_login()
	{
		$username = $this->input->post('username', TRUE);
		$password = $this->input->post('password', TRUE);

        if(strtolower($username) == 'pabrikasi' && strtolower($password) == 'pabrikasi')
        {
            $this->session->set_userdata('username', $username);
            $this->session->set_userdata('status', 'login');
            redirect(base_url());
        }
        else 
        {
            $this->session->set_flashdata('error', "<div class='alert alert-danger' role='alert'>Username/password Anda salah. Ulangi login lagi!</div>");
            redirect(base_url('auth'));
        }

	}

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
