<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row mt-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header h4"><?= $title; ?></div>
                <div class="card-body">
                    <h5 class="card-title"><?= $keluarga['nkk']; ?></h5>
                    <p class="card-text">Nama Suami : <?= $keluarga['suami']; ?></p>
                    <p class="card-text">Nama Istri : <?= $keluarga['istri']; ?></p>
                    <p class="card-text">RT : <?= $keluarga['rt']; ?></p>
                    <p class="card-text">Dusun/RW : <?= $keluarga['dusun']; ?></p>
                    <p class="card-text">Desa/Kelurahan : <?= $keluarga['desa']; ?></p>
                    <p class="card-text">Kecamatan : Gunung Sugih</p>
                    <p class="card-text">Kabupaten/Kota : Lampung Tengah</p>
                    <p class="card-text">Provinsi : Lampung</p>
                    <p class="card-text"><small class="text-body-secondary">Terdaftar sejak <?= date('d F Y', $keluarga['date_created']); ?></small></p>
                    <a href="<?= base_url(); ?>keluarga" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->