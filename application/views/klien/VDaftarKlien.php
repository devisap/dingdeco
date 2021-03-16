<main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container">
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
    <div class="container mt-n10">
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
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>085732694267</td>
                                <td>dedy@gmail.com</td>
                                <td>Malang</td>
                                <td>
                                    <div class="badge badge-primary badge-pill">Aktif</div>
                                </td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-warning mr-2" type="button" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-green" type="button" data-toggle="modal" data-target="#statusModalAktif"><i class="fa fa-check"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Modal Tambah Klien -->
            <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Klien</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="namaKlien">Nama</label>
                                <input type="text" name="namaKlien" class="form-control" placeholder="Masukan Nama Klien">
                            </div>
                            <div class="form-group">
                                <label for="nomorKlien">Nomor Telepon</label>
                                <input type="number" name="nomorKlien" class="form-control" placeholder="Masukan Nomor telepon">
                            </div>
                            <div class="form-group">
                                <label for="emailKlien">Email</label>
                                <input type="email" name="emailKlien" class="form-control" placeholder="Masukan Email">
                            </div>
                            <div class="form-group">
                                <label for="alamatKlien">Alamat</label>
                                <input type="text" name="alamatKlien" class="form-control" placeholder="Masukan Alamat">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Edit Klien -->
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Klien</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="emailKlien">Nama</label>
                                <input type="text" name="namaKlien" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nomorKlien">Nomor Telepon</label>
                                <input type="number" name="nomorKlien" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="emailKlien">Email</label>
                                <input type="email" name="emailKlien" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="alamatKlien">Alamat</label>
                                <input type="text" name="alamatKlien" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-primary">Simpan</button>
                        </div>
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
                        <div class="modal-body">
                            <h5>Apakah anda yakin ingin mengubah status Aktif Menjadi Nonaktif ?</h5>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                            <button type="button" class="btn btn-danger"><i class="fa fa-check mr-1"></i>Ubah Status</button>
                        </div>
                    </div>
                </div>
            </div>
             <!-- Modal Status Nonaktif -->
             <div class="modal fade" id="statusModalNonaktif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Status</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h5>Apakah anda yakin ingin mengubah status ?</h5>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                            <button type="button" class="btn btn-success"><i class="fa fa-check mr-1"></i>Ubah Status</button>
                        </div>
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
</script>