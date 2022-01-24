@extends('layout.mainlayout')

@section('page_title','adminLTE 3 | Blank page')

@section('title','Pegawai')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('conten')
<div class="card">
        <div class="card-header">
          <h3 class="card-title">Pegawai</h3>

          <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <form  action="/pegawai/insertData" method="post">
        @csrf
                <div class="card-body">
                  
                    <label for="exampleInputEmail1">NIP</label>
                    <input type="text" name="nip" class="form-control" id="exampleInputEmail1" placeholder="nip">
                  
                    <label for="exampleInputEmail1">Nama </label>
                    <input type="text" name="nama_peg" class="form-control" id="exampleInputEmail1" placeholder="Nama ">
                 
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email_peg" class="form-control" id="exampleInputEmail1" placeholder="email ">
                  
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" name="pass" class="form-control" id="exampleInputEmail1" placeholder="Pass">
                 
                    
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
