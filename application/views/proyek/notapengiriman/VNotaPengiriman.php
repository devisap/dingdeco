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
                        <br>
                        <select class="form-control" name="">
                            <option>Pilih No Pemesanan</option>
                            <option value="1">00000013/III/SKK/2021</option>
                            <option value="2">00000012/IX/SKK/2019</option>
                            <option value="3">00000013/III/SKK/2021</option>
                        </select>
                    </div>
                    <div class="col-md-2 ml-4">
                        <label>Tanggal Kirim : </label>
                        <input name="" class="form-control" id="tanggalKirim" type="text" placeholder="Tanggal Kirim" />
                    </div>
                    <div class="col-md-3 ml-4">
                        <label>Status : </label>
                        <br>
                        <select class="form-control">
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
                            <?php
                                foreach($pengiriman as $item){
                                    $date           = date_create($item->TGL_PENGIRIMAN);
                                    $stat           = ($item->deleted_at == null ? 'Aktif' : 'Tidak Aktif');
                                    $statBadge      = ($item->deleted_at == null ? 'badge-success' : 'badge-danger');
                                    echo '
                                        <tr>
                                            <td>'.$item->NOMOR_PENGIRIMAN.'</td>
                                            <td>'.$item->NOMOR_PEMESANAN.'</td>
                                            <td>'.date_format($date, 'd F Y').'</td>
                                            <td>'.$item->PENERIMA_PENGIRIMAN.'</td>
                                            <td>'.$item->DESKRIPSI_PENGIRIMAN.'</td>
                                            <td>
                                                <div class="badge '.$statBadge.' badge-pill">'.$stat.'</div>
                                            </td>
                                            <td>
                                                <button title="Edit Nota Pengiriman" class="btn btn-sm btn-warning ml-1 mdlEdit" data-id="'.$item->NOMOR_PENGIRIMAN.'" type="button" data-toggle="modal" data-target="#mdlEdit"><i class="fa fa-edit"></i></button>
                                                <a title="Tambah Barang Pengiriman" class="btn btn-blue ml-1 btn-sm" type="button" href="'.site_url('notapengiriman/manage/'.$item->NOMOR_PENGIRIMAN).'"><i class="fa fa-plus"></i></a>
                                                <button title="Ubah Status" class="btn btn-sm btn-green mt-2 ml-1 mdlChangeStatus" data-id="'.$item->NOMOR_PENGIRIMAN.'" type="button" data-toggle="modal" data-target="#mdlChangeStatus"><i class="fa fa-check"></i></button>
                                                <button title="Print Nota Pengiriman" class="btn btn-sm btn-dark mt-2 ml-1" type="button" data-toggle="modal" data-target="#pdfModal"><i class="fa fa-print"></i></button>
                                            </td>
                                        </tr>
                                    ';
                                }
                            ?>
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
                            <form method="post" action="<?= site_url('notapengiriman/store')?>">
                                <div class="form-group">
                                    <label for="nopemesanan">No Pemesanan</label>
                                    <br>
                                    <select class="form-control select-modal-width" id="nopemesanan" name="NOMOR_PEMESANAN">
                                        <option>Pilih No Pemesanan</option>
                                        <?php
                                            foreach($pemesanan as $item){
                                                echo '
                                                    <option value="'.$item->NOMOR_PEMESANAN.'">'.$item->NOMOR_PEMESANAN.'</option>
                                                ';
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tanggalKirim">Tanggal Kirim</label>
                                    <input name="TGL_PENGIRIMAN" class="form-control" id="tanggalKirim" type="text" placeholder="Masukkan Tanggal" />
                                </div>
                                <div class="form-group">
                                    <label for="penerima">Penerima</label>
                                    <input type="text" name="PENERIMA_PENGIRIMAN" class="form-control" placeholder="Masukan Penerima"></input>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea type="text" name="DESKRIPSI_PENGIRIMAN" class="form-control" placeholder="Masukan Deskripsi"></textarea>
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
            <!-- Modal Edit Nota Pengiriman -->
            <div class="modal fade" id="mdlEdit" tabindex="-1" role="dialog" aria-labelledby="editNotaPengiriman" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editNotaPengiriman">Edit Nota Pengiriman</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= site_url('notapengiriman/edit')?>" method="post">
                                <div class="form-group">
                                    <label for="noNota">No Nota</label>
                                    <input type="text" class="form-control noNota_edit" disabled>
                                    <input type="hidden" name="NOMOR_PENGIRIMAN" class="form-control noNota_edit">
                                </div>
                                <div class="form-group">
                                    <label for="noPemesanan">No Pemesanan</label>
                                    <br>
                                    <select class="form-control select-modal-width" id="noPemesanan_edit" name="NOMOR_PEMESANAN">
                                        <option>Pilih No Pemesanan</option>
                                        <?php
                                            foreach($pemesanan as $item){
                                                echo '
                                                    <option value="'.$item->NOMOR_PEMESANAN.'">'.$item->NOMOR_PEMESANAN.'</option>
                                                ';
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tanggalKirim">Tanggal Kirim</label>
                                    <input name="TGL_PENGIRIMAN" class="form-control" id="tglKirim_edit" type="text" />
                                </div>
                                <div class="form-group">
                                    <label for="penerima">Penerima</label>
                                    <input type="text" name="PENERIMA_PENGIRIMAN" id="penerima_edit" class="form-control" ></input>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea type="text" name="DESKRIPSI_PENGIRIMAN" id="deskripsi_edit" class="form-control" ></textarea>
                                </div>
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
            <div class="modal fade" id="mdlChangeStatus" tabindex="-1" role="dialog" aria-labelledby="btnChangeStatus" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="btnChangeStatus">Status</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= site_url('notapengiriman/changeStatus')?>" method="post">
                            <div class="modal-body">
                                <h5>Apakah anda yakin ingin mengubah status ?</h5>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" id="btnChangeStatus_id" name="NOMOR_PENGIRIMAN">
                                <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                                <button type="submit" class="btn btn-success"><i class="fa fa-check mr-1"></i>Ubah Status</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

             <!-- Modal View PDF -->
             <div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" >Nota Pengiriman</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <iframe id="pdfModal_src" src="<?= base_url('assets/pdf/nota_pengiriman.pdf'); ?>" frameborder="0" width="100%" height="470px"></iframe>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Tutup</button>
                        </div>
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
    
    $('#dataTableNotaPengiriman').on('click', '.mdlEdit', function(){
        const id = $(this).data('id')
        $.ajax({
            url: '<?= site_url('notapengiriman/ajxGet')?>',
            method: 'post',
            dataType: 'json',
            data: {NOMOR_PENGIRIMAN : id},
            success: function(res){
                console.log(res)
                $('.noNota_edit').val(res[0].NOMOR_PENGIRIMAN)
                $('#noPemesanan_edit').val(res[0].NOMOR_PEMESANAN)
                $('#tglKirim_edit').val(res[0].TGL_PENGIRIMAN)
                $('#penerima_edit').val(res[0].PENERIMA_PENGIRIMAN)
                $('#deskripsi_edit').val(res[0].DESKRIPSI_PENGIRIMAN)
            }
        })
    })
    $('#dataTableNotaPengiriman tbody').on('click', '.mdlChangeStatus', function(){
        const id = $(this).data('id')
        $('#btnChangeStatus_id').val(id)
    })
</script>