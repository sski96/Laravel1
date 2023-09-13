@extends('template.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Petugas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/petugas/store" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Petugas</label>
                    <input type="text" class="form-control" name="nama_petugas" placeholder="">
                    <label for="exampleInputEmail1">Jabatan Petugas</label>
                    <input type="text" class="form-control" name="jabatan_petugas" placeholder="">
                    <label for="exampleInputEmail1">No Telepon</label>
                    <input type="number" class="form-control" name="no_telp_petugas" placeholder="">
                    <label for="exampleInputEmail1">Alamat Petugas</label>
                    <input type="text" class="form-control" name="alamat_petugas" placeholder="">
</div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" value="Save" class="btn btn-primary">Submit</button>
                  <button type="reset" name="reset" value="Save" class="btn btn-primary">Reset</button>
                </div>
              </form>
            </div>
</div>
@endsection