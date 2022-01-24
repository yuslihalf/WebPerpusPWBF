@extends('layout.mainlayout')

@section('page_title','adminLTE 3 | Bahasa')

@section('title','Bahasa')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('conten')
<div class="card">
        <div class="card-header">
          <h3 class="card-title">Tambah Data Bahasa</h3>

          <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <form  action="/bahasa/insertData" method="post">
        @csrf
                <div class="card-body">
                  
                    <label for="exampleInputEmail1">ID</label>
                    <input type="text" name="id_bhs" class="form-control" id="exampleInputEmail1" placeholder="ID Bahasa">
                  
                    <label for="exampleInputEmail1">Nama </label>
                    <input type="text" name="nama_bhs" class="form-control" id="exampleInputEmail1" placeholder="Nama Bahasa">
                 
                    
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
        </form>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
</div>
      <!-- /.card -->
@endsection
