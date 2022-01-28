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
    // return $this->db->get_where('users', ['email' => $email])->row_array();
    $this->db->select('users.*,
    detail_karyawan.id AS idusers');
    $this->db->from('users');
    $this->db->join('detail_karyawan', 'detail_karyawan.id = users.detail_karyawan_id', 'left');
    $this->db->where('email',  $email);

    return $this->db->get()->row_array();
  }

  public function getUserRow()
  {
    // return $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
    $this->db->select('users.*,
    detail_karyawan.id AS idusers');
    $this->db->from('users');
    $this->db->join('detail_karyawan', 'detail_karyawan.id = users.detail_karyawan_id', 'left');
    $this->db->where('email', $this->session->userdata('email'));

    return $this->db->get()->row_array();
  }
}
