@extends('layouts.app')

@section('title', 'Periksa')

@section('nav-item')
    <li class="nav-item">
        <a href="./periksa" class="nav-link">
            <i class="nav-icon fas fa-sharp-duotone fa-solid fa-microscope"></i>
            <p>Periksa</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="./riwayat" class="nav-link">
            <i class="nav-icon fas fa-solid fa-file-medical"></i>
            <p>Riwayat</p>
        </a>
    </li>
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Periksa</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Periksa</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Periksa</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                          <div class="form-group">
                            <label for="namaPasien">Nama Pasien</label>
                              <input type="text" class="form-control" id="namaPasien" placeholder="Masukkan nama pasien">
                          </div>
                          
                                <div class="form-group">
                                    <label for="id-dokter">Dokter</label>
                                    <select class="form-control" id="id-dokter" name="id_dokter">
                                        <option value="" selected disabled>Pilih Dokter</option>
                                        @foreach($dokters as $dokter)
                                            <option value="{{ $dokter->id }}">{{ $dokter->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection