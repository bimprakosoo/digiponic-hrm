<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_probation extends CI_Model
{
    public function UpdateProbationData($updateStatus, $IDkaryawan)
    {
        $this->db->set($updateStatus);
        $this->db->where('probation_id', $IDkaryawan);
        $this->db->update('data_probation');
    }

    public function update_dataStatus($updateStatus, $IDProbation)
    {
        $this->db->set($updateStatus);
        $this->db->where('probation_id', $IDProbation);
        $this->db->update('data_probation');
    }
    public function update_dataStatus2($updateStatus, $IDProbation)
    {
        $this->db->set($updateStatus);
        $this->db->where('id', $IDProbation);
        $this->db->update('probation');
    }

    public function add_dataToDetail_Karyawan($add_dataToDetail)
    {
        $this->db->insert('detail_karyawan', $add_dataToDetail);
    }

    public function add_dataToData_Karyawan($add_dataToData)
    {
        $this->db->insert('data_karyawan', $add_dataToData);
    }

    public function add_dataToUsers($data)
    {
        $this->db->insert('users', $data);
    }
}
