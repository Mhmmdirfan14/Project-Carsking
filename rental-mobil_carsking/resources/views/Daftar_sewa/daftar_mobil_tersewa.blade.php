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
                        <div class="col-sm-6">
                            <h1 class="m-0">Daftar Mobil Tersewa</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="card card info card-outline">
                    <div class="card-header">
                        <div class="card-tools">
                            <a href="{{ route('create_sewa') }}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Id</th>
                                <th>nama</th>
                                <th>NoKtp</th>
                                <th>Tgl_mulai</th>
                                <th>Tgl_akhir</th>
                                <th>Tujuan</th>
                                <th>Sopir</th>
                                <th>Mobil_id</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach ($dtSewa as $sewa)


                            <tr>
                                <td>{{ $sewa->id }}</td>
                                <td>{{ $sewa->nama }}</td>
                                <td>{{ $sewa->no_ktp }}</td>
                                <td>{{ date('d-m-y', strtotime($sewa->tanggal_mulai)) }}</td>
                                <td>{{ date('d-m-y', strtotime($sewa->tanggal_akhir)) }}</td>
                                <td>{{ $sewa->tujuan }}</td>
                                <td>{{ $sewa->sopir }}</td>
                                <td>{{ $sewa->mobil_id }}</td>
                                <td>
                                    <a href="{{ url('edit_sewa', $sewa->id ) }}"><i class="fa fa-sticky-note" aria-hidden="true"></i></i>
                                    </a> | <a href="{{ route('delete_sewa', $sewa->id ) }}"><i class="fa fa-trash" aria-hidden="true" style="color: red;"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
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

    @include('sweetalert::alert')
</body>

</html>