@extends('layout.mainlayout')

@section('page_title','adminLTE 3 | Blank page')

@section('title','Peminjaman')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('conten')
<div class="card">
        <div class="card-header">
          <h3 class="card-title">Peminjaman</h3>

          <div class="card-tools">
              
          </div>
        </div>
        <div class="card-body">
        <form  action="/peminjaman/cariAnggota" method="get">
                <input type="text" name="nama_anggota" class="form-control" id="exampleInputEmail1"  placeholder="Cari Nama Anggota" >
                
                <button type="submit" class="btn btn-primary">Search</button>
                
        </form>
        <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>NIS_NIP</th>
                      <th>Nama Anggota</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($anggota as $ag)     
                      <tr> 
                         <td>{{$loop->iteration}}</td>
                         <td>{{$ag->nis_nip}}</td> 
                         <td>{{$ag->nama_anggota}}</td>
                         <td><a href='/peminjaman/tambahPeminjaman/{{ $ag->nis_nip }}'>
                               <button> pinjam buku </button> 
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
