<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('cookie');
        $this->load->model('admin_model');
    }

    public function index()
    {
        $data['user'] = $this->admin_model->getUnverified();
        $data['shop'] = $this->admin_model->getUnverifiedShop();
        $this->load->view('admin/adminHome', $data);
    }

    public function verify()
    {
        $uid = $this->input->post('uid');
        $res = $this->admin_model->verifyUser($uid);
        redirect('Admin');
    }
    public function verifyShop()
    {
        $shopId = $this->input->post('shopId');
        $res = $this->admin_model->verifyShop($shopId);
        redirect('Admin');
    }
}
