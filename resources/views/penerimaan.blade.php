@extends('layout.mainlayout')

@section('page_title','adminLTE 3 | Blank page')

@section('title','Penerimaan')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('conten')
<div class="card">
        <div class="card-header">
          <h3 class="card-title">Penerimaan</h3>

          
        </div>
        <div class="card-body">
        <a class="btn btn-primary btn-block" href="/penerimaan/tambahPenerimaan" method="GET">Tambah Penerimaan Buku</a>
        <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>ID Penerimaan</th>
                      <th>Tanggal Penerimaan</th>
                      <th>Jumlah buku diterima</th>
                      <th>Nama Pegawai</th>
                      <th>Asal</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($penerimaan as $pnr)     
                      <tr> 
                         <td>{{$loop->iteration}}</td>
                         <td>{{$pnr->id_penerimaan}}</td> 
                         <td>{{$pnr->tgl_penerimaan}}</td> 
                         <td>{{$pnr->jml_buku_diterima}}</td>
                         <td>{{$pnr->pegawai->nama_pegawai}}</td> 
                         <td>{{$pnr->asal->asal}}</td>
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
