<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="row mt-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header h4"><?= $title; ?></div>
                <div class="card-body">
                    <form class="row g-3" action="" method="post">
                        <input type="hidden" name="id" value="<?= $keluarga['id']; ?>">
                        <div class=" mb-3 col-12">
                            <label for="nkk">No Kartu Keluarga</label>
                            <input type="text" name="nkk" class="form-control" id="nkk" value="<?= $keluarga['nkk']; ?>">
                            <?= form_error('nkk', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="suami">Nama Suami</label>
                            <input type="text" name="suami" class="form-control" id="suami" value="<?= $keluarga['suami']; ?>">
                            <?= form_error('suami', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="istri">Nama Istri</label>
                            <input type="text" name="istri" class="form-control" id="istri" value="<?= $keluarga['istri']; ?>">
                            <?= form_error('istri', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="mb-3 col-md-4 ">
                            <label for="rt">RT</label>
                            <input type="text" name="rt" class="form-control" id="rt" value="<?= $keluarga['rt']; ?>">
                            <?= form_error('rt', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="mb-3 col-md-4 ">
                            <label for="dusun">Dusun</label>
                            <input type="text" name="dusun" class="form-control" id="dusun" value="<?= $keluarga['dusun']; ?>">
                            <?= form_error('dusun', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="mb-3 col-md-10 ">
                            <label for="desa">Desa</label>
                            <select name="desa" class="form-control" id="desa">
                                <?php foreach ($desa as $d) : ?>
                                    <?php if ($d == $keluarga['desa']) : ?>
                                        <option value="<?= $d; ?>" selected><?= $d; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $d; ?>"><?= $d; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="baduta">Punya Anak <br>Baduta (0-23 Bulan) </label>
                            <select name="baduta" class="form-control" id="baduta">
                                <option selected>--Pilih--</option>
                                <option value="ya">Ya</option>
                                <option value="tidak">Tidak</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="balita">Punya Anak <br> Balita (24-59 Bulan)</label>
                            <select name="balita" class="form-control" id="balita">
                                <option selected>--Pilih--</option>
                                <option value="ya">Ya</option>
                                <option value="tidak">Tidak</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="pus">Pasangan Usia Subur (PUS)</label>
                            <select name="pus" class="form-control" id="pus">
                                <option selected>--Pilih--</option>
                                <option value="ya">Ya</option>
                                <option value="tidak">Tidak</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="pushamil">PUS Hamil</label>
                            <select name="pushamil" class="form-control" id="pushamil">
                                <option selected>--Pilih--</option>
                                <option value="ya">Ya</option>
                                <option value="tidak">Tidak</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <button type="submit" name="edit" class="btn btn-primary float-right">Edit</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->