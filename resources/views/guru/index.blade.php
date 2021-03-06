@extends('layout.main',['title' => 'Data Guru '] )

@section('content-header')

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Guru</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Guru</li>
            </ol>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<body class="hold-transition sidebar-mini">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <ol class="breadcrumb float-sm-left">
                                <a href="addGuru" class="btn btn-primary">
                                    <i class="fa fa-plus"></i>
                                    Tambah Data
                                </a>
                            </ol>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr style="background-color: #0069d9; color: white; size: 8px">
                                        <th>Nip</th>
                                        <th>Nama Guru</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tempat lahir</th>
                                        <th>Tanggal lahir</th>
                                        <th>Alamat</th>
                                        <th>Kecamatan</th>
                                        <th>Pangkat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($datas as $key=>$values)
                                    <tr>
                                        <td>{{ $values->nip }}</td>
                                        <td>{{ $values->nama }}</td>
                                        <td>{{ $values->jenis_kelamin }}</td>
                                        <td>{{ $values->tempat_lahir }}</td>
                                        <td>{{ $values->tanggal_lahir }}</td>
                                        <td>{{ $values->alamat_jalan }}</td>
                                        <td>{{ $values->kecamatan }}</td>
                                        <td>{{ $values->pangkat_golongan }}</td>

                                        <td>
                                            <form action="{{ route('guru.destroy', $values->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('guru.edit', $values->id) }}" class="btn btn-success btn-xs shadow"> <span class="fas fa-edit"></span></a>

                                                <button type="submit" class="btn btn-sm btn-danger btn-xs shadow" onclick="return confirm('Yakin Ingin Menghapus {{ $values->nama }} ? ');" action="{{url('guru',$values->id)}}"> <span class="fas fa-trash"></span>

                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->




</body>




@endsection
@section('content')