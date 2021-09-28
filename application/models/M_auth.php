<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_auth extends CI_Model
{

public function login($username, $password){
    $data['status'] = FALSE;
    $check = $this->db->where('email', $username)->or_where('username', $username)->get('tbl_sys_user');
    if ($check->num_rows() > 0){
      $password_hash = $check->row()->password;
      $user_table = $check->row()->user_table;
      if (password_verify($password, $password_hash) == TRUE){
        $data['value'] = $this->get_user($username, $user_table);
      } else {
        $data['value'] = [];
      }
    } else {
      $data['value'] = [];
    }
    return $data;
  }

  function get_user(){
      
  }

}