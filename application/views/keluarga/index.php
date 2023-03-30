<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg">

            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>

            <a href="<?= base_url(); ?>keluarga/tambah" class="btn btn-primary mb-3">Tambah Data Keluarga</a>

            <div class="row mt-3">
                <div class="col-md-6">
                    <form action="" method="post">
                        <div class="input-group mb-3 ">
                            <input type="text" class="form-control" placeholder="Cari data keluarga.." name="keyword">
                            <button class="btn btn-outline-secondary " type="submit">Cari</button>
                        </div>
                    </form>
                </div>
            </div>



            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">No KK</th>
                        <th scope="col">Nama Suami</th>
                        <th scope="col">Nama Istri</th>
                        <th scope="col">Baduta</th>
                        <th scope="col">Balita</th>
                        <th scope="col">PUS</th>
                        <th scope="col">PUS Hamil</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($keluarga as $k) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $k['nkk']; ?></td>
                            <td><?= $k['suami']; ?></td>
                            <td><?= $k['istri']; ?></td>
                            <td><?= $k['baduta']; ?></td>
                            <td><?= $k['balita']; ?></td>
                            <td><?= $k['pus']; ?></td>
                            <td><?= $k['pushamil']; ?></td>
                            <td>

                                <a href="<?= base_url(); ?>keluarga/detail/<?= $k['id']; ?>" class="badge badge-primary">detail</a>
                                <a href="<?= base_url(); ?>keluarga/edit/<?= $k['id']; ?>" class="badge badge-success">edit</a>
                                <a href="<?= base_url(); ?>keluarga/hapus/<?= $k['id']; ?>" class="badge badge-danger" onclick="return confirm('Yakin ingin di hapus ?');">hapus</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php if (empty($keluarga)) : ?>
                <div class="alert alert-danger" role="alert">
                    Data keluarga tidak ditemukan !
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->