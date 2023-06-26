<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    @include('Template.header')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('Template.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('Template.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="card card info card-outline">
                    <div class="card-header">
                        <h3>Edit data merk </h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('update_mobil', $mo->id)}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="number" id="id" name="id" class="form-control" placeholder="Id" value="{{ $mo->id }}">
                            </div>
                            <div class="form-group">
                                <input type="text" id="nopol" name="nopol" class="form-control" placeholder="nopol" value="{{ $mo->nopol }}">
                            </div>
                            <div class="form-group">
                                <input type="text" id="warna" name="warna" class="form-control" placeholder="warna" value="{{ $mo->warna }}">
                            </div>
                            <div class="form-group">
                                <input type="integer" id="harga_sewa" name="harga_sewa" class="form-control" placeholder="harga_sewa" value="{{ $mo->harga_sewa }}">
                            </div>
                            <div class="form-group">
                                <input type="text" id="deskripsi" name="deskripsi" class="form-control" placeholder="deskripsi" value="{{ $mo->deskripsi }}">
                            </div>
                            <div class="form-group">
                                <input type="integer" id="tahun" name="tahun" class="form-control" placeholder="tahun" value="{{ $mo->tahun }}">
                            </div>
                            <div class="form-group">
                                <input type="text" id="sopir" name="sopir" class="form-control" placeholder="sopir" value="{{ $mo->sopir }}">
                            </div>
                            <div class="form-group">
                                <input type="number" id="merk_id" name="merk_id" class="form-control" placeholder="merk_id" value="{{ $mo->merk_id }}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Ubah data</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            @include('Template.footer')
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    @include('Template.script')

</body>

</html>