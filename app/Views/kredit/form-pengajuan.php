<?= $this->extend('layout/header') ?>

<?= $this->section('content') ?>
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>Aplikasi Permohonan Kredit</h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">
                                <svg class="stroke-icon">
                                    <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Kredit</li>
                        <li class="breadcrumb-item active">Form Pengajuan</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">

            <div class="card-body basic-wizard important-validation">
                <div class="stepper-horizontal" id="stepper1">
                    <div class="stepper-one stepper step editing">
                        <div class="step-circle"><span>1</span></div>
                        <div class="text-center">Data Peminjam</div>
                        <div class="step-bar-left"></div>
                        <div class="step-bar-right"></div>
                    </div>
                    <div class="stepper-two step">
                        <div class="step-circle"><span>2</span></div>
                        <div class="text-center">Data Permohonan</div>
                        <div class="step-bar-left"></div>
                        <div class="step-bar-right"></div>
                    </div>
                    <div class="stepper-three step">
                        <div class="step-circle"><span>3</span></div>
                        <!-- <div class="text-center">Suami / Istri / Orangtua</div> -->
                        <div class="text-center">Data Relasi</div>
                        <div class="step-bar-left"></div>
                        <div class="step-bar-right"></div>
                    </div>
                    <div class="stepper-four step">
                        <div class="step-circle"><span>4</span></div>
                        <div class="text-center">Tipe</div>
                        <div class="step-bar-left"></div>
                        <div class="step-bar-right"></div>
                    </div>
                    <div class="stepper-five step">
                        <div class="step-circle"><span>5</span></div>
                        <div class="text-center">Finish</div>
                        <div class="step-bar-left"></div>
                        <div class="step-bar-right"></div>
                    </div>
                </div>
            </div>
            <form class="form-wizard" id="regForm" action="pengajuan/save" method="POST">
                <?= csrf_field() ?>
                <div class="tab mb-3">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label class="form-label" for="customFirstname">Nama Lengkap<span class="txt-danger">*</span></label>
                            <input class="form-control" id="customFirstname" type="text" name="nama" placeholder="Masukkan nama lengkap" required="">
                            <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="customLastname">Nama Ibu Kandung<span class="txt-danger">*</span></label>
                            <input class="form-control" id="customLastname" type="text" name="nama_ibu" placeholder="Masukkan nama ibu kandung" required="">
                            <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-sm-3">
                            <label class="form-label" for="customContact">No. KTP<span class="txt-danger">*</span></label>
                            <input class="form-control" id="customContact" type="number" name="no_ktp" placeholder="Masukkan nomor KTP" required="">
                            <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-sm-3">
                            <label class="form-label" for="npwp">No. NPWP<span class="txt-danger">*</span></label>
                            <input class="form-control" id="npwp" type="number" name="npwp" placeholder="Masukkan nomor NPWP" required="">
                            <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-sm-3">
                            <label class="form-label" for="tempat_lahir">Tempat Lahir<span class="txt-danger">*</span></label>
                            <input class="form-control" id="tempat_lahir" type="text" name="tempat_lahir" placeholder="Masukkan tempat lahir" required="">
                            <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-sm-3">
                            <label class="form-label" for="customEmail">Tanggal Lahir<span class="txt-danger">*</span></label>
                            <input class="form-control digits" type="date" name="tanggal_lahir" value="yyyy-mm-dd">
                            <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="exampleFormControlTextarea1">Alamat </label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="alamat" rows="3"></textarea>
                        </div>
                        <div class="col-sm-4">
                            <label class="form-label" for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required="">
                                <option selected="" disabled="" value="">Pilih Jenis Kelamin</option>
                                <?php foreach ($jenis_kelamin as $row) { ?>
                                    <option value="<?php echo $row['sandi'] ?>"><?php echo $row['keterangan'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label class="form-label" for="status">Status</label>
                            <select class="form-select" id="status" name="status_nikah" required="">
                                <option selected="" disabled="" value="">Pilih Status Pernikahan</option>
                                <?php foreach ($status_nikah as $row) { ?>
                                    <option value="<?php echo $row['sandi'] ?>"><?php echo $row['keterangan'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label class="form-label" for="no_hp">No. HP<span class="txt-danger">*</span></label>
                            <input class="form-control" id="no_hp" type="number" name="no_hp" placeholder="Masukkan nomor HP" required="">
                            <div class="valid-feedback">Looks good!</div>
                        </div>
                    </div>
                </div>
                <div class="tab mb-3">
                    <div class="row g-3">
                        <div class="col-sm-4">
                            <label class="form-label" for="plafon">Plafon Permohonan Kredit<span class="txt-danger">*</span></label>
                            <input class="form-control" id="plafon" type="text" name="plafon" placeholder="Masukkan plafond kredit">
                            <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-sm-4">
                            <label class="form-label" for="customFirstname">Jangka Waktu<span class="txt-danger">*</span></label>
                            <input class="form-control" id="customFirstname" type="number" name="jangka_waktu" placeholder="Jangka waktu pinjaman" required="">
                            <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-sm-4">
                            <label class="form-label" for="customState-wizard">Jenis Bunga</label>
                            <select class="form-select" id="customState-wizard" name="jenis_bunga" required="">
                                <option selected="" disabled="" value="">Pilih Jenis Bunga</option>
                                <?php foreach ($jenis_bunga as $row) { ?>
                                    <option value="<?php echo $row['sandi'] ?>"><?php echo $row['keterangan'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="tab mb-3">
                    <div class="row g-3">
                        <div class="col-sm-4">
                            <label class="form-label" for="customFirstname">Nama Lengkap<span class="txt-danger">*</span></label>
                            <input class="form-control" id="customFirstname" type="text" name="nama_relasi" placeholder="Masukkan nama suami/istri/orang tua" required="">
                            <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-sm-4">
                            <label class="form-label" for="customContact">No. HP<span class="txt-danger">*</span></label>
                            <input class="form-control" id="customContact" type="number" name="no_hp_relasi" placeholder="Masukkan nomor HP" required="">
                            <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-sm-4">
                            <label class="form-label" for="jenis_relasi">Hubungan<span class="txt-danger">*</span></label>
                            <select class="form-select" id="jenis_relasi" name="jenis_relasi" required="">
                                <option selected="" disabled="" value="">Pilih Hubungan</option>
                                <?php foreach ($jenis_relasi as $row) { ?>
                                    <option value="<?php echo $row['sandi'] ?>"><?php echo $row['keterangan'] ?></option>
                                <?php } ?>
                            </select>
                            <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="alamat_relasi">Alamat </label>
                            <textarea class="form-control" id="alamat_relasi" name="alamat_relasi" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="tab mb-3">
                    <div class="row g-3">

                        <div class="col-sm-4">
                            <label class="form-label" for="jenis_nasabah">Tipe<span class="txt-danger">*</span></label>
                            <select class="form-select" id="jenis_nasabah" name="jenis_nasabah" required="">
                                <option selected="" disabled="" value="">Pilih Tipe</option>
                                <option value="0">Reguler</option>
                                <option value="1">Keluarga Restu</option>
                                <option value="2">Sahabat Restu</option>
                            </select>
                            <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div id="sahabatRestuForm" class="row" style="display: none;">
                            <div class="col-sm-6">
                                <label class="form-label " for="customFirstname">CNO<span class="txt-danger">*</span></label>
                                <input class="form-control canbeskip" id="customFirstname" type="text" name="cno" placeholder="Masukkan CNO" required="">
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label" for="customFirstname">Nama Lengkap</label>
                                <input class="form-control canbeskip" id="customFirstname" type="text" name="nama_shbt" placeholder="Nama Lengkap" readonly>
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label" for="customContact">No. Rekening</label>
                                <input class="form-control canbeskip" id="customContact" type="number" name="norek_shbt" placeholder="Nomor Rekening" readonly>
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label" for="customContact">A.N No. Rekening</label>
                                <input class="form-control canbeskip" id="customContact" type="number" name="nama_norek" placeholder="Pemilik Rekening" readonly>
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="alamat_shbt">Alamat </label>
                                <textarea class="form-control canbeskip" id="alamat_shbt" name="alamat_shbt" rows="3" readonly></textarea>
                            </div>
                        </div>
                        <div id="keluargaRestuForm" class="row" style="display: none;">
                            <div class="col-sm-6">
                                <label class="form-label" for="customFirstname">Kode Karyawan<span class="txt-danger">*</span></label>
                                <input class="form-control canbeskip" id="customFirstname" type="text" name="kode_kar" placeholder="Masukkan Kode Karyawan" required="">
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label" for="customFirstname">Nama Lengkap</label>
                                <input class="form-control canbeskip" id="customFirstname" type="text" name="nama_kel" placeholder="Nama Lengkap" readonly>
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label" for="customContact">No. Rekening</label>
                                <input class="form-control canbeskip" id="customContact" type="number" name="norek_kel" placeholder="Nomor Rekening" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab mb-3 preview">
                    <div class="row g-1">
                        <div class="card p-3">
                            <h5 class="text-uppercase text-center mb-3">Data Peminjam</h5>
                            <div class="text-capitalize col-md-6"> <span class="d-block mb-0 fw-medium">Nama Lengkap : </span>
                                <p id="preview_nama" class="text-break text-secondary"></p>
                            </div>
                            <div class="text-capitalize col-md-6"> <span class="d-block mb-0 fw-medium">Nama Ibu Kandung : </span>
                                <p id="preview_namaIbu" class="text-break text-secondary"></p>
                            </div>
                            <div class="text-capitalize col-md-6"> <span class="d-block mb-0 fw-medium">No. KTP : </span>
                                <p id="preview_noktp" class="text-break text-secondary"></p>
                            </div>
                            <div class="text-capitalize col-md-6"> <span class="d-block mb-0 fw-medium">No. NPWP : </span>
                                <p id="preview_npwp" class="text-break text-secondary"></p>
                            </div>
                            <div class="text-capitalize col-md-6"> <span class="d-block mb-0 fw-medium">Tempat Lahir : </span>
                                <p id="preview_tempat" class="text-break text-secondary"></p>
                            </div>
                            <div class="text-capitalize col-md-6"> <span class="d-block mb-0 fw-medium">Tanggal Lahir : </span>
                                <p id="preview_tgllhr" class="text-break text-secondary"></p>
                            </div>
                            <div class="text-capitalize col-md-6"> <span class="d-block mb-0 fw-medium">Alamat : </span>
                                <p id="preview_alamat" class="text-break text-secondary"></p>
                            </div>
                            <div class="text-capitalize col-md-6"> <span class="d-block mb-0 fw-medium">jenis Kelamin : </span>
                                <p id="preview_jk" class="text-break text-secondary"></p>
                            </div>
                            <div class="text-capitalize col-md-6"> <span class="d-block mb-0 fw-medium">Status : </span>
                                <p id="preview_status" class="text-break text-secondary"></p>
                            </div>
                            <div class="text-capitalize col-md-6"> <span class="d-block mb-0 fw-medium">no. HP : </span>
                                <p id="preview_hp" class="text-break text-secondary"></p>
                            </div>
                        </div>
                        <div class="card p-3">
                            <h5 class="text-uppercase text-center mb-3">Data Permohonan</h5>
                            <div class="text-capitalize col-md-6"> <span class="d-block mb-0 fw-medium">plafon permohonan kredit : </span>
                               <p>Rp. <span id="preview_plafon" class="text-break text-secondary"></span></p>
                            </div>
                            <div class="text-capitalize col-md-6"> <span class="d-block mb-0 fw-medium">jangka waktu : </span>
                                <p id="preview_jangka" class="text-break text-secondary"></p>
                            </div>
                            <div class="text-capitalize col-md-6"> <span class="d-block mb-0 fw-medium">jenis bunga : </span>
                                <p id="preview_bunga" class="text-break text-secondary"></p>
                            </div>
                        </div>
                        <div class="card p-3">
                            <h5 class="text-uppercase text-center mb-3">Data Relasi</h5>
                            <div class="text-capitalize col-md-6"> <span class="d-block mb-0 fw-medium">Nama lengkap : </span>
                                <p id="preview_namarel" class="text-break text-secondary"></p>
                            </div>
                            <div class="text-capitalize col-md-6"> <span class="d-block mb-0 fw-medium">no. HP : </span>
                                <p id="preview_hp_rel" class="text-break text-secondary"></p>
                            </div>
                            <div class="text-capitalize col-md-6"> <span class="d-block mb-0 fw-medium">Hubungan : </span>
                                <p id="preview_hubungan" class="text-break text-secondary"></p>
                            </div>
                            <div class="text-capitalize col-md-6"> <span class="d-block mb-0 fw-medium">Alamat : </span>
                                <p id="preview_alamat_rel" class="text-break text-secondary"></p>
                            </div>
                        </div>
                        <div class="card p-3">
                            <h5 class="text-uppercase text-center mb-3">Tipe</h5>
                            <div id="keluargatipe"  style="display: none;">
                                <strong>Keluarga Restu</strong>
                                <div class="text-capitalize col-md-6"> <span class="d-block mb-0 fw-medium">Kode Karyawan : </span>
                                    <p id="preview_kodeKar" class="text-break text-secondary"></p>
                                </div>
                                <div class="text-capitalize col-md-6"> <span class="d-block mb-0 fw-medium">Nama lengkap : </span>
                                    <p id="preview_namaLengkel" class="text-break text-secondary"></p>
                                </div>
                                <div class="text-capitalize col-md-6"> <span class="d-block mb-0 fw-medium">No. Rekening : </span>
                                    <p id="preview_norekkel" class="text-break text-secondary"></p>
                                </div>
                            </div>
                            <div id="sahabattipe"  style="display: none;">
                                <strong>Sahabat Restu</strong>
                                <div class="text-capitalize col-md-6"> <span class="d-block mb-0 fw-medium">CNO : </span>
                                    <p id="preview_cno" class="text-break text-secondary"></p>
                                </div>
                                <div class="text-capitalize col-md-6"> <span class="d-block mb-0 fw-medium">Nama lengkap : </span>
                                    <p id="preview_namaLengshbt" class="text-break text-secondary"></p>
                                </div>
                                <div class="text-capitalize col-md-6"> <span class="d-block mb-0 fw-medium">No. Rekening : </span>
                                    <p id="preview_norekshbt" class="text-break text-secondary"></p>
                                </div>
                                <div class="text-capitalize col-md-6"> <span class="d-block mb-0 fw-medium">A.N No. Rekening : </span>
                                    <p id="preview_namanorekshbt" class="text-break text-secondary"></p>
                                </div>
                                <div class="text-capitalize col-md-6"> <span class="d-block mb-0 fw-medium">Alamat : </span>
                                    <p id="preview_alamatshbt" class="text-break text-secondary"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="text-end mb-3">
                        <button class="btn btn-secondary" id="prevBtn" type="button" onclick="nextPrev(-1)">Previous</button>
                        <button class="btn btn-primary" id="nextBtn" type="button" onclick="nextPrev(1)">Next</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
<?= $this->endSection() ?>