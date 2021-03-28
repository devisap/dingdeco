<main>
    <div class="container-fluid mt-5">
        <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
            <div class="mr-4 mb-3 mb-sm-0">
                <h1 class="mb-0">Landing Page</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-6 col-xl-6 mb-4">
                <div class="card card-header-actions h-100">
                    <div class="card-header">
                        Logo
                    </div>
                    <div class="card-body">
                        <div class="sbp-preview">
                            <div class="sbp-preview-content">
                                <div class="form-group">
                                    <!-- wadah preview -->
                                    <img id="logo-preview" alt="image preview" />
                                    <div class="custom-file">
                                        <input type="file" name="logo" class="custom-file-input logo" id="source-logo" onchange="previewLogo();">
                                        <label class="custom-file-label label-logo" for="image-source source-logo">Upload Logo</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 mb-4">
                <div class="card card-header-actions h-100">
                    <div class="card-header">
                        Nama & Tentang
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="namaKlien">Nama</label>
                                <input type="text" name="NAMA_KLIEN" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="nomorKlien">Tentang</label>
                                <textarea type="number" name="TELP_KLIEN" class="form-control" required></textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-6 col-xl-6 mb-4">
                <div class="card card-header-actions h-100">
                    <div class="card-header">
                        Alamat
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="alamat1">Alamat 1</label>
                                <input type="text" name="ALAMAT1" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat2">Alamat 2</label>
                                <input type="text" name="ALAMAT2" class="form-control" required></input>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 mb-4">
                <div class="card card-header-actions h-100">
                    <div class="card-header">
                        No Telepon
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="nomorTelp1">No Telepon 1 </label>
                                <input type="text" name="TELP1" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="nomorTelp2">No Telepon 2</label>
                                <input type="number" name="TELP2" class="form-control" required></input>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-12 mb-4">
                <div class="card card-header-actions h-100">
                    <div class="card-header">
                        Sosial Media
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="iglink">Link Instagram</label>
                                <input type="text" name="IGLINK" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="fblink">Link Facebook</label>
                                <input type="text" name="FBLINK" class="form-control" required></input>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-12 mb-4">
                <div class="card card-header-actions h-100">
                    <div class="card-header">
                        Daftar Layanan
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="layanan1">Layanan 1</label>
                                    <input type="text" name="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="deslayanan1">Deskripsi Layanan 1</label>
                                    <textarea type="text" name="" class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                    <!-- wadah preview -->
                                    <img id="layanan1-preview" alt="image preview" />
                                    <div class="custom-file">
                                        <input type="file" name="layanan1" class="custom-file-input layanan1" id="source-layanan1" onchange="previewLayanan1();">
                                        <label class="custom-file-label label-layanan1" for="image-source source-layanan1">Upload Foto</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="layanan2">Layanan 2</label>
                                    <input type="text" name="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="deslayanan2">Deskripsi Layanan 2</label>
                                    <textarea type="text" name="" class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                    <!-- wadah preview -->
                                    <img id="layanan2-preview" alt="image preview" />
                                    <div class="custom-file">
                                        <input type="file" name="layanan2" class="custom-file-input layanan2" id="source-layanan2" onchange="previewLayanan2();">
                                        <label class="custom-file-label label-layanan2" for="image-source source-layanan2">Upload Foto</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="layanan3">Layanan 3</label>
                                    <input type="text" name="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="deslayanan3">Deskripsi Layanan 3</label>
                                    <textarea type="text" name="" class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                    <!-- wadah preview -->
                                    <img id="layanan3-preview" alt="image preview" />
                                    <div class="custom-file">
                                        <input type="file" name="layanan3" class="custom-file-input layanan3" id="source-layanan3" onchange="previewLayanan3();">
                                        <label class="custom-file-label label-layanan3" for="image-source source-layanan3">Upload Foto</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="layanan4">Layanan 4</label>
                                    <input type="text" name="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="deslayanan4">Deskripsi Layanan 4</label>
                                    <textarea type="text" name="" class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                    <!-- wadah preview -->
                                    <img id="layanan4-preview" alt="image preview" />
                                    <div class="custom-file">
                                        <input type="file" name="layanan4" class="custom-file-input layanan4" id="source-layanan4" onchange="previewLayanan4();">
                                        <label class="custom-file-label label-layanan4" for="image-source source-layanan4">Upload Foto</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-12 mb-4">
                <div class="card card-header-actions h-100">
                    <div class="card-header">
                        Portofolio
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <!-- wadah preview -->
                                    <img id="portofolio1-preview" alt="image preview" />
                                    <div class="custom-file">
                                        <input type="file" name="portofolio1" class="custom-file-input portofolio1" id="source-portofolio1" onchange="previewPortofolio1();">
                                        <label class="custom-file-label label-portofolio1" for="image-source source-portofolio1">Upload Foto</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <!-- wadah preview -->
                                    <img id="portofolio2-preview" alt="image preview" />
                                    <div class="custom-file">
                                        <input type="file" name="portofolio2" class="custom-file-input portofolio2" id="source-portofolio2" onchange="previewPortofolio2();">
                                        <label class="custom-file-label label-portofolio2" for="image-source source-portofolio2">Upload Foto</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <!-- wadah preview -->
                                    <img id="portofolio3-preview" alt="image preview" />
                                    <div class="custom-file">
                                        <input type="file" name="portofolio3" class="custom-file-input portofolio3" id="source-portofolio3" onchange="previewPortofolio3();">
                                        <label class="custom-file-label label-portofolio3" for="image-source source-portofolio3">Upload Foto</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <!-- wadah preview -->
                                    <img id="portofolio4-preview" alt="image preview" />
                                    <div class="custom-file">
                                        <input type="file" name="portofolio4" class="custom-file-input portofolio4" id="source-portofolio4" onchange="previewPortofolio4();">
                                        <label class="custom-file-label label-portofolio4" for="image-source source-portofolio4">Upload Foto</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3 text-md-center">
                    <button type="submit" class="btn btn-primary "> Submit </button>
                </div>
            </div>
        </div>
    </div>
