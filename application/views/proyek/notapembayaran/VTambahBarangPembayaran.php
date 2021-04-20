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
                            List Barang Pembayaran
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
                            <div class="datatable">
                                <table class="table table-bordered table-hover" id="dataTableNotaPembayaran" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="57%">Barang</th>
                                            <th width="15%">Stok Barang</th>
                                            <th width="20%">Jumlah Barang</th>
                                            <th width=8%>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <div id="barang">
                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <select name="" class="form-control select-modal-width" id="barang" rows="3">
                                                            <option>Kursi</option>
                                                            <option>Meja</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="badge badge-success badge-pill">14</div>
                                                </td>
                                                <td>
                                                    <input name="" class="form-control" type="number" placeholder="Jumlah Barang" />
                                                <td>
                                                    <button type="button" id="deleteRow" class="btn btn-danger btn-sm deleterow"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                        </div>
                                    </tbody>
                                </table>
                            </div>
                            <button name="tambah" id="addRow" type="button" class="btn btn-success tambah"><i class="fa fa-plus"></i>Tambah Barang </button>
                            <button type="submit" class="btn btn-primary "> Simpan </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        // Tambah Barang
        $(document).ready(function() {
            var table = $('#dataTableNotaPembayaran').DataTable({
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

            // add row
            $('#addRow').click(function() {
                var rowHtml = $("#dataTableNotaPembayaran").find("tr")[1].outerHTML
                console.log(rowHtml);
                table.row.add($(rowHtml)).draw();
            });

        });
    </script>
</body>