@extends('layouts.master')
@section('judul','Tambah Data Siswa')
@section('content-header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Data Siswa</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Tambah Data Siswa</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
@endsection

@section('content')
<section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">


        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <form method="POST" action="/siswa">
            @csrf
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">NISN</label>
              <input type="text" name="nisn" class="form-control" id="exampleInputPassword1">
            </div>
            
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Nama</label>
              <input type="text" name="nama" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Jurusan</label>
              <select name="jurusan" class="form-control" id="">
                <option value="">-Pilih Jurusan-</option>
                @foreach($jurusan as $data)
                <option value="{{$data->id}}">{{$data->jurusan}}</option>
                @endforeach
              </select>
            </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
              <input type="text" name="jenis_kelamin" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Tempat Lahir</label>
              <input type="text" name="tempat_lahir" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
              <input type="date" name="tgl_lahir" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Alamat</label>
              <input type="text" name="alamat" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Asal Sekolah</label>
              <input type="text" name="asal_sekolah" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Tahun Ajaran</label>
              <select name="tahun_ajaran" class="form-control" id="">
                <option value="">-Pilih Tahun Ajaran-</option>
                @foreach($tahun_ajaran as $data)
                <option value="{{$data->id}}">{{$data->tahun_ajaran}}</option>
                @endforeach
              </select>
            </div>

            <button type="submit" class="btn btn-primary">Tambah Data</button>
          </form>
      </div>
      <!-- /.card-body -->

    </div>
    <!-- /.card -->

  </section>
@endsection