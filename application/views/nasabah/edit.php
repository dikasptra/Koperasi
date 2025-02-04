<div class="container">
    <div class="row mt-2">
        <div class="col-md-12">
            <h1>Formulir Edit Data Nasabah</h1>
            <hr>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-12">
  <div class="mb-3">
    <form id="form_advanced_validation" method="post">
    <label for="id" class="form-label">Id</label>
    <input type="text" class="form-control" id="id" name="id" value="<?= $nasabah['id']; ?>">
    <div class="mb-3">
    <label for="nama_nasabah" class="form-label">Nama Nasabah</label>
    <input type="text" class="form-control" id="nama_nasabah" name="nama_nasabah" value="<?= $nasabah['nama_nasabah']; ?>">
    <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $nasabah['alamat']; ?>">
    <div class="mb-3">
    <label for="no_hp" class="form-label">Nomor Hp</label>
    <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $nasabah['no_hp']; ?>">
    <div class="mb-3">
    <label for="tgl_simpan" class="form-label">Tanggal Simpan</label>
    <input type="text" class="form-control" id="tgl_simpan" name="tgl_simpan" value="<?= $nasabah['tgl_simpan']; ?>">
    <div class="mb-3">
    <label for="jumlah" class="form-label">Jumlah</label>
    <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?= $nasabah['jumlah']; ?>">
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
    </div>
    <!-- end container -->
</div>