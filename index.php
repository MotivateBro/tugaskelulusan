<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <br>
      <h1><center>KELULUSAN</center></h1>
    </div>
    <div class="container">
      <form action="" method="POST" name="kelulusan">
  <div class="form-group">
    <label for="ExampleInputNama">Nama</label>
    <input type="text" name="nama" class="form-control" placeholder="">
  </div>
  <div class="form-group">
    <label for="ExampleInputHarga">Kelas</label>
    <input type="text" name="kelas" class="form-control" placeholder="">
  </div>
  <div class="form-group">
    <label for="ExampleInputJumlah">Nilai Produktif</label>
    <input type="text" name="nilai_p" class="form-control" placeholder="">
</div>
<div class="form-group">
    <label for="ExampleInputJumlah">Nilai Adaktif</label>
    <input type="text" name="nilai_a" class="form-control" placeholder="">
</div><div class="form-group">
    <label for="ExampleInputJumlah">Nilai Mulok</label>
    <input type="text" name="nilai_m" class="form-control" placeholder="">
</div>
<button type="submit" class="btn btn-primary mb-2" name="submit">Masuk</button>  
    </form>
  </div>
    </div>
    
<?php

if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $kelas = $_POST['kelas'];
  $nilai_p = $_POST['nilai_p'];
  $nilai_a = $_POST['nilai_a'];
  $nilai_m = $_POST['nilai_m'];

  $nilaip = $nilai_p;
if($nilaip > 90) {
  $gradep = "A";
  $ketp = "Lulus";
} elseif ($nilaip > 80) {
  $gradep = "B";
  $ketp   = "Lulus";
} elseif ($nilaip > 70) {
  $gradep = "C";
  $ketp   = "Lulus";
} elseif ($nilaip > 60) {
  $gradep = "D";
  $ketp   = "Tidak Lulus";
} elseif ($nilaip > 50) {
  $gradep = "E";
  $ketp   = "Tidak Lulus";
}


$nilaia = $nilai_a;
if($nilaia > 90) {
  $gradea = "A";
  $keta = "Lulus";
} elseif ($nilaia > 80) {
  $gradea = "B";
  $keta   = "Lulus";
} elseif ($nilaia > 70) {
  $gradea = "C";
  $keta   = "Lulus";
} elseif ($nilaia > 60) {
  $gradea = "D";
  $keta  = "Tidak Lulus";
} elseif ($nilaia > 50) {
  $gradea = "E";
  $keta   = "Tidak Lulus";
}


$nilaim = $nilai_m;
if($nilaim > 90) {
  $gradem = "A";
  $ketm = "Lulus";
} elseif ($nilaim > 80) {
  $gradem = "B";
  $ketm   = "Lulus";
} elseif ($nilaim > 70) {
  $gradem = "C";
  $ketm   = "Lulus";
} elseif ($nilaim > 60) {
  $gradem = "D";
  $ketm   = "Tidak Lulus";
} elseif ($nilaim > 50) {
  $gradem = "E";
  $ketm   = "Tidak Lulus";
}

$rata_rata = ($nilaip + $nilaia + $nilaim);
?>


<div class="container">
  <h3><strong>Nama :<?php echo $nama?></strong></h3>
  <h3><strong>Kelas :<?php echo $kelas?></strong></h3>

  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">mapel</th>
      <th scope="col">grade</th>
      <th scope="col">keterangan</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="col">1</th>
      <th scope="col">Produktif</th>
      <th scope="col"><?php echo $nilai_p?></th>
      <th scope="col"><?php echo $gradep?></th>
      <th scope="col"><?php echo $ketp?></th>
    </tr>
    <tr>
      <th scope="col">2</th>
      <th scope="col">Adaktif</th>
      <th scope="col"><?php echo $nilai_a?></th>
      <th scope="col"><?php echo $gradea?></th>
      <th scope="col"><?php echo $keta?></th>
    </tr>
    <tr>
      <th scope="col">3</th>
      <th scope="col">Mulok</th>
      <th scope="col"><?php echo $nilai_m?></th>
      <th scope="col"><?php echo $gradem?></th>
      <th scope="col"><?php echo $ketm?></th>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>

 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>