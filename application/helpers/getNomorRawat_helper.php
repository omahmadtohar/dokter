<?php

if (!function_exists('get_no_rawat_from_url')) {
    function getNomorRawat()
    {
        $CI = &get_instance();
        $norawat1 = $CI->uri->segment(3);
        $norawat2 = $CI->uri->segment(4);
        $norawat3 = $CI->uri->segment(5);
        $norawat4 = $CI->uri->segment(6);

        return $norawat1 . '/' . $norawat2 . '/' . $norawat3 . '/' . $norawat4;
    }
}
