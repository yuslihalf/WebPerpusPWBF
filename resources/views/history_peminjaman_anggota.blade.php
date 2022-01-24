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
          <h3 class="card-title">History Peminjaman Buku Berdasarkan ID atau Nama Anggota</h3>

          <div class="card-tools">
              
          </div>
        </div>
        <div class="card-body">
        <form  action="/historyPeminjaman/cariAnggotaUp" method="get">
                <input type="text" name="inp" class="form-control" id="exampleInputEmail1"  placeholder="Cari ID atau Nama Anggota" >
                
                <button type="submit" class="btn btn-primary">Search</button>
                
        </form>
        <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Nis Nip</th>
                      <th>Nama Anggota</th>
                      <th>No ISBN</th>
                      <th>Judul Buku</th>
                      <th>Status pinjam</th>
                      <th>tanggal pinjam</th>
                      <th>tanggal kembali</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($peminjaman as $pg)     
                      <tr> 
                         <td>{{$loop->iteration}}</td>
                         <td>{{$pg->nis_nip}}</td> 
                         <td>{{$pg->nama_anggota}}</td> 
                         <td>{{$pg->no_isbn}}</td> 
                         <td>{{$pg->judul_buku}}</td> 
                         <td>{{$pg->status_peminjaman}}</td>
                         <td>{{$pg->tgl_pinjam}}</td>
                         <td>{{$pg->tgl_kembali}}</td>
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
