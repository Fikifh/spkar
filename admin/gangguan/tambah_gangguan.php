<?php
  include("config/koneksi.php");
  $no = mysqli_query($koneksi,"select kode_gangguan from diagnosa order by kode_gangguan desc");
  $kd = mysqli_fetch_array($no);
  $kode = $kd['kode_gangguan'];
  $urut = substr($kode, 1,3);
  $tambah = (int) $urut+1;

  if(strlen($tambah) == 1){
    $format = "X"."00".$tambah;
  }elseif (strlen($tambah)== 2){
    $format = "X"."0".$tambah;
  }elseif (strlen ($tambah) == 3) {
    $format = "X".$tambah;
  }
?>
   
      <div class="card-header">Tambah Gejala</div>
      <div class="card-body">
        <form class="" role="form" method="POST" onsubmit="return cekform();" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="kode_gangguan" name="kode_gangguan" class="form-control" placeholder="Kode kode_gangguan" value="<?php echo $format;?>" readonly required="required" autofocus="autofocus">
                  <label for="kode_gangguan">Kode Gangguan</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="nama_gangguan" name="nama_gangguan" class="form-control" placeholder="Nama Gangguan" required="required">
                  <label for="nama_gangguan">Nama Gangguan</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="solusi" name="solusi" class="form-control" placeholder="Solusi" required="required">
              <label for="solusi">Solusi</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="keterangan" name="keterangan" class="form-control" placeholder="Keterangan" required="required">
                  <label for="keterangan">Keterangan</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              
                <div class="form-group">
                 <input type="submit" name="simpan" value="Simpan" class="btn btn-primary btn-small" style="margin-left: 5px">
                  <a class="btn btn-danger" href="?halaman=data_gangguan&action=tambah_gangguan" data-toggle ="modal">Cancel</a>
                </div>
            </div>
          </div>
        </form>
        <?php

            include("config/koneksi.php");
            if(@$_POST['simpan']){
              $kode_gangguan = @$_POST['kode_gangguan'];
              $nama_gangguan= @$_POST['nama_gangguan'];
              $solusi = @$_POST['solusi'];
              $keterangan = @$_POST['keterangan'];

              $sql = mysqli_query($koneksi,"insert into diagnosa (kode_gangguan, nama_gangguan, solusi, ket) values ('$kode_gangguan', '$nama_gangguan', '$solusi', '$keterangan')");
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
   
  