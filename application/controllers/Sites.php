<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Sites extends CI_Controller{
    private $data = [];
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('ion_auth','form_validation','blade','session'));
        $this->load->helper(array('url','language','cookie'));
        $this->load->model('Users_model');
        //Setup a guid
        $guid = uniqid();

        if($this->ion_auth->logged_in()){
            $user = $this->Users_model->get($this->session->username);
            $this->data['user'] = $user;
        }
    }

    public function index(){
        $this->blade->render('sites/index',$this->data);
    }
    public function about()
    {
      $this->blade->render('sites/about',$this->data);
    }
}
