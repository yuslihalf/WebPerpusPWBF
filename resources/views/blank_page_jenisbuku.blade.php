@extends('layout.mainlayout')

@section('page_title','adminLTE 3 | Blank page')

@section('title','Jenis Buku')

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
        <a class="btn btn-primary btn-block" href="/jenisbuku/tambahJenisBuku" method="GET">Tambah Data Jenis Buku</a>
        <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>ID Jenis Buku</th>
                      <th>Nama Jenis Buku</th>
                      <th>Kode Jenis Buku</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($jenis_buku as $jb)     
                      <tr> 
                         <td>{{$loop->iteration}}</td>
                         <td>{{$jb->id_jb}}</td> 
                         <td>{{$jb->nama_jb}}</td> 
                         <td>{{$jb->kode_jb}}</td>
                         <td><a href='/jenisbuku/editJenisBuku/{{ $jb->id_jb }}'> 
                               <button> edit </button> 
                             </a> 
                         </td> 
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
