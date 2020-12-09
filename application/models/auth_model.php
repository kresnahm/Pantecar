<?php

use GuzzleHttp\Client;

class auth_model extends CI_Model
{
    private $_client;
    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost:3000/api/v1/auth/'
        ]);
    }

    // public function getAdmin()
    // {

    //     $response = $this->_client->request('GET', 'admins');

    //     $result = json_decode($response->getBody()->getContents(), true);
    //     return $result["data"]["admins"];
    // }

    public function createUser($email, $password, $nameUser, $dob, $imageDir, $imageName)
    {
        $response = $this->_client->request('POST', 'signup-user', [
            'multipart' => [
                [
                    'name' => 'email',
                    'contents' => $email
                ],
                [
                    'name' => 'password',
                    'contents' => $password
                ],
                [
                    'name' => 'nameUser',
                    'contents' => $nameUser
                ],
                [
                    'name' => 'dob',
                    'contents' => $dob
                ],
                [
                    'name' => 'image',
                    'contents' => $imageDir,
                    'filename' => $imageName
                ]
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function userLogin()
    {
        $response = $this->_client->request('POST', 'login-user', [
            'json' => [
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }

    public function adminLogin()
    {
        $response = $this->_client->request('POST', 'login-admin', [
            'json' => [
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }
}
