@extends('layout.mainlayout')

@section('page_title','adminLTE 3 | Blank page')

@section('title','Tambah Jenis Buku')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('conten')
<div class="card">
        <div class="card-header">
          <h3 class="card-title">Jenis Buku</h3>

          <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
        <form  action="/jenisbuku/updateJenisBuku" method="post">
        @csrf
                <div class="card-body">
                  
                    <label for="exampleInputEmail1">ID Jenis Buku</label>
                    <input type="text" name="id_jb" class="form-control" id="exampleInputEmail1" value="{{ $jenisbuku[0]->id_jb }}" placeholder="ID Jenis Buku" readonly>
                  
                    <label for="exampleInputEmail1">Nama Jenis Buku</label>
                    <input type="text" name="nama_jb" class="form-control" id="exampleInputEmail1" value="{{ $jenisbuku[0]->nama_jb }}" placeholder="Nama">
                 
                  
                    <label for="exampleInputEmail1">Kode Jenis Buku</label>
                    <input type="text" name="kode_jb" class="form-control" id="exampleInputEmail1" value="{{ $jenisbuku[0]->kode_jb }}" placeholder="Kode">
                  
                  
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
