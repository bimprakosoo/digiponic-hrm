<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Search_model extends CI_Model
{

    function search_perusahaan($query)
    {
        $this->db->select("*");
        $this->db->from("perusahaan");
        if ($query != '') {
            $this->db->like('nama_perusahaan', $query);
            $this->db->or_like('industri', $query);
            $this->db->or_like('kota', $query);
        }
        $this->db->order_by('id', 'ASC');
        return $this->db->get();
    }
}
