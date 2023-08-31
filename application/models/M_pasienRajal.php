<?php

/**
 * 
 */
class M_pasienRajal extends CI_Model

{
	
	function getPasienRajal()
	{
		$tanggal = date('Y-m-d');
		$this->db->select('reg_periksa.no_rawat,reg_periksa.no_rkm_medis,pasien.nm_pasien,poliklinik.nm_poli,dokter.nm_dokter,penjab.png_jawab,reg_periksa.stts_daftar,reg_periksa.umurdaftar,reg_periksa.sttsumur,reg_periksa.status_bayar');
		$this->db->from('reg_periksa');
		$this->db->join('pasien', 'reg_periksa.no_rkm_medis=pasien.no_rkm_medis');
		$this->db->join('dokter', 'reg_periksa.kd_dokter=dokter.kd_dokter');
		$this->db->join('penjab', 'reg_periksa.kd_pj=penjab.kd_pj');
		$this->db->join('poliklinik', 'reg_periksa.kd_poli=poliklinik.kd_poli');
		// $this->db->where('reg_periksa.tgl_registrasi', $tanggal);
		$query = $this->db->get();
		return $query;
	}

	function riwayatPasien($no_rawat)
	{
	    $this->db->select('reg_periksa.no_rawat,reg_periksa.no_rkm_medis,pasien.nm_pasien,pasien.umur,poliklinik.nm_poli,dokter.nm_dokter,dokter.kd_dokter,penjab.png_jawab,reg_periksa.stts_daftar,reg_periksa.umurdaftar,reg_periksa.sttsumur,reg_periksa.status_bayar');
	    $this->db->from('reg_periksa');
	  	$this->db->join('pasien', 'reg_periksa.no_rkm_medis=pasien.no_rkm_medis');
		$this->db->join('dokter', 'reg_periksa.kd_dokter=dokter.kd_dokter');
		$this->db->join('penjab', 'reg_periksa.kd_pj=penjab.kd_pj');
		$this->db->join('poliklinik', 'reg_periksa.kd_poli=poliklinik.kd_poli');
	    $this->db->where('reg_periksa.no_rawat', $no_rawat);
	    $query = $this->db->get();
	    return $query->row_array(); // Menggunakan row_array() untuk mengembalikan hasil dalam bentuk array

	}

	function riwayatSoap($no_rawat)
	{
		$this->db->select('pemeriksaan_ralan.no_rawat,pemeriksaan_ralan.tgl_perawatan,pemeriksaan_ralan.jam_rawat,pemeriksaan_ralan.keluhan,pemeriksaan_ralan.pemeriksaan,pemeriksaan_ralan.rtl,pemeriksaan_ralan.penilaian,reg_periksa.no_rkm_medis,pasien.nm_pasien');
		$this->db->from('pemeriksaan_ralan');
		$this->db->join('reg_periksa', 'pemeriksaan_ralan.no_rawat=reg_periksa.no_rawat');
		$this->db->join('pasien', 'reg_periksa.no_rkm_medis=pasien.no_rkm_medis');
		$this->db->where('pemeriksaan_ralan.no_rawat', $no_rawat);
		$query = $this->db->get();
		return $query;
	}

	function riwayatPenyakit($no_rawat)
	{
	    $this->db->select('reg_periksa.no_rawat, pasien.nm_pasien, diagnosa_pasien.kd_penyakit, penyakit.nm_penyakit');
	    $this->db->from('reg_periksa');
	    $this->db->join('pasien', 'reg_periksa.no_rkm_medis = pasien.no_rkm_medis');
	    $this->db->join('diagnosa_pasien', 'reg_periksa.no_rawat = diagnosa_pasien.no_rawat');
	    $this->db->join('penyakit', 'diagnosa_pasien.kd_penyakit = penyakit.kd_penyakit');
	    $this->db->where('reg_periksa.no_rawat', $no_rawat);
	    $this->db->order_by('reg_periksa.no_rawat', 'DESC');
	    $this->db->limit(3); 
	    $query = $this->db->get();
	    return $query->result_array();
	}

	function getPenyakit() {
        $this->db->select('penyakit.kd_penyakit,penyakit.nm_penyakit');
        $this->db->from('penyakit');
        $query = $this->db->get();
        return $query;
    }

    function getTindakanDokter() {
	    // Ambil data tindakanDokter dari database
	    $this->db->select('jns_perawatan.kd_jenis_prw,jns_perawatan.nm_perawatan,jns_perawatan.total_byrdr,jns_perawatan.bhp, jns_perawatan.material');
	    $this->db->from('jns_perawatan');
	    $query = $this->db->get();
	    return $query->result_array();
	}

	function showTarif($kd_jenis_prw)
	{
	    $this->db->select('jns_perawatan.kd_jenis_prw,jns_perawatan.nm_perawatan,jns_perawatan.material,jns_perawatan.bhp,jns_perawatan.tarif_tindakandr, jns_perawatan.kso,jns_perawatan.total_byrdr, jns_perawatan.menejemen');
	    $this->db->from('jns_perawatan');
	    $this->db->where('jns_perawatan.kd_jenis_prw', $kd_jenis_prw); // Menambahkan kondisi WHERE sesuai $kd_jenis_prw
	    $query = $this->db->get();
	    
	    return $query->row_array();
	}

