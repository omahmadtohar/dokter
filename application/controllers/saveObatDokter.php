<form  action= "<?php echo base_url('dokter/saveResepDokter');?>" method="post" class="form-horizontal">
                                <div class="form-group row">
                                 <label for="inputName" class="col-sm-2 col-form-label">Non Racikan</label>
                                 <input type="hidden" name="no_rawat" class="form-control" value="<?php echo getNomorRawat();?>" readonly>
                                    <input type="hidden" name="kd_dokter" class="form-control" value="<?php echo $pasien['kd_dokter'];?>" readonly>
                                    <input type="hidden" name="no_resep" class="form-control" value="<?php echo $no_resep;?>" readonly>
                                    <input type="hidden" name="nm_dokter" class="form-control" value="<?php echo $pasien['nm_dokter'];?>" readonly>
                                <div class="select2-purple col-sm-10">
                                      <select class="select2" name="kode_brng" multiple="multiple" data-placeholder="Masukan Obat.." data-dropdown-css-class="select2-purple" style="width: 100%;">
                                          <?php foreach ($resepDokter as $row) {
                                                if ($row['stok'] > 0) {
                                                    $ralan = "RP " . number_format($row['ralan'], 0, ',', '.');
                                                    echo "<option value='" . $row['kode_brng'] . "'>" . $row['nama_brng'] . " / Stok " . $row['stok'] . " / Harga Satuan " . $ralan . "</option>";
                                                }
                                            } 
                                          ?>
                                      </select>
                                    </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label"></label>
                                <div class="select2-purple col-sm-5">
                                      <select class="select2" name="aturan_pakai" multiple="multiple" data-placeholder="Masukan Obat" data-dropdown-css-class="select2-purple" style="width: 100%;">
                                         <?php
                                          foreach ($masterAturanPakai as $row) {

                                              echo "<option value='" . $row['aturan'] . "'>" .$row['aturan']."</option>";
                                          }
                                          ?>
                                      </select>
                                    </div>
                                <div class="col-sm-5">
                                  <input type="number" class="form-control" id="jml" name="jml" placeholder="Jumlah">
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                  <button type="submit" class="btn btn-danger">Simpan</button>
                                </div>
                              </div>
                    </form>