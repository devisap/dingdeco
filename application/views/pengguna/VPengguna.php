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
                            <!-- if ($item->deleted_at != null) {
                                    $verfikasi = '<button class="btn btn-danger btn-sm btnChangeStatus" data-id=' . $item->ID_KLIEN . ' type="button" data-toggle="modal" data-target="#statusModalAktif"><i class="fa fa-times-circle"></i></button>';
                                    $status = '<div class="badge badge-danger badge-pill">Tidak Aktif</div>';
                                } else {
                                    $verfikasi = '<button class="btn btn-green btn-sm btnChangeStatus" data-id=' . $item->ID_KLIEN . ' type="button" data-toggle="modal" data-target="#statusModalAktif"><i class="fa fa-check"></i></button>';
                                    $status = '<div class="badge badge-green badge-pill">Aktif</div>';
                                } -->
                            <tr>
                                <td>Dedy Hermawan</td>
                                <td>085732694267</td>
                                <td>dedy@gmail.com</td>
                                <td>Owner / Super Admin</td>
                                <td>
                                    <div class="badge badge-success badge-pill">Aktif</div>
                                </td>
                                <td>
                                    <!-- ' . $verfikasi . ' -->
                                    <button class="btn btn-sm btn-warning ml-1" type="button" data-toggle="modal" data-target="#editPengguna"><i class="fa fa-edit"></i></button>
                                    <button class="btn btn-sm btn-blue ml-1" type="button" data-toggle="modal" data-target="#ubahPassword"><i class="fa fa-key"></i></button>
                                    <button class="btn btn-green btn-sm btnChangeStatus ml-1" data-id='' type="button" data-toggle="modal" data-target="#statusModalAktif"><i class="fa fa-check"></i></button>
                                    <!-- <button class="btn btn-sm btn-danger ml-1" type="button" data-toggle="modal" data-target="#hapusPaket"><i class="fa fa-trash"></i></button> -->
                                </td>
                            </tr>
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
                            <form method="post">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="NAMA_PENGGUNA" class="form-control" placeholder="Masukan Nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="noTelp">No Telepon</label>
                                    <input type="text" name="NO_TELP" class="form-control" placeholder="Masukan Nomor Telepon" required>
                                </div>
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input type="text" name="EMAIL" class="form-control" placeholder="Masukan Email" required></input>
                                </div>
                                <div class="form-group">
                                    <label for="Level">Level</label>
                                    <select class="form-control" id="Level">
                                        <option>Pilih Level</option>
                                        <option>Owner / Super Admin</option>
                                        <option>Admin Keuangan</option>
                                        <option>Admin Kantor</option>
                                        <option>Marketing</option>
                                        <option>Gudang</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Status">Status</label>
                                    <select class="js-example-responsive" style="width: 50%">
                                        <option>Aktif</option>
                                        <option>Nonaktif</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="text" name="PASSWORD" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Konfirmasi Password</label>
                                    <input type="text" name="PASSWORD" class="form-control" placeholder="Konfirmasi Password" required>
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
            <div class="modal fade" id="editPengguna" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Pengguna</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="NAMA_PENGGUNA" class="form-control" placeholder="Masukan Nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="noTelp">No Telepon</label>
                                    <input type="text" name="NO_TELP" class="form-control" placeholder="Masukan Nomor Telepon" required>
                                </div>
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input type="text" name="EMAIL" class="form-control" placeholder="Masukan Email" required></input>
                                </div>
                                <div class="form-group">
                                    <label for="Level">Level</label>
                                    <select class="form-control" id="Level">
                                        <option>Pilih Level</option>
                                        <option>Owner / Super Admin</option>
                                        <option>Admin Keuangan</option>
                                        <option>Admin Kantor</option>
                                        <option>Marketing</option>
                                        <option>Gudang</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Status">Status</label>
                                    <select class="form-control" id="Status">
                                        <option>Aktif</option>
                                        <option>Nonaktif</option>
                                    </select>
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
            <!-- Modal Hapus Pengguna -->
            <!-- <div class="modal fade" id="hapusPaket" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Paket</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="" method="post">
                            <div class="modal-body">
                                <h5>Apakah anda yakin ingin menghapus paket ?</h5>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" id="" name="">
                                <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash mr-1"></i>Hapus Paket</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> -->
            <!-- Modal Ubah Password -->
            <div class="modal fade" id="ubahPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ubah Password Pengguna</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post">
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="text" name="PASSWORD" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Konfirmasi Password</label>
                                    <input type="text" name="PASSWORD" class="form-control" placeholder="Konfirmasi Password" required>
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
            <!-- Modal Ubah Status -->
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
        var table = $('#dataTablePengguna').DataTable({
            ordering: false,
            "order": [
                [0, 'asc']
            ],
            fixedColumns: false
        });
    });
</script>