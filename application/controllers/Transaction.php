<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaction extends CI_Controller
{

    private $_userInfo;
    public function __construct()
    {
        parent::__construct();
        if (is_null(get_cookie('token'))) {
            redirect('auth');
        }
        $this->load->model('user_model');
        $this->load->model('transaction_model');
        $this->_userInfo = $this->user_model->getUserById(get_cookie('user_id'));
    }

    public function index()
    {
        $data = $this->transaction_model->createTrans();
        $this->load->view('transaction/trans1', $data);
    }

    public function transFinished()
    {
        $this->load->view('transaction/trans2');
    }
}
