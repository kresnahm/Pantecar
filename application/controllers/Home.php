<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    private $_userInfo;
    public function __construct()
    {
        parent::__construct();
        if (is_null(get_cookie('token'))) {
            redirect('auth');
        }
        $this->load->model('user_model');
        $this->load->model('rental_model');
        $this->load->model('car_model');
        $this->load->model('transaction_model');
        $this->_userInfo = $this->user_model->getUserById(get_cookie('user_id'));
    }
    public function index()
    {
        $data = $this->user_model->checkShop($this->_userInfo['id_user']);
        $data['car'] = $this->car_model->getAllCar();
        $this->load->view('home/home.php', $data);

        // var_dump($this->_userInfo);
    }
    public function openProfile()
    {

        $data = $this->_userInfo;
        $data['status'] = $this->user_model->checkShop($this->_userInfo['id_user']);
        // var_dump($data);

        $this->load->view('home/profile.php', $data);
    }

    public function openProdDesc()
    {
        $data = $this->car_model->getCarById();
        $data['cars'] = $this->car_model->getAllCar();
        // $data = $this->input->post('carID');
        // var_dump($data);
        $this->load->view('home/productDesc', $data);
    }

    // public function rent()
    // {
    //     redirect('Transaction');
    // }

    public function reqOpenShop()
    {
        $this->load->view('home/reqShop');
    }

    public function reqShop()
    {
        $respone = $this->rental_model->createShop();
        $this->load->view('home/reqShop2');
    }

    public function addCarPage()
    {
        $this->load->view('home/addCar');
    }
    public function addCar()
    {
        $filename = $_FILES['image']['name'];
        $name = preg_replace('/\s+/', '_', $filename);
        // $imgPath = $_FILES['image']['tmp_name'];
        var_dump($name);
        // var_dump($imgPath);
        // $data = $this->car_model->addCar($filename);
        $image = $_FILES["image"];

        // echo $filename;
        $imgPath = 'D:\KULIAH\Semester 5\RPL\Projek\pantecar-backend-master\data\images\File\\';
        if ($image = '') {
        } else {
            $config['upload_path'] = $imgPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                echo "upload gagal";
                die();
            } else {
                $image = $this->upload->data('file_name');
            }
        }
        $data = $this->car_model->addCar($imgPath, $name);
        $this->openTokoPage();
    }

    public function createTrans()
    {
        $data['trans'] = $this->transaction_model->createTrans();
        $data['shop'] = $this->rental_model->getShopById($this->input->post('rentalId'));
        $this->load->view('transaction/trans1', $data);
    }

    public function transFinished()
    {
        // var_dump($_FILES);
        $filename = $_FILES['image']['name'];
        $name = preg_replace('/\s+/', '_', $filename);
        // var_dump($name);
        $image = $_FILES["image"];
        $imgPath = 'D:\KULIAH\Semester 5\RPL\Projek\pantecar-backend-master\data\images\File\\';
        if ($image = '') {
        } else {
            $config['upload_path'] = $imgPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                echo "upload gagal";
                die();
            } else {
                $image = $this->upload->data('file_name');
            }
        }
        $data = $this->transaction_model->uploadRec($imgPath, $name);
        $this->load->view('transaction/trans2');
    }

    public function openTokoPage()
    {
        $data['shop'] = $this->rental_model->getShopByUid();
        $data['unverif'] = $this->transaction_model->getAllUnverifTrans();
        $this->load->view('home/toko', $data);
    }

    public function verTrans()
    {
        $res = $this->transaction_model->verifyTrans();
        $this->openTokoPage();
    }
}
