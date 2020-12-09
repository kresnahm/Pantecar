<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
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
            $this->load->view('auth/login');
            // echo $this->input->post('password') . $this->input->post('email');
            // $this->load->view('auth/login');

        } else {
            $this->_login();
        }
    }

    public function _login()
    {
        $this->load->model('auth_model');
        try {


            $logRespond = $this->auth_model->userLogin();

            set_cookie('token', $logRespond['token'], 3600);
            set_cookie('user_id', $logRespond['userId'], 3600);
            // echo "<pre>";
            // print_r($logRespond);
            // echo "</pre>";
            // echo get_cookie('token');
            redirect('home');
        } catch (Exception $e) {
            redirect('auth');
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_rules('tglLahir', 'Tamggal', 'required|trim');
        $this->load->model('auth_model');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/register');
        } else {


            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $nameUser = $this->input->post('nama');
            $dob = $this->input->post('tglLahir');
            // 'image' => $this->input->post('image')
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
            //=================

            // $image = $_FILES['image'];
            // $imgPath = 'D:\KULIAH\Semester 5\RPL\Projek\pantecar-backend-master\data\images\File';
            // if ($image = '') {
            // } else {
            //     $config['upload_path'] = $imgPath;
            //     $config['allowed_types'] = 'jpg|png';
            //     $this->load->library('upload', $config);
            //     if (!$this->upload->do_upload('image')) {
            //         echo "upload gagal";
            //         die();
            //     } else {
            //         $image = $this->upload->data('file_name');
            //     }
            // }
            $this->load->model('auth_model');
            $data = $this->auth_model->createUser($email, $password, $nameUser, $dob, $imgPath, $name);

            redirect('auth');
            // $send = $this->http_post("localhost:3000/api/v1/auth/signup-user", ($data), "multipart/form-data");
            // echo json_encode(array('respon' => $send), JSON_UNESCAPED_SLASHES);
        }
        // $this->load->model('auth_model');
        // $data = $this->auth_model->getAdmin();
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
    }
    public function logout()
    {
        delete_cookie("token");
        delete_cookie("user_id");
        redirect('auth');
    }
}
//================================================================================
    // public function http_post($url, $data, $datatype)
    // {
    //     $ch = curl_init();
    //     curl_setopt($ch, CURLOPT_URL, $url);
    //     curl_setopt($ch, CURLOPT_POST, 1);
    //     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    //     // curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:{$datatype}"));
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    //     $output = curl_exec($ch);
    //     curl_close($ch);
    //     return $output;
    // }

    // public function http_get($url)
    // {
    //     // persiapkan curl
    //     $ch = curl_init();

    //     // set url 
    //     curl_setopt($ch, CURLOPT_URL, $url);

    //     // return the transfer as a string 
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    //     // $output contains the output string 
    //     $output = curl_exec($ch);

    //     // tutup curl 
    //     curl_close($ch);

    //     // mengembalikan hasil curl
    //     return $output;
    // }



    // Data Parameter yang Dikirim oleh cURL
    //================================================================================