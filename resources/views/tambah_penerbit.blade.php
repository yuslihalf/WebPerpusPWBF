@extends('layout.mainlayout')

@section('page_title','adminLTE 3 | Blank page')

@section('title','Tambah Penerbit')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('conten')
<div class="card">
        <div class="card-header">
          <h3 class="card-title">Penerbit</h3>

          <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
        <form  action="/penerbit/insertData" method="post">
        @csrf
                <div class="card-body">
                  
                    <label for="exampleInputEmail1">ID Penerbit</label>
                    <input type="text" name="id_penerbit" class="form-control" id="exampleInputEmail1" placeholder="ID Penerbit">
                  
                    <label for="exampleInputEmail1">Nama Penerbit</label>
                    <input type="text" name="nama_penerbit" class="form-control" id="exampleInputEmail1" placeholder="Nama ">
                 
                    <label for="exampleInputEmail1">Alamat Penerbit</label>
                    <input type="text" name="alamat_penerbit" class="form-control" id="exampleInputEmail1" placeholder="Alamat ">
                  
                    <label for="exampleInputEmail1">No Telp Penerbit</label>
                    <input type="text" name="no_telp_penerbit" class="form-control" id="exampleInputEmail1" placeholder="No Telp">
                 
                    <label for="exampleInputEmail1">Email Penerbit</label>
                    <input type="email" name="email_penerbit" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
        </form>
        
        
        <!-- /.card-footer-->
</div>
      <!-- /.card -->
@endsection
