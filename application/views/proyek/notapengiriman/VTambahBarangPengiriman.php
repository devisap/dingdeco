<body>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-fluid">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <a onclick="history.back(-1)">
                                <button class="btn btn-icon mr-2 my-1" type="button"><i class="fas fa-arrow-left" style="color:white"></i></button>
                            </a>
                            List Barang Pengiriman
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid mt-n10">
        <div class="row">
            <div class="col-lg-12">
                <!-- Default Bootstrap Form Controls-->
                <div id="default">
                    <div class="card mb-4">
                        <div class="card-header">Form Tambah List Barang</div>
                        <div class="card-body">
                            <form action="<?= site_url('notapengiriman/manage/set/123')?>" method="post">
                                <div class="datatable">
                                    <table class="table table-bordered table-hover" id="dataTableNotaPengiriman" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th width="57%">Barang</th>
                                                <th width="15%">Stok Barang</th>
                                                <th width="20%">Jumlah Barang</th>
                                                <th width=8%>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                        </tbody>
                                    </table>
                                </div>
                                <button name="tambah" id="addRow" type="button" class="btn btn-success tambah"><i class="fa fa-plus"></i>Tambah Barang </button>
                                <button type="submit" class="btn btn-primary "> Simpan </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        let count       = parseInt('<?= $numRows?>')
        let invStock    = {}
        let invHtml     = ""
        let index      = 0

        // Tambah Barang
        $(document).ready(function() {
            var table = $('#dataTableNotaPengiriman').DataTable({
                ordering: false,
                columnDefs: [{
                    className: "text-center",
                    "targets": [1]
                }],
                "order": [
                    [0, 'asc']
                ],
                fixedColumns: false
            });

            getInventaris()
            // add row
            $('#addRow').click(function() {
                var rowHtml = $("#dataTableNotaPengiriman").find("tr")[1].outerHTML
                const html = `
                    <tr>
                        <td>
                            <div class="form-group">
                                <select name="FORM[${index}][ID_INVENTARIS]" class="form-control select-modal-width slctInventaris" data-index="${index}" rows="3">
                                    <option>Pilih Barang</option>
                                   ${invHtml}
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="badge badge-success badge-pill statStock_${index}">0</div>
                        </td>
                        <td>
                            <input name="FORM[${index}][JML_DETPENGIRIMAN]" class="form-control inptCount" type="number" data-barang="" data-index="${index}" id="inptCount_${index}" placeholder="Jumlah Barang" />
                            <input name="FORM[${index}][NOMOR_PENGIRIMAN]" class="form-control" type="hidden" value="<?= $noPengiriman?>" />
                        <td>
                            <button type="button" id="deleteRow" class="btn btn-danger btn-sm deleterow"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                `
                table.row.add($(html)).draw();
                index++
            });

        });

        $('#dataTableNotaPengiriman tbody').on('keyup', '.inptCount', function(){
            let value = $(this).val()
            const barang = $(this).data('barang')
            const i = $(this).data('index')

            if(parseInt(value) < parseInt(value)){
                $(this).val("0")
            }else if(parseInt(value) > parseInt(invStock[barang])){
                $(this).val(invStock[barang])
            }else{
                invStock[barang+"_curr"] = parseInt(value)
                updLabelStatus(i, barang)
            }
        })
        $('#dataTableNotaPengiriman tbody').on('change', '.slctInventaris', function(){
            const barang = $(this).find(":selected").text()
            const i = $(this).data('index');

            $('#inptCount_'+i).attr('data-barang', barang)
            $('#inptCount_'+i).val("0")
            $("#statStock_"+i).html(invStock[barang])
            updLabelStatus(i, barang)
        })
        const updLabelStatus = (index, barang) => {
            const res = parseInt(invStock[barang])-invStock[barang+'_curr']
            $('.statStock_'+index).html(res.toString())
        }

        const getInventaris = async() => {
            $.ajax({
                url: '<?= site_url('notapengiriman/ajxManageGet')?>',
                method: 'post',
                dataType: 'json',
                data: {NOMOR_PENGIRIMAN: '<?= $noPengiriman?>'},
                success: function(res){
                    for(let item of res['inventaris']){
                        invStock[item.NAMA_INVENTARIS] = item.JMLTERSEDIA_INVENTARIS
                        invStock[item.NAMA_INVENTARIS+'_curr'] = 0
                        invHtml += `<option value="${item.ID_INVENTARIS}">${item.NAMA_INVENTARIS}</option>`
                    }
                }
            })
        }
    </script>
</body>