<main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-fluid">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i class="fas fa-warehouse ml-2 mr-3 fa-lg"></i></div>
                            Inventaris Barang
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid mt-n10">
        <div class="card mb-4">
            <div class="card-header">
                <button class='btn btn-primary btn-sm' type='button' data-toggle="modal" data-target="#tambahBarang"><i class="fa fa-plus mr-1"></i>Tambah Barang</button>
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
                                <th>Gambar</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Tgl Pakai</th>
                                <th>Jumlah</th>
                                <th>Tersedia</th>
                                <th>Terpakai</th>
                                <th>Rusak</th>
                                <th>Hilang</th>
                                <th width=12%>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <button class="btn btn-sm btn-light ml-1" type="button" data-toggle="modal" data-target="#tampilgambar"><i class="fa fa-image"></i></button>
                                </td>
                                <td>Ilham</td>
                                <td>Rp14.000.000</td>
                                <td>20 Aug 2019</td>
                                <td>10</td>
                                <td>400</td>
                                <td>3</td>
                                <td>2</td>
                                <td>0</td>
                                <td>
                                    <button class="btn btn-sm btn-warning ml-1" type="button" data-toggle="modal" data-target="#editBarang"><i class="fa fa-edit"></i></button>
                                    <button class="btn btn-sm btn-dark ml-1" type="button"><i class="fa fa-print"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Modal Tambah Barang -->
            <div class="modal fade" id="tambahBarang" tabindex="-1" role="dialog" aria-labelledby="tambahBarang" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahBarang">Tambah Barang</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="">
                                <div class="sbp-preview">
                                    <div class="sbp-preview-content">
                                        <div class="form-group">
                                            <!-- wadah preview -->
                                            <img id="gambar-preview" alt="image preview" />
                                            <div class="custom-file">
                                                <input type="file" name="gambar" class="custom-file-input gambar" id="source-gambar" onchange="previewGambar();">
                                                <label class="custom-file-label label-gambar" for="image-source source-gambar">Pilih Gambar</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="namaKlien">Nama</label>
                                    <input type="text" name="" class="form-control" placeholder="Masukan Nama Barang" required>
                                </div>
                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="text" name="" class="form-control" placeholder="Masukan Harga Barang" required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggalPakai">Tanggal Pakai</label>
                                    <input type="text" name="" class="form-control" placeholder="Tanggal Pakai" required>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">Jumlah Barang</label>
                                    <input type="text" name="" class="form-control" placeholder="Masukan Jumlah Barang" required>
                                </div>
                                <div class="form-group">
                                    <label for="tersedia">Barang Tersedia</label>
                                    <input type="text" name="" class="form-control" placeholder="Masukan Barang Tersedia" required>
                                </div>
                                <div class="form-group">
                                    <label for="terpakai">Barang Terpakai</label>
                                    <input type="text" name="" class="form-control" placeholder="Masukan Barang Terpakai" required>
                                </div>
                                <div class="form-group">
                                    <label for="rusak">Barang Rusak</label>
                                    <input type="text" name="" class="form-control" placeholder="Masukan Barang Rusak" required>
                                </div>
                                <div class="form-group">
                                    <label for="hilang">Barang Hilang</label>
                                    <input type="text" name="" class="form-control" placeholder="Masukan Barang Hilang" required>
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
            <!-- Modal Edit Barang -->
            <div class="modal fade" id="editBarang" tabindex="-1" role="dialog" aria-labelledby="editBarang" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editBarang">Edit Barang</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="">
                                <div class="sbp-preview">
                                    <div class="sbp-preview-content">
                                        <div class="form-group">
                                            <!-- wadah preview -->
                                            <img id="gambar-preview" alt="image preview" />
                                            <div class="custom-file">
                                                <input type="file" name="logo" class="custom-file-input logo" id="source-gambar" onchange="previewGambar();">
                                                <label class="custom-file-label label-logo" for="image-source source-gambar">Pilih Gambar</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="namaKlien">Nama</label>
                                    <input type="text" name="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="text" name="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggalPakai">Tanggal Pakai</label>
                                    <input type="text" name="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">Jumlah Barang</label>
                                    <input type="text" name="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="tersedia">Barang Tersedia</label>
                                    <input type="text" name="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="terpakai">Barang Terpakai</label>
                                    <input type="text" name="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="rusak">Barang Rusak</label>
                                    <input type="text" name="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="hilang">Barang Hilang</label>
                                    <input type="text" name="" class="form-control" required>
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

            <!-- Modal Tampil Gambar -->
            <div class="modal fade" id="tampilgambar" tabindex="-1" role="dialog" aria-labelledby="editKontrakKerja" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tampilgambar">Gambar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="tampilgambar">Gambar</label>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" id="" name="" class="form-control">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-arrow-circle-left mr-1"></i>Kembali</button>
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
<script type="text/javascript">
    //preview sebelum tambah gambar
    function previewGambar() {
        document.getElementById("gambar-preview").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("source-gambar").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("gambar-preview").src = oFREvent.target.result;
        };
    };
    $(".gambar").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".label-gambar").addClass("selected").html(fileName);
    });
</script>