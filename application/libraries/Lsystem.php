<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Lsystem {
    public function phan_quyen() {
        $CI =& get_instance();
        $CI->load->model('System');
        $CI->load->model('Web_settings');
        $data = array(
            
        );
        $rt = $CI->parser->parse('system/phan_quyen',$data,true);
        return $rt;
    }
    
    public function phan_quyen_nhanh() {
        $CI =& get_instance();
        $CI->load->model('System');
        $CI->load->model('Web_settings');
        $data = array(
            
        );
        $rt = $CI->parser->parse('system/phan_quyen_nhanh',$data,true);
        return $rt;
    }

    public function cau_hinh_he_thong() {
        $CI =& get_instance();
        $CI->load->model('System');
        $CI->load->model('Web_settings');
        $data = array(
            
        );
        $rt = $CI->parser->parse('system/cau_hinh_he_thong',$data,true);
        return $rt;
    }

    public function quy_uoc_so() {
        $CI =& get_instance();
        $CI->load->model('System');
        $CI->load->model('Web_settings');
        $data = array(
            
        );
        $rt = $CI->parser->parse('system/quy_uoc_so',$data,true);
        return $rt;
    }

    public function nhap_khau_duoc() {
        $CI =& get_instance();
        $CI->load->model('System');
        $CI->load->model('Web_settings');
        $data = array(
            
        );
        $rt = $CI->parser->parse('system/nhap_khau_duoc',$data,true);
        return $rt;
    }
    
    public function thiet_lap_tin_nhan() {
        $CI =& get_instance();
        $CI->load->model('System');
        $CI->load->model('Web_settings');
        $data = array(
            
        );
        $rt = $CI->parser->parse('system/thiet_lap_tin_nhan',$data,true);
        return $rt;
    }

    public function import_ton_duoc() {
        $CI =& get_instance();
        $CI->load->model('System');
        $CI->load->model('Web_settings');
        $data = array(
            
        );
        $rt = $CI->parser->parse('system/import_ton_duoc',$data,true);
        return $rt;
    }

    public function cau_hinh_vnpay() {
        $CI =& get_instance();
        $CI->load->model('System');
        $CI->load->model('Web_settings');
        $data = array(
            
        );
        $rt = $CI->parser->parse('system/cau_hinh_vnpay',$data,true);
        return $rt;
    }
}
?>