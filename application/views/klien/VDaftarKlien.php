<main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-fluid">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i class="fas fa-users ml-2 mr-3 fa-lg"></i></div>
                            Daftar Klien
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid mt-n10">
        <div class="card mb-4">
            <div class="card-header">
                <button class='btn btn-primary btn-sm' type='button' data-toggle="modal" data-target="#tambahModal"><i class="fa fa-plus mr-1"></i>Tambah Klien</button>
            </div>
            <div class="card-body">
                <div class="datatable">
                    <table class="table table-bordered table-hover" id="dataTableKlien" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>No Telepon</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>Status</th>
                                <th width="10%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($kliens as $item) {

                                if ($item->deleted_at != null) {
                                    $verfikasi = '<button class="btn btn-danger btn-sm btnChangeStatus" data-id=' . $item->ID_KLIEN . ' type="button" data-toggle="modal" data-target="#statusModalAktif"><i class="fa fa-times-circle"></i></button>';
                                    $status = '<div class="badge badge-danger badge-pill">Tidak Aktif</div>';
                                } else {
                                    $verfikasi = '<button class="btn btn-green btn-sm btnChangeStatus" data-id=' . $item->ID_KLIEN . ' type="button" data-toggle="modal" data-target="#statusModalAktif"><i class="fa fa-check"></i></button>';
                                    $status = '<div class="badge badge-green badge-pill">Aktif</div>';
                                }

                                echo '
                                        <tr>
                                            <td>' . $item->NAMA_KLIEN . '</td>
                                            <td>' . $item->TELP_KLIEN . '</td>
                                            <td>' . $item->EMAIL_KLIEN . '</td>
                                            <td>' . $item->ALAMAT_KLIEN . '</td>
                                            <td>
                                                ' . $status . '
                                            </td>
                                            <td>
                                            ' . $verfikasi . '
                                                <button class="btn btn-sm btn-warning ml-1 btnEdit" data-id=' . $item->ID_KLIEN . ' type="button" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit"></i></button>
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
            <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Klien</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= site_url('klien/store') ?>" method="post">
                                <div class="form-group">
                                    <label for="namaKlien">Nama</label>
                                    <input type="text" name="NAMA_KLIEN" class="form-control" placeholder="Masukan Nama Klien" required>
                                </div>
                                <div class="form-group">
                                    <label for="nomorKlien">Nomor Telepon</label>
                                    <input type="number" name="TELP_KLIEN" class="form-control" placeholder="Masukan Nomor telepon" required>
                                </div>
                                <div class="form-group">
                                    <label for="emailKlien">Email</label>
                                    <input type="email" name="EMAIL_KLIEN" class="form-control" placeholder="Masukan Email" required>
                                </div>
                                <div class="form-group">
                                    <label for="alamatKlien">Alamat</label>
                                    <input type="text" name="ALAMAT_KLIEN" class="form-control" placeholder="Masukan Alamat" required>
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
            <!-- Modal Edit Klien -->
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Klien</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= site_url('klien/edit') ?>" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="emailKlien">Nama</label>
                                    <input type="text" id="namaKlien_edit" name="NAMA_KLIEN" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="nomorKlien">Nomor Telepon</label>
                                    <input type="number" id="tlpKlien_edit" name="TELP_KLIEN" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="emailKlien">Email</label>
                                    <input type="email" id="emailKlien_edit" name="EMAIL_KLIEN" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="alamatKlien">Alamat</label>
                                    <input type="text" id="alamatKlien_edit" name="ALAMAT_KLIEN" class="form-control">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" id="idKlien_edit" name="ID_KLIEN" class="form-control">
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                                <button type="submit" class="btn btn-success"><i class="fa fa-check mr-1"></i>Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal Status Aktif -->
            <div class="modal fade" id="statusModalAktif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Status</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= site_url('klien/changeStatus') ?>" method="post">
                            <div class="modal-body">
                                <h5>Apakah anda yakin ingin mengubah status ?</h5>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" id="idKlien_changeStatus" name="ID_KLIEN">
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
    $('#dataTableKlien tbody').on('click', '.btnEdit', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('klien/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                ID_KLIEN: id
            },
            success: res => {
                $('#namaKlien_edit').val(res[0].NAMA_KLIEN)
                $('#tlpKlien_edit').val(res[0].TELP_KLIEN)
                $('#emailKlien_edit').val(res[0].EMAIL_KLIEN)
                $('#alamatKlien_edit').val(res[0].ALAMAT_KLIEN)
                $('#idKlien_edit').val(res[0].ID_KLIEN)
            }
        })
    })
    $('#dataTableKlien tbody').on('click', '.btnChangeStatus', function() {
        const id = $(this).data('id');
        $('#idKlien_changeStatus').val(id)
    })
</script>