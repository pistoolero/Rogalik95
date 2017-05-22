<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 19.05.2017
 * Time: 21:42
 */
defined('BASEPATH') OR exit('No direct script access allowed');



class Site_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAboutMe()
    {
        $result = $this->db->get('site')->result()[0]->about;

        return $result;
    }

     public function updateAboutMe($newtext)
    {
        $this->db->set('about', $newtext);
        $this->db->update('site');
        return $this->getAboutMe();
    }
}