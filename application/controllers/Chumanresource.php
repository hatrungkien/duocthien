<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Chumanresource extends CI_Controller {

    public $menu;

    function __construct() {
        parent::__construct();
        $this->db->query('SET SESSION sql_mode = ""');
        $this->load->library('auth');
        $this->load->library('lhumanresource');
        $this->load->library('session');
        $this->load->model('Human_Resource');
        $this->auth->check_admin_auth();
    }

    //Default loading for Customer System.
    public function danh_sach_nhan_vien() {
        $content = $this->lhumanresource->danh_sach_nhan_vien();
        //Here ,0 means array position 0 will be active class
        $this->template->full_admin_html_view($content);
    }

    public function cham_cong() {
        $content = $this->lhumanresource->cham_cong();
        //Here ,0 means array position 0 will be active class
        $this->template->full_admin_html_view($content);
    }

    public function bang_tong_hop_cong() {
        $content = $this->lhumanresource->bang_tong_hop_cong();
        //Here ,0 means array position 0 will be active class
        $this->template->full_admin_html_view($content);
    }

    public function tinh_luong() {
        $content = $this->lhumanresource->tinh_luong();
        //Here ,0 means array position 0 will be active class
        $this->template->full_admin_html_view($content);
    }

    public function danh_muc_chuc_vu() {
        $content = $this->lhumanresource->danh_muc_chuc_vu();
        //Here ,0 means array position 0 will be active class
        $this->template->full_admin_html_view($content);
    }
}
