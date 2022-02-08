<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_notifikasi extends CI_Model
{
    public function addNotif($data){
      $sql = $this->db->insert('notifikasi', $data);
      return $sql;
    }

    public function getAll($role){
      $this->db->where('role_id',$role);
      $this->db->where('status',1);
      $this->db->limit(5);
      $this->db->order_by('created_at','DESC');
      $sql = $this->db->get('notifikasi');
      return $sql;
  }

  public function getUnreadNumber($role){
    $this->db->select('COUNT(id) as jumlah');
    $this->db->where('role_id',$role); 
    $this->db->where('read_status',0);
    $this->db->where('status',1);
    $sql = $this->db->get('notifikasi');
    return $sql;
  }
    
}
