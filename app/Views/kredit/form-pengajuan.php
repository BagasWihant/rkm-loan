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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row shopping-wizard">
                            <div class="col-12">
                                <div class="row shipping-form g-5">
                                    <div class="col-xl-12 shipping-border">
                                        <div class="nav nav-pills horizontal-options shipping-options" id="cart-options-tab" role="tablist" aria-orientation="vertical"><a class="nav-link b-r-0 active" id="bill-wizard-tab" data-bs-toggle="pill" href="#bill-wizard" role="tab" aria-controls="bill-wizard" aria-selected="true">
                                                <div class="cart-options">
                                                    <div class="stroke-icon-wizard"><i class="fa fa-user"></i></div>
                                                    <div class="cart-options-content">
                                                        <h6>Data Pribadi</h6>
                                                    </div>
                                                </div>
                                            </a><a class="nav-link b-r-0" id="ship-wizard-tab" data-bs-toggle="pill" href="#ship-wizard" role="tab" aria-controls="ship-wizard" aria-selected="false">
                                                <div class="cart-options">
                                                    <div class="stroke-icon-wizard"><i class="fa fa-truck"></i></div>
                                                    <div class="cart-options-content">
                                                        <h6>Data Permohonan</h6>
                                                    </div>
                                                </div>
                                            </a><a class="nav-link b-r-0" id="payment-wizard-tab" data-bs-toggle="pill" href="#payment-wizard" role="tab" aria-controls="payment-wizard" aria-selected="false">
                                                <div class="cart-options">
                                                    <div class="stroke-icon-wizard"><i class="fa fa-money"></i></div>
                                                    <div class="cart-options-content">
                                                        <h6>Data Suami/Istri/Orang Tua</h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="tab-content dark-field shipping-content" id="cart-options-tabContent">
                                            <div class="tab-pane fade show active" id="bill-wizard" role="tabpanel" aria-labelledby="bill-wizard-tab">
                                                <div class="row g-3 needs-validation" novalidate="">
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
                                                        <label class="form-label" for="customContact">No. NPWP<span class="txt-danger">*</span></label>
                                                        <input class="form-control" id="customContact" type="number" name="npwp" placeholder="Masukkan nomor NPWP" required="">
                                                        <div class="valid-feedback">Looks good!</div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label class="form-label" for="customLastname">Tempat Lahir<span class="txt-danger">*</span></label>
                                                        <input class="form-control" id="customLastname" type="text" name="tempat_lahir" placeholder="Masukkan tempat lahir" required="">
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
                                                        <label class="form-label" for="customState-wizard">Jenis Kelamin</label>
                                                        <select class="form-select" id="customState-wizard" name="jenis_kelamin" required="">
                                                            <option selected="" disabled="" value="">Pilih Jenis Kelamin</option>
                                                            <?php foreach ($jenis_kelamin as $row) { ?>
                                                                <option value="<?php echo $row['sandi'] ?>"><?php echo $row['keterangan'] ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label class="form-label" for="customState-wizard">Status</label>
                                                        <select class="form-select" id="customState-wizard" name="status_nikah" required="">
                                                            <option selected="" disabled="" value="">Pilih Status Pernikahan</option>
                                                            <?php foreach ($status_nikah as $row) { ?>
                                                                <option value="<?php echo $row['sandi'] ?>"><?php echo $row['keterangan'] ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label class="form-label" for="customContact">No. HP<span class="txt-danger">*</span></label>
                                                        <input class="form-control" id="customContact" type="number" name="no_hp" placeholder="Masukkan nomor HP" required="">
                                                        <div class="valid-feedback">Looks good!</div>
                                                    </div>
                                                    <div class="col-12 text-end">
                                                        <button class="btn btn-primary">Proceed to Next<i class="fa fa-truck proceed-next pe-2"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade shipping-wizard" id="ship-wizard" role="tabpanel" aria-labelledby="ship-wizard-tab">
                                                <div class="row g-3">
                                                    <div class="col-sm-4">
                                                        <label class="form-label" for="cleave-number-format">Plafon Permnohonan Kredit<span class="txt-danger">*</span></label>
                                                        <input class="form-control" id="cleave-number-format" type="text" name="plafon" placeholder="Masukkan plafond kredit">
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
                                            <div class="tab-pane fade shipping-wizard" id="payment-wizard" role="tabpanel" aria-labelledby="payment-wizard-tab">
                                                <div class="payment-info-wrapper">
                                                    <div class="row shipping-method g-3">
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
                                                            <label class="form-label" for="exampleFormControlTextarea1">Alamat </label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea1" name="alamat_relasi" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Container-fluid Ends-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card height-equal">
                    <div class="card-header">
                        <h4>Numbering wizard </h4>
                        <p class="f-m-light mt-1">
                            Fill up your details and proceed next steps.</p>
                    </div>
                    <div class="card-body basic-wizard important-validation">
                        <div class="stepper-horizontal" id="stepper1">
                            <div class="stepper-one stepper step editing active">
                                <div class="step-circle"><span>1</span></div>
                                <div class="step-title">Basic Info</div>
                                <div class="step-bar-left"></div>
                                <div class="step-bar-right"></div>
                            </div>
                            <div class="stepper-two step">
                                <div class="step-circle"><span>2</span></div>
                                <div class="step-title">Cart Info</div>
                                <div class="step-bar-left"></div>
                                <div class="step-bar-right"></div>
                            </div>
                            <div class="stepper-three step">
                                <div class="step-circle"><span>3</span></div>
                                <div class="step-title">Feedback</div>
                                <div class="step-bar-left"></div>
                                <div class="step-bar-right"></div>
                            </div>
                            <div class="stepper-four step">
                                <div class="step-circle"><span>4</span></div>
                                <div class="step-title">Finish</div>
                                <div class="step-bar-left"></div>
                                <div class="step-bar-right"></div>
                            </div>
                        </div>
                        <div id="msform">
                            <form class="stepper-one row g-3 needs-validation custom-input" novalidate="">
                                <div class="col-sm-6">
                                    <label class="form-label" for="email-basic-wizard">Email<span class="txt-danger">*</span></label>
                                    <input class="form-control" id="email-basic-wizard" type="email" required="" placeholder="cuba@gmail.com">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="firstnamewizard">First Name<span class="txt-danger">*</span></label>
                                    <input class="form-control" id="firstnamewizard" type="text" required="" placeholder="Enter your name">
                                </div>
                                <div class="col-12">
                                    <label class="col-sm-12 form-label" for="passwordwizard">Password<span class="txt-danger">*</span></label>
                                    <input class="form-control" id="passwordwizard" type="password" placeholder="Enter password" required="">
                                </div>
                                <div class="col-12">
                                    <label class="col-sm-12 form-label" for="confirmpasswordwizard">Confirm Password<span class="txt-danger">*</span></label>
                                    <input class="form-control" id="confirmpasswordwizard" type="password" placeholder="Enter confirm password" required="">
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" id="inputcheckwizard" type="checkbox" value="" required="">
                                        <label class="form-check-label mb-0" for="inputcheckwizard">Agree to terms and conditions</label>
                                    </div>
                                </div>
                            </form>
                            <form class="stepper-two row g-3 needs-validation custom-input" novalidate="">
                                <div class="col-md-12">
                                    <label class="form-label" for="placeholdername1">Placeholder Name </label>
                                    <input class="form-control" id="placeholdername1" type="text" required="" placeholder="Placeholder name">
                                </div>
                                <div class="col-xxl-4 col-sm-6">
                                    <label class="form-label" for="cardNumber01">Card Number</label>
                                    <input class="form-control" id="cardNumber01" type="text" required="" placeholder="xxxx xxxx xxxx xxxx">
                                </div>
                                <div class="col-xxl-4 col-sm-6">
                                    <label class="form-label" for="expirationDates01">Expiration(MM/YY)</label>
                                    <input class="form-control" id="expirationDates01" type="number" required="" placeholder="xx/xx">
                                </div>
                                <div class="col-xxl-4">
                                    <label class="form-label" for="cvvNumber-a">CVV Number</label>
                                    <input class="form-control" id="cvvNumber-a" type="text" required="">
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="formFileDocument">Upload Documentation</label>
                                    <input class="form-control" id="formFileDocument" type="file" aria-label="file example" required="">
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" id="invalidCheck-a" type="checkbox" value="" required="">
                                        <label class="form-check-label" for="invalidCheck-a">All the above information is correct</label>
                                    </div>
                                </div>
                            </form>
                            <form class="stepper-three row g-3 needs-validation custom-input" novalidate="">
                                <div class="col-sm-6">
                                    <label class="form-label" for="email-basic">LinkedIn<span class="txt-danger">*</span></label>
                                    <input class="form-control" id="email-basic" type="url" required="" placeholder="https://linkedIn.com/cuba">
                                    <div class="invalid-feedback">Please enter your valid link</div>
                                    <div class="valid-feedback">
                                        Looks's Good!</div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="validationCustom996">Github<span class="txt-danger">*</span></label>
                                    <input class="form-control" id="validationCustom996" type="url" required="" placeholder="https://github.com/cuba">
                                    <div class="invalid-feedback">Please enter your valid link</div>
                                    <div class="valid-feedback">
                                        Looks's Good! </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="validationCustom09">Select State<span class="txt-danger">*</span></label>
                                    <select class="form-select" id="validationCustom09" required="">
                                        <option selected="" disabled="" value="">Choose...</option>
                                        <option>U.K </option>
                                        <option>U.S </option>
                                        <option>India</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a valid state.</div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="givefeedback">Give Feedback</label>
                                    <textarea class="form-control" id="givefeedback" required=""></textarea>
                                    <div class="invalid-feedback">Please enter a message in the textarea.</div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" id="invalidCheck46" type="checkbox" value="" required="">
                                        <label class="form-check-label mb-0" for="invalidCheck46">Agree to terms and conditions</label>
                                        <div class="invalid-feedback">You must agree before submitting.</div>
                                    </div>
                                </div>
                            </form>
                            <form class="stepper-four row g-3 needs-validation" novalidate="">
                                <div class="col-12 m-0">
                                    <div class="successful-form"><img class="img-fluid" src="../assets/images/gif/dashboard-8/successful.gif" alt="successful">
                                        <h6>Congratulations </h6>
                                        <p>Well done! You have successfully completed. </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="wizard-footer d-flex gap-2 justify-content-end">
                            <button class="btn alert-light-primary" id="backbtn" onclick="backStep()"> Back</button>
                            <button class="btn btn-primary" id="nextbtn" onclick="nextStep()">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>