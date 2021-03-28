<main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-fluid">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i class="fas fa-list ml-2 mr-3 fa-lg"></i></div>
                            Daftar Pemesanan
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid mt-n10">
        <div class="card mb-4">
            <div class="card-header">
                <button class='btn btn-primary btn-sm' type='button' data-toggle="modal" data-target="#tambahModalPemesanan"><i class="fa fa-plus mr-1"></i>Tambah Pemesanan</button>
            </div>
            <div class="card-body">
                <div class="datatable">
                    <table class="table table-bordered table-hover" id="dataTableKlien" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No Pemesanan</th>
                                <th>Nama Klien</th>
                                <th>Marketing</th>
                                <th>Alamat</th>
                                <th>No Telp</th>
                                <th>Biaya</th>
                                <th>Tgl Acara</th>
                                <th>Status</th>
                                <th width="14%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($pesanan as $items){
                                    $status = $items->STATUS_PEMESANAN;
                                    $showstat = $status == 0 ? 'Baru' : ( $status == 1 ? 'Cek Lokasi' : ( $status == 2 ? 'Booking' : ( $status == 3 ? 'Deal' : ( $status == 4 ? 'Dikirim' : ( $status == 5 ? 'Produksi' : ( $status == 6 ? 'Dibongkar' : ( $status == 7 ? 'Selesai' : '')))))));
                                    $date=date_create($items->TGLACARA_PEMESANAN);
                                    
                                    echo'
                                        <tr>
                                            <td>'.$items->NOMOR_PEMESANAN.'</td>
                                            <td>'.$items->NAMA_KLIEN.'</td>
                                            <td>'.$items->NAMA_PENGGUNA.'</td>
                                            <td>'.$items->ALAMAT_PEMESANAN.'</td>
                                            <td>'.$items->TELP_KLIEN.'</td>
                                            <td>Rp '.number_format($items->BIAYA_PEMESANAN,0,',','.').'</td>
                                            <td>'.date_format($date,"d M Y").'</td>
                                            <td>
                                                <div class="badge badge-success badge-pill">'.$showstat.'</div>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-warning editPesanan ml-1" data-id="'. $items->NOMOR_PEMESANAN .'" type="button" data-toggle="modal" data-target="#editPesanan"><i class="fa fa-edit"></i></button>
                                                <button class="btn btn-sm btn-green statusModal ml-1" data-id="'. $items->NOMOR_PEMESANAN .'" type="button" data-toggle="modal" data-target="#statusModal"><i class="fa fa-check"></i></button>
                                                <button class="btn btn-sm btn-dark ml-1" type="button"><i class="fa fa-print"></i></button>
                                            </td>
                                        </tr>
                                    ';
                                }
                            ?>                            
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Modal Tambah Klien -->
            <div class="modal fade" id="tambahModalPemesanan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog " role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Pemesanan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="<?= site_url('pemesanan/store') ?>">
                            <div class="form-group">
                                <label for="namaKlien">Klien</label>
                                <select class="form-control" id="namaKlien" name="ID_KLIEN">
                                <?php
                                    foreach ($klien as $item) {
                                        echo '
                                                <option value="' . $item->ID_KLIEN . '">' . $item->NAMA_KLIEN . '</option>
                                            ';
                                    }
                                ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="namaMarketing">Marketing</label>
                                <select class="form-control" id="namaMarketing" name="ID_PENGGUNA">
                                <?php
                                    foreach ($pengguna as $item) {
                                        echo '
                                                <option value="' . $item->ID_PENGGUNA . '">' . $item->NAMA_PENGGUNA . '</option>
                                            ';
                                    }
                                ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="namaPaket">Paket</label>
                                <select class="form-control" id="namaPaket" name="ID_PAKET">
                                <?php
                                    foreach ($paket as $item) {
                                        echo '
                                                <option value="' . $item->ID_PAKET . '">' . $item->NAMA_PAKET . '</option>
                                            ';
                                    }
                                ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="uangMukalien">Uang Muka</label>
                                <input type="text" name="UANGMUKA_PEMESANAN" class="form-control" placeholder="Masukan Uang Muka">
                            </div>
                            <div class="form-group">
                                <label for="biaya">Biaya</label>
                                <input type="text" name="BIAYA_PEMESANAN" class="form-control" placeholder="Masukan Biaya">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <input type="text" name="DESKRIPSI_PEMESANAN" class="form-control" placeholder="Masukan Deskripsi">
                            </div>
                            <div class="form-group">
                                <label for="alamatAcara">Alamat Acara</label>
                                <input type="text" name="ALAMAT_PEMESANAN" class="form-control" placeholder="Masukan Alamat Acara">
                            </div>
                            <div class="form-group">
                                <label for="tanggalAcara">Tanggal Acara</label>
                                <input name="TGLACARA_PEMESANAN" class="form-control" id="tanggalAcara" type="text" placeholder="Masukkan Tanggal" />
                            </div>
                            <div class="form-group">
                                <label for="tanggalSelesai">Tanggal Selesai</label>
                                <input name="TGLSELESAI_PEMESANAN" class="form-control" id="tanggalSelesai" type="text" placeholder="Masukkan Tanggal" />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="NOMOR_PEMESANAN" class="form-control" value="<?= date('Ymd-His') ?>">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                            <button type="submit" class="btn btn-success"><i class="fa fa-check mr-1"></i>Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal Edit Klien -->
            <div class="modal fade" id="editPesanan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog " role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Pemesanan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form method="post" action="<?= site_url('pemesanan/edit') ?>">
                            <div class="form-group">
                                <label for="namaKlien">Klien</label>
                                <select class="form-control" id="namaKlien" name="ID_KLIEN">
                                <?php
                                    foreach ($klien as $item) {
                                        echo '
                                                <option value="' . $item->ID_KLIEN . '">' . $item->NAMA_KLIEN . '</option>
                                            ';
                                    }
                                ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="namaMarketing">Marketing</label>
                                <select class="form-control" id="namaMarketing" name="ID_PENGGUNA">
                                <?php
                                    foreach ($pengguna as $item) {
                                        echo '
                                                <option value="' . $item->ID_PENGGUNA . '">' . $item->NAMA_PENGGUNA . '</option>
                                            ';
                                    }
                                ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="namaPaket">Paket</label>
                                <select class="form-control" id="namaPaket" name="ID_PAKET">
                                <?php
                                    foreach ($paket as $item) {
                                        echo '
                                                <option value="' . $item->ID_PAKET . '">' . $item->NAMA_PAKET . '</option>
                                            ';
                                    }
                                ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="uangMuka">Uang Muka</label>
                                <input type="text" id="uangMuka_edit" name="UANGMUKA_PEMESANAN" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="biaya">Biaya</label>
                                <input type="text" id="biaya_edit" name="BIAYA_PEMESANAN" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <input type="text" id="deskripsi_edit" name="DESKRIPSI_PEMESANAN" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="alamatAcara">Alamat Acara</label>
                                <input type="text" id="alamat_edit" name="ALAMAT_PEMESANAN" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="tglAcara_edit">Tanggal Acara</label>
                                <input name="TGLACARA_PEMESANAN" class="form-control" id="tglAcara_edit" type="text" />
                            </div>
                            <div class="form-group">
                                <label for="tglSelesai_edit">Tanggal Selesai</label>
                                <input name="TGLSELESAI_PEMESANAN" class="form-control" id="tglSelesai_edit" type="text" />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" id="idPemesanan_edit" name="NOMOR_PEMESANAN" class="form-control">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                            <button type="submit" class="btn btn-success"><i class="fa fa-check mr-1"></i>Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal Status Aktif -->
            <div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Status</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <form action="<?= site_url('pemesanan/edit') ?>" method="post">
                        <div class="modal-body">
                            <select class="js-example-basic-single" id="statusModal" name="STATUS_PEMESANAN">
                                <option value="0">Baru</option>
                                <option value="1">Cek Lokasi</option>
                                <option value="2">Booking</option>
                                <option value="3">Deal</option>
                                <option value="4">Dikirim</option>
                                <option value="5">Produksi</option>
                                <option value="6">Dibongkar</option>
                                <option value="7">Selesai</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" id="nomorPesanan_edit" name="NOMOR_PEMESANAN" class="form-control">
                            <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                            <button type="submit" class="btn btn-success"><i class="fa fa-check mr-1"></i>Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
