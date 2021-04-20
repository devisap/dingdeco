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
                                <th>Jumlah</th>
                                <th>Tersedia</th>
                                <th>Terpakai</th>
                                <th>Rusak</th>
                                <th>Hilang</th>
                                <th width=12%>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($inventaris as $item) {
                                    echo '
                                        <tr>
                                            <td>
                                                <button class="btn btn-sm btn-light ml-1 tampilGambar" data-source="'.$item->IMG_INVENTARIS.'" type="button" data-toggle="modal" data-target="#tampilgambar"><i class="fa fa-image"></i></button>
                                            </td>
                                            <td>'.$item->NAMA_INVENTARIS.'</td>
                                            <td>'.$item->HARGA_INVENTARIS.'</td>
                                            <td>'.$item->JMLBARANG_INVENTARIS.'</td>
                                            <td>'.$item->JMLTERSEDIA_INVENTARIS.'</td>
                                            <td>'.$item->JMLTERPAKAI_INVENTARIS.'</td>
                                            <td>'.$item->JMLRUSAK_INVENTARIS.'</td>
                                            <td>'.$item->JMLHILANG_INVENTARIS.'</td>
                                            <td>
                                                <button class="btn btn-sm btn-warning ml-1 mdlEdit" type="button" data-toggle="modal" data-id="'.$item->ID_INVENTARIS.'" data-target="#mdlEdit"><i class="fa fa-edit"></i></button>
                                                <button class="btn btn-sm btn-dark ml-1" type="button"><i class="fa fa-print"></i></button>
                                            </td>
                                        </tr>
                                    ';
                                }
                            ?>
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
                            <form method="post" action="<?= site_url('inventaris/store')?>" enctype="multipart/form-data">
                                <div class="sbp-preview">
                                    <div class="sbp-preview-content">
                                        <div class="form-group">
                                            <!-- wadah preview -->
                                            <img id="gambar-preview" alt="image preview" style="max-width: 300px;" />
                                            <div class="custom-file">
                                                <input type="file" name="image" class="custom-file-input gambar" id="source-gambar" onchange="previewGambar();">
                                                <label class="custom-file-label label-gambar" for="image-source source-gambar">Pilih Gambar</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="namaKlien">Nama</label>
                                    <input type="text" name="NAMA_INVENTARIS" class="form-control" placeholder="Masukan Nama Barang" required>
                                </div>
                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="number" name="HARGA_INVENTARIS" class="form-control" placeholder="Masukan Harga Barang" required>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">Jumlah Barang</label>
                                    <input type="text" name="" class="form-control jmlBarang" placeholder="Masukan Jumlah Barang" value="0" disabled>
                                    <input type="hidden" name="JMLBARANG_INVENTARIS" class="form-control jmlBarang" value="0" required>
                                </div>
                                <div class="form-group">
                                    <label for="tersedia">Barang Tersedia</label>
                                    <input type="number" name="JMLTERSEDIA_INVENTARIS" data-var="jmlTersedia" class="form-control inptJml" placeholder="Masukan Barang Tersedia" value="0" required>
                                </div>
                                <div class="form-group">
                                    <label for="terpakai">Barang Terpakai</label>
                                    <input type="number" name="JMLTERPAKAI_INVENTARIS" data-var="jmlTerpakai" class="form-control inptJml" placeholder="Masukan Barang Terpakai" value="0" required>
                                </div>
                                <div class="form-group">
                                    <label for="rusak">Barang Rusak</label>
                                    <input type="number" name="JMLRUSAK_INVENTARIS" data-var="jmlRusak" class="form-control inptJml" placeholder="Masukan Barang Rusak" value="0" required>
                                </div>
                                <div class="form-group">
                                    <label for="hilang">Barang Hilang</label>
                                    <input type="number" name="JMLHILANG_INVENTARIS" data-var="jmlHilang" class="form-control inptJml" placeholder="Masukan Barang Hilang" value="0" required>
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
            <!-- Modal Edit Barang -->
            <div class="modal fade" id="mdlEdit" tabindex="-1" role="dialog" aria-labelledby="editBarang" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editBarang">Edit Barang</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="<?= site_url('inventaris/edit')?>">
                            <div class="sbp-preview">
                                    <div class="sbp-preview-content">
                                        <div class="form-group">
                                            <!-- wadah preview -->
                                            <div style="text-align: center;">
                                                <img id="gambar-preview_edit" alt="image preview" style="max-width: 300px;" />
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" name="" class="custom-file-input gambar_edit" id="source-gambar_edit" onchange="previewGambar_edit();">
                                                <label class="custom-file-label label-gambar_edit" for="image-source source-gambar_edit">Pilih Gambar</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="namaKlien">Nama</label>
                                    <input type="text" name="NAMA_INVENTARIS" id="namaInventaris_edit" class="form-control" placeholder="Masukan Nama Barang" required>
                                </div>
                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="number" name="HARGA_INVENTARIS" id="hargaInventaris_edit" class="form-control" placeholder="Masukan Harga Barang" required>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">Jumlah Barang</label>
                                    <input type="text" name="" class="form-control jmlBarang_edit" placeholder="Masukan Jumlah Barang" value="0" disabled>
                                    <input type="hidden" name="JMLBARANG_INVENTARIS" class="form-control jmlBarang_edit" value="0" required>
                                </div>
                                <div class="form-group">
                                    <label for="tersedia">Barang Tersedia</label>
                                    <input type="number" name="JMLTERSEDIA_INVENTARIS" data-var="jmlTersedia" id="jmlTersedia_edit" class="form-control inptJml_edit" placeholder="Masukan Barang Tersedia" value="0" required>
                                </div>
                                <div class="form-group">
                                    <label for="terpakai">Barang Terpakai</label>
                                    <input type="number" name="JMLTERPAKAI_INVENTARIS" data-var="jmlTerpakai" id="jmlTerpakai_edit" class="form-control inptJml_edit" placeholder="Masukan Barang Terpakai" value="0" required>
                                </div>
                                <div class="form-group">
                                    <label for="rusak">Barang Rusak</label>
                                    <input type="number" name="JMLRUSAK_INVENTARIS" data-var="jmlRusak" id="jmlRusak_edit" class="form-control inptJml_edit" placeholder="Masukan Barang Rusak" value="0" required>
                                </div>
                                <div class="form-group">
                                    <label for="hilang">Barang Hilang</label>
                                    <input type="number" name="JMLHILANG_INVENTARIS" data-var="jmlHilang" id="jmlHilang_edit" class="form-control inptJml_edit" placeholder="Masukan Barang Hilang" value="0" required>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" id="idInventaris_edit" name="ID_INVENTARIS" class="form-control">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                            <button type="submit" class="btn btn-success"><i class="fa fa-check mr-1"></i>Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal Tampil Gambar -->
            <div class="modal fade" id="tampilgambar" tabindex="-1" role="dialog" aria-labelledby="editKontrakKerja" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tampilgambar">Gambar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div style="text-align: center;">
                                <img id="img_tampilGambar" style="max-width:750px;" />
                            </div>
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
    let countBarang = {
        jmlTersedia : 0,
        jmlTerpakai : 0,
        jmlRusak : 0,
        jmlHilang : 0
    }

    let countBarang_edit = {
        jmlTersedia : 0,
        jmlTerpakai : 0,
        jmlRusak : 0,
        jmlHilang : 0
    }
    //preview sebelum tambah gambar
    function previewGambar() {
        document.getElementById("gambar-preview").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("source-gambar").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("gambar-preview").src = oFREvent.target.result;
        };
    };
    function previewGambar_edit() {
        document.getElementById("gambar-preview_edit").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("source-gambar_edit").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("gambar-preview_edit").src = oFREvent.target.result;
        };
    };
    $(".gambar").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".label-gambar").addClass("selected").html(fileName);
    });
    $('.inptJml').keyup(function(){
        let val = $('.jmlBarang').val()
        const variable = $(this).data('var');

        countBarang = {
            ...countBarang,
            [variable]: parseInt($(this).val())
        }

        let jmlBarang = 0;
        Object.values(countBarang).forEach(val => {
            if(val){
                jmlBarang += val
            }
        })
        $('.jmlBarang').val(jmlBarang)
    })
    $('#dataTableKontrakKerja tbody').on('click', '.tampilGambar', function(){
        const src = $(this).data('source')
        $('#img_tampilGambar').attr('src', src)
    })
    $('#dataTableKontrakKerja tbody').on('click', '.mdlEdit', function(){
        const id = $(this).data('id')

        $.ajax({
            url: '<?= site_url('inventaris/ajxGet')?>',
            method: 'post',
            dataType: 'json',
            data: {ID_INVENTARIS : id},
            success : function (res){
                countBarang_edit.jmlTersedia = parseInt(res[0].JMLTERSEDIA_INVENTARIS)
                countBarang_edit.jmlTerpakai = parseInt(res[0].JMLTERPAKAI_INVENTARIS)
                countBarang_edit.jmlRusak    = parseInt(res[0].JMLRUSAK_INVENTARIS)
                countBarang_edit.jmlHilang   = parseInt(res[0].JMLHILANG_INVENTARIS)

                $('#idInventaris_edit').val(res[0].ID_INVENTARIS);
                $('#gambar-preview_edit').attr('src', res[0].IMG_INVENTARIS);
                $('#namaInventaris_edit').val(res[0].NAMA_INVENTARIS);
                $('#hargaInventaris_edit').val(res[0].HARGA_INVENTARIS);
                $('.jmlBarang_edit').val(res[0].JMLBARANG_INVENTARIS)
                $('#jmlTersedia_edit').val(res[0].JMLTERSEDIA_INVENTARIS)
                $('#jmlTerpakai_edit').val(res[0].JMLTERPAKAI_INVENTARIS)
                $('#jmlRusak_edit').val(res[0].JMLRUSAK_INVENTARIS)
                $('#jmlHilang_edit').val(res[0].JMLHILANG_INVENTARIS)
            }
        })
    })
    $('.inptJml_edit').keyup(function(){
        let val = $('.jmlBarang_edit').val()
        const variable = $(this).data('var');
        console.log(val)

        countBarang_edit = {
            ...countBarang_edit,
            [variable]: parseInt($(this).val())
        }

        let jmlBarang_edit = 0;
        Object.values(countBarang_edit).forEach(val => {
            if(val){
                jmlBarang_edit += val
            }
        })
        $('.jmlBarang_edit').val(jmlBarang_edit)
    })
</script>