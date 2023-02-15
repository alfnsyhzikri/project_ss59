@extends('layouts.master')
@section('judul','Data Siswa')
@section('content-header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Siswa</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Siswa</li>
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
        <a href="/siswa/form" class="btn btn-primary">Tambah Data</a>

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
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">NISN</th>
                <th scope="col">NAMA</th>
                <th scope="col">JURUSAN</th>
                <th scope="col">JENIS KELAMIN</th>
                <th scope="col">TEMPAT/TANGGAL LAHIR</th>
                <th scope="col">ALAMAT</th>
                <th scope="col">ASAL SEKOLAH</th>
                <th scope="col">TAHUN AJARAN</th>
                <th scope="col">ACTION</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $item)
                <tr>
                    <th scope="row">{{$nomor++}}</th>
                    <td>{{$item->nisn}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->jurusans_id}}</td>
                    <td>{{$item->jenis_kelamin}}</td>
                    <td>{{$item->tempat_lahir}} / {{date_format(date_create($item->tgl_lahir),"d M Y")}}</td>
                    <td>{{$item->alamat}}</td>
                    <td>{{$item->asal_sekolah}}</td>
                    <td>{{$item->tahun_ajarans_id}}</td>
                    <td>
                        <a href="/siswa/edit/{{$item->id}}" class="btn btn-sm btn-info">edit</a>

                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-default{{$item->id}}">
                          hapus
                        </button>
                        <div class="modal fade" id="modal-default{{$item->id}}">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Peringatan!</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <p>Yakin data jurusan {{$item->jurusan}} ingin dihapus?</p>
                              </div>
                              <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                <form action="/jurusan/{{$item->id}}" method="POST">
                                  @method('DELETE')
                                  @csrf
                                  <button type="submit" class="btn btn-primary">Hapus</button>
                                </form>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                    </td>
                  </tr>
                @endforeach


            </tbody>
          </table>
      </div>
      <!-- /.card-body -->

    </div>
    <!-- /.card -->

  </section>
@endsection