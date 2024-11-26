<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <form action="" method="post">
    <center>
        
        <img src="logo.png" alt="">

        <h2>PENGGAJIAN<br>
        GURU/KARYAWAN YAYASAN ASSALAAM</h2>
        </center>
        <center>
        <div class="card m-5" style="width: 70%">
  <h5 class="card-header">Data Penggajian</h5>
  <div class="card-body" >
   <label for="" class="d-flex"><b>No</b></label><br>
   <input type="text" name="no" id="" placeholder="No" class="rounded" size="137"><br>
   <label for="" class="mt-3 d-flex"><b>Nama</b></label><br>
   <input type="text" name="nama" id="" placeholder="Nama" class="rounded" size="137">
   <label for="" class=" mt-3 d-flex"><b>Unit Pendidikan</b></label><br>
   <select name="unit" id="" class="rounded p-1" style="width: 100%">
    <option value="SD">SD</option>
    <option value="SMP">SMP</option>
    <option value="SMA">SMA</option>
    <option value="S1">S1</option>
   </select><br>
   <label for="" class="mt-3  d-flex"><b>Tanggal Gaji</b></label><br>
   <input type="date" name="tanggal" id=""  class="rounded p-1" style="width: 100%">
   <table class="mt-3">

    <tr>
        <td><h3><center><i>Gaji</i></center></h3></td>
        <td><h3><center><i>Potongan</i></center></h3></td>
    </tr>
    <tr>
        <td><b><br>Jabatan</b></td>
        <td><b><br>BPJS</b></td>
    </tr>
    <tr class="mb-3">
        <td><select name="jabatan" id="" style="width: 100%" class="p-1 rounded mt-2">
            <option value="Kepala Sekolah">Kepala Sekolah</option>
            <option value="Wakasek">Wakasek</option>
            <option value="Guru">Guru</option>
            <option value="Karyawan">Karyawan</option>
        </select></td>
        <td><input type="text" name="bpjs" id="" size="65" class="p-1 rounded mt-2"></td>
    </tr>
    <tr >
        
        <td><b><br>Lama Kerja</b></td>
        <td><b><br>Pinjaman</b></td>
    </tr>
    <tr>
        <td><input type="text" name="lamakerja" id="" placeholder="Lama Kerja" class="rounded p-1 mt-2" size="65"></td>
        <td><input type="text" name="pinjaman" id="" placeholder="Pinjaman"  class="rounded p-1 mt-2" size="65"></td>
    </tr>
    <tr>
        <td><b><br>Status Kerja</b></td>
        <td><b><br>Cicilan</b></td>
    </tr>
    <tr>
        <td><select name="status" id=""  style="width: 100%" class="p-1 rounded mt-2">
            <option value="Tetap">Tetap</option>
            <option value="Kontrak">Kontrak</option>
        </select></td>
        <td><input type="text" name="cicilan" id="" placeholder="Tabungan"  class="rounded p-1 mt-2" size="65"></td>
    </tr>
    <tr>
        <td></td>
        <td><b><br>Infaq</b></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="text" name="infaq" id="" placeholder="Lainnya"  class="rounded p-1 mt-2" size="65"></td>
    </tr>
   </table>
   <center><br><input type="submit" name="proses" id="" class="btn btn-primary"></center>
   </form>
  </div>
</div>
</center>

<?php
if(isset($_POST['proses'])){

    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unit = $_POST['unit'];
    $tanggal = $_POST['tanggal'];
    $jabatan = $_POST['jabatan'];
    $bpjs = $_POST['bpjs'];
    $lama_kerja = $_POST['lamakerja'];
    $pinjaman = $_POST['pinjaman'];
    $status = $_POST['status'];
    $cicilan = $_POST['cicilan'];
    $infaq = $_POST['infaq'];

    if ($pinjaman == NULL){
        $pinjaman = 0;
    }
    if ($bpjs == NULL){
        $bpjs = 0;
    }
    if ($cicilan == NULL){
        $cicilan = 0;
    }
    if ($infaq == NULL){
        $infaq = 0;
    }

    if ($jabatan == "Kepala Sekolah"){
        $gaji = 10000000;
    }else if ($jabatan == "wakasek"){
        $gaji = 7000000;
    }else if ($jabatan == "Guru"){
        $gaji = 5000000;
    }else if ($jabatan == "Karyawan") {
        $gaji = 2500000;
    }else {
        $gaji = 0;
    }

    $bonus = ($status == "Tetap") ? 1000000 : 0;

    

    class gaji {
        
        public $gajibersih = 0;

        public function hasil($no2,$nama2,$unit2,$tanggal2,$jabatan2,$gaji2,$bpjs2,$lama_kerja2,$pinjaman2,$status2,$bonus2,$cicilan2,$infaq2){
            
            $this->gajibersih = ($gaji2 + $bonus2) - ($bpjs2 + $pinjaman2 + $cicilan2 + $infaq2); 

    ?>
    <center>
    <div class="card " style="width: 70%" >
  <div class="card-header text-center">
    <h5>Dwi Agus Stiawan</h5>
  </div>
  <div class="card-body text-primary">
    <h5 class="card-title">STRUK GAJI</h5>
    <table>
        <tr>
            <td>No</td>
            <td>:</td>
            <td><?php echo $no2 ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $nama2?></td>
        </tr>
        <tr>
            <td>Unit Pendidikan</td>
            <td>:</td>
            <td><?php echo $unit2 ?></td>
        </tr>
        <tr>
            <td>Tanggal Gaji</td>
            <td>:</td>
            <td><?php echo $tanggal2 ?></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>:</td>
            <td><?php echo $jabatan2 ?></td>
        </tr>
        <tr>
            <td>Gaji</td>
            <td>:</td>
            <td><?php echo $gaji2 ?></td>
        </tr>
        <tr>
            <td>Lama Kerja</td>
            <td>:</td>
            <td><?php echo $lama_kerja2 ?></td>
        </tr>
        <tr>
            <td>Status Kerja</td>
            <td>:</td>
            <td><?php echo $status2 ?></td>
        </tr>
        <tr>
            <td>Bonus</td>
            <td>:</td>
            <td><?php echo $bonus2 ?></td>
        </tr>
        <tr>
            <td>Bpjs</td>
            <td>:</td>
            <td><?php echo $bpjs2 ?></td>
        </tr>
        <tr>
            <td>Pinjaman</td>
            <td>:</td>
            <td><?php echo $pinjaman2 ?></td>
        </tr>
        <tr>
            <td>Cicilan</td>
            <td>:</td>
            <td><?php echo $cicilan2 ?></td>
        </tr>
        <tr>
            <td>Infaq</td>
            <td>:</td>
            <td><?php echo $infaq2 ?></td>
        </tr>
        <tr>
            <td>Gaji Bersih</td>
            <td>:</td>
            <td><?php echo $this->gajibersih ?></td>
        </tr>
    </table>
  </div>
</div>
</center>
<?php

}
}
$cetak = new gaji();
$cetak->hasil($no,$nama,$unit,$tanggal,$jabatan,$gaji,$bpjs,$lama_kerja,$pinjaman,$status,$bonus,$cicilan,$infaq);
   
}

  ?>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>