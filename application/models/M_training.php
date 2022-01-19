<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_training extends CI_Model
{
    public function getDataTraining()
    {
        return $this->db->get('data_training');
    }
}
