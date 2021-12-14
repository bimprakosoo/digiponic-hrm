<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_auth extends CI_Model
{

  public function login($username, $password)
  {

    $data['status'] = FALSE;
    $check = $this->db->where('email', $username)->or_where('username', $username)->get('tbl_sys_user');
    if ($check->num_rows() > 0) {
      $password_hash = $check->row()->password;
      $user_table = $check->row()->user_table;
      if (password_verify($password, $password_hash) == TRUE) {
        $data['value'] = $this->get_user($username, $user_table);
      } else {
        $data['value'] = [];
      }
    } else {
      $data['value'] = [];
    }
    return $data;
  }

  function get_user()
  {
  }

  // 
  public function postRegistration($data)
  {
    $this->db->insert('users', $data);
  }

  public function getUser($email)
  {
    return $this->db->get_where('users', ['email' => $email])->row_array();
  }

  public function getUserRow()
  {
    return $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
  }

  public function queryMenu($role_id)
  {
    $this->db->select('user_menu.id, menu');
    $this->db->from('user_menu');
    $this->db->join('user_access_menu', 'user_menu.id = user_access_menu.menu_id');
    $this->db->where('user_access_menu.role_id', $role_id);
    $this->db->order_by('user_access_menu.menu_id', 'ASC');

    return $this->db->get()->result_array();
  }
}
