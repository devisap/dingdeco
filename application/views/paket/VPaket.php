<style>
    .ck-editor__editable {
        max-height: 100%;
        min-height: 200px;
    }
</style>

<main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-fluid">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i class="fas fa-newspaper ml-2 mr-3 fa-lg"></i></div>
                            Daftar Paket
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid mt-n10">
        <div class="card mb-4">
            <div class="card-header">
                <button class='btn btn-primary btn-sm' type='button' data-toggle="modal" data-target="#tambahPaket"><i class="fa fa-plus mr-1"></i>Tambah Paket</button>
            </div>
            <div class="card-body">
                <div class="datatable">
                    <table class="table table-bordered table-hover" id="dataTablePaket" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th width=14%>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($paket as $item) {                                 
                                    echo '
                                        <tr>
                                            <td>' . $item->NAMA_PAKET . '</td>
                                            <td>Rp ' . number_format($item->HARGA_PAKET,0,',','.') . '</td>
                                            <td> 
                                                <button class="btn btn-sm btn-primary detailPaket ml-1" data-id="'. $item->ID_PAKET .'" type="button" data-toggle="modal" data-target="#detailPaket"><i class="fa fa-ellipsis-h"></i></button>
                                                <button class="btn btn-sm btn-warning editPaket ml-1" data-id="'. $item->ID_PAKET .'" type="button" data-toggle="modal" data-target="#editPaket"><i class="fa fa-edit"></i></button>
                                                <button class="btn btn-sm btn-danger hapusPaket ml-1" data-id="'. $item->ID_PAKET .'" type="button" data-toggle="modal" data-target="#hapusPaket"><i class="fa fa-trash"></i></button>        
                                            </td>                                          
                                        </tr>
                                    ';
                                }
                            ?>                            
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Modal Detail Paket -->
            <div class="modal fade" id="detailPaket" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Detail Paket </h5>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <h6 for="judulPaket">Nama Paket</h6>
                                        <p><span id="namaPaket"></span></p>
                                        </p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <h6 for="hargaPaket">Harga Paket</h6>
                                        <p><span id="hargaPaket"></span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h6 for="fasilitas">Fasilitas</h6>
                                <p>
                                    <span id="fasilitasPaket"></span>
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Tutup</button>
                            <button class="btn btn-warning editPaket ml-1" data-id="idPaket" type="button" data-toggle="modal" data-target="#editPaket"><i class="fa fa-edit"></i>Edit</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Tambah Paket -->
            <div class="modal fade" id="tambahPaket" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Paket</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= site_url('paket/store') ?>" method="post">
                                <div class="form-group">
                                    <label for="namaKlien">Nama Paket</label>
                                    <input type="text" name="NAMA_PAKET" class="form-control" placeholder="Masukan Nama Paket" required>
                                </div>
                                <div class="form-group">
                                    <label for="hargaPaket">Harga</label>
                                    <input type="text" name="HARGA_PAKET" class="form-control" placeholder="Masukan Harga Paket" required>
                                </div>
                                <div class="form-group">
                                    <label for="tambahFasilitas">Fasilitas</label>
                                    <textarea name="FASILITAS_PAKET" class="form-control" id="tambahFasilitas" rows="3"></textarea>
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
            <!-- Modal Edit Paket -->
            <div class="modal fade" id="editPaket" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Paket</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= site_url('paket/edit') ?>" method="post">
                                <div class="form-group">
                                    <label for="namaKlien">Nama Paket</label>
                                    <input type="text" id="namaPaket_edit" name="NAMA_PAKET" class="form-control" placeholder="Masukan Nama Paket" required>
                                </div>
                                <div class="form-group">
                                    <label for="hargaPaket">Harga</label>
                                    <input type="text" id="hargaPaket_edit" name="HARGA_PAKET" class="form-control" placeholder="Masukan Harga Paket" required>
                                </div>
                                <div class="form-group">
                                    <label for="editFasilitas">Fasilitas</label>
                                    <textarea name="FASILITAS_PAKET" class="form-control" id="editFasilitas" rows="3"></textarea>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" id="idPaket_edit" name="ID_PAKET" class="form-control">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                            <button type="submit" class="btn btn-success"><i class="fa fa-check mr-1"></i>Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal Hapus Paket -->
            <div class="modal fade" id="hapusPaket" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Paket</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= site_url('paket/delete') ?>" method="post">
                            <div class="modal-body">
                                <h5>Apakah anda yakin ingin menghapus paket ?</h5>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" id="hapusPaket_id" name="ID_PAKET">
                                <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash mr-1"></i>Hapus Paket</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    $().ready(function() {
        var table = $('#dataTablePaket').DataTable({
            ordering: false,
            "order": [
                [0, 'asc']
            ],
            fixedColumns: false
        });
    });
</script>

<script>
    ClassicEditor
    .create(document.querySelector('#tambahFasilitas'))
    .then(editor => {
    console.log(editor);
    })
    .catch(error => {
    console.error(error);
    });

    ClassicEditor
    .create(document.querySelector('#editFasilitas'))
    .then(editor => {
    console.log(editor);
    })
    .catch(error => {
    console.error(error);
    });
    $('#dataTablePaket tbody').on('click', '.editPaket', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('paket/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                ID_PAKET: id
            },
            success: res => {
                $('#namaPaket_edit').val(res[0].NAMA_PAKET)
                $('#hargaPaket_edit').val(res[0].HARGA_PAKET)
                $('#editFasilitas').val(res[0].FASILITAS_PAKET)
                $('#idPaket_edit').val(res[0].ID_PAKET)
            }
        })
    })
    $('#dataTablePaket tbody').on('click', '.detailPaket', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('paket/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                ID_PAKET: id
            },
            success: res => {
                $('#namaPaket').html(res[0].NAMA_PAKET)
                $('#hargaPaket').html(res[0].HARGA_PAKET)
                $('#fasilitasPaket').html(res[0].FASILITAS_PAKET)
                $('#idPaket').val(res[0].ID_PAKET)
            }
        })
    })
    $('#dataTablePaket tbody').on('click', '.hapusPaket', function() {
        const id = $(this).data("id")
        $('#hapusPaket_id').val(id)
    })
</script>