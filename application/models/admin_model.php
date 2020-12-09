<?php

use GuzzleHttp\Client;

class admin_model extends CI_Model
{
    private $_client;
    public function __construct()
    {
        $this->load->helper('cookie');
        $this->_client = new Client([
            'base_uri' => 'http://localhost:3000/api/v1/admin/'
        ]);
    }

    public function getUnverified()
    {
        $kuki = get_cookie('token');
        $resp = $this->_client->request('GET', 'unverified-users', [
            'headers' => [
                'Authorization' => "Bearer {$kuki}"
            ]
        ]);
        $result = json_decode($resp->getBody()->getContents(), true);
        $res = $result['data'];
        return $res['unverifiedUsers'];
    }

    public function getAllAdmin()
    {
        $resp = $this->_client->request('GET', 'admins');
        $result = json_decode($resp->getBody()->getContents(), true);
        $res = $result['data'];
        return $res['admins'];
    }
    public function verifyUser($userId)
    {
        $resp = $this->_client->request('POST', 'verify-user', [
            'json' => [
                'userId' => $userId
            ],
            'headers' => [
                'Authorization' => "Bearer " . get_cookie('token')
            ]
        ]);
        $result = json_decode($resp->getBody()->getContents(), true);
        return $result;
    }
    public function getUnverifiedShop()
    {
        $kuki = get_cookie('token');
        $resp = $this->_client->request('GET', 'unverified-rental-shop', [
            'headers' => [
                'Authorization' => "Bearer {$kuki}"
            ]
        ]);
        $result = json_decode($resp->getBody()->getContents(), true);
        $res = $result['data'];
        return $res['unverifiedRentalShops'];
    }
    public function verifyShop($shopId)
    {
        $resp = $this->_client->request('POST', 'verify-rental-shop', [
            'json' => [
                'rentalShopId' => $shopId
            ],
            'headers' => [
                'Authorization' => "Bearer " . get_cookie('token')
            ]
        ]);
        $result = json_decode($resp->getBody()->getContents(), true);
        return $result;
    }
}
