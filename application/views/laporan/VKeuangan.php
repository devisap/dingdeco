<main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-fluid">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i class="fas fa-money-bill-wave ml-2 mr-3 fa-lg"></i></div>
                            Laporan Keuangan
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid mt-n10">
        <div class="card mb-4">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3 ml-4">
                        <label>Klien : </label>
                        <br>
                        <select class="form-control">
                            <option>Pilih Klien</option>
                            <option>Ilham</option>
                            <option>Dedy</option>
                        </select>
                    </div>
                    <div class="col-md-3 ml-4">
                        <label>Marketing : </label>
                        <br>
                        <select class="form-control">
                            <option>Pilih Marketing</option>
                            <option>Marketing A</option>
                            <option>Marketing B</option>
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
                    <table class="table table-bordered table-hover" id="dataTableLaporKeuangan" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No Pemesanan</th>
                                <th>Nama Klien</th>
                                <th>Alamat</th>
                                <th>Biaya</th>
                                <th>Tgl Acara</th>
                                <th width=7%>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2019081600000001</td>
                                <td>Ilham</td>
                                <td>Malang</td>
                                <td>Rp14.000.000</td>
                                <td>20 Aug 2019 14:05</td>
                                <td>
                                    <button class="btn btn-sm btn-dark ml-1" data-toggle="modal" data-target="#pdfModal" type="button"><i class="fa fa-print"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Modal View PDF -->
            <div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" >Laporan Keuangan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <iframe id="pdfModal_src" src="<?= base_url('assets/pdf/laporan_keuangan.pdf'); ?>" frameborder="0" width="100%" height="470px"></iframe>
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
<script>
    $().ready(function() {
        var table = $('#dataTableLaporKeuangan').DataTable({
            ordering: false,
            "order": [
                [0, 'asc']
            ],
            fixedColumns: false
        });
    });
</script>