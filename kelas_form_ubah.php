<?php 
require 'koneksi.php';

$id_kelas = $_GET['id_kelas'];
$query = "SELECT * FROM tbl_kelas WHERE id_kelas = $id_kelas";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);
// var_dump($data['nama_kelas']);
?>
<?php require 'templates/header.php' ?>
<?php require 'templates/footer.php' ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Ubah Data Kelas</h1>
  </div>

  <div class="row my-4">
    <div class="col-md-5">
      <a href="kelas.php" class="btn btn-danger">Kembali</a>
    </div>
  </div>

  <div class="row">
    <div class="col-md-5">

      <form action="kelas_proses_ubah.php" method="post">

      <input type="hidden" name="id_kelas" value="<?= $id_kelas ?>">

        <div class="mb-3">
          <label for="tingkat_kelas" class="form-label">Tingkat Kelas</label>
          <select class="form-select" aria-label="Default select example" name="tingkat_kelas" id="tingkat_kelas">
            <option <?= ($data['tingkat_kelas'] === '') ? 'selected' : '' ?>>Pilih Tingkat</option>
            <option value="X" <?= ($data['tingkat_kelas'] === 'X') ? 'selected' : '' ?>>X</option>
            <option value="XI" <?= ($data['tingkat_kelas'] === 'XI') ? 'selected' : '' ?>>XI</option>
            <option value="XII" <?= ($data['tingkat_kelas'] === 'XII') ? 'selected' : '' ?>>XII</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="nama_kelas" class="form-label">Nama Kelas</label>
          <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" value="<?= $data['nama_kelas'] ?>">
        </div>

        <button type="submit" class="btn btn-success" name="simpan">Ubah Data</button>

      </form>

    </div>
  </div>

</main>