	function showDataResep()
	{
		$this->db->select('gudangbarang.kode_brng,databarang.nama_brng,kodesatuan.satuan,databarang.ralan,bangsal.kd_bangsal,gudangbarang.stok');
	    $this->db->from('gudangbarang');
	    $this->db->join('databarang', 'gudangbarang.kode_brng=databarang.kode_brng');
	    $this->db->join('kodesatuan', 'databarang.kode_sat=kodesatuan.kode_sat');
	    $this->db->join('bangsal', 'gudangbarang.kd_bangsal=bangsal.kd_bangsal');
	    $query = $this->db->get();
	    return $query->result_array();
	}

	function getAturanPakai()
	{
		$this->db->select('*');
		$this->db->from('master_aturan_pakai');
		$query  = $this->db->get();
		return $query->result_array();

	}

	function biayaRawat($no_rawat)
	{
		$this->db->select('rawat_jl_dr.no_rawat,rawat_jl_dr.biaya_rawat,rawat_jl_dr.tgl_perawatan,rawat_jl_dr.jam_rawat,reg_periksa.no_rkm_medis,pasien.nm_pasien,dokter.nm_dokter, jns_perawatan.nm_perawatan');
		$this->db->from('rawat_jl_dr');
		$this->db->join('jns_perawatan', 'rawat_jl_dr.kd_jenis_prw=jns_perawatan.kd_jenis_prw');
		$this->db->join('reg_periksa','rawat_jl_dr.no_rawat=reg_periksa.no_rawat');
		$this->db->join('dokter','reg_periksa.kd_dokter=dokter.kd_dokter');
		$this->db->join('pasien','reg_periksa.no_rkm_medis=pasien.no_rkm_medis');
		$this->db->where('rawat_jl_dr.no_rawat', $no_rawat);
		$query = $this->db->get();
		return $query;
	}

	function biayaObat($no_rawat)
	{
		$this->db->select('resep_dokter.no_resep,resep_dokter.kode_brng,databarang.nama_brng,databarang.ralan,resep_dokter.jml,resep_dokter.aturan_pakai,resep_obat.no_rawat,reg_periksa.no_rkm_medis,pasien.nm_pasien');
		$this->db->from('resep_obat');
		$this->db->join('resep_dokter','resep_obat.no_resep=resep_dokter.no_resep');
		$this->db->join('databarang','resep_dokter.kode_brng=databarang.kode_brng');
		$this->db->join('reg_periksa','resep_obat.no_rawat=reg_periksa.no_rawat');
		$this->db->join('pasien','reg_periksa.no_rkm_medis=pasien.no_rkm_medis');
		$this->db->where('resep_obat.no_rawat', $no_rawat);
		$query = $this->db->get();
		return $query;
	}


	function permintaanResep($no_rawat)
	{
		$this->db->select('resep_obat.no_resep,resep_obat.status,resep_obat.no_rawat,resep_obat.tgl_peresepan,resep_obat.jam_peresepan,reg_periksa.kd_dokter,dokter.nm_dokter');
		$this->db->from('resep_obat');
		$this->db->join('reg_periksa','resep_obat.no_rawat=reg_periksa.no_rawat');
		$this->db->join('dokter','reg_periksa.kd_dokter=dokter.kd_dokter');
		$this->db->where('resep_obat.no_rawat', $no_rawat);
		$query = $this->db->get();
		return $query;
	}

	function penyakitPasien($no_rawat)
	{
		$this->db->select('diagnosa_pasien.no_rawat,diagnosa_pasien.kd_penyakit,diagnosa_pasien.status,diagnosa_pasien.prioritas,diagnosa_pasien.status_penyakit,penyakit.nm_penyakit,reg_periksa.no_rkm_medis,pasien.nm_pasien,reg_periksa.kd_dokter,dokter.nm_dokter');
		$this->db->from('diagnosa_pasien');
		$this->db->join('reg_periksa','diagnosa_pasien.no_rawat=reg_periksa.no_rawat');
		$this->db->join('penyakit','diagnosa_pasien.kd_penyakit=penyakit.kd_penyakit');
		$this->db->join('pasien','reg_periksa.no_rkm_medis=pasien.no_rkm_medis');
		$this->db->join('dokter','reg_periksa.kd_dokter=dokter.kd_dokter');
		$this->db->where('diagnosa_pasien.no_rawat', $no_rawat);
		$query 	= $this->db->get();
		return $query;
	}

	function hapusDataSoap($jam) {

        $this->db->where('jam_rawat', $jam);
        $this->db->delete('pemeriksaan_ralan');
    }

    function hapusDataBilling($jam) {

        $this->db->where('jam_rawat', $jam);
        $this->db->delete('rawat_jl_dr');
    }

    function hapusDataObat($kode_brng, $jml)
	{
	    $this->db->where(array(
	        'kode_brng' => $kode_brng,
	        'jml' => $jml
	    ));
	    $this->db->delete('resep_dokter');
	}

	function hapusDataPenyakit($kd_penyakit,$no_rawat) 
	{
	$this->db->where(array(
	        'kd_penyakit' => $kd_penyakit,
	        'no_rawat' => $no_rawat
	    ));
	    $this->db->delete('diagnosa_pasien');
	}

	
}