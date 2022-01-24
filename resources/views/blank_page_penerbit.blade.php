@extends('layout.mainlayout')

@section('page_title','adminLTE 3 | Blank page')

@section('title','Penerbit')

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
        <a class="btn btn-primary btn-block" href="/penerbit/tambahPenerbit" method="GET">Tambah Data Penerbit</a>
        <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>ID Penerbit</th>
                      <th>Nama Penerbit</th>
                      <th>Alamat Penerbit</th>
                      <th>No Telp Penerbit</th>
                      <th>Email Penerbit</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($penerbit as $pnb)     
                      <tr> 
                         <td>{{$loop->iteration}}</td>
                         <td>{{$pnb->id_penerbit}}</td> 
                         <td>{{$pnb->nama_penerbit}}</td> 
                         <td>{{$pnb->alamat_penerbit}}</td>
                         <td>{{$pnb->no_telp_penerbit}}</td> 
                         <td>{{$pnb->email_penerbit}}</td>
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
