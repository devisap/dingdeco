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
                        <select class="form-control js-basic-single">
                            <option>Pilih Klien</option>
                            <option>Ilham</option>
                            <option>Dedy</option>
                        </select>
                    </div>
                    <div class="col-md-3 ml-4">
                        <label>Marketing : </label>
                        <select class="form-control js-basic-single">
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
                                    <a class="btn btn-sm btn-dark ml-1" href="<?php echo site_url('welcome/print_laporan_keuangan'); ?>" type="button"><i class="fa fa-print"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
<script>
    $(document).ready(function() {
        $('.js-basic-single').select2();
    });
</script>