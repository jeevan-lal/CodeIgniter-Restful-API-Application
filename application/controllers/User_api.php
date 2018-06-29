<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/API_Controller.php';

class User_Api extends API_Controller
{
    public function __construct() {
        parent::__construct();
    }

    public function simple_api()
    {
        header("Access-Control-Allow-Origin: *");

        // API Configuration
        $this->_apiConfig([
            'methods' => ['POST', 'GET'], // Request Method Only POST
        ]);
    }
}