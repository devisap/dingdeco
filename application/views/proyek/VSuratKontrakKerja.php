<main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-fluid">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i class="fas fa-envelope ml-2 mr-3 fa-lg"></i></div>
                            Surat Kontrak Kerja
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid mt-n10">
        <div class="card mb-4">
            <div class="card-header">
                <button class='btn btn-primary btn-sm' type='button' data-toggle="modal" data-target="#tambahKontrakKerja"><i class="fa fa-plus mr-1"></i>Tambah Kontrak Kerja</button>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3 ml-4">
                        <label>Klien : </label>
                        <select class="form-control">
                            <option>Pilih Klien</option>
                            <option>Ilham</option>
                            <option>Dedy</option>
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
                    <table class="table table-bordered table-hover" id="dataTableKontrakKerja" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No Surat</th>
                                <th>No Pemesanan</th>
                                <th>Nama Klien</th>
                                <th>Alamat</th>
                                <th>Biaya</th>
                                <th>Tgl Acara</th>
                                <th width=12%>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>00000013/III/SKK/2021</td>
                                <td>2019081600000001</td>
                                <td>Ilham</td>
                                <td>Malang</td>
                                <td>Rp14.000.000</td>
                                <td>20 Aug 2019 14:05</td>
                                <td>
                                    <button class="btn btn-sm btn-warning ml-1" type="button" data-toggle="modal" data-target="#editKontrakKerja"><i class="fa fa-edit"></i></button>
                                    <button class="btn btn-sm btn-dark ml-1" type="button"><i class="fa fa-print"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Modal Tambah Surat Kontrak Kerja -->
            <div class="modal fade" id="tambahKontrakKerja" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Surat Kontrak Kerja</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="">
                                <div class="form-group">
                                    <label for="KontrakKerja">No Pemesanan</label>
                                    <select class="form-control" id="KontrakKerja" name="">
                                        <option>Pilih No Pemesanan</option>
                                        <option value="1">2019081600000001</option>
                                        <option value="2">2019090700000002</option>
                                        <option value="3">2021030700000003</option>
                                    </select>
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
            <!-- Modal Edit Surat Kontrak Kerja -->
            <div class="modal fade" id="editKontrakKerja" tabindex="-1" role="dialog" aria-labelledby="editKontrakKerja" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editKontrakKerja">Edit Surat Kontrak Kerja</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="alamatAcara">No Pemesanan</label>
                                    <span type="text" name="" class="form-control">00000013/III/SKK/2021</span>
                                </div>
                                <div class="form-group">
                                    <label for="KontrakKerja">No Pemesanan</label>
                                    <select class="form-control" id="KontrakKerja" name="">
                                        <option>Pilih No Pemesanan</option>
                                        <option value="1">00000013/III/SKK/2021</option>
                                        <option value="2">00000012/IX/SKK/2019</option>
                                        <option value="3">00000013/III/SKK/2021</option>
                                    </select>
                                </div>
                            </form>
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
        </div>
    </div>
</main>
<script>
    $().ready(function() {
        var table = $('#dataTableKontrakKerja').DataTable({
            ordering: false,
            "order": [
                [0, 'asc']
            ],
            fixedColumns: false
        });
    });
</script>