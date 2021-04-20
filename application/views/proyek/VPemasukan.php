<main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-fluid">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i class="fas fa-sort-numeric-up ml-2 mr-3 fa-lg"></i></div>
                            Pemasukan
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid mt-n10">
        <div class="card mb-4">
            <div class="card-header">
                <button class='btn btn-primary btn-sm' type='button' data-toggle="modal" data-target="#tambahPemasukan"><i class="fa fa-plus mr-1"></i>Tambah Pemasukan</button>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3 ml-4">
                        <label>Pilih No Pemesanan : </label>
                        <select class="form-control js-basic-single" id="KontrakKerja" name="">
                            <option>Pilih No Pemesanan</option>
                            <option value="1">00000013/III/SKK/2021</option>
                            <option value="2">00000012/IX/SKK/2019</option>
                            <option value="3">00000013/III/SKK/2021</option>
                        </select>
                    </div>
                    <div class="col-md-3 ml-4">
                        <label>Tanggal Masuk : </label>
                        <input name="" class="form-control" id="tanggalMasuk" type="text" placeholder="Masukkan Tanggal" />
                    </div>
                    <div class="col-md-2 mt-2">
                        <label></label>
                        <button type="submit" class="btn btn-primary btn-block">Tampilkan</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="datatable">
                    <table class="table table-bordered table-hover" id="dataTablePemasukan" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No Nota</th>
                                <th>Tgl Masuk</th>
                                <th>Jumlah</th>
                                <th>Keterangan</th>
                                <th width=7%>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($pemasukan as $items){
                                    $date=date_create($items->TGLMASUK_PEMASUKAN);
                                    
                                    echo'
                                        <tr>
                                            <td>'.$items->NOMOR_PEMASUKAN.'</td>
                                            <td>'.date_format($date,"d M Y").'</td>
                                            <td>Rp '.number_format($items->JML_PEMASUKAN,0,',','.').'</td> 
                                            <td>'.$items->KETERANGAN_PEMASUKAN.'</td>
                                            <td>
                                                <button title="Edit Pemasukan" class="btn btn-sm btn-warning ml-1 editPemasukan" type="button" data-id="'.$items->NOMOR_PEMASUKAN.'" data-toggle="modal" data-target="#editPemasukan"><i class="fa fa-edit"></i></button>
                                            </td>
                                        </tr>
                                    ';
                                }
                            ?>   
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Modal tambah Pemasukan -->
            <div class="modal fade" id="tambahPemasukan" tabindex="-1" role="dialog" aria-labelledby="tambahPemasukan" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahPemasukan">Tambah Pemasukan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="<?= site_url('pemasukan/store') ?>">
                                <div class="form-group">
                                    <label for="noNota">No Nota</label>
                                    <input name="NOMOR_PEMASUKAN" class="form-control" id="noNota" type="text" placeholder="Masukkan Nomor Nota" />
                                </div>
                                <div class="form-group">
                                    <label for="Pemesanan">No Pemesanan</label>
                                    <select class="form-control" id="Pemesanan" name="NOMOR_PEMESANAN">
                                        <option>Pilih No Pemesanan</option>
                                        <?php
                                        foreach ($pemesanan as $item) {
                                            echo '
                                                <option value="' . $item->NOMOR_PEMESANAN . '">' . $item->NOMOR_PEMESANAN . '</option>
                                            ';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tambahTanggalMasuk">Tanggal Masuk</label>
                                    <input name="TGLMASUK_PEMASUKAN" class="form-control" id="tambahTanggalMasuk" type="text" placeholder="Masukkan Tanggal" />
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">Jumlah</label>
                                    <input type="number" name="JML_PEMASUKAN" class="form-control" placeholder="Masukan Jumlah"></input>
                                </div>
                                <div class="form-group">
                                    <label for="keterangan">Keterangan</label>
                                    <textarea type="text" name="KETERANGAN_PEMASUKAN" class="form-control" placeholder="Masukan Keterangan"></textarea>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                            <button type="submit" class="btn btn-success"><i class="fa fa-check mr-1"></i>Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal Edit Pemasukan -->
            <div class="modal fade" id="editPemasukan" tabindex="-1" role="dialog" aria-labelledby="editPemasukan" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editPemasukan">Edit Pemasukan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= site_url('pemasukan/edit') ?>" method="post">
                            <div class="form-group">
                                    <label for="noNota">No Nota</label>
                                    <input name="NOMOR_PEMASUKAN" class="form-control" id="nomorPemasukan" type="text"/>
                                </div>
                                <div class="form-group">
                                    <label for="Pemesanan">No Pemesanan</label>
                                    <select class="form-control" id="nomorPemesanan" name="NOMOR_PEMESANAN">
                                        <option>Pilih No Pemesanan</option>
                                        <?php
                                        foreach ($pemesanan as $item) {
                                            echo '
                                                <option value="' . $item->NOMOR_PEMESANAN . '">' . $item->NOMOR_PEMESANAN . '</option>
                                            ';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="editTanggalMasuk">Tanggal Masuk</label>
                                    <input name="TGLMASUK_PEMASUKAN" class="form-control" id="tglMasuk" type="text"/>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">Jumlah</label>
                                    <input type="number" name="JML_PEMASUKAN" id="jmlPemasukan" class="form-control" ></input>
                                </div>
                                <div class="form-group">
                                    <label for="keterangan">Keterangan</label>
                                    <textarea type="text" name="KETERANGAN_PEMASUKAN" id="ketPemasukan" class="form-control"></textarea>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" id="nmrPemasukan" name="NOMOR_PEMASUKAN" class="form-control">
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
        var table = $('#dataTablePemasukan').DataTable({
            ordering: false,
            "order": [
                [0, 'asc']
            ],
            fixedColumns: false
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.js-basic-single').select2();
    });
</script>
<script>
    //datepicker Masuk
    $('#tanggalMasuk').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });

    //datepicker tambah tanggal masuk
    $('#tambahTanggalMasuk').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });

    //datepicker edit tanggal masuk
    $('#editTanggalMasuk').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });
    $('#dataTablePemasukan tbody').on('click', '.editPemasukan', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('pemasukan/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                NOMOR_PEMASUKAN: id
            },
            success: res => {
                $('#nomorPemasukan').val(res[0].NOMOR_PEMASUKAN)          
                $('#nomorPemesanan').val(res[0].NOMOR_PEMESANAN)       
                $('#tglMasuk').val(res[0].TGLMASUK_PEMASUKAN)     
                $('#jmlPemasukan').val(res[0].JML_PEMASUKAN)     
                $('#ketPemasukan').val(res[0].KETERANGAN_PEMASUKAN)     
                $('#tglMasuk').val(res[0].TGLMASUK_PEMASUKAN)                     
                $('#nmrPemasukan').val(res[0].NOMOR_PEMASUKAN)
            }
        })
    });
</script>