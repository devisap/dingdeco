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
                <div class="col-md-2 ml-3 mt-2">
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
                            <?php
                                foreach($datatable as $items){
                                    $date1=date_create($items->TGL_PENGIRIMAN);
                                    $date2=date_create($items->TGLACARA_PEMESANAN);
                                    
                                    echo'
                                        <tr>
                                            <td>'.$items->NOMOR_PENGIRIMAN.'</td>
                                            <td>'.$items->NOMOR_PEMESANAN.'</td>
                                            <td>'.$items->NAMA_KLIEN.'</td>
                                            <td>'.$items->ALAMAT_PEMESANAN.'</td>
                                            <td>'.date_format($date1,"d M Y").'</td>
                                            <td>'.date_format($date2,"d M Y").'</td>
                                            <td>
                                                <button title="Edit SOP" class="btn btn-sm btn-warning ml-1 editSOP" type="button" data-id="'.$items->NOMOR_PENGIRIMAN.'" data-toggle="modal" data-target="#editSOP"><i class="fa fa-edit"></i></button>
                                                <a title="Print SOP" class="btn btn-sm btn-dark ml-1" type="button" href="'.site_url('welcome/print_sop').'"><i class="fa fa-print"></i></a>
                                            </td>
                                        </tr>
                                    ';
                                }
                            ?>   
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
                            <form method="post" action="<?= site_url('sop/store') ?>" enctype="multipart/form-data">
                                <div>
                                    <label>Pilih No Nota Pengiriman : </label>
                                    <br>
                                    <select class="form-control select-modal-width" name="NOMOR_PENGIRIMAN">
                                        <option>Pilih No Nota Pengiriman</option>
                                        <?php
                                        foreach ($pengiriman as $item) {
                                            echo '
                                                <option value="' . $item->NOMOR_PENGIRIMAN . '">' . $item->NOMOR_PENGIRIMAN . '</option>
                                            ';
                                        }
                                        ?>
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
                            <form action="<?= site_url('sop/edit') ?>" method="post" enctype="multipart/form-data">
                                <div>
                                    <label>Pilih No Nota Pengiriman : </label>
                                    <br>
                                    <select class="form-control select-modal-width" id="nomorPengiriman_edit" name="NOMORTES">
                                        <option>Pilih No Nota Pengiriman</option>
                                        <?php
                                        foreach ($pengiriman as $item) {
                                            echo '
                                                <option value="' . $item->NOMOR_PENGIRIMAN . '">' . $item->NOMOR_PENGIRIMAN . '</option>
                                            ';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <br>
                                <label>Foto</label>
                                <div class="sbp-preview">
                                    <div class="sbp-preview-content">
                                        <div class="form-group">
                                            <!-- wadah preview -->
                                            <img id="foto-preview-edit" alt="image preview" style="max-width: 300px;" />
                                            <div class="custom-file">
                                                <input type="file" name="foto" class="custom-file-input foto-edit" id="source-foto-edit" onchange="previewFotoedit();">
                                                <label class="custom-file-label label-foto-edit" for="image-source source-lfotoogo">Upload Foto</label>
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
                                            <img id="denah-preview-edit" alt="image preview" style="max-width: 300px;" />
                                            <div class="custom-file">
                                                <input type="file" name="denah" class="custom-file-input denah-edit" id="source-denah-edit" onchange="previewLogoedit();">
                                                <label class="custom-file-label label-denah-edit" for="image-source source-denah-edit">Upload Logo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" id="nmrPengiriman_edit" name="NOMOR_PENGIRIMAN" class="form-control">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                            <button type="submit" class="btn btn-success"><i class="fa fa-check mr-1"></i>Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>       
              <!-- Modal View PDF -->
              <div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" >SOP</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <iframe id="pdfModal_src" src="<?= base_url('assets/pdf/sop_pengiriman.pdf'); ?>" frameborder="0" width="100%" height="470px"></iframe>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Tutup</button>
                        </div>
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
    
    $('#dataTableSOP tbody').on('click', '.editSOP', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('sop/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                NOMOR_PENGIRIMAN: id
            },
            success: res => {
                $('#nomorPengiriman_edit').val(res[0].NOMOR_PENGIRIMAN)     
                $('#foto-preview-edit').attr('src', res[0].IMG1_SOP) 
                $('#denah-preview-edit').attr('src', res[0].IMG2_SOP) 
                $('#nmrPengiriman_edit').val(res[0].NOMOR_PENGIRIMAN)
            }
        })
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
    function previewLogo() {
        document.getElementById("denah-preview").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("source-denah").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("denah-preview").src = oFREvent.target.result;
        };
    };
    $(".denah").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".label-denah").addClass("selected").html(fileName);
    }); 
    function previewLogoedit() {
        document.getElementById("denah-preview-edit").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("source-denah-edit").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("denah-preview-edit").src = oFREvent.target.result;
        };
    };
    $(".denah-edit").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".label-denah-edit").addClass("selected").html(fileName);
    });  
    function previewFotoedit() {
        document.getElementById("foto-preview-edit").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("source-foto-edit").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("foto-preview-edit").src = oFREvent.target.result;
        };
    };
    $(".foto-edit").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".label-foto-edit").addClass("selected").html(fileName);
    });  
</script>