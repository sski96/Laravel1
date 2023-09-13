@extends('template.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Buku</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/buku/store" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kode Buku</label>
                    <input type="number" class="form-control" name="kode_buku" placeholder="">
                    <label for="exampleInputEmail1">Judul Buku</label>
                    <input type="text" class="form-control" name="judul_buku" placeholder="">
                    <label for="exampleInputEmail1">Penulis Buku</label>
                    <input type="text" class="form-control" name="penulis_buku" placeholder="">
                    <label for="exampleInputEmail1">Penerbit Buku</label>
                    <input type="text" class="form-control" name="penerbit_buku" placeholder="">
                    <label for="exampleInputEmail1">Tahun Penerbitan</label>
                    <input type="number" class="form-control" name="tahun_penerbit" placeholder="">
                    <label for="exampleInputEmail1">Stok Buku</label>
                    <input type="number" class="form-control" name="stok" placeholder="">
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