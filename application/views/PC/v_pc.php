<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Begin Page Content -->
                <div class="container-fluid">

                     <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Jumlah PC</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $komputer;?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-laptop-code fa-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tabel PC</h1>
                        <a data-toggle="modal" data-target="#tambah" class="d-none d-sm-inline-block btn btn-lg btn-success shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data </a>
                    </div>

                    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah PC</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            Isi form dibawah
                                            <form action="<?=site_url('Pc/add')?>" method="post" class="container-md">
                                                <div class="card-body">
                                                    <table class="text-center" >
                                                    <tbody class="form-group">
                                                        <tr>
                                                            <td><label for=""> Nama PC </label></td>
                                                            <td><input type="text" name="tpc" class="form-control" value="PC/Komputer " ><br></td>
                                                        </tr>

                                                        <tr>
                                                            <td><label for=""> Jenis PC </label></td>
                                                            <td>
                                                                <select class="form-control" id="tjenis" name="tjenis">
                                                                  <option>-Pilih jenis-</option>
                                                                  <option>Gaming</option>
                                                                  <option>Browsing</option>
                                                                  <option>Edit</option>
                                                                  <option>Lain-lain</option>
                                                                </select>
                                                              <br>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td><label for=""> Jenis Ruangan </label></td>
                                                            <td>
                                                                <select class="form-control" id="tjenis" name="truang">
                                                                  <option>-Pilih tipe ruang-</option>
                                                                  <option>Regular/Biasa</option>
                                                                  <option>AC</option>
                                                                  <option>Private</option>
                                                                </select>
                                                              <br>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td><label for=""> Status </label></td>
                                                            <td>
                                                                <select class="form-control" id="tjenis" name="tstatus">
                                                                  <option>-Pilih status-</option>
                                                                  <option>online</option>
                                                                  <option>offline</option>
                                                                  <option>maintenance</option>
                                                                </select>
                                                              <br>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    </table>
                                                </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                            <input class="btn btn-success" type="submit" name="submit" value="Tambah PC">
                                          </div>
                                          </div>
                                        </div>
                                      </div>
                                      </form>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data PC tersedia</h6>
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
                            <th scope="col">Nama PC/Komputer</th>
                            <th scope="col">Jenis PC/Komputer</th>
                            <th scope="col">Tipe Ruangan</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1; 
                        $on = "online";
                        $off = "offline";
                        foreach ($pc as $row) { ?>
                        <tr>
                            <th scope="row"><?php echo $no++; ?></th>
                            <td><?php echo $row->pc; ?></td>
                            <td><?php echo $row->jenis; ?></td>
                            <td><?php echo $row->ruang; ?></td>
                            <td><p class="badge badge-success"><?php echo $row->status; ?></p></td>

                            <td>
                                <a href="<?php echo site_url('Pc/edit/'.$row->id);?>" class="btn btn-warning btn-icon-split">
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
                                            <a type="button" class="btn btn-danger"  href="<?php echo site_url('Pc/delete/'.$row->id);?>">Hapus</a>
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