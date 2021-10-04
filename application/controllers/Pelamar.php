<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pelamar extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('users', ['email' =>
        $this->session->userdata('email')])->row_array();
        // $this->load->view('template/headerauth');
        // $this->load->view('pelamar/admin');
        $this->load->view('landingpage/landingpage_view');
    }

    // public function upload_bukti($id_pembayaran)
    // {
    //     $id_siswa_jadwal = $this->input->post('id_siswa_jadwal');
    //     $config = array('upload_path' => 'assets/assets/images/pembayaran/', 'allowed_types' => 'jpg|jpeg|png|gif', 'encrypt_name' => TRUE);
    //     $this->upload->initialize($config);
    //     list($width, $height, $type, $attr) = getimagesize($_FILES['bukti_pembayaran']['tmp_name']);
    //     if ($width != $height) {
    //         $config['source_image'] = $_FILES['bukti_pembayaran']['tmp_name'];
    //         $config['x_axis'] = ($width - min($width, $height)) / 2;
    //         $config['y_axis'] = ($height - min($width, $height)) / 2;
    //         $config['maintain_ratio'] = FALSE;
    //         $config['width'] = min($width, $height);
    //         $config['height'] = min($width, $height);
    //         $this->load->library('image_lib', $config);
    //         $this->image_lib->crop();
    //     }
    //     // $old_files = $this->M_app->getDataByParameter('id_pembayaran_url', $id_pembayaran, 'tbl_siswa_pembayaran')->row()->bukti_pembayaran;
    //     if ($this->upload->do_upload('bukti_pembayaran')) {
    //         //        if (isset($old_files)) unlink('./' . $old_files);
    //         $data['bukti_pembayaran'] = $config['upload_path'] . $this->upload->data('file_name');
    //     } else {
    //         $data['bukti_pembayaran'] = isset($old_files) ? $old_files : NULL;
    //     }
    //     $this->M_siswa->uploadBuktiPembayaranSiswa($id_pembayaran, $data);
    //     redirect('pembayaran/jadwal_paket');
    // }
}
