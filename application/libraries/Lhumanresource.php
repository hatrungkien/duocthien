<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Lhumanresource {
    public function danh_sach_nhan_vien() {
        $CI =& get_instance();
        $CI->load->model('Human_Resource');
        $CI->load->model('Web_settings');
        $data = array(
            
        );
        $rt = $CI->parser->parse('humanresource/danh_sach_nhan_vien',$data,true);
        return $rt;
    }
    
    public function cham_cong() {
        $CI =& get_instance();
        $CI->load->model('Human_Resource');
        $CI->load->model('Web_settings');
        $data = array(
            
        );
        $rt = $CI->parser->parse('humanresource/cham_cong',$data,true);
        return $rt;
    }
    
    public function bang_tong_hop_cong() {
        $CI =& get_instance();
        $CI->load->model('Human_Resource');
        $CI->load->model('Web_settings');
        $data = array(
            
        );
        $rt = $CI->parser->parse('humanresource/bang_tong_hop_cong',$data,true);
        return $rt;
    }

    public function tinh_luong() {
        $CI =& get_instance();
        $CI->load->model('Human_Resource');
        $CI->load->model('Web_settings');
        $data = array(
            
        );
        $rt = $CI->parser->parse('humanresource/tinh_luong',$data,true);
        return $rt;
    }

    public function danh_muc_chuc_vu() {
        $CI =& get_instance();
        $CI->load->model('Human_Resource');
        $CI->load->model('Web_settings');
        $data = array(
            
        );
        $rt = $CI->parser->parse('humanresource/danh_muc_chuc_vu',$data,true);
        return $rt;
    }
}
?>