<?php

use GuzzleHttp\Client;

class rental_model extends CI_Model
{
    private $_client;
    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost:3000/api/v1/rental-shop/'
        ]);
    }

    public function createShop()
    {
        $resp = $this->_client->request('POST', 'create', [
            'json' => [
                'name' => $this->input->post('nama'),
                'address' => $this->input->post('alamat'),
                'city' => $this->input->post('kota'),
                'province' => $this->input->post('provinsi'),
                'bank' => $this->input->post('bank'),
                'bankAccountNo' => $this->input->post('norek')

            ],
            'headers' => [
                'Authorization' => 'Bearer ' . get_cookie('token')
            ]
        ]);
        $result = json_decode($resp->getBody()->getContents(), true);
        return $result;
    }

    public function getShopById($id)
    {
        $resp = $this->_client->request('GET', $id, [
            'headers' => [
                'Authorization' => 'Bearer ' . get_cookie('token')
            ]
        ]);
        $result = json_decode($resp->getBody()->getContents(), true);
        $res = $result['data'];
        return $res['rentalShop'];
    }

    public function getShopByUid()
    {
        $resp = $this->_client->request('GET', 'by-user', [
            'headers' => [
                'Authorization' => 'Bearer ' . get_cookie('token')
            ]
        ]);
        $result = json_decode($resp->getBody()->getContents(), true);
        $res = $result['data'];
        return $res['rentalShop'];
    }
}
