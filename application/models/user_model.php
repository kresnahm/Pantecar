<?php

use GuzzleHttp\Client;

class user_model extends CI_Model
{

    private $_client;
    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost:3000/api/v1/user/'
        ]);
    }
    public function getUserById($id)
    {
        $resp = $this->_client->request('GET', $id);
        $result = json_decode($resp->getBody()->getContents(), true);
        $res = $result['data'];
        return $res['user'];
    }
    public function checkShop($id)
    {
        $resp = $this->_client->request('GET', "check-rentalshop/{$id}");
        $result = json_decode($resp->getBody()->getContents(), true);
        $res = $result['data'];
        // var_dump($res);
        return $res;
    }
}
