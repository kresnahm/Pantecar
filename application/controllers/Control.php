<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Control extends CI_Controller
{

    public function index()
    {
        $this->load->view('auth/login');
    }

    public function register()
    {
        $this->load->view('auth/register');
    }
}
