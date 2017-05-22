<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 22.05.2017
 * Time: 17:38
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Notification extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('youtube', 'eventstream', 'ion_auth'));
        $this->load->model('Site_model');
        //Setup a guid
    }
}