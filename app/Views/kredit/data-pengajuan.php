<?= $this->extend('layout/header') ?>

<?= $this->section('content') ?>
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>Data Pengajuan</h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">
                                <svg class="stroke-icon">
                                    <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Kredit</li>
                        <li class="breadcrumb-item active">Data Pengajuan</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <!-- Zero Configuration  Starts-->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>No Register</th>
                                        <th>Nama</th>
                                        <th>NIK</th>
                                        <th>Plafond</th>
                                        <th>Alamat</th>
                                        <th>Tanggal Pengajuan</th>
                                        <th>Jangka Waktu</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>R0011120230001</td>
                                        <td>Paijo</td>
                                        <td>332211101119930003</td>
                                        <td>100.000.000</td>
                                        <td>Ungaran</td>
                                        <td>2023/11/25</td>
                                        <td>24</td>
                                        <td><span class="badge rounded-pill badge-warning">Proses</span></td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>R0011120230002</td>
                                        <td>Paijem</td>
                                        <td>332211101119930004</td>
                                        <td>150.000.000</td>
                                        <td>Boyolali</td>
                                        <td>2023/11/25</td>
                                        <td>36</td>
                                        <td><span class="badge rounded-pill badge-warning">Proses</span></td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>R0011120230003</td>
                                        <td>Painem</td>
                                        <td>332211101119930004</td>
                                        <td>100.000.000</td>
                                        <td>Purworejo</td>
                                        <td>2023/11/25</td>
                                        <td>36</td>
                                        <td><span class="badge rounded-pill badge-success">Cair</span></td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>R0011120230004</td>
                                        <td>Paijan</td>
                                        <td>332211101119930004</td>
                                        <td>110.000.000</td>
                                        <td>Salatiga</td>
                                        <td>2023/11/25</td>
                                        <td>36</td>
                                        <td><span class="badge rounded-pill badge-danger">Di Tolak</span></td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>R0011120230004</td>
                                        <td>Paiman</td>
                                        <td>332211101119930004</td>
                                        <td>200.000.000</td>
                                        <td>Tengaran</td>
                                        <td>2023/11/25</td>
                                        <td>36</td>
                                        <td><span class="badge rounded-pill badge-secondary">Di Batalkan</span></td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

</div>
<?= $this->endSection() ?>