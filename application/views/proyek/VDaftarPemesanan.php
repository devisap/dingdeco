<main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container">
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
    <div class="container mt-n10">
        <div class="card mb-4">
            <div class="card-header">
                <button class='btn btn-primary btn-sm' type='button' data-toggle="modal" data-target="#tambahModalPemesanan"><i class="fa fa-plus mr-1"></i>Tambah Klien</button>
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
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2019081600000001</td>
                                <td>Dedy Hermawan</td>
                                <td>Marketing A</td>
                                <td>Hawai</td>
                                <td>085732694267</td>
                                <td>Rp14.000.000</td>
                                <td>20 Aug 2019 14:05</td>
                                <td>
                                    <div class="badge badge-success badge-pill">Baru</div>
                                </td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-warning mr-1" type="button" data-toggle="modal" data-target="#editModalPemesanan"><i class="fa fa-edit"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-green mr-1" type="button" data-toggle="modal" data-target="#statusModal"><i class="fa fa-check"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-dark mr-1" type="button"><i class="fa fa-print"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Modal Tambah Klien -->
            <div class="modal fade" id="tambahModalPemesanan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <label for="namaKlien">Klien</label>
                                <select class="form-control" id="namaKlien">
                                    <option>Nama Klien A</option>
                                    <option>Nama Klien B</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="namaMarketing">Marketing</label>
                                <select class="form-control" id="namaMarketing">
                                    <option>Marketing A</option>
                                    <option>Marketing B</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="namaPaket">Paket</label>
                                <select class="form-control" id="namaPaket">
                                    <option>Paket A</option>
                                    <option>Paket B</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="uangMukalien">Uang Muka</label>
                                <input type="text" name="uangMukalien" class="form-control" placeholder="Masukan Uang Muka">
                            </div>
                            <div class="form-group">
                                <label for="biaya">Biaya</label>
                                <input type="text" name="biaya" class="form-control" placeholder="Masukan Biaya">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control" placeholder="Masukan Deskripsi">
                            </div>
                            <div class="form-group">
                                <label for="alamatAcara">Alamat Acara</label>
                                <input type="text" name="alamatAcara" class="form-control" placeholder="Masukan Alamat Acara">
                            </div>
                            <div class="form-group">
                                <label for="tanggalAcara">Tanggal Acara</label>
                                <input name="tanggalAcara" class="form-control" id="tanggalAcara" type="text" placeholder="Masukkan Tanggal" />
                            </div>
                            <div class="form-group">
                                <label for="tanggalSelesai">Tanggal Selesai</label>
                                <input name="tanggalSelesai" class="form-control" id="tanggalSelesai" type="text" placeholder="Masukkan Tanggal" />
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
            <div class="modal fade" id="editModalPemesanan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Pemesanan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="namaKlien">Klien</label>
                                <input type="text" name="namaKlien" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="namaMarketing">Marketing</label>
                                <input type="text" name="namaMarketing" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="namaPaket">Paket</label>
                                <input type="text" name="namaPaket" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="uangMuka">Uang Muka</label>
                                <input type="text" name="uangMuka" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="biaya">Biaya</label>
                                <input type="text" name="biaya" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="alamatAcara">Alamat Acara</label>
                                <input type="text" name="alamatAcara" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="editTanggalAcara">Tanggal Acara</label>
                                <input name="editTanggalAcara" class="form-control" id="editTanggalAcara" type="text" />
                            </div>
                            <div class="form-group">
                                <label for="editTanggalSelesai">Tanggal Selesai</label>
                                <input name="editTanggalSelesai" class="form-control" id="editTanggalSelesai" type="text" />
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
            <div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Status</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <select class="js-example-basic-single" id="statusModal">
                                <option>Baru</option>
                                <option>Cek Lokasi</option>
                                <option>Booking</option>
                                <option>Deal</option>
                                <option>Dikirim</option>
                                <option>Produksi</option>
                                <option>Dibongkar</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
<script type="text/javascript">
    //datepicker
    $('#tanggalAcara').datepicker({
        format: 'dd-mm-yyyy',
        autoclose: true,
        todayHighlight: true,
    });

    $('#tanggalSelesai').datepicker({
        format: 'dd-mm-yyyy',
        autoclose: true,
        todayHighlight: true,
    });

    $('#editTanggalAcara').datepicker({
        format: 'dd-mm-yyyy',
        autoclose: true,
        todayHighlight: true,
    });

    $('#editTanggalSelesai').datepicker({
        format: 'dd-mm-yyyy',
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
</script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2({
            dropdownParent: "#statusModal"
        });
    });
</script>