<main>
    <div class="container-fluid mt-5">
        <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
            <div class="mr-4 mb-3 mb-sm-0">
                <h1 class="mb-0">Alur Keuangan</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-6 mb-4">
                <!-- Dashboard info widget 1-->
                <div class="card border-top-0 border-bottom-0 border-right-0 border-left-lg border-primary h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small font-weight-bold text-primary mb-1">Jumlah Pemesanan</div>
                                <div class="h5">123</div>
                                <div class="text-xs font-weight-bold text-primary d-inline-flex align-items-center">
                                    <i class="mr-1" data-feather="trending-up"></i>
                                    1%
                                </div>
                            </div>
                            <div class="ml-2"><i class="fas fa-percentage fa-2x text-gray-200"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mb-4">
                <!-- Dashboard info widget 2-->
                <div class="card border-top-0 border-bottom-0 border-right-0 border-left-lg border-secondary h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small font-weight-bold text-secondary mb-1">Total Pemasukan</div>
                                <div class="h5">10</div>
                                <div class="text-xs font-weight-bold text-secondary d-inline-flex align-items-center">
                                    <i class="mr-1" data-feather="trending-up"></i>
                                    1%
                                </div>
                            </div>
                            <div class="ml-2"><i class="fas fa-percentage fa-2x text-gray-200"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mb-4">
                <!-- Dashboard info widget 3-->
                <div class="card border-top-0 border-bottom-0 border-right-0 border-left-lg border-yellow h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small font-weight-bold text-ywllow mb-1">Total Pengeluaran</div>
                                <div class="h5">2</div>
                                <div class="text-xs font-weight-bold text-yellow d-inline-flex align-items-center">
                                    <i class="mr-1" data-feather="trending-up"></i>
                                    1%
                                </div>
                            </div>
                            <div class="ml-2"><i class="fas fa-percentage fa-2x text-gray-200"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-6 col-xl-6 mb-4">
                <div class="card card-header-actions h-100">
                    <div class="card-header">
                        Daftar Pemasukan
                    </div>
                    <div class="card-body">
                        <div class="datatable">
                            <table class="table table-bordered table-hover" id="dataTablePemasukan" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No Nota</th>
                                        <th>Tgl Masuk</th>
                                        <th>Jumlah</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>20190816001</td>
                                        <td>10 Jan 2020</td>
                                        <td>5.453.577</td>
                                        <td>Uang Muka</td>
                                    </tr>
                                    <tr>
                                        <td>20190907002</td>
                                        <td>10 Jan 2020</td>
                                        <td>4.000.000</td>
                                        <td>BIAYA BUAT KURSI dri profit</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 mb-4">
                <div class="card card-header-actions h-100">
                    <div class="card-header">
                        Daftar Pengeluaran
                    </div>
                    <div class="card-body">
                        <div class="datatable">
                            <table class="table table-bordered table-hover" id="dataTablePengeluaran" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No Nota</th>
                                        <th>Tgl Masuk</th>
                                        <th>Jumlah</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>20190816001</td>
                                        <td>10 Jan 2020</td>
                                        <td>5.453.577</td>
                                        <td>Uang Muka</td>
                                    </tr>
                                    <tr>
                                        <td>20190907002</td>
                                        <td>10 Jan 2020</td>
                                        <td>4.000.000</td>
                                        <td>BIAYA BUAT KURSI dri profit</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    $().ready(function() {
        var table = $('#dataTablePemasukan').DataTable({
            ordering: false,
            searching: false,
            scrollCollapse: true,
            "order": [
                [0, 'asc']
            ],
            columnDefs: [{
                sWidth: '5%',
                targets: 0
            }, ],
            fixedColumns: false
        });
    });
</script>
<script>
    $().ready(function() {
        var table = $('#dataTablePengeluaran').DataTable({
            ordering: false,
            responsive: true,
            searching: false,
            scrollCollapse: true,
            fixedColumns: true,
            "order": [
                [0, 'asc']
            ],
            columnDefs: [{
                sWidth: '5%',
                targets: 0
            }, ],
        });
    });
</script>