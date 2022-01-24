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
          <h3 class="card-title">History Peminjaman Buku Berdasarkan ID BUKU</h3>

          <div class="card-tools">
              
          </div>
        </div>
        <div class="card-body">
        <form  action="/historyPeminjaman/cariBukuUp" method="get">
                <input type="text" name="inp" class="form-control" id="exampleInputEmail1"  placeholder="Cari ID Buku" >
                
                <button type="submit" class="btn btn-primary">Search</button>
                
        </form>
        <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>No ISBN</th>
                      <th>NIS_NIP</th>
                      <th>Nama Anggota</th>
                      <th>tanggal pinjam</th>
                      <th>tanggal kembali</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($buku as $ag)     
                      <tr> 
                         <td>{{$loop->iteration}}</td>
                         <td>{{$ag->no_isbn}}</td> 
                         <td>{{$ag->nis_nip}}</td> 
                         <td>{{$ag->nama_anggota}}</td>
                         <td>{{$ag->tgl_pinjam}}</td>
                         <td>{{$ag->tgl_kembali}}</td>
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
