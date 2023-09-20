@extends('template.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Input Data Anggota</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('anggota.store') }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kode Anggota</label>
                    <input type="text" class="form-control" name="kode_anggota" placeholder="">
                    <label for="exampleInputEmail1">Nama Anggota</label>
                    <input type="text" class="form-control" name="nama_anggota" placeholder="">
                        <label>Jenis Kelamin</label>
                        <select type="text" name="jk_anggota" class="form-control">
                          <option disabled selected>Pilih Jenis Kelamin</option>
                          <option value="L">L</option>
                          <option value="P">P</option>
                        </select>
                    <label>Jurusan anggota</label>
                    <select type="text" name="jurusan_anggota" id="jurusan_anggota" class="form-control" placeholder="Input Jurusan">
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
                    <label for="exampleInputEmail1">No Telepon</label>
                    <input type="number" class="form-control" name="no_telp_anggota" placeholder="">
                    <label for="exampleInputEmail1">Alamat Anggota</label>
                    <input type="text" class="form-control" name="alamat_anggota" placeholder="">
</div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{ route('anggota.index') }}" class="btn btn-secondary" style="margin-left: 8px;">Back</a>
                </div>
              </form>
            </div>
</div>

@endsection