<main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-fluid">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i class="fas fa-users ml-2 mr-3 fa-lg"></i></div>
                            Daftar Pengguna
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid mt-n10">
        <div class="card mb-4">
            <div class="card-header">
                <button class='btn btn-primary btn-sm' type='button' data-toggle="modal" data-target="#tambahPengguna"><i class="fa fa-plus mr-1"></i>Tambah Pengguna</button>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3 ml-4">
                        <label>Pilih Level : </label>
                        <select class="form-control">
                            <option>Pilih Level</option>
                            <option>Owner / Super Admin</option>
                            <option>Admin Keuangan</option>
                            <option>Admin Kantor</option>
                            <option>Marketing</option>
                            <option>Gudang</option>
                        </select>
                    </div>
                    <div class="col-md-3 ml-4">
                        <label>Status : </label>
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
                    <table class="table table-bordered table-hover" id="dataTablePengguna" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>No Telp</th>
                                <th>Email</th>
                                <th>Level</th>
                                <th>Status</th>
                                <th width=15%>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>                            
                                <?php
                                    foreach ($user as $item) {
                                        
                                        if ($item->deleted_at != null) {
                                            $verifikasi = '<button class="btn btn-green btn-sm btnChangeStatus ml-1" data-id="' . $item->ID_PENGGUNA . '" type="button" data-toggle="modal" data-target="#btnChangeStatus"><i class="fa fa-check"></i></button>';
                                            $status = '<div class="badge badge-danger badge-pill">Tidak Aktif</div>';
                                        } else {
                                            $verifikasi = '<button class="btn btn-danger btn-sm btnChangeStatus ml-1" data-id="' . $item->ID_PENGGUNA . '" type="button" data-toggle="modal" data-target="#btnChangeStatus"><i class="fa fa-times-circle"></i></button>';
                                            $status = '<div class="badge badge-success badge-pill">Aktif</div>';
                                        }

                                        echo '
                                                <tr>
                                                    <td>' . $item->NAMA_PENGGUNA . '</td>
                                                    <td>' . $item->TELP_PENGGUNA . '</td>
                                                    <td>' . $item->EMAIL_PENGGUNA . '</td>
                                                    <td>' . ($item->ID_JABATAN == 1 ? 'Owner / Super Admin' : 'Marketing') . '</td>
                                                    <td>' . $status . '</td>
                                                    <td> 
                                                        <button class="btn btn-sm btn-warning editPengguna ml-1" data-id="' . $item->ID_PENGGUNA . '" type="button" data-toggle="modal" data-target="#editPengguna"><i class="fa fa-edit"></i></button>
                                                        <button class="btn btn-sm btn-blue ubahPassword ml-1" data-id="' . $item->ID_PENGGUNA . '" type="button" data-toggle="modal" data-target="#ubahPassword"><i class="fa fa-key"></i></button>
                                                        '.$verifikasi.'
                                                    </td>                                          
                                                </tr>
                                            ';
                                    }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Modal Tambah Pengguna -->
            <div class="modal fade" id="tambahPengguna" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Pengguna</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="<?= site_url('user/store') ?>">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="NAMA_PENGGUNA" class="form-control" placeholder="Masukkan Nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="noTelp">No Telepon</label>
                                    <input type="text" name="TELP_PENGGUNA" class="form-control" placeholder="Masukkan Nomor Telepon" required>
                                </div>
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input type="text" name="EMAIL_PENGGUNA" class="form-control" placeholder="Masukkan Email" required></input>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="ALAMAT_PENGGUNA" class="form-control" placeholder="Masukkan Alamat" required>
                                </div>
                                <div class="form-group">
                                    <label for="Level">Level</label>
                                    <select class="form-control" id="Level" name="ID_JABATAN">
                                        <option>Pilih Level</option>
                                        <option value="1">Owner / Super Admin</option>
                                        <option value="3">Admin Keuangan</option>
                                        <option value="4">Admin Kantor</option>
                                        <option value="2">Marketing</option>
                                        <option value="5">Gudang</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" name="PASSWORD_PENGGUNA" class="form-control" placeholder="Password" required>
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
            <!-- Modal Edit Pengguna -->
            <div class="modal fade" id="editPengguna" tabindex="-1" role="dialog" aria-labelledby="editPengguna" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editPengguna">Edit Pengguna</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= site_url('user/edit') ?>" method="post">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" id="namaPengguna_edit" name="NAMA_PENGGUNA" class="form-control" placeholder="Masukan Nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="noTelp">No Telepon</label>
                                    <input type="text" id="tlpPengguna_edit" name="TELP_PENGGUNA" class="form-control" placeholder="Masukan Nomor Telepon" required>
                                </div>
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input type="text" id="emailPengguna_edit" name="EMAIL_PENGGUNA" class="form-control" placeholder="Masukan Email" required></input>
                                </div>
                                <div class="form-group">
                                    <label for="Level">Level</label>
                                    <select class="form-control" id="levelPengguna" name="ID_JABATAN">
                                        <option>Pilih Level</option>
                                        <option value="1">Owner / Super Admin</option>
                                        <option value="3">Admin Keuangan</option>
                                        <option value="4">Admin Kantor</option>
                                        <option value="2">Marketing</option>
                                        <option value="5">Gudang</option>
                                    </select>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" id="idPengguna_edit" name="ID_PENGGUNA" class="form-control">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                            <button type="submit" class="btn btn-success"><i class="fa fa-check mr-1"></i>Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal Ubah Password -->
            <div class="modal fade" id="ubahPassword" tabindex="-1" role="dialog" aria-labelledby="ubahPassword" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ubahPassword">Ubah Password Pengguna</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="<?= site_url('user/edit') ?>" >
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="text" name="PASSWORD_PENGGUNA" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Konfirmasi Password</label>
                                    <input type="text" name="PASSWORD_PENGGUNA" class="form-control" placeholder="Konfirmasi Password" required>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" id="ubahPassword_id" name="ID_PENGGUNA">
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
                        <form action="<?= site_url('user/changeStatus') ?>" method="post">
                            <div class="modal-body">
                                <h5>Apakah anda yakin ingin mengubah status ?</h5>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" id="btnChangeStatus_id" name="ID_PENGGUNA">
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
        var table = $('#dataTablePengguna').DataTable({
            ordering: false,
            "order": [
                [0, 'asc']
            ],
            fixedColumns: false
        });
    });
    $('#dataTablePengguna tbody').on('click', '.btnChangeStatus', function() {
        const id = $(this).data("id")
        $('#btnChangeStatus_id').val(id)
    })
    $('#dataTablePengguna tbody').on('click', '.ubahPassword', function() {
        const id = $(this).data('id');
        $('#ubahPassword_id').val(id)
    })
    $('#dataTablePengguna tbody').on('click', '.editPengguna', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('user/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                ID_PENGGUNA: id
            },
            success: res => {
                $('#namaPengguna_edit').val(res[0].NAMA_PENGGUNA)
                $('#tlpPengguna_edit').val(res[0].TELP_PENGGUNA)
                $('#emailPengguna_edit').val(res[0].EMAIL_PENGGUNA)
                $('#levelPengguna').val(res[0].ID_JABATAN)
                $('#idPengguna_edit').val(res[0].ID_PENGGUNA)
            }
        })
    })
</script>