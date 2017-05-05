<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 19.03.2017
 * Time: 11:42
 */
defined('BASEPATH') OR exit('No direct script access allowed');

require_once 'application/class/User.php';

class Users_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get($username){
        $user = $this->db->where('username',$username) -> get('users');
        if($user->num_rows() > 0)
        {
            return $user->result('User')[0];
        }
        return null;
    }
    public function changePhoto($photo, $username)
    {
        $this->db->set('photo',$photo);
        $this->db->where('username',$username);
        $this->db->update('users');
    }

    public function verifySteamAccount(string $steamid)
    {
      $account = $this->db->where('steamid', $steamid)->get('steam_accounts');
      if($account->result()) return FALSE;
      else return TRUE;
    }

    public function getSteamAccount($username = '')
    {
      if(!$username || $username === ''){
        $username = $this->session->username;
      }
      $account = $this->db->where('username',$username)->get('steam_accounts');
      if($account->num_rows() > 0){
        return $account->row();
      }else{
        return false;
      }
    }

    public function connectSteamAccount(string $username,string $steamid64)
    {
      $steamid = $this->steamapi->toSteamID($steamid64);

      $data = [
        'username' => $username,
        'steamid' => $steamid,
        'steamid64' => $steamid64
      ];

      if($this->verifySteamAccount($steamid))
      {
        $this->db->insert('steam_accounts',$data);
        return TRUE;
      }else{
        return FALSE;
      }
    }
}
