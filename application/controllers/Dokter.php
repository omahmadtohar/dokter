<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pasienRajal');
		$this->load->model('m_tindakanDokter');
		$this->load->helper('getNomorResep_helper');
		date_default_timezone_set("Asia/Jakarta");
	}

	public function index()
	{
		$data['pasienRajal'] = $this->m_pasienRajal->getPasienRajal()->result();
		$this->load->view('menu/header');
		$this->load->view('dokter/pasien_rajal', $data);
		$this->load->view('menu/footer');
	}

	public function loadPasienData()
		{
		    $data['pasienRajal'] = $this->m_pasienRajal->getPasienRajal(); // Ganti dengan pemanggilan data sesuai dengan model Anda

		    $html = '';
		    $no = 1;
		    foreach ($data['pasienRajal']->result() as $row) {
		        $html .= '<tr>';
		        $html .= '<td>' . $no++ . '</td>';
		        $html .= '<td>' . $row->no_rkm_medis . '</td>';
		        $html .= '<td><a href="' . base_url('dokter/soapDokter/' . $row->no_rawat) . '">' . $row->nm_pasien . '</a></td>';
		        $html .= '<td>' . $row->umurdaftar . ' ' . $row->sttsumur . '</td>';
		        $html .= '<td>' . $row->nm_poli . '</td>';
		        $html .= '<td>' . $row->nm_dokter . '</td>';
		        $html .= '<td>' . $row->png_jawab . '</td>';
		        $html .= '<td>' . $row->stts_daftar . '</td>';
		        $html .= '<td>' . $row->status_bayar . '</td>';
		        $html .= '</tr>';
		    }

		    echo $html;
		}



	public function soapDokter($no_rawat)
	{
	    $no_rawat = getNomorRawat();

	    // Set session data for no_rawat
  		$this->session->set_userdata('no_rawat', $no_rawat);

	    // Ambil nomor resep terakhir dari database
	    $lastResepNumberFromDB = $this->m_tindakanDokter->getLastResepNumber();

	    // Tambah 1 angka untuk nomor resep berikutnya
	    $nextResepNumber = $lastResepNumberFromDB + 1;

	    // Format ulang nomor resep dengan leading zero pada 4 digit terakhir
	    $no_resep = date('Ymd') . str_pad($nextResepNumber, 4, '0', STR_PAD_LEFT);

	    $data['no_resep'] = $no_resep; 
	    $data['pasien'] = $this->m_pasienRajal->riwayatPasien($no_rawat);
	    $data['pemeriksaan_ralan'] = $this->m_pasienRajal->riwayatSoap($no_rawat);
	    $data['biayaRawat'] = $this->m_pasienRajal->biayaRawat($no_rawat);
	    $data['biayaObat'] = $this->m_pasienRajal->biayaObat($no_rawat);
	    $data['permintaanResep'] = $this->m_pasienRajal->permintaanResep($no_rawat);
	    $data['penyakitPasien'] = $this->m_pasienRajal->penyakitPasien($no_rawat);
	    $data['penyakit'] = $this->m_pasienRajal->getPenyakit();
	    $data['tindakanDokter'] = $this->m_pasienRajal->getTindakanDokter();
	    $data['pasienRajal'] = $this->m_pasienRajal->getPasienRajal();
	    $data['resepDokter'] = $this->m_pasienRajal->showDataResep($no_resep);
	    $data['masterAturanPakai'] = $this->m_pasienRajal->getAturanPakai();  
	    $this->load->view('menu/header');
	    $this->load->view('dokter/v_soapDokter', $data);
	    $this->load->view('menu/footer');
	}

	public function simpanSoap()
	{
		$no_rawat		= getNomorRawat();
		$petugas 		= $this->input->post('kd_dokter', true);
		$no_rawat		= $this->input->post('no_rawat',true);
		$keluhan 		= $this->input->post('keluhan', true);
		$pemeriksaan 	= $this->input->post('pemeriksaan', true);
		$rtl 			= $this->input->post('rtl', true);
		$penilaian 		= $this->input->post('penilaian', true);

		$data = array (
			'no_rawat'			=> $no_rawat,
			'keluhan'			=> $keluhan,
			'pemeriksaan' 		=> $pemeriksaan,
			'rtl'				=> $rtl,
			'penilaian'			=> $penilaian,
			'nip'				=> $petugas,
			'tgl_perawatan'     => date('Y-m-d'),
	    	'jam_rawat'         => date('H:i:s')
		);

		$saveSoap = $this->m_tindakanDokter->saveSoap($data);

		if ($saveSoap) {
		    $redirectUrl = 'dokter/soapDokter/' . $no_rawat; // Ganti 'dokter/soapDokter/' sesuai dengan URL Anda
		    redirect($redirectUrl);
		} else {
		    $this->session->set_flashdata('error', 'Gagal mengupdate data.');
		    redirect('dokter'); // Jika gagal, kembali ke halaman dokter
		}
	}

	public function saveTindakanDokter()
	{
	    $no_rawat = getNomorRawat();
	    $no_rawat				= $this->input->post('no_rawat');
	    $kd_jenis_prw_array 	= $this->input->post('kd_jenis_prw'); // Menerima array dari form
	    $kd_dokter 				= $this->input->post('kd_dokter');
	    
	    foreach ($kd_jenis_prw_array as $kd_jenis_prw) {
	        // Mengambil data dari tabel jns_perawatan
	        $dataTarif = $this->m_pasienRajal->showTarif($kd_jenis_prw);
	        
	        $material1 = $dataTarif['material'];
			$bhp1 = $dataTarif['bhp'];
			$jasaDokter = $dataTarif['tarif_tindakandr'];
			$kso = $dataTarif['kso'];
			$menejemen = $dataTarif['menejemen'];
			$totalJasaDokter = $dataTarif['total_byrdr'];

	        
	        $data = array(
	            'no_rawat'         => $no_rawat,
	            'kd_jenis_prw'     => $kd_jenis_prw,
	            'kd_dokter'        => $kd_dokter,
	            'material'         => $material1,
	            'bhp'              => $bhp1,
	            'tarif_tindakandr' => $jasaDokter,
	            'kso'              => $kso,
	            'menejemen'        => $menejemen,
	            'biaya_rawat'      => $totalJasaDokter,
	            'tgl_perawatan'    => date('Y-m-d'),
	            'jam_rawat'        => date('H:i:s'), // Menggunakan format waktu yang benar
	            'stts_bayar'       => 'Belum'
	        );

	        $saveTindakanDokter = $this->m_tindakanDokter->saveTindakanRalan($data);

	        if ($saveTindakanDokter) {
	            $this->session->set_flashdata('success', 'Data berhasil diupdate.');
	        } else {
	            $this->session->set_flashdata('error', 'Gagal mengupdate data.');
	        }
	    }

	    $redirectUrl = 'dokter/soapDokter/' . $no_rawat; // Ganti 'dokter/soapDokter/' sesuai dengan URL Anda
	    redirect($redirectUrl);
	}

	public function saveResepDokter()
	{
	    $no_rawat = $this->input->post('no_rawat', true);
	    $kd_dokter = $this->input->post('kd_dokter', true);

	    // Cek apakah nomor resep sudah ada untuk pasien ini
	    $isExistingResepObat = $this->m_tindakanDokter->checkExistingResepObat($no_rawat);

	    if (!$isExistingResepObat) {
	        // Nomor resep belum ada, tambahkan nomor resep baru
	        $nextResepNumber = $this->m_tindakanDokter->getNextResepNumber(); // Fungsi untuk mendapatkan nomor resep berikutnya
	        $no_resep = date('Ymd') . str_pad($nextResepNumber, 4, '0', STR_PAD_LEFT);
	        
	        // Simpan nomor resep ke tabel resep_obat
	        $resepObat = array(
	            'no_resep' => $no_resep,
	            'tgl_perawatan' => '0000-00-00',
	            'jam' => '00:00:00',
	            'no_rawat' => $no_rawat,
	            'kd_dokter' => $kd_dokter,
	            'tgl_peresepan' => date('Y-m-d'),
	            'jam_peresepan' => date('H:i:s'),
	            'status' => 'ralan',
	            'tgl_penyerahan' => '0000-00-00',
	            'jam_penyerahan' => '00:00:00'
	        );

	        $saveResepObat = $this->m_tindakanDokter->saveResepObat($resepObat);

	        if (!$saveResepObat) {
	            $this->session->set_flashdata('error', 'Gagal menyimpan data resep obat.');
	            redirect('dokter/soapDokter/' . $no_rawat);
	        }
	    } else {
	        // Nomor resep sudah ada, ambil nomor resep yang sudah ada
	        $no_resep = $this->m_tindakanDokter->getExistingResepNumber($no_rawat);
	    }

	    // Simpan data resep dokter
	    $kode_brng = $this->input->post('kode_brng');
	    $jml = $this->input->post('jml');
	    $aturan_pakai = $this->input->post('aturan');

	    $resepDokter = array(
	        'no_resep' => $no_resep,
	        'kode_brng' => $kode_brng,
	        'jml' => $jml,
	        'aturan_pakai' => $aturan_pakai
	    );

	    $saveResepDokter = $this->m_tindakanDokter->saveResepDokter($resepDokter);

	    if ($saveResepDokter) {
	        $this->session->set_flashdata('success', 'Data berhasil diupdate.');
	    } else {
	        $this->session->set_flashdata('error', 'Gagal mengupdate data.');
	    }

	    $redirectUrl = 'dokter/soapDokter/' . $no_rawat; // Ganti 'dokter/soapDokter/' sesuai dengan URL Anda
	    redirect($redirectUrl);
	}



	public function saveDiagnosa()
	{
	    $no_rawat = $this->input->post('no_rawat', true);
	    $penyakit = $this->input->post('kd_penyakit');

	    // Memeriksa apakah sudah ada penyakit dengan nomor rawat yang sama
	    $isRawatExist = $this->m_tindakanDokter->isRawatExist($no_rawat);

	    // Mengatur status penyakit menjadi "lama" jika sudah ada penyakit dengan nomor rawat yang sama
	    $status_penyakit = $isRawatExist ? 'Lama' : 'Baru';

	    // Ambil prioritas terakhir dari database untuk nomor rawat yang sama
	    $lastPrioritas = $this->m_tindakanDokter->getLastPrioritas($no_rawat);

	    // Jika prioritas terakhir ada, tambahkan 1 untuk mendapatkan prioritas baru
	    $prioritas = $lastPrioritas ? $lastPrioritas + 1 : 1;

	    $data = array(
	        'no_rawat'          => $no_rawat,
	        'kd_penyakit'       => $penyakit,
	        'status'            => 'Ralan',
	        'prioritas'         => $prioritas,
	        'status_penyakit'   => $status_penyakit // Menggunakan status_penyakit yang diambil dari pengecekan di atas
	    );

	    $saveDiagnosa = $this->m_tindakanDokter->saveDiagnosa($data);

	    if ($saveDiagnosa) {
	        $this->session->set_flashdata('success', 'Data berhasil diupdate.');
	    } else {
	        $this->session->set_flashdata('error', 'Gagal mengupdate data.');
	    }

	     $redirectUrl = 'dokter/soapDokter/' . $no_rawat; // Ganti 'dokter/soapDokter/' sesuai dengan URL Anda
	    redirect($redirectUrl);
	}


   public function deleteSoap($jam)
	{
	    // Ambil nomor rawat dari session, atau sesuaikan dengan cara Anda mendapatkan nomor rawat
	    $no_rawat = $this->session->userdata('no_rawat');

	    // Hapus data SOAP sesuai jam rawat
	    $this->m_pasienRajal->hapusDataSoap($jam);

	    // Redirect kembali ke halaman soapDokter dengan nomor rawat yang diambil dari session
	    redirect('dokter/soapDokter/' . $no_rawat);
	}

	public function deletePenyakit($kd_penyakit,$no_rawat)
	{
		// Ambil nomor rawat dari session, atau sesuaikan dengan cara Anda mendapatkan nomor rawat
	    $no_rawat = $this->session->userdata('no_rawat');
	    // Hapus data penyakit berdasarkan no_rawat dan kd_penyakit
	    $this->m_pasienRajal->hapusDataPenyakit($kd_penyakit,$no_rawat);

	    // Redirect kembali ke halaman soapDokter dengan nomor rawat
	    $redirectUrl = 'dokter/soapDokter/' . $no_rawat;
	    redirect($redirectUrl);
	}



	public function deleteBilling($jam)
	{
	    // Ambil nomor rawat dari session, atau sesuaikan dengan cara Anda mendapatkan nomor rawat
	    $no_rawat = $this->session->userdata('no_rawat');

	    // Hapus data SOAP sesuai jam rawat
	    $this->m_pasienRajal->hapusDataBilling($jam);

	    // Redirect kembali ke halaman soapDokter dengan nomor rawat yang diambil dari session
	    redirect('dokter/soapDokter/' . $no_rawat . '#billing_dokter');

	}

	public function deleteObat($kode_brng, $jml)
	{
	    // Ambil nomor rawat dari session, atau sesuaikan dengan cara Anda mendapatkan nomor rawat
	    $no_rawat = $this->session->userdata('no_rawat');

	    // Hapus data SOAP sesuai kodebarang dan jumlah
	    $this->m_pasienRajal->hapusDataObat($kode_brng, $jml);

	    // Redirect kembali ke halaman soapDokter dengan nomor rawat yang diambil dari session
	    redirect('dokter/soapDokter/' . $no_rawat . '#resep_dokter');
	}
        

	


}

