<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Begin Page Content -->

<div class="container-fluid">
  <form class="form-group" action="<?= site_url('Pc/simpan_edit/'.$id->id) ?>" method="post">
    <table class="text-center" >
                                                    <tbody class="form-group">
                                                        <tr>
                                                            <td><label for=""> Nama PC </label></td>
                                                            <td><input type="text" name="tpc" class="form-control" value="<?= $id->pc ?>" ><br></td>
                                                        </tr>
                                                        <tr>
                                                            <td><label for=""> Jenis PC </label></td>
                                                            <td><input type="text" name="tjenis" class="form-control" value="<?= $id->jenis ?>" ><br></td>
                                                        </tr>
                                                        <tr>
                                                            <td><label for=""> Jenis Ruangan </label></td>
                                                            <td><input type="text" name="truang" class="form-control" value="<?= $id->ruang ?>" ><br></td><br>
                                                        </tr>
                                                        <tr>
                                                            <td><label for=""> Status </label></td>
                                                            <td><input type="text" name="tstatus" class="form-control" value="<?= $id->status ?>" ><br></td><br>
                                                        </tr>
                                                    </tbody>
                                                    </table>

                                                    <div class="form-group">

          <button type="submit" name="submit" class="btn btn-success">
            Simpan data
          </button>
          <a href="<?= site_url('Pc/index')?>" class="btn btn-secondary">Batal</a>

        </div>
  </form>


  


</div>