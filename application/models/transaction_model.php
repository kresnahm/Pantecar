<?php

use GuzzleHttp\Client;

class transaction_model extends CI_Model
{
    private $_client;
    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost:3000/api/v1/transaction/'
        ]);
    }

    public function getAllUnverifTrans()
    {
        $resp = $this->_client->request('GET', 'unverified', [
            'headers' => [
                'Authorization' => 'Bearer ' . get_cookie('token')
            ]
        ]);
        $result = json_decode($resp->getBody()->getContents(), true);
        $res = $result['data'];
        return $res['unverifiedTransactions'];
    }
    public function createTrans()
    {
        $resp = $this->_client->request('POST', '', [
            'json' => [
                'borrowDate' => $this->input->post('rentDate'),
                'returnDate' => $this->input->post('returnDate'),
                'carId' => $this->input->post('carId'),
                'rentalShopId' => $this->input->post('rentalId')

            ],
            'headers' => [
                'Authorization' => 'Bearer ' . get_cookie('token')
            ]
        ]);
        $result = json_decode($resp->getBody()->getContents(), true);
        $res = $result['data'];
        return $res['transaction'];
    }

    public function uploadRec($imgpath, $name)
    {
        $resp = $this->_client->request('POST', 'upload-receipt', [
            'multipart' => [
                [
                    'name' => 'transactionId',
                    'contents' => $this->input->post('transId')
                ],
                [
                    'name' => 'image',
                    'contents' => fopen($imgpath . $name, 'r'),
                ]
            ],
            'headers' => [
                'Authorization' => 'Bearer ' . get_cookie('token')
            ]
        ]);
        $result = json_decode($resp->getBody()->getContents(), true);
        $res = $result['data'];
        return $res;
    }

    public function verifyTrans()
    {
        $resp = $this->_client->request('POST', 'verify', [
            'json' => [
                'rentalShopId' => $this->input->post('rentalId'),
                'transactionId' => $this->input->post('transId')
            ],
            'headers' => [
                'Authorization' => 'Bearer ' . get_cookie('token')
            ]
        ]);
        $result = json_decode($resp->getBody()->getContents(), true);
        $res = $result['data'];
        return $res;
    }
}
