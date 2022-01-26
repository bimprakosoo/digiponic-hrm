<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_notifikasi extends CI_Model
{
    public function addNotif($data){
      $sql = $this->db->insert('notifikasi', $data);
      return $sql;
    }
    
}
