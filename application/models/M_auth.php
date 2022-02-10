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
    $this->db->select('users.id,
    users.image,
    users.email,
    users.`password`,
    users.`status`,
    users.role_id,
    users.is_active,
    detail_karyawan.nama,
    detail_karyawan.id AS idusers,
    detail_karyawan.alamat_lengkap,
    detail_karyawan.jk,
    detail_karyawan.no_telp,
    detail_karyawan.tgl_lahir,
    perusahaan.nama_perusahaan,
    department.nama AS nama_departmen,
    divisi.nama AS nama_divisi,
    jabatan.nama AS nama_jabatan,
    posisi.nama AS nama_posisi,
    penempatan.nama AS nama_penempatan,
    golongan.nama AS nama_golongan');
    $this->db->from('users');
    $this->db->join('detail_karyawan', 'detail_karyawan.id = users.detail_karyawan_id', 'left'); // detail-karyawan
    $this->db->join('data_karyawan', 'data_karyawan.karyawan_id = detail_karyawan.id', 'left'); // data-karyawan
    $this->db->join('perusahaan', 'perusahaan.id = data_karyawan.perusahaan_id', 'left'); // perusahaan
    $this->db->join('department', 'department.id = data_karyawan.department_id', 'left'); // department
    $this->db->join('divisi', 'divisi.id = data_karyawan.divisi_id', 'left'); // divisi
    $this->db->join('jabatan', 'jabatan.id = data_karyawan.jabatan_id', 'left'); // jabatan
    $this->db->join('posisi', 'posisi.id = data_karyawan.posisi_id', 'left'); // posisi
    $this->db->join('penempatan', 'penempatan.id = data_karyawan.penempatan_id', 'left'); // penemapatan
    $this->db->join('golongan', 'golongan.id = data_karyawan.golongan_id', 'left'); // golongan
    $this->db->where('users.email',  $email);

    return $this->db->get()->row_array();
  }

  public function getUser_row()
  {
    // return $this->db->get_where('users', ['email' => $email])->row_array();
    $this->db->select('users.id,
    users.image,
    users.email,
    users.`password`,
    users.`status`,
    users.role_id,
    users.is_active,
    detail_karyawan.nama,
    detail_karyawan.id AS idusers,
    detail_karyawan.alamat_lengkap,
    detail_karyawan.jk,
    detail_karyawan.no_telp,
    detail_karyawan.tgl_lahir,
    perusahaan.nama_perusahaan,
    department.nama AS nama_departmen,
    divisi.nama AS nama_divisi,
    jabatan.nama AS nama_jabatan,
    posisi.nama AS nama_posisi,
    penempatan.nama AS nama_penempatan,
    golongan.nama AS nama_golongan');
    $this->db->from('users');
    $this->db->join('detail_karyawan', 'detail_karyawan.id = users.detail_karyawan_id', 'left'); // detail-karyawan
    $this->db->join('data_karyawan', 'data_karyawan.karyawan_id = detail_karyawan.id', 'left'); // data-karyawan
    $this->db->join('perusahaan', 'perusahaan.id = data_karyawan.perusahaan_id', 'left'); // perusahaan
    $this->db->join('department', 'department.id = data_karyawan.department_id', 'left'); // department
    $this->db->join('divisi', 'divisi.id = data_karyawan.divisi_id', 'left'); // divisi
    $this->db->join('jabatan', 'jabatan.id = data_karyawan.jabatan_id', 'left'); // jabatan
    $this->db->join('posisi', 'posisi.id = data_karyawan.posisi_id', 'left'); // posisi
    $this->db->join('penempatan', 'penempatan.id = data_karyawan.penempatan_id', 'left'); // penemapatan
    $this->db->join('golongan', 'golongan.id = data_karyawan.golongan_id', 'left'); // golongan
    $this->db->where('users.email', $this->session->userdata('email'));

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