</main>
<script type="text/javascript">
    //preview sebelum upload logo
    function previewLogo() {
        document.getElementById("logo-preview").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("source-logo").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("logo-preview").src = oFREvent.target.result;
        };
    };

    // Add the following code if you want the name of the file appear on select
    $(".logo").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".label-logo").addClass("selected").html(fileName);
    });

    //preview sebelum upload layanan
    function previewLayanan1() {
        document.getElementById("layanan1-preview").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("source-layanan1").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("layanan1-preview").src = oFREvent.target.result;
        };
    };
    $(".layanan1").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".label-layanan1").addClass("selected").html(fileName);
    });

    function previewLayanan2() {
        document.getElementById("layanan2-preview").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("source-layanan2").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("layanan2-preview").src = oFREvent.target.result;
        };
    };
    $(".layanan2").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".label-layanan2").addClass("selected").html(fileName);
    });

    function previewLayanan3() {
        document.getElementById("layanan3-preview").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("source-layanan3").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("layanan3-preview").src = oFREvent.target.result;
        };
    };
    $(".layanan3").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".label-layanan3").addClass("selected").html(fileName);
    });

    function previewLayanan4() {
        document.getElementById("layanan4-preview").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("source-layanan4").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("layanan4-preview").src = oFREvent.target.result;
        };
    };
    $(".layanan4").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".label-layanan4").addClass("selected").html(fileName);
    });

    //preview sebelum upload portofolio
    function previewPortofolio1() {
        document.getElementById("portofolio1-preview").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("source-portofolio1").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("portofolio1-preview").src = oFREvent.target.result;
        };
    };
    $(".portofolio1").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".label-portofolio1").addClass("selected").html(fileName);
    });

    function previewPortofolio2() {
        document.getElementById("portofolio2-preview").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("source-portofolio2").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("portofolio2-preview").src = oFREvent.target.result;
        };
    };
    $(".portofolio2").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".label-portofolio2").addClass("selected").html(fileName);
    });

    function previewPortofolio3() {
        document.getElementById("portofolio3-preview").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("source-portofolio3").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("portofolio3-preview").src = oFREvent.target.result;
        };
    };
    $(".portofolio3").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".label-portofolio3").addClass("selected").html(fileName);
    });

    function previewPortofolio4() {
        document.getElementById("portofolio4-preview").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("source-portofolio4").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("portofolio4-preview").src = oFREvent.target.result;
        };
    };
    $(".portofolio4").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".label-portofolio4").addClass("selected").html(fileName);
    });
</script>