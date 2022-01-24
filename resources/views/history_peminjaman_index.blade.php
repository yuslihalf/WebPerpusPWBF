@extends('layout.mainlayout')

@section('page_title','adminLTE 3 | Blank page')

@section('title','HISTORY')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('conten')
<div class="card">
        <div class="card-header">
          <h3 class="card-title">History Peminjaman Buku</h3>

          <div class="card-tools">
              
          </div>
        </div>
        <div class="card-body">
        
                <a class="btn btn-primary btn-block" href="/historyPeminjaman/cariBuku" method="GET">Cari Berdasarkan ID BUKU</a>
                <a class="btn btn-primary btn-block" href="/historyPeminjaman/cariAnggota" method="GET">Cari Berdasarkan ID Anggota atau Nama Anggota</a>
                
                
        
        
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
</div>
      <!-- /.card -->
@endsection
