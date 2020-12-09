<?php

use GuzzleHttp\Client;

class car_model extends CI_Model
{
    private $_client;
    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost:3000/api/v1/car/'
        ]);
    }

    public function addCar($imgpath, $name)
    {
        // $image_path = $post_array['image']->getPathname();
        // $image_mime = $post_array['image']->getmimeType();
        // $image_org  = $post_array['image']->getClientOriginalName();
        $response = $this->_client->request('POST', '', [
            'multipart' => [
                [
                    'name' => 'carName',
                    'contents' => $this->input->post('nama')
                ],
                [
                    'name' => 'carBrand',
                    'contents' => $this->input->post('Merk')
                ],
                [
                    'name' => 'numberPlate',
                    'contents' => $this->input->post('plat')
                ],
                [
                    'name' => 'carType',
                    'contents' => $this->input->post('tipe')
                ],
                [
                    'name' => 'numberOfSeat',
                    'contents' => $this->input->post('kursi')
                ],
                [
                    'name' => 'fuelType',
                    'contents' => $this->input->post('bahanBakar')
                ],
                [
                    'name' => 'farePerDay',
                    'contents' => $this->input->post('tarif')
                ],
                [
                    'name' => 'carTransmission',
                    'contents' => $this->input->post('transmisi')
                ],
                [
                    'name' => 'images',
                    'contents' => fopen($imgpath . $name, 'r'),
                ]
            ],
            'headers' => [
                'Authorization' => 'Bearer ' . get_cookie('token')
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function getAllCar()
    {
        $resp = $this->_client->request('GET', 'cars');
        $result = json_decode($resp->getBody()->getContents(), true);
        $res = $result['data'];
        return $res['cars'];
    }

    public function getCarById()
    {
        $id = $this->input->post('carID');
        $resp = $this->_client->request('GET', $id);
        $result = json_decode($resp->getBody()->getContents(), true);
        $res = $result['data'];
        return $res;
    }
}
