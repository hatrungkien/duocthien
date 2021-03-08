<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Csystem extends CI_Controller {

    public $menu;

    function __construct() {
        parent::__construct();
        $this->db->query('SET SESSION sql_mode = ""');
        $this->load->library('auth');
        $this->load->library('lsystem');
        $this->load->library('session');
        $this->load->model('System');
        $this->auth->check_admin_auth();
    }

    //Default loading for Customer System.
    public function phan_quyen() {
        $content = $this->lsystem->phan_quyen();
        //Here ,0 means array position 0 will be active class
        $this->template->full_admin_html_view($content);
    }

    public function phan_quyen_nhanh() {
        $content = $this->lsystem->phan_quyen_nhanh();
        //Here ,0 means array position 0 will be active class
        $this->template->full_admin_html_view($content);
    }

    public function cau_hinh_he_thong() {
        $content = $this->lsystem->cau_hinh_he_thong();
        //Here ,0 means array position 0 will be active class
        $this->template->full_admin_html_view($content);
    }

    public function quy_uoc_so() {
        $content = $this->lsystem->quy_uoc_so();
        //Here ,0 means array position 0 will be active class
        $this->template->full_admin_html_view($content);
    }

    public function nhap_khau_duoc() {
        $content = $this->lsystem->nhap_khau_duoc();
        //Here ,0 means array position 0 will be active class
        $this->template->full_admin_html_view($content);
    }

    public function thiet_lap_tin_nhan() {
        $content = $this->lsystem->thiet_lap_tin_nhan();
        //Here ,0 means array position 0 will be active class
        $this->template->full_admin_html_view($content);
    }

    public function import_ton_duoc() {
        $content = $this->lsystem->import_ton_duoc();
        //Here ,0 means array position 0 will be active class
        $this->template->full_admin_html_view($content);
    }

    public function cau_hinh_vnpay() {
        $content = $this->lsystem->cau_hinh_vnpay();
        //Here ,0 means array position 0 will be active class
        $this->template->full_admin_html_view($content);
    }
}
