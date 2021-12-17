<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_menu extends CI_Model
{
    // public function userMenu()
    // {
    //     return $this->db->get('user_menu');
    // }

    // public function userSubMenu()
    // {
    //     $this->db->select('user_sub_menu.*, user_menu.menu');
    //     $this->db->from('user_sub_menu');
    //     $this->db->join('user_menu', 'user_sub_menu.menu_id = user_menu.id');
    //     return $this->db->get();
    // }

    public function userMenu($role_id)
    {
        $this->db->select('user_sub_menu.id, title, sclass, url, icon, title_id,
        user_access_menu.id,
        user_access_menu.role_id,
        user_access_menu.menu_id');
        $this->db->from('user_sub_menu');
        $this->db->join('user_access_menu', 'user_sub_menu.id = user_access_menu.menu_id');
        $this->db->where('user_access_menu.role_id',  $role_id);

        return $this->db->get();
    }


    public function postMenu($data)
    {
        $this->db->insert('user_menu', $data);
    }

    public function postSubMenu($data)
    {
        $this->db->insert('user_sub_menu', $data);
    }
}
