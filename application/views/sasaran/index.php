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

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">No KK</th>
                        <th scope="col">Nama Suami</th>
                        <th scope="col">Nama Istri</th>
                        <th scope="col">PUS</th>
                        <th scope="col">Keluarga Tidak Mempunyai Sumber Air Minum Utama Yang Layak</th>
                        <th scope="col">Keluarga Tidak Mempunyai Jamban Yang Layak</th>
                        <th scope="col">Terlalu Muda</th>
                        <th scope="col">Terlalu Tua</th>
                        <th scope="col">Terlalu Dekat</th>
                        <th scope="col">Terlalu Banyak</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($sasaran as $s) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $s['nkk']; ?></td>
                            <td><?= $s['suami']; ?></td>
                            <td><?= $s['istri']; ?></td>
                            <td><?= $s['pus']; ?></td>
                            <td><?= $s['air']; ?></td>
                            <td><?= $s['jamban']; ?></td>
                            <td><?= $s['muda']; ?></td>
                            <td><?= $s['tua']; ?></td>
                            <td><?= $s['dekat']; ?></td>
                            <td><?= $s['banyak']; ?></td>
                            <td>
                                <a href="<?= base_url(); ?>sasaran/edit/<?= $s['id']; ?>" class="badge badge-success">edit</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->