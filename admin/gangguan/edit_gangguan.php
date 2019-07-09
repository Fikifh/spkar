 <?php
  include("config/koneksi.php");
  $id = $_GET['kode_gangguan'];
  $sql    = $koneksi->query("select * from diagnosa where kode_gangguan='$id'");
  $tampil   = $sql->fetch_assoc();
?>



 <div class="card-header">Edit Gangguan</div>
      <div class="card-body">
        <form class="" role="form" method="POST" onsubmit="return cekform();" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="kode_gangguan" name="kode_gangguan" class="form-control" value="<?php echo $tampil['kode_gangguan'];?>" readonly required="required" autofocus="autofocus">
                  <label for="kode_gangguan">Kode Gangguan</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="nama_gangguan" value="<?php echo $tampil['nama_gangguan'];?>" name="nama_gangguan" class="form-control" placeholder="Nama Gangguan" required="required">
                  <label for="nama_gangguan">Nama Gangguan</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="solusi" name="solusi" value="<?php echo $tampil['solusi'];?>" class="form-control" placeholder="Solusi" required="required">
              <label for="solusi">Solusi</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="keterangan" name="keterangan" value="<?php echo $tampil['ket'];?>" class="form-control" placeholder="Keterangan" required="required">
                  <label for="keterangan">Keterangan</label>
                </div>
              </div>
              
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              
                <div class="form-group">
                 <input type="submit" name="edit" value="Edit" class="btn btn-primary btn-small" style="margin-left: 5px">
                  <a class="btn btn-danger" href="?halaman=data_gangguan&action=tambah_gangguan" data-toggle ="modal">Cancel</a>
                </div>
            </div>
          </div>
        </form>
        <?php

            include("config/koneksi.php");
            if(@$_POST['edit']){
              $kode_gangguan = @$_POST['kode_gangguan'];
              $nama_gangguan= @$_POST['nama_gangguan'];
              $solusi = @$_POST['solusi'];
              $keterangan = @$_POST['keterangan'];
             

              $sql = mysqli_query($koneksi,"update diagnosa set kode_gangguan='$kode_gangguan', nama_gangguan='$nama_gangguan', solusi='$solusi', ket='$keterangan' where kode_gangguan='$id'");
              if($sql) {
                ?>
                <script type="text/javascript">
                  alert("Data berhasil disimpan");
                  window.location.href="?halaman=data_gangguan&action=data_gangguan";
                </script>
                <?php
              }
            }
        ?>
      </div>