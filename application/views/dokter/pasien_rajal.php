<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>RAWAT JALAN</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Menu Rawat Jalan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Pasien Rawat Jalan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="tabelsiji" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>No.Rekam Medis</th>
                    <th>Pasien</th>
                    <th>Umur</th>
                    <th>Poliklinik</th>
                    <th>Dokter</th>
                    <th>Asuransi</th>
                    <th>Status</th>
                    <th>Status Bayar</th>
                  </tr>
                </thead>
                <tbody>

                 <?php

                  $no = 1;

                  foreach ($pasienRajal as $p) : ?>

                    <tr>
                      <td><?php echo $no++;?></td>
                      <td><?php echo  $p->no_rkm_medis;?></td>
                      <td><?php echo  $p->nm_pasien;?></td>
                      <td><?php echo  $p->sttsumur;?></td>
                      <td><?php echo  $p->nm_poli;?></td>
                      <td><?php echo  $p->nm_dokter;?></td>
                      <td><?php echo  $p->png_jawab;?></td>
                      <td><?php echo  $p->stts_daftar;?></td>
                      <td><?php echo  $p->status_bayar;?></td>
                    </tr>
                  <?php endforeach ;?>
                </tbody>
              </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
