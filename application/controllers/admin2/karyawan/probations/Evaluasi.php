<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Evaluasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_probation');
    }

    public function EvaluasiProbation($IDkaryawan)
    {
        $data = $this->db->get_where('data_probation', ['probation_id' => $IDkaryawan])->result();
        $updateStatus = array(
            'status' => 2,
        );

        $this->M_probation->UpdateProbationData($updateStatus, $IDkaryawan);

        redirect('admin2/karyawan/probation/');
    }

    public function ProbationLulus($IDProbation)
    {
        $data = $this->db->get_where('probation', ['id' => $IDProbation])->result();

        // to detail_karyawan
        foreach ($data as $r) {
            $add_dataToDetail = [
                'id'                    =>  $this->input->post('IDkaryawan'),
                'nama'                  =>  $r->nama,
                'provinsi'              =>  $r->provinsi,
                'kota'                  =>  $r->kota,
                'kecamatan'             =>  $r->kecamatan,
                'alamat_lengkap'        =>  $r->alamat_lengkap,
                'jk'                    =>  $r->jk,
                'tgl_lahir'             =>  $r->tgl_lahir,
                'no_telp'               =>  $r->no_telp,
                'pendidikan_terakhir'   =>  $r->pendidikan_terakhir
            ];
            $this->M_probation->add_dataToDetail_Karyawan($add_dataToDetail);
        }

        // to data_karyawan
        foreach ($data as $r) {
            $add_dataToData = [
                'karyawan_id'       =>  $this->input->post('IDkaryawan'),
                'perusahaan_id'     =>  $r->perusahaan_id,
                'department_id'     =>  $r->department_id,
                'divisi_id'         =>  $r->divisi_id,
                'jabatan_id'        =>  $r->jabatan_id,
                'posisi_id'         =>  $r->posisi_id,
                'penempatan_id'     =>  $r->penempatan_id,
                'golongan_id'       =>  $r->golongan_id
            ];
            $this->M_probation->add_dataToData_Karyawan($add_dataToData);
        }

        // to users [create accouunt]
        $data = [
            // 'nama'  =>  htmlspecialchars($this->input->post('nama', true)),
            'email' =>  htmlspecialchars($this->input->post('IDkaryawan') . '@gmail.com'),
            'image' =>  'default.jpg',
            'password'  =>  password_hash('12345', PASSWORD_DEFAULT),
            'role_id'   =>  $this->input->post('role'),
            'is_active' =>  1, // 1=>aktiv | 0=>nonaktiv
            'date_created'  =>  time(),
            'detail_karyawan_id' => $this->input->post('IDkaryawan'),
        ];

        $this->M_probation->add_dataToUsers($data);


         // update status dari data probation [3 => selesai] 
         $updateStatus = array(
            'status' => 3
        );
        $this->M_probation->update_dataStatus($updateStatus, $IDProbation);
        $this->M_probation->update_dataStatus2($updateStatus, $IDProbation);

        redirect('admin2/karyawan/probation/');
    }

    // public function ProbationGagal()
    // {
    // }
}
