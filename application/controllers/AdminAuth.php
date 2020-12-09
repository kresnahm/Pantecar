<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminAuth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('cookie');
    }
    public function index()
    {

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/login');
            // echo $this->input->post('password') . $this->input->post('email');
            // $this->load->view('auth/login');

        } else {
            $this->_login();
        }
    }

    public function _login()
    {
        $this->load->model('auth_model');
        $logRespond = $this->auth_model->adminLogin();
        set_cookie('token', $logRespond['token'], 3600);
        set_cookie('admin_id', $logRespond['adminId'], 3600);
        // echo "<pre>";
        // print_r($logRespond);
        // echo "</pre>";
        // echo get_cookie('token');

        redirect('Admin');
    }
}
