<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 22.03.2017
 * Time: 17:06
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Migrate extends CI_Controller
{

    public function index()
    {
        $this->load->library('migration');

        if ($this->migration->current() === FALSE)
        {
            show_error($this->migration->error_string());
        }
    }

}