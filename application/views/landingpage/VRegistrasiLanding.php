<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Symadeco Project" />
    <meta name="author" content />
    <title>Pemesanan | SYMA Decoration</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/img/ic_symadeco.svg" />
    <link href="<?= base_url(); ?>assets/css/styles.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />

    <script src="<?= base_url(); ?>assets/js/jquery-3.5.1.min.js" crossorigin="anonymous"></script>

    <!-- Global JS -->

    <!-- datepicker -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css" rel="stylesheet" />

    <!-- Plugin JS -->
    <script src="<?= base_url(); ?>assets/js/plugin/feather-icons/4.27.0/feather.min.js" crossorigin="anonymous"></script>
    <script data-search-pseudo-elements defer src="<?= base_url(); ?>assets/js/plugin/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>

    <!-- CK editor JS harus di taruh sebelum, initialisasi editor pada textarea -->
    <script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script>

    <!-- Select2js -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-fluid">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid mt-n10">
        <div class="row justify-content-center">
            <div class="col-lg-10 ">
                <!-- Default Bootstrap Form Controls-->
                <div id="default">
                    <div class="card mb-4">
                        <div class="card-header text-center"><img style="width: 20%;" src="<?= base_url(); ?>assets/home/img/ic-full-ungu.svg" alt="..." />
                            <br>Silahkan isi form pemesanan anda
                        </div>
                        <div class="card-body">
                            <!-- Component Preview-->
                            <div class="sbp-preview">
                                <div class="sbp-preview-content">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="namaPaket">Nama</label>
                                                <input name="" class="form-control" id="namaPaket" type="text" placeholder="Masukkan Nama Paket" required="" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="notelp">No Telp</label>
                                                <input name="kuota" class="form-control" id="notelp" type="number" placeholder="Masukkan No Telepon" required="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input name="" class="form-control" id="" type="email" placeholder="Masukkan Email" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="alamatrumah">Alamat Rumah</label>
                                                <input name="" class="form-control" id="alamatrumah" type="text" placeholder="Masukkan Alamat Rumah" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="alamatacara">Alamat Acara</label>
                                                <input name="" class="form-control" id="alamatacara" type="text" placeholder="Masukkan Alamat Acara" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="paket">Paket</label>
                                                <input name="" class="form-control" id="paket" type="text" placeholder="Pilih Paket" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="tanggalAcara">Tanggal Acara</label>
                                                <input name="" class="form-control" id="tanggalAcara" type="text" placeholder="Masukkan Tanggal" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="deskripsi">Deskripsi Kebutuhan</label>
                                                <textarea name="" class="form-control" type="text" id="deskripsi" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="text-md-center">
                                    <a onclick="history.back(-1)">
                                        <button class="btn btn btn-warning" type="button">Kembali</i></button>
                                    </a>
                                    <button type="submit" class="btn btn-secondary"> Pesan </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url(); ?>assets/js/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>assets/js/scripts.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
        //datepicker
        $('#tanggalAcara').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true,
        });
    </script>
</body>

</html>