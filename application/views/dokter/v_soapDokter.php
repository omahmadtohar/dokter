
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('welcome');?>">Menu Utama</a></li>
              <li class="breadcrumb-item active">Menu Soap Dokter</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">
              <!-- Profile Image -->
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                	
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                         src="<?php echo base_url();?>assets/dist/img/user4-128x128.jpg"
                         alt="User profile picture">
                  </div>
                  <h3 class="profile-username text-center"><?php echo $pasien['nm_pasien'];?></h3>
                  <p class="text-muted text-center"><?php echo $pasien['no_rkm_medis'];?> / Umur : <?php echo $pasien['umur'];?> </p>
                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>Poliklinik</b> <a class="float-right"><?php echo $pasien['nm_poli'];?></a>
                    </li>
                    <li class="list-group-item">
                      <b>Asuransi</b> <a class="float-right"><?php echo $pasien['png_jawab'];?></a>
                    </li>
                  </ul>
                 
                  <a href="#" class="btn btn-primary btn-block"><b>Riwayat Perawatan</b></a>
                </div>
              </div>
            </div>

            <div class="col-md-9">
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tanda-Tanda Vital Sign</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-sm">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>VITAL SIGN</th>
                      <th>Progress</th>
                      <th style="width: px">Nilai</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Suhu</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-danger">55%</span></td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Tinggi Badan (CM)</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-warning" style="width: 70%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-warning">70%</span></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Berat Badan (Kg)</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar bg-primary" style="width: 30%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-primary">30%</span></td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Tensi</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar bg-success" style="width: 90%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-success">90%</span></td>
                    </tr>
                    <tr>
                      <td>5.</td>
                      <td>Respirasi (/Menit)</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar bg-success" style="width: 90%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-success">90%</span></td>
                    </tr>
                    <tr>
                      <td>6.</td>
                      <td>Nadi (/Menit)</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar bg-success" style="width: 90%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-success">90%</span></td>
                    </tr>
                    <tr>
                      <td>7.</td>
                      <td>SpO2 (%)</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar bg-success" style="width: 90%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-success">90%</span></td>
                    </tr>
                    <tr>
                      <td>8.</td>
                      <td>GCS (E,V,M)</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar bg-success" style="width: 90%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-success">90%</span></td>
                    </tr>
                    <tr>
                      <td>9.</td>
                      <td>Kesadaran</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar bg-success" style="width: 90%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-success">90%</span></td>
                    </tr>
                    <tr>
                      <td>10.</td>
                      <td>Lingkar Perut</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar bg-success" style="width: 90%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-success">90%</span></td>
                    </tr>
                    <tr>
                      <td>11.</td>
                      <td>Alergi</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar bg-success" style="width: 90%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-success">90%</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#soap_dokter" data-toggle="tab">SOAP</a></li>
                  <li class="nav-item"><a class="nav-link" href="#diagnosa_dokter" data-toggle="tab">DIAGNOSA</a></li>
                  <li class="nav-item"><a class="nav-link" href="#billing_dokter" data-toggle="tab">BILLING</a></li>
                  <li class="nav-item"><a class="nav-link" href="#resep_dokter" data-toggle="tab">RESEP DOKTER</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">

                  <div class="active tab-pane" id="soap_dokter">
                   
                    <form action="<?php echo base_url('dokter/simpanSoap');?>" method="post" class="form-horizontal">

                      <div class="form-group row">
                        <input type="hidden" name="no_rawat" class="form-control" value="<?php echo getNomorRawat();?>" readonly>
                        <input type="hidden" name="nip" class="form-control" value="<?php echo $pasien['nm_dokter'];?>" readonly>
                          <input type="hidden" name="kd_dokter" class="form-control" value="<?php echo $pasien['kd_dokter'];?>" readonly>
                        <label for="inputExperience" class="col-sm-2 col-form-label">Subjek</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="keluhan" placeholder="Subjek..."></textarea>
                        </div>
                      </div>

                       <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Objek</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="pemeriksaan" placeholder="Objek..."></textarea>
                        </div>
                      </div>

                       <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Assesmen</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="rtl" placeholder="Assesmen..."></textarea>
                        </div>
                      </div>

                       <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Planning</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="penilaian" placeholder="Planning..."></textarea>
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Simpan</button>
                        </div>
                      </div>
                    </form>
                     <div class="row">
                      <div class="col-12">
                        <div class="card">
                          <div class="card-header">
                            <h3 class="card-title">VIEW SOAP</h3>

                            <div class="card-tools">
                              <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                <div class="input-group-append">
                                  <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                              <thead>
                                <tr>
                                  <th>No.Rekam Medis</th>
                                  <th>Pasien</th>
                                  <th>Tanggal</th>
                                  <th>Jam</th>
                                  <th>Subjek</th>
                                  <th>Objek</th>
                                  <th>Assesment</th>
                                  <th>Planning</th>
                                  <th>Aksi</th>
                                </tr>
                              </thead>
                              <tbody>

                              <?php foreach ($pemeriksaan_ralan->result_array() as $p) : ?>
                                  <tr>
                                      <td><?php echo $p['no_rkm_medis'];?></td>
                                      <td><?php echo $p['nm_pasien'];?></td>
                                      <td><?php echo $p['tgl_perawatan'];?></td>
                                      <td><span class="tag tag-success"><?php echo $p['jam_rawat'];?></span></td>
                                      <td><?php echo $p['keluhan'];?></td>
                                      <td><?php echo $p['pemeriksaan'];?></td>
                                      <td><?php echo $p['rtl'];?></td>
                                      <td><?php echo $p['penilaian'];?></td>
                                      <td>
                                        <a href="<?php echo base_url('dokter/soapDokter/' . $p['no_rawat']); ?>" class="btn btn-sm btn-warning" onclick="scrollToFormSoap()">Edit</a>
                                        <a href="<?php echo base_url('dokter/deleteSoap/' . $p['jam_rawat'] . '?no_rawat=' . $p['no_rawat']); ?>" class="btn btn-sm btn-danger delete-btn">Hapus</a>

                                  </tr>
                              <?php endforeach ;?>

                              </tbody>
                            </table>
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>
                    </div>
                    <!-- /.row -->
                  </div>


                  <!-- DIAGNOSA DOKTER -->

                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="diagnosa_dokter">
                     <form action="<?php echo base_url('dokter/saveDiagnosa');?>" method="post" class="form-horizontal" id="form-diagnosa">
                          <div class="form-group">
                            <input type="hidden" name="no_rawat" value="<?php echo getNomorRawat();?>" class="form-control" readonly>
                          </div>

                          <div class="form-group">
                            <label for="ICD">Kode ICD</label>
                            <input type="text" class="form-control" id="kd_penyakit" name="kd_penyakit" placeholder="Kode ICD">
                          </div>

                          <div class="form-group">
                            <label for="ICD">Nama Penyakit</label>
                            <input type="text" class="form-control" id="nm_penyakit" placeholder="Nama Penyakit">
                          </div>
                      
                      <div class="form-group">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-xl">Cari Penyakit</button>
                          <button type="submit" class="btn btn-danger">Simpan</button>
                      </div>
                    </form>
                     <div class="row">
                      <div class="col-12">
                        <div class="card">
                          <div class="card-header">
                            <h3 class="card-title">VIEW PENYAKIT</h3>

                            <div class="card-tools">
                              <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                <div class="input-group-append">
                                  <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                              <thead>
                                <tr>
                                  <th>No.Rekam Medis</th>
                                  <th>Pasien</th>
                                  <th>Kode</th>
                                  <th>Penyakit</th>
                                  <th>Status</th>
                                  <th>Aksi</th>
                                </tr>
                              </thead>
                              <tbody>

                              <?php foreach ($penyakitPasien->result_array() as $p) : ?>
                                  <tr>
                                      <td><?php echo $p['no_rkm_medis'];?></td>
                                      <td><?php echo $p['nm_pasien'];?></td>
                                      <td><?php echo $p['kd_penyakit'];?></td>
                                      <td><?php echo $p['nm_penyakit'];?></td>
                                      <td><?php echo $p['status_penyakit'];?></td>
                                      <td>
                                       <td>
                                             <a href="<?php echo base_url('dokter/deletePenyakit/' . $p['kd_penyakit'] . '/' . $p['no_rawat'] . '?no_rawat=' . $p['no_rawat']); ?>" class="btn btn-sm btn-danger delete-btn">Hapus</a>

                                          </td>

                                  </tr>
                              <?php endforeach ;?>

                              </tbody>
                            </table>
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>
                    </div>
                    <!-- /.row -->

                  </div>

                  <!-- DIAGNOSA DOKTER -->
                    <div class="tab-pane" id="diagnosa_dokter">
                        <form action="<?php echo base_url('dokter/saveDiagnosa');?>" method="post" class="form-horizontal" id="form-diagnosa">
                            <div class="form-group">
                                <input type="hidden" name="no_rawat" value="<?php echo getNomorRawat();?>" class="form-control" readonly>
                            </div>

                            <div class="form-group">
                                <label for="ICD">Kode ICD</label>
                                <input type="text" class="form-control" name="kd_penyakit" id="kd_penyakit" placeholder="Kode ICD">
                            </div>

                            <div class="form-group">
                                <label for="ICD">Nama Penyakit</label>
                                <input type="text" class="form-control" id="nm_penyakit" placeholder="Nama Penyakit">
                            </div>

                            <div class="form-group">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-xl">Cari Penyakit</button>
                                <button type="submit" class="btn btn-danger">Simpan</button>
                            </div>
                        </form>

                    </div>

                    <!-- CARI DATA PENYAKIT -->
                    <div class="modal fade" id="modal-xl">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Daftar Penyakit</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <table id="tabelsiji" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Penyakit</th>
                                                <th>Penyakit</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no = 1;
                                            foreach ($penyakit->result() as $p) : ?>
                                                <tr>
                                                    <td><?php echo $no++; ?></td>
                                                    <td><?php echo $p->kd_penyakit; ?></td>
                                                    <td><?php echo $p->nm_penyakit; ?></td>
                                                    <td>
                                                        <a href="#" class="btn btn-sm btn-danger delete-btn" data-kdpenyakit="<?php echo $p->kd_penyakit; ?>" data-nmpenyakit="<?php echo $p->nm_penyakit; ?>" data-toggle="modal" data-dismiss="modal">PILIH</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                    <!-- CARI DATA PENYAKIT -->

                  <!-- BILLING DOKTER -->

                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="billing_dokter">
                     <form  action= "<?php echo base_url('dokter/saveTindakanDokter');?>" method="post" class="form-horizontal">
                      <input type="hidden" name="no_rawat" class="form-control" value="<?php echo getNomorRawat();?>" readonly>
                          <input type="hidden" name="kd_dokter" class="form-control" value="<?php echo $pasien['kd_dokter'];?>" readonly>
                          <div class="form-group">
                            <label>Tindakan Dokter</label>
                            <div class="select2-purple">
                              <select class="select2" name="kd_jenis_prw[]" multiple="multiple" data-placeholder="Masukan Tindakan" data-dropdown-css-class="select2-purple" style="width: 100%;">

                                 <?php
                                  foreach ($tindakanDokter as $row) {
                                      // Konversi nilai "total_byrdr" menjadi format Rupiah
                                      $total_byrdr_rp = "RP " . number_format($row['total_byrdr'], 0, ',', '.');

                                      // Tampilkan pilihan tindakan dengan "RP" pada kolom "total_byrdr"
                                      echo "<option value='" . $row['kd_jenis_prw'] . "'>" . $row['nm_perawatan'] . " - " . $total_byrdr_rp . "</option>";
                                  }
                                  ?>
                              </select>
                            </div>
                          </div>
                      
                      <div class="form-group">
                          <button type="submit" class="btn btn-danger">Simpan</button>
                      </div>
                    </form>

                    <div class="row">
                      <div class="col-12">
                        <div class="card">
                          <div class="card-header">
                            <h3 class="card-title">VIEW BILLING</h3>

                            <div class="card-tools">
                              <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                <div class="input-group-append">
                                  <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                              <thead>
                                <tr>
                                  <th>No.Rekam Medis</th>
                                  <th>Pasien</th>
                                  <th>Dokter</th>
                                  <th>Tanggal</th>
                                  <th>Jam</th>
                                  <th>Tindakan</th>
                                  <th>Total Bayar</th>
                                  <th>Aksi</th>
                                </tr>
                              </thead>
                              <tbody>

                              <?php foreach ($biayaRawat->result_array() as $p) : ?>
                                  <tr>
                                      <td><?php echo $p['no_rkm_medis'];?></td>
                                      <td><?php echo $p['nm_pasien'];?></td>
                                      <td><?php echo $p['nm_dokter'];?></td>
                                      <td><?php echo $p['tgl_perawatan'];?></td>
                                      <td><span class="tag tag-success"><?php echo $p['jam_rawat'];?></span></td>
                                      <td><?php echo $p['nm_perawatan'];?></td>
                                      <td>Rp <?php echo number_format($p['biaya_rawat'], 0, ',', '.'); ?></td>
                                      <td>
                                        <a href="<?php echo base_url('dokter/deleteBilling/' . $p['jam_rawat'] . '?no_rawat=' . $p['no_rawat']); ?>" class="btn btn-sm btn-danger delete-btn">Hapus</a>

                                  </tr>
                              <?php endforeach ;?>

                              </tbody>
                            </table>
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>
                    </div>
                    <!-- /.row -->
                  </div>

                  <div class="tab-pane" id="resep_dokter">
                    <div class="tab-pane" id="resep_dokter">
                      <form id="resep-form" action="<?php echo base_url('dokter/saveResepDokter');?>" method="post" class="form-horizontal">
                          <input type="hidden" name="no_rawat" class="form-control" value="<?php echo getNomorRawat();?>" readonly>
                              <input type="hidden" name="kd_dokter" class="form-control" value="<?php echo $pasien['kd_dokter'];?>" readonly>
                              <input type="hidden" name="no_resep" class="form-control" value="<?php echo $no_resep;?>" readonly>
                              <input type="hidden" name="nm_dokter" class="form-control" value="<?php echo $pasien['nm_dokter'];?>" readonly>
                          <div id="obatContainer">
                              <!-- Kontainer untuk menambahkan entri obat -->
                          </div>
                          <div class="form-group row">
                              <div class="offset-sm-2 col-sm-10">
                                  <button type="button" class="btn btn-primary" id="addObatBtn">Tambah Obat</button>
                                  <button type="submit" class="btn btn-danger">Simpan</button>
                              </div>
                          </div>
                          
                      </form>
                    <div class="row">
                      <div class="col-12">
                        <div class="card">
                          <div class="card-header">
                            <h3 class="card-title">VIEW OBAT</h3>
                          </div>
                            <div class="col-md-12 col-lg-12 col-sm-12">
                              <div class="card">
                              <div class="card-header">
                                <h3 class="card-title">Permintaan Resep</h3>
                              </div>
                              <!-- /.card-header -->
                              <div class="card-body p-0">
                                <table class="table table-sm">
                                  <thead>
                                    <tr>
                                      <th style="width: 10px">No Resep</th>
                                      <th>Dokter</th>
                                      <th>Jam peresepan</th>
                                      <th>Tgl Peresepan</th>
                                      <th style="width: px">status</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                     <?php foreach ($permintaanResep->result_array() as $p) : ?>
                                          <tr>
                                              <td><?php echo $p['no_resep'];?></td>
                                              <td><?php echo $p['nm_dokter'];?></td>
                                              <td><?php echo $p['jam_peresepan'];?></td>
                                              <td><?php echo $p['tgl_peresepan'];?></td>
                                              <td><?php echo $p['status'];?></td>
                                          </tr>
                                      <?php endforeach ;?>
                                   
                                  </tbody>
                                </table>
                              </div>
                              <!-- /.card-body -->
                            </div>
                            </div>
                          </div>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                              <thead>
                                  <tr>
                                      <th>No.Resep</th>
                                      <th>Pasien</th>
                                      <th>Obat</th>
                                      <th>Aturan Pakai</th>
                                      <th>Jumlah</th>
                                      <th>Harga Satuan</th>
                                      <th>Total</th>
                                      <th>Aksi</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php
                                  $totalSemuaObat = 0; // Inisialisasi total biaya obat
                                  foreach ($biayaObat->result_array() as $p) :
                                      $totalObat = $p['jml'] * $p['ralan'];
                                      $totalSemuaObat += $totalObat; // Akumulasi total biaya obat
                                  ?>
                                      <tr>
                                          <td><?php echo $p['no_resep'];?></td>
                                          <td><?php echo $p['nm_pasien'];?></td>
                                          <td><?php echo $p['nama_brng'];?></td>
                                          <td><?php echo $p['aturan_pakai'];?></td>
                                          <td><span class="tag tag-success"><?php echo $p['jml'];?></span></td>
                                          <td><span class="tag tag-success">Rp <?php echo number_format($p['ralan'], 0, ',', '.'); ?></span></td>
                                          <td><span class="tag tag-success">Rp <?php echo number_format($totalObat, 0, ',', '.'); ?></span></td>
                                          <td>
                                             <a href="<?php echo base_url('dokter/deleteObat/' . $p['kode_brng'] . '/' . $p['jml'] . '?no_rawat=' . $p['no_rawat']); ?>" class="btn btn-sm btn-danger delete-btn">Hapus</a>
                                          </td>
                                      </tr>
                                  <?php endforeach ;?>
                                  <tr>
                                      <td colspan="6" style="text-align: right;"><strong>Total Biaya Obat:</strong></td>
                                      <td><strong>Rp <?php echo number_format($totalSemuaObat, 0, ',', '.'); ?></strong></td>
                                      <td></td>
                                  </tr>
                                  <?php
                                  $ppnRate = 0.11; // PPN rate (11%)
                                  $ppnAmount = $totalSemuaObat * $ppnRate; // Hitung jumlah PPN
                                  $totalBiayaDenganPPN = $totalSemuaObat + $ppnAmount; // Total biaya dengan PPN
                                  ?>
                                  <tr>
                                      <td colspan="6" style="text-align: right;"><strong>PPN (11%):</strong></td>
                                      <td><strong>Rp <?php echo number_format($ppnAmount, 0, ',', '.'); ?></strong></td>
                                      <td></td>
                                  </tr>
                                  <tr>
                                      <td colspan="6" style="text-align: right;"><strong>Total Biaya Dengan PPN:</strong></td>
                                      <td><strong>Rp <?php echo number_format($totalBiayaDenganPPN, 0, ',', '.'); ?></strong></td>
                                      <td></td>
                                  </tr>
                              </tbody>
                          </table>


                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>
                    </div>
                    <!-- /.row -->
        </div>
      </section>
  </div>
