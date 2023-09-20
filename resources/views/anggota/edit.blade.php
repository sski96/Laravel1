@extends('template.master')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Data Input Anggota</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">General Form</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Form Update Data Anggota</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('anggota.update', $anggotas[0]->id) }}" method="POST">
              @csrf
              @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="kode_anggota">Kode Anggota</label>
                  <input type="text" name="kode_anggota" id="kode_anggota" class="form-control @error('kode_anggota') is-invalid @enderror" value="{{ $anggotas[0]->kode_anggota }}">
                </div>
                @error('kode_anggota')
                      <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
                <div class="form-group">
                  <label for="nama_anggota">Nama Anggota</label>
                  <input type="text" name="nama_anggota" id="nama_anggota" class="form-control @error('nama_anggota') is-invalid @enderror" value="{{ $anggotas[0]->nama_anggota }}">
                </div>
                @error('nama_anggota')
                      <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                  <label for="jk_anggota">Jenis Kelamin</label>
                  <input type="text" name="jk_anggota" id="jk_anggota" class="form-control @error('jk_anggota') is-invalid @enderror" value="{{ $anggotas[0]->jk_anggota }}">
                </div>
                @error('jk_anggota')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                  <label>Jurusan</label>
                  <select type="text" name="jurusan_anggota" id="jurusan_anggota" class="form-control @error('jurusan_anggota') is-invalid @enderror" value="{{ $anggotas[0]->jurusan_anggota }}">
                    <option disabled selected>Pilih Jurusan</option>
                          <option value="RPL">RPL</option>
                          <option value="TKJ">TKJ</option>
                          <option value="DPIB">DPIB</option>
                          <option value="DGM">DGM</option>
                          <option value="TM">TM</option>
                          <option value="TKR">TKR</option>
                          <option value="TBSM">TBSM</option>
                          <option value="TEI">TEI</option>
                          <option value="TITL">TITL</option>
                          <option value="TFLM">TFLM</option>
                          <option value="TPL">TPL</option>
                  </select>
                </div>
                @error('jurusan_anggota')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                  <label for="no_telp_anggota">No Telp</label>
                  <input type="number" name="no_telp_anggota" id="no_telp_anggota" class="form-control @error('no_telp_anggota') is-invalid @enderror" value="{{ $anggotas[0]->no_telp_anggota }}">
                </div>
                @error('no_telp_anggota')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                  <label for="alamat_anggota">Alamat</label>
                  <input type="text" name="alamat_anggota" id="alamat_anggota" class="form-control @error('alamat_anggota') is-invalid @enderror" value="{{ $anggotas[0]->alamat_anggota }}">
                </div>
                @error('alamat_anggota')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-warning">Update</button>
                <a href="" class="btn btn-secondary" style="margin-left: 8px;" data-toggle="modal" data-target="#exampleModal">Back</a>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
</div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
  <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Peringatan</h5>
        </div>
        <div class="modal-body">
          <p>Apakah Anda Yakin Akan Keluar Dari Form Update Data Anggota</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
          <a href="{{ route('anggota.index') }}" type="button" class="btn btn-primary">Yes</a>
        </div>
      </div>
   </div>
</div>
@endsection