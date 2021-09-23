<?= $this->extend('layout/main_template') ?>

<?= $this->section('content') ?>
<?php $sessnama = session()->get('nama');
?>
<div class="container-fluid py-4">
    <div class="row">
        <!-- Page Heading -->
        <div class="row mt-3 mb-4">

            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah BPP</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        <?= number_format(14); ?>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah Poktan</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        <?= number_format(1253); ?>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah Gapoktan</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        <?= number_format(236); ?>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah KEP</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        <?= number_format(20); ?>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="row">

            <nav class="col-lg-12">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Profil</button>
                    <button class="nav-link" id="nav-penyuluh-tab" data-bs-toggle="tab" data-bs-target="#nav-penyuluh" type="button" role="tab" aria-controls="nav-penyuluh" aria-selected="false">Daftar Penyuluh</button>
                    <button class="nav-link" id="nav-lahancth-tab" data-bs-toggle="tab" data-bs-target="#nav-lahancth" type="button" role="tab" aria-controls="nav-lahancth" aria-selected="false">Lahan Percontohan</button>
                    <button class="nav-link" id="nav-sarpras-tab" data-bs-toggle="tab" data-bs-target="#nav-sarpras" type="button" role="tab" aria-controls="nav-sarpras" aria-selected="false">Sarana & Prasarana</button>
                    <button class="nav-link" id="nav-pokom-tab" data-bs-toggle="tab" data-bs-target="#nav-pokom" type="button" role="tab" aria-controls="nav-pokom" aria-selected="false">Potensi Ekonomi</button>
                    <button class="nav-link" id="nav-powil-tab" data-bs-toggle="tab" data-bs-target="#nav-powil" type="button" role="tab" aria-controls="nav-powil" aria-selected="false">Potensi Wilayah</button>
                </div>
            </nav>
            <div class="tab-content " id="nav-tabContent">
                <div class="tab-pane  fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                        <div class="col-lg-9 mb-lg-0 mb-4">
                            <div class="card">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
                                        <div class="col-lg-12">

                                            <table class="table">

                                                <tbody>
                                                    <tr>
                                                        <td>Nama Kelembagaan</td>
                                                        <td>:</td>
                                                        <td><?= $dt['deskripsi_lembaga_lain']; ?> <?= $sessnama; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tanggal Pembentukan</td>
                                                        <td>:</td>
                                                        <td><?= $dt['tgl_berdiri'] . '-' . $dt['bln_berdiri'] . '-' . $dt['thn_berdiri']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat</td>
                                                        <td>:</td>
                                                        <td> <?= $dt['alamat']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Provinsi</td>
                                                        <td>:</td>
                                                        <td><?= $dt['kode_prop']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>No Telepon/Fax</td>
                                                        <td>:</td>
                                                        <td><?= $dt['telp_kantor']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat Email</td>
                                                        <td>:</td>
                                                        <td><?= $dt['email']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat Website</td>
                                                        <td>:</td>
                                                        <td><?= $dt['website']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama Pimpinan</td>
                                                        <td>:</td>
                                                        <td><?= $dt['nama_kabid']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>No HP Pimpinan</td>
                                                        <td>:</td>
                                                        <td><?= $dt['hp_kabid']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama Koordinator PP</td>
                                                        <td>:</td>
                                                        <td><?= $dt['nama_koord_penyuluh']; ?></td>
                                                    </tr>

                                                </tbody>

                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-lg-0 mb-4 text-center">
                            <div class="card">
                                <div class="card-body p-3 ">
                                    <img src="<?= base_url('assets/img/logo.png'); ?>" width="150px" class="img-thumbnail" alt="profil">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="tab-pane fade" id="nav-penyuluh" role="tabpanel" aria-labelledby="nav-penyuluh-tab">
                    <div class="row">

                        <div class="col-lg-12 mb-lg-0 mb-4">
                            <div class="card">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <h1 class="h3 mb-4 text-gray-800">Daftar Penyuluh yang bertugas di Kab/Kota</h1>
                                        <div class="col-lg-8">

                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>Penyuluh PNS</td>
                                                        <td>:</td>
                                                        <td>dadasas</td>
                                                    </tr>
                                                    <tr>
                                                        <td>THL-TBPP (APBN)</td>
                                                        <td>:</td>
                                                        <td>dadasas</td>
                                                    </tr>
                                                    <tr>
                                                        <td>THL-TB PP (APBD)</td>
                                                        <td>:</td>
                                                        <td>dadasas</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>



                    </div>
                </div>

                <div class="tab-pane fade" id="nav-lahancth" role="tabpanel" aria-labelledby="nav-lahancth-tab">
                    <div class="row">
                        <div class="col-lg-12 mb-lg-0 mb-4">
                            <div class="card">
                                <div class="card-body p-3">
                                    <a href="#">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#modal-lahancth" class="btn bg-gradient-primary">+ Tambah Data</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-sarpras" role="tabpanel" aria-labelledby="nav-sarpras-tab">
                    <div class="row">
                        <div class="col-lg-12 mb-lg-0 mb-4">
                            <div class="card">
                                <div class="card-body p-3">
                                    <a href="#">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#modal-sarpras" class="btn bg-gradient-primary">+ Tambah Data</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-pokom" role="tabpanel" aria-labelledby="nav-pokom-tab">
                    <div class="row">
                        <div class="col-lg-12 mb-lg-0 mb-4">
                            <div class="card">
                                <div class="card-body p-3">
                                    <a href="#">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#modal-sarpras" class="btn bg-gradient-primary">+ Tambah Data</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-powil" role="tabpanel" aria-labelledby="nav-powil-tab">
                    <div class="row">
                        <div class="col-lg-12 mb-lg-0 mb-4">
                            <div class="card">
                                <div class="card-body p-3">
                                    <a href="#">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#modal-lahancth" class="btn bg-gradient-primary">+ Tambah Data</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- Modal -->

        <div class="modal fade" id="modal-lahancth" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-l" role="document">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="card card-plain">
                            <div class="card-header pb-0 text-left">
                                <h4 class="font-weight-bolder text-warning text-gradient">Tambah Data</h4>
                            </div>
                            <div class="card-body">
                                <form role="form text-left">
                                    <div class="row">
                                        <div class="col">

                                            <label>Di BPP</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Nama Kelembagaan" aria-label="Nama" aria-describedby="nama-addon">
                                                &nbsp; &nbsp;<label>Ha</label>&nbsp; &nbsp;
                                            </div>
                                            <label>Di Petani</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Nama Kelembagaan" aria-label="Nama" aria-describedby="nama-addon">
                                                &nbsp; &nbsp;<label>Ha</label>&nbsp; &nbsp;
                                            </div>
                                            <label>Penghargaan yang pernah diterima</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Nama Kelembagaan" aria-label="Nama" aria-describedby="nama-addon">
                                            </div>
                                            <label> Dana Alokasi Khusus (DAK)</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Nama Kelembagaan" aria-label="Nama" aria-describedby="nama-addon">
                                            </div>

                                            <div class="text-center">
                                                <center><button type="button" class="btn btn-round bg-gradient-warning btn-lg w-100 mt-4 mb-0">Simpan Data</button></center>
                                            </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal2 -->

        <div class="modal fade" id="modal-sarpras" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-l" role="document">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="card card-plain">
                            <div class="card-header pb-0 text-left">
                                <h4 class="font-weight-bolder text-warning text-gradient">Tambah Data</h4>
                            </div>
                            <div class="card-body">
                                <form role="form text-left">
                                    <div class="row">
                                        <div class="col">

                                            <label>Kendaraan Roda-4</label>
                                            <div class="input-group mb-3">
                                                &nbsp; &nbsp;<label>APBN</label>&nbsp; &nbsp;
                                                <input type="text" class="form-control" placeholder="Nama Kelembagaan" aria-label="Nama" aria-describedby="nama-addon">
                                                &nbsp; &nbsp;<label>Unit</label>&nbsp; &nbsp;&nbsp;
                                                &nbsp; &nbsp;<label>APBD</label>&nbsp; &nbsp;
                                                <input type="text" class="form-control" placeholder="Nama Kelembagaan" aria-label="Nama" aria-describedby="nama-addon">
                                                &nbsp; &nbsp;<label>Unit</label>&nbsp; &nbsp;
                                            </div>
                                            <label>Di Petani</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Nama Kelembagaan" aria-label="Nama" aria-describedby="nama-addon">
                                                &nbsp; &nbsp;<label>Ha</label>&nbsp; &nbsp;
                                            </div>


                                            <div class="text-center">
                                                <center><button type="button" class="btn btn-round bg-gradient-warning btn-lg w-100 mt-4 mb-0">Simpan Data</button></center>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<?php echo view('layout/footer'); ?>

</div>
</div>

<?= $this->endSection() ?>