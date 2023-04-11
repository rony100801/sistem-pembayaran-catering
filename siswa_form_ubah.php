<?php
require 'koneksi.php';

$nis = $_GET['nis'];
$query = "SELECT * FROM tbl_siswa ts INNER JOIN tbl_kelas tk ON tk.id_kelas = ts.id_kelas WHERE nis = $nis";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);
// var_dump($data['nama_kelas']);

$dataKelas = mysqli_query($koneksi, "SELECT * FROM tbl_kelas");
?>
<?php require 'templates/header.php' ?>
<?php require 'templates/footer.php' ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-3">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Ubah Data Siswa</h1>
  </div>

  <div class="row my-4">
    <div class="col-md-5">
      <a href="siswa.php" class="btn btn-danger">Kembali</a>
    </div>
  </div>

  <div class="row">
    <div class="col-md-5">

      <form action="siswa_proses_ubah.php" method="post">

        <div class="mb-3">
          <label for="nis" class="form-label">NIS</label>
          <input type="text" class="form-control" id="nis" name="nis" value="<?= $nis ?>" readonly>
        </div>

        <div class="mb-3">
          <label for="id_kelas" class="form-label">Kelas</label>
          <select class="form-select" aria-label="Default select example" name="id_kelas" id="id_kelas">
            <option selected>Pilih Kelas</option>
            <?php while ($row = mysqli_fetch_assoc($dataKelas)) : ?>
              <option value="<?= $row['id_kelas'] ?>"><?= $row['tingkat_kelas'] ?> <?= $row['nama_kelas'] ?></option>
            <?php endwhile; ?>
          </select>
        </div>

        <div class="mb-3">
          <label for="nama_siswa" class="form-label">Nama Siswa</label>
          <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="<?= $data['nama_siswa'] ?>">
        </div>

        <div class="mb-3">
          <label for="alamat_siswa" class="form-label">Alamat Siswa</label>
          <div class="form-floating">
            <textarea class="form-control" placeholder="send" id="alamat_siswa" style="height: 100px" name="alamat_siswa" ><?= $data['alamat_siswa'] ?></textarea>
            <label for="alamat_siswa">Masukkan alamat lengkap</label>
          </div>
        </div>

        <div class="mb-3">
          <label for="no_hp_siswa" class="form-label">No HP</label>
          <input type="text" class="form-control" id="no_hp_siswa" name="no_hp_siswa" value="<?= $data['no_hp_siswa'] ?>">
        </div>

        <button type="submit" class="btn btn-success" name="simpan">Ubah Data</button>

      </form>

    </div>
  </div>

</main>