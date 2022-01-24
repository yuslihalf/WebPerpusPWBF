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
        <div class="card-body">
        <a class="btn btn-primary btn-block" href="/pegawai/tambahPegawai" method="GET">Tambah Pegawai</a>
        <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>NIP</th>
                      <th>Nama </th>
                      <th>Email</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($pegawai as $jb)     
                      <tr> 
                         <td>{{$loop->iteration}}</td>
                         <td>{{$jb->nip}}</td> 
                         <td>{{$jb->nama_pegawai}}</td> 
                         <td>{{$jb->email_pegawai}}</td>
                         
                      </tr> 
                  @endforeach 
                  </tbody>
                </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
</div>
      <!-- /.card -->
@endsection
