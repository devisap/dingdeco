<main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-fluid">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i class="fas fa-map-marked-alt ml-2 mr-3 fa-lg"></i></div>
                            SOP
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid mt-n10">
        <div class="card mb-4">
            <div class="card-header">
                <button class='btn btn-primary btn-sm' type='button' data-toggle="modal" data-target="#tambahSOP"><i class="fa fa-plus mr-1"></i>Tambah SOP</button>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3 ml-4">
                        <label>Pilih No Nota Pengiriman : </label>
                        <br>
                        <select class="form-control" name="">
                            <option>Pilih No Nota Pengiriman</option>
                            <option value="1">00000013/III/SKK/2021</option>
                            <option value="2">00000012/IX/SKK/2019</option>
                            <option value="3">00000013/III/SKK/2021</option>
                        </select>
                    </div>
                    <div class="col-md-3 ml-4">
                        <label>Pilih No Pemesanan : </label>
                        <br>
                        <select class="form-control" name="">
                            <option>Pilih No Pemesanan</option>
                            <option value="1">00000013/III/SKK/2021</option>
                            <option value="2">00000012/IX/SKK/2019</option>
                            <option value="3">00000013/III/SKK/2021</option>
                        </select>
                    </div>
                    <div class="col-md-2 ml-4">
                        <label>Tanggal Kirim : </label>
                        <input name="" class="form-control" id="tanggalKirim" type="text" placeholder="Tanggal Kirim" />
                    </div>
                    <div class="col-md-2 ml-4">
                        <label>Tanggal Acara : </label>
                        <input name="" class="form-control" id="tanggalAcara" type="text" placeholder="Tanggal Acara" />
                    </div>
                </div>
                <div class="col-md-2 mt-2">
                    <label></label>
                    <button type="submit" class="btn btn-primary btn-block">Tampilkan</button>
                </div>
            </div>
            <div class="card-body">
                <div class="datatable">
                    <table class="table table-bordered table-hover" id="dataTableSOP" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No Nota Pengiriman</th>
                                <th>No Pemesanan</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Tgl Kirim</th>
                                <th>Tgl Acara</th>
                                <th width=11%>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>NK00000001</td>
                                <td>2019081600000001</td>
                                <td>Ilham</td>
                                <td>Malang</td>
                                <td>16 Sep 2019</td>
                                <td>16 Sep 2019</td>
                                <td>
                                    <button title="Edit SOP" class="btn btn-sm btn-warning ml-1" type="button" data-toggle="modal" data-target="#editSOP"><i class="fa fa-edit"></i></button>
                                    <a title="Print SOP" class="btn btn-sm btn-dark ml-1" type="button" href="<?php echo site_url('welcome/print_sop'); ?>"><i class="fa fa-print"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Modal Tambah SOP -->
            <div class="modal fade" id="tambahSOP" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah SOP</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="">
                                <div>
                                    <label>Pilih No Nota Pengiriman : </label>
                                    <br>
                                    <select class="form-control select-modal-width" id="" name="">
                                        <option>Pilih No Nota Pengiriman</option>
                                        <option value="1">00000013/III/SKK/2021</option>
                                        <option value="2">00000012/IX/SKK/2019</option>
                                        <option value="3">00000013/III/SKK/2021</option>
                                    </select>
                                </div>
                                <br>
                                <label>Foto </label>
                                <div class="sbp-preview">
                                    <div class="sbp-preview-content">
                                        <div class="form-group">
                                            <!-- wadah preview -->
                                            <img id="foto-preview" alt="image preview" />
                                            <div class="custom-file">
                                                <input type="file" name="foto" class="custom-file-input foto" id="source-foto" onchange="previewFoto();">
                                                <label class="custom-file-label label-foto" for="image-source source-lfotoogo">Upload Foto</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <label>Denah</label>
                                <div class="sbp-preview">
                                    <div class="sbp-preview-content">
                                        <div class="form-group">
                                            <!-- wadah preview -->
                                            <img id="denah-preview" alt="image preview" />
                                            <div class="custom-file">
                                                <input type="file" name="denah" class="custom-file-input denah" id="source-denah" onchange="previewLogo();">
                                                <label class="custom-file-label label-denah" for="image-source source-denah">Upload Logo</label>
                                            </div>
                                        </div>
                                    </div>
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
            <!-- Modal Edit SOP -->
            <div class="modal fade" id="editSOP" tabindex="-1" role="dialog" aria-labelledby="editSOP" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editSOP">Edit SOP</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post">
                                <div>
                                    <label>Pilih No Nota Pengiriman : </label>
                                    <br>
                                    <select class="form-control select-modal-width" id="" name="">
                                        <option>Pilih No Nota Pengiriman</option>
                                        <option value="1">00000013/III/SKK/2021</option>
                                        <option value="2">00000012/IX/SKK/2019</option>
                                        <option value="3">00000013/III/SKK/2021</option>
                                    </select>
                                </div>
                                <br>
                                <label>Foto</label>
                                <div class="sbp-preview">
                                    <div class="sbp-preview-content">
                                        <div class="form-group">
                                            <!-- wadah preview -->
                                            <img id="foto-preview" alt="image preview" />
                                            <div class="custom-file">
                                                <input type="file" name="foto" class="custom-file-input foto" id="source-foto" onchange="previewFoto();">
                                                <label class="custom-file-label label-foto" for="image-source source-lfotoogo">Upload Foto</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <label>Denah</label>
                                <div class="sbp-preview">
                                    <div class="sbp-preview-content">
                                        <div class="form-group">
                                            <!-- wadah preview -->
                                            <img id="denah-preview" alt="image preview" />
                                            <div class="custom-file">
                                                <input type="file" name="denah" class="custom-file-input denah" id="source-denah" onchange="previewLogo();">
                                                <label class="custom-file-label label-denah" for="image-source source-denah">Upload Logo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" id="" name="" class="form-control">
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
                        <form action="" method="post">
                            <div class="modal-body">
                                <h5>Apakah anda yakin ingin mengubah status ?</h5>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" id="btnChangeStatus_id" name="">
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
<script type="text/javascript">
    // Tambah Barang
    $(document).ready(function() {
        var table = $('#dataTableSOP').DataTable({
            ordering: false,
            "order": [
                [0, 'asc']
            ],
            fixedColumns: false
        });
    });
</script>
<script type="text/javascript">
    //datepicker kirim
    $('#tanggalKirim').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });

    //datepicker acara
    $('#tanggalAcara').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });
</script>
<script type="text/javascript">
    //preview sebelum tambah foto
    function previewFoto() {
        document.getElementById("foto-preview").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("source-foto").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("foto-preview").src = oFREvent.target.result;
        };
    };
    $(".foto").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".label-foto").addClass("selected").html(fileName);
    });
</script>