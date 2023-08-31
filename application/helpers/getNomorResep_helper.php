<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('getNomorResep')) {
    function getNomorResep()
    {
        $CI = &get_instance();
        
        $CI->load->database();
        $CI->db->select_max('no_resep');
        $CI->db->where('no_resep', 'LIKE', date('Ymd') . '%');
        $query = $CI->db->get('resep_dokter');
        $result = $query->row_array();
        
        if (!empty($result['no_resep'])) {
            $lastResepNumber = intval(substr($result['no_resep'], -4));
            $nextResepNumber = $lastResepNumber + 1;
        } else {
            $nextResepNumber = 1;
        }

        $nextResepNumberPadded = str_pad($nextResepNumber, 4, '0', STR_PAD_LEFT);
        $nextNomorResep = date('Ymd') . $nextResepNumberPadded;

        return $nextNomorResep;
    }
}


