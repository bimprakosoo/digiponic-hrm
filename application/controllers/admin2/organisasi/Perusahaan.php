<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Perusahaan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_organisasi');
        $this->load->model('M_Pelamar');
    }

    public function index()
    {
        $data['perusahaan'] = $this->M_organisasi->getDataPerusahaan()->result_array();
        $data['provinsi'] = $this->M_Pelamar->getDataprov();

        $this->load->view('template/template_admin/sidebar_ad');
        $this->load->view('template/template_admin/header_ad');
        $this->load->view('dashboard/organisasi/v_perusahaan', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    function fetch()
    {
        $output = '';
        $query = '';
        $this->load->model('M_organisasi');
        if ($this->input->post('query')) {
            $query = $this->input->post('query');
        }
        $data = $this->M_organisasi->search_perusahaan($query);
        $output .= '
  
      </tr>
  ';
        if ($data->num_rows() > 0) {
            $i = 1;
            foreach ($data->result() as $row) {
                $output .= '
      <tr>
       <td>' . $i . '</td>
       <td>' . $row->nama_perusahaan . '</td>
       <td>' . $row->industri . '</td>
       <td>' . $row->kota . '</td>
       <td>' . $row->email . '</td>
       <td>' . $row->alamat . '</td>
       <td>' . $row->telp . '</td>
       <td> <a href="" class="btn btn-primary">Edit</a></td>
      </tr>
    ';
                $i++;
            }
        } else {
            $output .= '<tr>
       <td colspan="8">No Data Found</td>
      </tr>';
        }
        $output .= '</table>';
        echo $output;
    }

    // insert data pelamar
    function create_perusahaan()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required');                // 2

        if (isset($_POST['submit'])) {

            $data = array(
                // 'id'       =>  $this->input->post('id'),
                'nama_perusahaan'       =>  $this->input->post('perusahaan'),
                'industri'       =>  $this->input->post('industri'),
                'kota'       =>  $this->input->post('kota'),
                'email'       =>  $this->input->post('email'),
                'alamat'       =>  $this->input->post('alamat'),
                'telp'       =>  $this->input->post('telp'),
            );
            // var_dump($data);
            // die;

            $insert = $this->M_organisasi->postDataPerusahaan($data);

            if ($insert) {
                $this->session->set_flashdata('status', 'Insert Data Berhasil');
                redirect('admin2/organisasi/perusahaan');
            } else {
                $this->session->set_flashdata('status', 'Insert Data Gagal');
                redirect('admin2/organisasi/perusahaan');
            }
        } else {
            redirect('admin2/organisasi/perusahaan');
        }
    }
    public function getKota()
    {
        $idprov =   $this->input->post('id');
        $data   =   $this->M_Pelamar->getDataKota($idprov);
        $output =   '<option value="">-- Pilih Kota --</option>';
        foreach ($data as $row) {
            $output .= ' <option value="' . $row->id . '">' . $row->nama . ' </option>';
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }
}
