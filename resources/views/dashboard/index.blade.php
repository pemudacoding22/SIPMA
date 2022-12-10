@include('template.header')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        @include('template.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('template.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper my-3">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Main row -->
                    <div class="card border-0 shadow rounded">
                        {{-- <div class="card-body">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Bordered Table</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>NIP</th>
                                                <th>NIDN</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Agama</th>
                                                <th>Status</th>
                                                <th>Alamat</th>
                                                <th>Email</th>
                                                <th>No. HP</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($dataDosen as $data)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $data->nama }}</td>
                                                    <td>{{ $data->nip }}</td>
                                                    <td>{{ $data->nidn }}</td>
                                                    <td>{{ $data->tempat_lahir }}</td>
                                                    <td>{{ $data->tanggal_lahir }}</td>
                                                    <td>{{ $data->jenis_kelamin }}</td>
                                                    <td>{{ $data->agama }}</td>
                                                    <td>{{ $data->status }}</td>
                                                    <td>{{ $data->alamat }}</td>
                                                    <td>{{ $data->email }}</td>
                                                    <td>{{ $data->no_hp }}</td>
                                                </tr>
                                            @empty
                                            <div class="alert alert-danger">
                                                Data Post belum Tersedia.
                                            </div>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div> --}}
                        <div class="card-header">
                            <h3 class="card-title">Data Dosen Sementara</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <button>
                                        <a href="{{ route('dashboard.create') }}" class="btn btn-primary">Tambah Data</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>NIP</th>
                                        <th>NIDN</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Agama</th>
                                        <th>Status</th>
                                        <th>Alamat</th>
                                        <th>Email</th>
                                        <th>No. HP</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($dataDosen as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data->nama }}</td>
                                            <td>{{ $data->nip }}</td>
                                            <td>{{ $data->nidn }}</td>
                                            <td>{{ $data->tempat_lahir }}</td>
                                            <td>{{ $data->tanggal_lahir }}</td>
                                            <td>{{ $data->jenis_kelamin }}</td>
                                            <td>{{ $data->agama }}</td>
                                            <td>{{ $data->status }}</td>
                                            <td>{{ $data->alamat }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td>{{ $data->no_hp }}</td>
                                        </tr>
                                    @empty
                                        <div class="alert alert-danger">
                                            Data Post belum Tersedia.
                                        </div>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        @include('template.footer')

    </div>
    <!-- ./wrapper -->
    @include('template.plugin')
