@extends('template.master')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Data Input Petugas</h1>
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
              <h3 class="card-title">Form Input Petugas</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('petugas.update', $petugass[0]->id) }}" method="POST">
              @csrf
              @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="nama_petugas">Nama Petugas</label>
                  <input type="text" name="nama_petugas" id="nama_petugas" class="form-control @error('nama_petugas') is-invalid @enderror" value="{{ $petugass[0]->nama_petugas }}">
                </div>
                @error('nama_petugas')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                <div class="form-group">
                  <label>Jabatan Petugas</label>
                  <select type="text" name="jabatan_petugas" id="jabatan_petugas" class="form-control @error('jabatan_petugas') is-invalid @enderror" value="{{ $petugass[0]->jabatan_petugas }}">
                  <option disabled selected>Pilih Jabatan</option>
                          <option value="Kepala Perpustakaan">Kepala Perpustakaan</option>
                          <option value="Asisten Kepala Perpustakaan">Asisten Kepala Perpustakaan</option>
                          <option value="Administrasi">Administrasi</option>
                </select>
                </div>
                @error('jabatan_petugas')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                  <label for="no_telp_petugas">No Telp</label>
                  <input type="number" name="no_telp_petugas" id="no_telp_petugas" class="form-control @error('no_telp_petugas') is-invalid @enderror" value="{{ $petugass[0]->no_telp_petugas }}">
                </div>
                @error('no_telp_petugas')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                  <label for="alamat_petugas">Alamat</label>
                  <input type="text" name="alamat_petugas" id="alamat_petugas" class="form-control @error('alamat_petugas') is-invalid @enderror" value="{{ $petugass[0]->alamat_petugas }}">
                </div>
                @error('alamat_petugas')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-warning">Update</button>
                <a href="{{ route('petugas.index') }}" class="btn btn-secondary" style="margin-left: 8px;">Back</a>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->

@endsection