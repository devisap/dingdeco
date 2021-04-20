<main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-fluid">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i class="fas fa-file-invoice-dollar ml-2 mr-3 fa-lg"></i></div>
                            Nota Pembayaran
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid mt-n10">
        <div class="card mb-4">
            <div class="card-header">
                <button class='btn btn-primary btn-sm' type='button' data-toggle="modal" data-target="#tambahNotaPembayaran"><i class="fa fa-plus mr-1"></i>Tambah Nota Pembayaran</button>
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
                    <table class="table table-bordered table-hover" id="dataTableNotaPembayaran" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No Nota</th>
                                <th>No Pemesanan</th>
                                <th>Uang Muka</th>
                                <th>Biaya</th>
                                <th>Deskripsi</th>
                                <th>Status</th>
                                <th width=10%>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>                            
                            <?php
                                foreach($pembayaran as $items){                                  

                                    if ($items->deleted_at == null) {
                                        $verifikasi = '<button title="Ubah Status" class="btn btn-sm btn-danger mt-2 ml-1 btnChangeStatus" data-id="' . $items->NOMOR_PEMBAYARAN . '" type="button" data-toggle="modal" data-target="#btnChangeStatus"><i class="fa fa-times-circle"></i></button>';
                                        $status = '<div class="badge badge-success badge-pill">Aktif</div>';
                                    } else {                                        
                                        $verifikasi = '<button title="Ubah Status" class="btn btn-sm btn-green mt-2 ml-1 btnChangeStatus" data-id="' . $items->NOMOR_PEMBAYARAN . '" type="button" data-toggle="modal" data-target="#btnChangeStatus"><i class="fa fa-check"></i></button>';
                                        $status = '<div class="badge badge-danger badge-pill">Tidak Aktif</div>';
                                    }

                                    echo'
                                        <tr>
                                            <td>'.$items->NOMOR_PEMBAYARAN.'</td>
                                            <td>'.$items->NOMOR_PEMESANAN.'</td>
                                            <td>Rp '.number_format($items->UANGMUKA_PEMESANAN,0,',','.').'</td>
                                            <td>Rp '.number_format($items->BIAYA_PEMESANAN,0,',','.').'</td>
                                            <td>'.$items->DESKRIPSI_PEMBAYARAN.'</td>
                                            <td>
                                                '.$status.'
                                            </td>
                                            <td>
                                                <button title="Edit Nota Pembayaran" class="btn btn-sm btn-warning ml-1 editNotaPembayaran" type="button" data-id="'.$items->NOMOR_PEMBAYARAN.'" data-toggle="modal" data-target="#editNotaPembayaran"><i class="fa fa-edit"></i></button>
                                                <a title="Tambah Barang Pembayaran" class="btn btn-blue ml-1 btn-sm" type="button" href="'.site_url('welcome/tambahbarangpembayaran').'"><i class="fa fa-plus"></i></a>
                                                '.$verifikasi.'
                                                <a title="Print Nota Pembayaran" class="btn btn-sm btn-dark mt-2 ml-1" type="button" href="'.site_url('welcome/print_notapembayaran').'"><i class="fa fa-print"></i></a>
                                            </td>
                                        </tr>
                                    ';
                                    
                                }
                            ?>                               
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Modal Tambah Nota Pembayaran -->
            <div class="modal fade" id="tambahNotaPembayaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Nota Pembayaran</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="<?= site_url('notapembayaran/store') ?>">
                                <div class="form-group">
                                <input type="hidden" name="NOMOR_PEMBAYARAN" class="form-control" value="<?= date('dHis') ?>">
                                    <label for="KontrakKerja">No Pemesanan</label>
                                    <select class="form-control" id="KontrakKerja" name="NOMOR_PEMESANAN">
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
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea type="text" name="DESKRIPSI_PEMBAYARAN" class="form-control" placeholder="Masukan Deskripsi"></textarea>
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
            <!-- Modal Edit Nota Pembayaran -->
            <div class="modal fade" id="editNotaPembayaran" tabindex="-1" role="dialog" aria-labelledby="editNotaPembayaran" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editNotaPembayaran">Edit Nota Pembayaran</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= site_url('notapembayaran/edit') ?>" method="post">
                                <div class="form-group">
                                    <label for="alamatAcara">No Nota</label>
                                    <span type="text" id="nomorPembayaran" name="NOMOR_PEMBAYARAN" class="form-control"></span>
                                </div>
                                <div class="form-group">
                                    <label for="KontrakKerja">No Pemesanan</label>
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
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea type="text" id="deskripsi" name="DESKRIPSI_PEMBAYARAN" class="form-control"></textarea>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" id="nmrPembayaran" name="NOMOR_PEMBAYARAN" class="form-control">
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
                        <form action="<?= site_url('notapembayaran/changeStatus') ?>" method="post">
                            <div class="modal-body">
                                <h5>Apakah anda yakin ingin mengubah status ?</h5>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" id="pembayaran_changeStatus" name="NOMOR_PEMBAYARAN">
                                <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                                <button type="submit" class="btn btn-success"><i class="fa fa-check mr-1"></i>Ubah Status</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $().ready(function() {
            var table = $('#dataTableNotaPembayaran').DataTable({
                ordering: false,
                "order": [
                    [0, 'asc']
                ],
                fixedColumns: false
            });
        });
        $('#dataTableNotaPembayaran tbody').on('click', '.editNotaPembayaran', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('notapembayaran/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                NOMOR_PEMBAYARAN: id
            },
            success: res => {
                $('#nomorPembayaran').html(res[0].NOMOR_PEMBAYARAN)
                $('#nomorPemesanan').val(res[0].NOMOR_PEMESANAN)            
                $('#deskripsi').val(res[0].DESKRIPSI_PEMBAYARAN)           
                $('#nmrPembayaran').val(res[0].NOMOR_PEMBAYARAN)
            }
        })
    });
    $('#dataTableNotaPembayaran tbody').on('click', '.btnChangeStatus', function() {
        const id = $(this).data('id');
        $('#pembayaran_changeStatus').val(id)
    })
    </script>
    <script>
        $(document).ready(function() {
            $('.js-basic-single').select2();
        });
    </script>
</main>