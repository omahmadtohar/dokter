<?php

/**
 * 
 */
class M_tindakanDokter extends CI_Model
{
	
	
	function saveTindakanRalan($data)
    {
        $dokter = $this->db->insert('rawat_jl_dr', $data);
        return $dokter;
    }


    function isResepObatExists($no_resep) {
    $query = $this->db->get_where('resep_obat', array('no_resep' => $no_resep));
    return $query->num_rows() > 0;
    }

    function saveResepObat($data)
    {
        // Simpan data resep obat ke dalam tabel "resep_obat"
        $this->db->insert('resep_obat', $data);
        return $this->db->affected_rows() > 0;
    }

    function getLastResepNumber()
    {
        $this->db->select_max('no_resep');
        $this->db->like('no_resep', date('Ymd'), 'after');
        $query = $this->db->get('resep_dokter');
        $result = $query->row_array();
        
        if (!empty($result['no_resep'])) {
            return intval(substr($result['no_resep'], -4));
        } else {
            return 0;
        }
    }

    function checkExistingResepObat($no_rawat) 
    {
    $this->db->where('no_rawat', $no_rawat);
    $query = $this->db->get('resep_obat');
    return $query->num_rows() > 0;
    }

    public function getNextResepNumber()
    {
        $this->db->select_max('no_resep');
        $query = $this->db->get('resep_obat');

        $lastResepNumber = $query->row()->no_resep;
        if ($lastResepNumber) {
            $nextResepNumber = (int) substr($lastResepNumber, -4) + 1;
        } else {
            $nextResepNumber = 1;
        }

        return str_pad($nextResepNumber, 4, '0', STR_PAD_LEFT);
    }

    public function getExistingResepNumber($no_rawat)
    {
        $this->db->select('no_resep');
        $this->db->where('no_rawat', $no_rawat);
        $query = $this->db->get('resep_obat');

        return $query->row()->no_resep;
    }


    function saveResepDokter($data)
    {
        $no_resep = $data['no_resep'];
        
        // Loop melalui setiap obat dalam resep dan simpan sebagai record terpisah di tabel resep_dokter
        for ($i = 0; $i < count($data['kode_brng']); $i++) {
            $resepDokter = array(
                'no_resep' => $no_resep,
                'kode_brng' => $data['kode_brng'][$i],
                'jml' => $data['jml'][$i],
                'aturan_pakai' => $data['aturan_pakai'][$i]
            );

            // Selanjutnya, masukkan data resep dokter ke dalam tabel resep_dokter
            $this->db->insert('resep_dokter', $resepDokter);
        }
    }



    function saveSoap($data)
    {
        $soapDokter = $this->db->insert('pemeriksaan_ralan', $data);
        return $soapDokter;
    }

    function saveDiagnosa($data)
    {
        $saveDiagnosa = $this->db->insert('diagnosa_pasien', $data);
        return $saveDiagnosa;
    }

    function isRawatExist($no_rawat) {
        $query = $this->db->get_where('diagnosa_pasien', array('no_rawat' => $no_rawat));
        return $query->num_rows() > 0;
    }

    function getLastPrioritas($no_rawat) {
    // Ambil prioritas terakhir dari database untuk nomor rawat yang sama
    $query = $this->db->select_max('prioritas')->where('no_rawat', $no_rawat)->get('diagnosa_pasien');
    $row = $query->row();
    if ($row) {
        return $row->prioritas;
    }
    return null;
}




}