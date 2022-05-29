<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Begin Page Content -->
                <div class="container-fluid">

                     <!-- Earnings (Annual) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Voucher Terjual</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jual;?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-wifi fa-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tabel Voucher</h1>
                        <a data-toggle="modal" data-target="#tambah" class="d-none d-sm-inline-block btn btn-lg btn-success shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data </a>
                    </div>

                    <!-- Modal -->
                                    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            Isi form dibawah
                                            <form action="<?=site_url('Voucher/tambah')?>" method="post" class="container-md">
                                                <div class="card-body">
                                                    <table class="text-center" >
                                                    <tbody class="form-group">
                                                        <tr>
                                                            <td><label for=""> User </label></td>
                                                            <td><input type="text" name="tuser" class="form-control" value="canggih" ><br></td>
                                                        </tr>

                                                        <tr>
                                                            <td><label for=""> Kode Voucher  </label></td>
                                                            <td><input type="text" name="tkode" id="tkode" class="form-control" ><br></td>
                                                        </tr>

                                                        <tr>
                                                            <td><label for=""> Jenis Voucher </label></td>
                                                            <td>
                                                                <select class="form-control" id="tjenis" name="tjenis">
                                                                  <option>-Pilih voucher-</option>
                                                                  <option>Bronze</option>
                                                                  <option>Silver</option>
                                                                  <option>Gold</option>
                                                                </select>
                                                              <br>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td><label for=""> Harga (Rp)</label></td>
                                                            <td><input type="text" name="tharga" id="tharga" class="form-control" value=""><br></td>
                                                        </tr>
                                                    </tbody>
                                                    </table>
                                                </div>

                                             <script type="text/javascript">
                                                  function randomNumber(len) {
                                                      var randomNumber;
                                                      var n = '';

                                                      for(var count = 0; count < len; count++) {
                                                          randomNumber = Math.floor(Math.random() * 10);
                                                          n += randomNumber.toString();
                                                      }
                                                      return n;
                                                  }

                                                  window.onload = function() {
                                                  document.getElementById("tkode").value = randomNumber(6);
                                                  };
                                    </script>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                            <input class="btn btn-success" type="submit" name="submit" value="Tambah Vocher">
                                          </div>
                                          </div>
                                        </div>
                                      </div>
                                      </form>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Voucher Terjual</h6>
                        </div>
                        <div class="card-body">
                            <?php if ($this->session->flashdata('flash') ) : ?>
                                <div class="alert alert-success alert-dismissable fade show" role="alert">
                                    Data <b>berhasil</b> <?= $this->session->flashdata('flash'); ?>.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php endif; ?>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                     <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">User</th>
                            <th scope="col">Kode Voucher</th>
                            <th scope="col">Jenis Voucher</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1; 
                        foreach ($voucher as $row) { ?>
                        <tr>
                            <th scope="row"><?php echo $no++; ?></th>
                            <td><?php echo $row->user; ?></td>
                            <td><?php echo $row->kode; ?></td>
                            <td><?php echo $row->jenis; ?></td>
                            <td><?php echo $row->harga; ?></td>
                            <td>
                                <a href="#" class="btn btn-warning btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-pen"></i>
                                        </span>
                                        <span class="text">Edit</span>
                                    </a>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger btn-icon-split" data-toggle="modal" data-target="#exampleModal">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        <span class="text">Hapus</span>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            Apakah anda yakin ingin menghapus data ini?
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                            <a type="button" class="btn btn-danger"  href="<?php echo site_url('Voucher/delete/'.$row->kode);?>">Hapus</a>
                                          </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                            </td>
                            </tr>

                        <?php } ?>

                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->