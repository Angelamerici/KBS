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
                        <th scope="col">RT</th>
                        <th scope="col">Dusun</th>
                        <th scope="col">Desa</th>
                        <th scope="col">Bantuan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($kbs as $kb) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $kb['nkk']; ?></td>
                            <td><?= $kb['ayah']; ?></td>
                            <td><?= $kb['ibu']; ?></td>
                            <td><?= $kb['rt']; ?></td>
                            <td><?= $kb['dusun']; ?></td>
                            <td><?= $kb['desa']; ?></td>
                            <td><?= $kb['bantuan']; ?></td>
                            <td>
                                <a href="" class="badge badge-success">edit</a>
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