@extends('layout.mainlayout')

@section('page_title','adminLTE 3 | Eksemplar Buku')

@section('title','Eksemplar Buku')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('conten')
<div class="card">
        <div class="card-header">
          <h3 class="card-title">Eksemplar Buku</h3>

          <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
        @can('isPegawai')
        <a class="btn btn-primary btn-block" href="/eksemplar_buku/tambahEksemplarBuku" method="GET">Tambah Data Eksemplar sBuku</a>
        @endcan
        <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Kode Buku</th>
                      <th>Status</th>
                      <th>Kondisi</th>
                      <th>No ISBN</th>
                      <th>Judul </th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($eks as $jb)     
                      <tr> 
                         <td>{{$loop->iteration}}</td>
                         <td>{{$jb->kode_buku}}</td> 
                         <td>{{$jb->status}}</td> 
                         <td>{{$jb->kondisi_eksemplar}}</td>
                         <td>{{$jb->buku->no_isbn}}</td>
                         <td>{{$jb->buku->judul_buku}}</td>
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
