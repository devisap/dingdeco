<main>
    <!-- Main page content-->
    <div class="container-fluid mt-5">
        <!-- Custom page header alternative example-->
        <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
            <div class="mr-4 mb-3 mb-sm-0">
                <h1 class="mb-0">Dashboard</h1>
                <div class="small">
                    <span class="font-weight-500 text-primary">Friday</span>
                    &#xB7; September 20, 2020 &#xB7; 12:16 PM
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
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
            <div class="col-xl-3 col-md-6 mb-4">
                <!-- Dashboard info widget 2-->
                <div class="card border-top-0 border-bottom-0 border-right-0 border-left-lg border-secondary h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small font-weight-bold text-secondary mb-1">Pesanan Baru</div>
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
            <div class="col-xl-3 col-md-6 mb-4">
                <!-- Dashboard info widget 3-->
                <div class="card border-top-0 border-bottom-0 border-right-0 border-left-lg border-yellow h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small font-weight-bold text-ywllow mb-1">Pemesanan Di Proses</div>
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
            <div class="col-xl-3 col-md-6 mb-4">
                <!-- Dashboard info widget 4-->
                <div class="card border-top-0 border-bottom-0 border-right-0 border-left-lg border-success h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small font-weight-bold text-success mb-1">Pemesanan Selesai</div>
                                <div class="h5">1</div>
                                <div class="text-xs font-weight-bold text-success d-inline-flex align-items-center">
                                    <i class="mr-1" data-feather="trending-down"></i>
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
                        Daftar Pemesanan
                    </div>
                    <div class="card-body">
                        <div class="datatable">
                            <table class="table table-bordered table-hover" id="dataTablePemesanan" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No Nota</th>
                                        <th>Marketing</th>
                                        <th>Alamat</th>
                                        <th>Tgl Acara</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>20190816001</td>
                                        <td>Marketing A</td>
                                        <td>Blitar</td>
                                        <td>10 Jan 2020 11:50</td>
                                        <td>
                                            <div class="badge badge-blue badge-pill">Baru</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>20190907002</td>
                                        <td>Marketing B</td>
                                        <td>Sidoarjo</td>
                                        <td>10 Jan 2020 11:50</td>
                                        <td>
                                            <div class="badge badge-success badge-pill">Selesai</div>
                                        </td>
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
                        Daftar Klien
                    </div>
                    <div class="card-body">
                        <div class="datatable">
                            <table class="table table-bordered table-hover" id="dataTableKlien" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Telp</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Paul M</td>
                                        <td>Blitar</td>
                                        <td>08560878091</td>
                                        <td>paul@gmail.com</td>
                                        <td>
                                            <div class="badge badge-blue badge-pill">Aktif</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Edward</td>
                                        <td>Malang</td>
                                        <td>08560878091</td>
                                        <td>edward@gmail.com</td>
                                        <td>
                                            <div class="badge badge-danger badge-pill">Nonaktif</div>
                                        </td>
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
        var table = $('#dataTablePemesanan').DataTable({
            ordering: false,
            searching: false,
            scrollX: true,
            scrollCollapse: true,
            "order": [
                [0, 'asc']
            ],
            columnDefs: [{
                    sWidth: '5%',
                    targets: 0
                },
                {
                    sWidth: '5%',
                    targets: 1
                }
            ],
            fixedColumns: false
        });
    });
</script>
<script>
    $().ready(function() {
        var table = $('#dataTableKlien').DataTable({
            ordering: false,
            responsive: true,
            searching: false,
            scrollX: true,
            scrollCollapse: true,
            fixedColumns: true,
             "order": [
                [0, 'asc']
            ],
            columnDefs: [{
                    sWidth: '5%',
                    targets: 0
                },
                {
                    sWidth: '5%',
                    targets: 3
                }
            ],
        });
    });
</script>