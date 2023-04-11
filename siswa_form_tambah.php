<?php
require 'koneksi.php';

$query = "SELECT * FROM tbl_kelas";
$result = mysqli_query($koneksi, $query);

?>
<?php require 'templates/header.php' ?>
<?php require 'templates/footer.php' ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-3">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Data Siswa</h1>
  </div>

  <div class="row my-4">
    <div class="col-md-5">
      <a href="siswa.php" class="btn btn-danger">Kembali</a>
    </div>
  </div>

  <div class="row">
    <div class="col-md-5">

      <form action="siswa_proses_tambah.php" method="post">

        <div class="mb-3">
          <label for="nis" class="form-label">NIS</label>
          <input type="text" class="form-control" id="nis" name="nis">
        </div>

        <div class="mb-3">
          <label for="id_kelas" class="form-label">Kelas</label>
          <select class="form-select" aria-label="Default select example" name="id_kelas" id="id_kelas">
            <option selected>Pilih Kelas</option>
            <?php while ($data = mysqli_fetch_assoc($result)) : ?>
              <option value="<?= $data['id_kelas'] ?>"><?= $data['tingkat_kelas'] ?> <?= $data['nama_kelas'] ?></option>
            <?php endwhile; ?>
          </select>
        </div>

        <div class="mb-3">
          <label for="nama_siswa" class="form-label">Nama Siswa</label>
          <input type="text" class="form-control" id="nama_siswa" name="nama_siswa">
        </div>

        <div class="mb-3">
          <label for="alamat_siswa" class="form-label">Alamat Siswa</label>
          <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="alamat_siswa"></textarea>
            <label for="floatingTextarea2">Masukkan alamat lengkap</label>
          </div>
        </div>

        <div class="mb-3">
          <label for="no_hp_siswa" class="form-label">No HP</label>
          <input type="text" class="form-control" id="no_hp_siswa" name="no_hp_siswa">
        </div>

        <button type="submit" class="btn btn-success" name="simpan">Tambah Data</button>

      </form>

    </div>
  </div>

</main>