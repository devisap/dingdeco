<main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-fluid">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i class="fas fa-file-invoice-dollar ml-2 mr-3 fa-lg"></i></div>
                            Nota Pengiriman
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid mt-n10">
        <div class="card mb-4">
            <div class="card-header">
                <button class='btn btn-primary btn-sm' type='button' data-toggle="modal" data-target="#tambahNotaPengiriman"><i class="fa fa-plus mr-1"></i>Tambah Nota Pengiriman</button>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3 ml-4">
                        <label>Pilih No Pemesanan : </label>
                        <select class="form-control js-basic-single" id="nopemesanan" name="">
                            <option>Pilih No Pemesanan</option>
                            <option value="1">00000013/III/SKK/2021</option>
                            <option value="2">00000012/IX/SKK/2019</option>
                            <option value="3">00000013/III/SKK/2021</option>
                        </select>
                    </div>
                    <div class="col-md-3 ml-4">
                        <label>Status : </label>
                        <select class="form-control js-basic-single">
                            <option>Aktif</option>
                            <option>Nonaktif</option>
                        </select>
                    </div>
                    <div class="col-md-2 mt-2">
                        <label></label>
                        <button type="submit" class="btn btn-primary btn-block">Tampilkan</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="datatable">
                    <table class="table table-bordered table-hover" id="dataTableNotaPengiriman" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No Nota</th>
                                <th>No Pemesanan</th>
                                <th>Tgl Kirim</th>
                                <th>Penerima</th>
                                <th>Deskripsi</th>
                                <th>Status</th>
                                <th width=10%>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <!-- foreach ($user as $item) {

                            if ($item->deleted_at != null) {
                            $verifikasi = '<button class="btn btn-green btn-sm btnChangeStatus ml-1" data-id="' . $item->ID_PENGGUNA . '" type="button" data-toggle="modal" data-target="#btnChangeStatus"><i class="fa fa-check"></i></button>';
                            $status = '<div class="badge badge-danger badge-pill">Tidak Aktif</div>';
                            } else {
                            $verifikasi = '<button class="btn btn-danger btn-sm btnChangeStatus ml-1" data-id="' . $item->ID_PENGGUNA . '" type="button" data-toggle="modal" data-target="#btnChangeStatus"><i class="fa fa-times-circle"></i></button>';
                            $status = '<div class="badge badge-success badge-pill">Aktif</div>';
                            } -->

                            <tr>
                                <td>NB00000001</td>
                                <td>2019081600000001</td>
                                <td>16 Sep 2019 12:00</td>
                                <td>Ilham</td>
                                <td>surat pengantar pengiriman brang nikahan dekorasi</td>
                                <td>
                                    <div class="badge badge-success badge-pill">Aktif</div>
                                </td>
                                <td>
                                    <button title="Edit Nota Pengiriman" class="btn btn-sm btn-warning ml-1" type="button" data-toggle="modal" data-target="#editNotaPengiriman"><i class="fa fa-edit"></i></button>
                                    <a title="Tambah Barang Pengiriman" class="btn btn-blue ml-1 btn-sm" type="button" href="<?php echo site_url('welcome/tambahbarangpengiriman'); ?>"><i class="fa fa-plus"></i></a>
                                    <button title="Ubah Status" class="btn btn-sm btn-green mt-2 ml-1" type="button" data-toggle="modal" data-target="#btnChangeStatus"><i class="fa fa-check"></i></button>
                                    <a title="Print Nota Pengiriman" class="btn btn-sm btn-dark mt-2 ml-1" type="button" href="<?php echo site_url('welcome/print_notapengiriman'); ?>"><i class="fa fa-print"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Modal Tambah Nota Pengiriman -->
            <div class="modal fade" id="tambahNotaPengiriman" tabindex="-1" role="dialog" aria-labelledby="tambahNotaPengiriman" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahNotaPengiriman">Tambah Nota Pengiriman</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="">
                                <div class="form-group">
                                    <label for="nopemesanan">No Pemesanan</label>
                                    <select class="form-control" id="nopemesanan" name="">
                                        <option>Pilih No Pemesanan</option>
                                        <option value="1">2019081600000001</option>
                                        <option value="2">2019090700000002</option>
                                        <option value="3">2021030700000003</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tanggalKirim">Tanggal Kirim</label>
                                    <input name="" class="form-control" id="tanggalKirim" type="text" placeholder="Masukkan Tanggal" />
                                </div>
                                <div class="form-group">
                                    <label for="penerima">Penerima</label>
                                    <input type="text" name="deskripsi" class="form-control" placeholder="Masukan Penerima"></input>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea type="text" name="deskripsi" class="form-control" placeholder="Masukan Deskripsi"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                            <button type="submit" class="btn btn-success"><i class="fa fa-check mr-1"></i>Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal Edit Nota Pengiriman -->
            <div class="modal fade" id="editNotaPengiriman" tabindex="-1" role="dialog" aria-labelledby="editNotaPengiriman" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editNotaPengiriman">Edit Nota Pengiriman</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="noNota">No Nota</label>
                                    <span type="text" name="" class="form-control">NB00000001</span>
                                </div>
                                <div class="form-group">
                                    <label for="noPemesanan">No Pemesanan</label>
                                    <select class="form-control" id="noPemesanan" name="">
                                        <option>Pilih No Pemesanan</option>
                                        <option value="1">00000013/III/SKK/2021</option>
                                        <option value="2">00000012/IX/SKK/2019</option>
                                        <option value="3">00000013/III/SKK/2021</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tanggalKirim">Tanggal Kirim</label>
                                    <input name="" class="form-control" id="edittanggalKirim" type="text" />
                                </div>
                                <div class="form-group">
                                    <label for="penerima">Penerima</label>
                                    <input type="text" name="deskripsi" class="form-control" ></input>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea type="text" name="deskripsi" class="form-control" ></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" id="" name="" class="form-control">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                            <button type="submit" class="btn btn-success"><i class="fa fa-check mr-1"></i>Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal Ubah Status -->
            <div class="modal fade" id="btnChangeStatus" tabindex="-1" role="dialog" aria-labelledby="btnChangeStatus" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="btnChangeStatus">Status</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="" method="post">
                            <div class="modal-body">
                                <h5>Apakah anda yakin ingin mengubah status ?</h5>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" id="btnChangeStatus_id" name="">
                                <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                                <button type="submit" class="btn btn-success"><i class="fa fa-check mr-1"></i>Ubah Status</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script type="text/javascript">
    // Tambah Barang
    $(document).ready(function() {
        var table = $('#dataTableNotaPengiriman').DataTable({
            ordering: false,
            "order": [
                [0, 'asc']
            ],
            fixedColumns: false
        });

        // add row
        $('#addRow').click(function() {
            var rowHtml = $("#dataTableNotaPengirirman").find("tr")[1].outerHTML
            console.log(rowHtml);
            table.row.add($(rowHtml)).draw();
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.js-basic-single').select2();
    });
</script>
<script>
     //datepicker kirim
     $('#tanggalKirim').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true,
        });

        //datepicker Edit kirim
     $('#edittanggalKirim').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true,
        });
</script>