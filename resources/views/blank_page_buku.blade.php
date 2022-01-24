@extends('layout.mainlayout')

@section('page_title','adminLTE 3 | Buku')

@section('title','Buku')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('conten')
<div class="card">
        <div class="card-header">
          <h3 class="card-title">Buku</h3>

          <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
        <a class="btn btn-primary btn-block" href="/buku/tambahBuku" method="GET">Tambah Data Buku</a>
        <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>NO ISBN</th>
                      <th>Judul Buku</th>
                      <th>Tahun Terbit</th>
                      <th>Jenis Buku</th>
                      <th>Penerbit </th>
                      <th>Bahasa</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($buku as $jb)     
                      <tr> 
                         <td>{{$loop->iteration}}</td>
                         <td>{{$jb->no_isbn}}</td> 
                         <td>{{$jb->judul_buku}}</td> 
                         <td>{{$jb->tahun_terbit}}</td>
                         <td>{{$jb->jenis_buku->nama_jb}}</td>
                         <td>{{$jb->penerbit->nama_penerbit}}</td>
                         <td>{{$jb->bahasa->nama_bhs}}</td>
                         
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
