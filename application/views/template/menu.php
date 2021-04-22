<div class="nav accordion" id="accordionSidenav">
    <a class="nav-link " href="<?php echo site_url('Dashboard'); ?>">
        <i class="fas fa-home ml-2 mr-3 fa-lg fa-fw"></i>
        Dashboard
    </a>
    <a class="nav-link " href="<?php echo site_url('klien'); ?>">
        <i class="fas fa-users ml-2 mr-3 fa-lg fa-fw"></i>
        Daftar Klien
    </a>
    <a class="nav-link" href="<?php echo site_url('welcome/alurkeuangan'); ?>">
        <i class="fas fa-dollar-sign ml-2 mr-3 fa-lg  fa-fw"></i>
        Alur Keuangan
    </a>
    <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseDashboards" aria-expanded="false" aria-controls="collapseDashboards">
        <i class="fas fa-project-diagram ml-2 mr-3 fa-lg  fa-fw"></i>
        Proyek
        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
    </a>
    <div class="collapse" id="collapseDashboards" data-parent="#accordionSidenav">
        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">

            <a class="nav-link" href="<?php echo site_url('pemesanan'); ?>">
                <i class="fas fa-list ml-2 mr-2 fa-lg fa-fw"></i>
                Daftar Pemesanan
            </a>
            <a class="nav-link" href="<?php echo site_url('skk'); ?>">
                <i class="fas fa-envelope ml-2 mr-2 fa-lg fa-fw"></i>
                Surat Kontrak Kerja
            </a>
            <a class="nav-link" href="<?php echo site_url('notapembayaran'); ?>">
                <i class="fas fa-file-invoice-dollar ml-2 mr-2 fa-lg fa-fw"></i>
                Nota Pembayaran
            </a>
            <a class="nav-link" href="<?php echo site_url('notapengiriman'); ?>">
                <i class="fas fa-truck-moving ml-2 mr-2 fa-lg fa-fw"></i>
                Nota Pengiriman
            </a>
            <a class="nav-link" href="<?php echo site_url('sop'); ?>">
                <i class="fas fa-map-marked-alt ml-2 mr-2 fa-lg fa-fw"></i>
                SOP
            </a>
            <a class="nav-link" href="<?php echo site_url('pemasukan'); ?>">
                <i class="fas fa-sort-numeric-up ml-2 mr-2 fa-lg fa-fw"></i>
                Pemasukan
            </a>
            <a class="nav-link" href="<?php echo site_url('pengeluaran'); ?>">
                <i class="fas fa-sort-numeric-down ml-2 mr-2 fa-lg fa-fw"></i>
                Pengeluaran
            </a>
        </nav>
    </div>
    <a class="nav-link" href="<?php echo site_url('inventaris'); ?>">
        <i class="fa fa-warehouse ml-2 mr-3 fa-lg fa-fw"></i>
        Inventaris Barang
    </a>
    <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#CollapseLaporan" aria-expanded="false" aria-controls="CollapseLaporan">
        <i class="fas fa-clipboard ml-2 mr-3 fa-lg fa-fw"></i>
        Laporan
        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
    </a>
    <div class="collapse" id="CollapseLaporan" data-parent="#accordionSidenav">
        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
            <a class="nav-link" href="<?php echo site_url('welcome/laporan_keuangan'); ?>">
                <i class="fas fa-money-bill-wave ml-2 mr-2 fa-lg fa-fw"></i>
                Keuangan
            </a>
            <a class="nav-link" href="<?php echo site_url('welcome/laporan_akhir_acara'); ?>">
                <i class="fas fa-route ml-2  mr-2 fa-lg fa-fw"></i>
                Akhir Acara
            </a>
        </nav>
    </div>
    <a class="nav-link" href="<?php echo site_url('welcome/landingpage'); ?>">
        <i class="fa fa-pager ml-2 mr-3 fa-lg fa-fw"></i>
        Landing Page
    </a>
    <a class="nav-link" href="<?php echo site_url('paket'); ?>">
        <i class="fa fa-newspaper ml-2 mr-3 fa-lg fa-fw"></i>
        Paket
    </a>
    <a class="nav-link" href="<?php echo site_url('user'); ?>">
        <i class="fa fa-users ml-2 mr-3 fa-lg fa-fw"></i>
        Pengguna
    </a>
</div>
<div class="sidenav-footer">
    <div class="sidenav-footer-content">
        <div class="sidenav-footer-subtitle">Login Sebagai:</div>
        <div class="sidenav-footer-title">Admin</div>
    </div>
</div>