<script type="text/javascript">
    //datepicker
    $('#tanggalAcara').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });

    $('#tanggalSelesai').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });

    $('#editTanggalAcara').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });

    $('#editTanggalSelesai').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });    
</script>
<script>
    $().ready(function() {
        var table = $('#dataTableKlien').DataTable({
            ordering: false,
            "order": [
                [0, 'asc']
            ],
            fixedColumns: false
        });
    });
    $('#dataTableKlien tbody').on('click', '.editPesanan', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('pemesanan/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                NOMOR_PEMESANAN: id
            },
            success: res => {
                $('#idKlien_edit').val(res[0].ID_KLIEN)
                $('#idPaket_edit').val(res[0].ID_PAKET)
                $('#idPengguna_edit').val(res[0].ID_PENGGUNA)
                $('#uangMuka_edit').val(res[0].UANGMUKA_PEMESANAN)
                $('#biaya_edit').val(res[0].BIAYA_PEMESANAN)
                $('#deskripsi_edit').val(res[0].DESKRIPSI_PEMESANAN)
                $('#alamat_edit').val(res[0].ALAMAT_PEMESANAN)
                $('#tglAcara_edit').val(res[0].TGLACARA_PEMESANAN)                
                $('#tglSelesai_edit').val(res[0].TGLSELESAI_PEMESANAN)           
                $('#idPemesanan_edit').val(res[0].NOMOR_PEMESANAN)
            }
        })
    });
    $('#dataTableKlien tbody').on('click', '.statusModal', function() {
        const id = $(this).data('id');
        $('#nomorPesanan_edit').val(id)
    })
</script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select({
            dropdownParent: "#statusModal"
        });
    });
</script>