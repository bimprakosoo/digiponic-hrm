<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_Admin extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('upload');
    }

    // get data lowongan
    public function lowongan_ad()
    {
        $this->db->select('lowongan.*,
        perusahaan.industri, perusahaan.nama_perusahaan');
        $this->db->from('lowongan');
        $this->db->join('perusahaan', 'perusahaan.id = lowongan.perusahaan_id', 'left');

        // $this->db->where('role_id', 1);
        return $this->db->get()->result_array();
    }
    //edit lowongan
    public function edit($id)
    {
        $this->db->where('id_lowongan', $id);
        return $this->db->get('lowongan')->row_array();
    }
    public function update_low($id_lowongan, $data)
    {
        $this->db->where('id_lowongan', $id_lowongan);
        $this->db->update('lowongan', $data);
    }
    // hapus lowongan
    public function hapus($id)
    {
        $this->db->where('id_lowongan', $id);
        $this->db->delete('lowongan');
    }

    // get jumlah data lowongan
    public function countAllLowongan()
    {
        return $this->db->get('lowongan')->num_rows();
    }

    // get data lamaran masuk
    public function lamaran_masuk()
    {
        $this->db->select('*');
        $this->db->from('data_lamaran');
        // $this->db->where('role_id', 1);
        return $this->db->get();
    }

    // sementara nama karyawan di ambil dari tbl [users]
    public function data_karyawan()
    {
        $this->db->select('users.nama AS karyawan,
        perusahaan.nama_perusahaan AS namaPerusahaan,
        department.nama AS namaDepartement,
        divisi.nama AS namaDivisi,
        jabatan.nama AS namaJabatan,
        posisi.nama AS namaPosisi,
        penempatan.nama AS namaPenempatan');
        $this->db->from('data_karyawan');

        $this->db->join('users', 'users.id = data_karyawan.karyawan_id');
        $this->db->join('perusahaan', 'perusahaan.id = data_karyawan.perusahaan_id');
        $this->db->join('department', 'department.id = data_karyawan.department_id');
        $this->db->join('divisi', 'divisi.id = data_karyawan.divisi_id');
        $this->db->join('jabatan', 'jabatan.id = data_karyawan.jabatan_id');
        $this->db->join('posisi', 'posisi.id = data_karyawan.posisi_id');
        $this->db->join('penempatan', 'penempatan.id = data_karyawan.penempatan_id');

        return $this->db->get();
    }

    // sementara => ambil dari detail karyawan
    public function allDataPosisiKaryawan()
    {
        $this->db->select('detail_karyawan.nama AS karyawan,
        perusahaan.nama_perusahaan AS namaPerusahaan,
        department.nama AS namaDepartement,
        divisi.nama AS namaDivisi,
        jabatan.nama AS namaJabatan,
        posisi.nama AS namaPosisi,
        penempatan.nama AS namaPenempatan,
        golongan.nama AS namaGolongan');
        $this->db->from('data_karyawan');
        $this->db->join('detail_karyawan', 'detail_karyawan.id = data_karyawan.karyawan_id', 'left');
        $this->db->join('perusahaan', 'perusahaan.id = data_karyawan.perusahaan_id', 'left');
        $this->db->join('department', 'department.id = data_karyawan.department_id', 'left');
        $this->db->join('divisi', 'divisi.id = data_karyawan.divisi_id', 'left');
        $this->db->join('jabatan', 'jabatan.id = data_karyawan.jabatan_id', 'left');
        $this->db->join('posisi', 'posisi.id = data_karyawan.posisi_id', 'left');
        $this->db->join('penempatan', 'penempatan.id = data_karyawan.penempatan_id', 'left');
        $this->db->join('golongan', 'golongan.id = data_karyawan.golongan_id', 'left');


        return $this->db->get();
    }
    public function allDataDetailKaryawan()
    {
        $this->db->select('*');
        $this->db->from('detail_karyawan');

        return $this->db->get();
    }

    public function get_data_lamaran()
    {
        $this->db->select('*');
        $this->db->from('data_lamaran');

        return $this->db->get();
    }

    public function terima_pelamar($data)
    {
        // pindah data karywaan yang diterima ke tbl_karyawan
        $this->db->insert('detail_karyawan', $data);
    }

    public function terima_pelamar2($data)
    {
        // pindah data karywaan yang diterima ke tbl_karyawan
        $this->db->insert('data_karyawan_training', $data);
    }

    public function delete_pelamar($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('lamaran');
    }

    public function update_status_pelamar($update_status, $diterima_id)
    {
        // update status dari data pelamaran [1 => diterima | 2 => ditolak]

        $this->db->set($update_status);
        $this->db->where('id', $diterima_id);
        $this->db->update('data_lamaran');
    }

    function file_image()
    {
        // upload file surat lamaran--------------------------------------------------------------------------------------
        $config['upload_path'] = "./assets/image/lowongan/";
        $config['allowed_types'] = "jpg|jpeg|png|svg";
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('image')) {
            // salah
            $response['pesan'] = 'gambar gagal' . $this->upload->display_errors();
            $response['hasil'] = false;
            echo json_encode($response);
        } else {
            $data_upload    = $this->upload->data();
            $file_image      = $data_upload['file_name'];
        }
        return $file_image;
    }



    function file_image_ubah($data3)
    {
        // cek jika gambar diubah
        $upload_img = $_FILES['image']['name'];

        if ($upload_img) {
            $config['upload_path'] = './assets/image/lowongan/';
            $config['allowed_types'] = 'jpg|jpeg|png|svg';
            $config['max_size']     = '2048';

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('image')) {
                $old_img = $data3['lowongan']['image'];
                if ($old_img != 'default.jpg') {
                    unlink(FCPATH . './assets/image/lowongan/' . $old_img);
                }
                $new_img = $this->upload->data('file_name');
                $this->db->set('image', $new_img);
            } else {
                echo $this->upload->display_errors();
            }
        }
        return $new_img;
    }

    public function getDataPerusahaan()
    {
        return $this->db->get('perusahaan');
    }

    public function getDataDepartment()
    {
        return $this->db->get('department');
    }

    public function getDataGolongan()
    {
        return $this->db->get('golongan');
    }

    public function insert_DataMutasi($data)
    {
        $this->db->insert('mutasi', $data);
    }

    //sementara
    public function insert_DataKaryawan($data)
    {
        $this->db->insert('data_karyawan', $data);
    }

    public function get_DataMutasi()
    {
        $this->db->select('*');
        $this->db->from('mutasi');

        return $this->db->get();
    }

    // Artikel ---------------------------------------------------------------------------------------------------------------------------------
    public function postDataArtikel($data)
    {
        $this->db->insert('artikel', $data);
    }

    public function getDataArtikel()
    {
        $this->db->select('*');
        $this->db->from('artikel');

        return $this->db->get();
    }
    function file_image1()
    {
        $config['upload_path'] = "./assets/image/artikel/img/";
        $config['allowed_types'] = "jpg|jpeg|png|svg";
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('image')) {
            // salah
            $response['pesan'] = 'gambar gagal' . $this->upload->display_errors();
            $response['hasil'] = false;
            echo json_encode($response);
        } else {
            $data_upload    = $this->upload->data();
            $file_image1      = $data_upload['file_name'];
        }
        return $file_image1;
    }

    public function editArtikel($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('artikel')->row_array();
    }
    public function update_artikel($id_dept, $data)
    {
        $this->db->where('id', $id_dept);
        $this->db->update('artikel', $data);
    }
    public function hapusartiklel($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('artikel');
    }

    // -----------------------------------------------------------------------------------------------------------


    // Acara Dan Rapat---------------------------------------------------------------------------------------
    public function postDataAcaraRapat($data)
    {
        $this->db->insert('acara_rapat', $data);
    }
    public function getDataAcara()
    {
        $this->db->select('*');
        $this->db->from('acara_rapat');

        return $this->db->get();
    }
}
