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
                        <div class="mb-3 col-md-6">
                            <label for="baduta">Keluarga tidak memiliki sumber air minum yang layak ? </label>
                            <select name="baduta" class="form-control" id="baduta">
                                <option selected>--Pilih--</option>
                                <option value="ya">Ya</option>
                                <option value="tidak">Tidak</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="balita">Keluarga tidak mempunyai jamban yang layak ?</label>
                            <select name="balita" class="form-control" id="balita">
                                <option selected>--Pilih--</option>
                                <option value="ya">Ya</option>
                                <option value="tidak">Tidak</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="pus">Terlalu Muda <br> (Usia Istri < 20 tahun)</label>
                                    <select name="pus" class="form-control" id="pus">
                                        <option selected>--Pilih--</option>
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                    </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="pushamil">Terlalu Tua <br> (Usia Istri 35-40 tahun)</label>
                            <select name="pushamil" class="form-control" id="pushamil">
                                <option selected>--Pilih--</option>
                                <option value="ya">Ya</option>
                                <option value="tidak">Tidak</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="pushamil">Terlalu Dekat <br> (Jarak Umur Anak < 2 tahun )</label>
                                    <select name="pushamil" class="form-control" id="pushamil">
                                        <option selected>--Pilih--</option>
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                    </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="pushamil">Terlalu Banyak <br> (3 Anak)</label>
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