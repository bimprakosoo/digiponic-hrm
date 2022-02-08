<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifikasi extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('M_notifikasi');
  }

  public function get_notifikasi_hrd(){
    $notifikasi_list = $this->M_notifikasi->getAll('3')->result_array();
    $notifikasi_unread = $this->M_notifikasi->getUnreadNumber('3')->row_array();
    $data = ['data' => $notifikasi_list,
             'unread' => $notifikasi_unread['jumlah']];
    echo json_encode($data);
  }

  public function notification_read($role,$redirect){
    $this->M_notifikasi->updateUnreadNotifikasi($role);
    redirect($redirect);
  }
}

/* End of file Notifications.php */
 ?>