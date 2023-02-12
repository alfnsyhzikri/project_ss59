@extends('layouts.master')
@section('judul','Edit Data Tahun Ajaran')
@section('content-header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Data Tahun Ajaran</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Data Tahun Ajaran</li>
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
        <form method="POST" action="/tahun_ajaran/{{$tahun_ajaran->id}}">
            @method('PUT')
            @csrf
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Tahun Ajaran</label>
              <input type="text" VALUE="{{$tahun_ajaran->tahun_ajaran}}" name="tahun_ajaran" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Edit Data</button>
          </form>
      </div>
      <!-- /.card-body -->

    </div>
    <!-- /.card -->

  </section>
@endsection