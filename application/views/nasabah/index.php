<!-- bagian content -->

<div class="container">
    <div class="row mt-2 mb-4">
        <div class="col-md-12 text-center">
            <h1>Data Nasabah</h1>
            <hr>
    </div>
</div>

<!-- setting flash data -->
<div class="row mt-2">
    <div class="col-md-12">
        <?php if ($this->session->flashdata()) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data nasabah <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        <?php endif; ?>
    </div>
</div>

<div class="row mt-2">
    <div class="col-md-12">
        <a href="<?= base_url(); ?>nasabah/tambah" class="btn btn-primary">Add nasabah</a>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id</th>
                    <th>Nama Nasabah</th>
                    <th>Alamat</th>
                    <th>No Hp</th>
                    <th>Tanggal Simpan</th>
                    <th>Jumlah</th>
                    <th>Ubah</th>
                </tr>
            </thead>
            <tbody>
                <?php $i =1; ?>
                <?php foreach ($nasabah as $nasabah) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $nasabah['id']; ?></td>
                        <td><?= $nasabah['nama_nasabah']; ?></td>
                        <td><?= $nasabah['alamat']; ?></td>
                        <td><?= $nasabah['no_hp']; ?></td>
                        <td><?= $nasabah['tgl_simpan']; ?></td>
                        <td><?= $nasabah['jumlah']; ?></td>
                        <td>
                            <a href="<?= base_url(); ?>nasabah/edit/<?= $nasabah['id']; ?>" class="btn btn-success">Edit</a>
                            <a href="<?= base_url(); ?>nasabah/hapus/<?= $nasabah['id']; ?>" class="btn btn-danger" onclick="return confirm('Are You Sure..?')">Delete</a>
                        </td>
                    </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<!-- end div container -->
</div>