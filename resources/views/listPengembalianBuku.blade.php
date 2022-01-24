@extends('layout.mainlayout')

@section('page_title','adminLTE 3 | Blank page')

@section('title','Pengembalian')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('conten')
<div class="card">
        <div class="card-header">
          <h3 class="card-title">Pengembalian</h3>

          <div class="card-tools">
              
          </div>
        </div>
        <div class="card-body">
        
        <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>ID Peminjaman</th>
                      <th>NIS_NIP</th>
                      <th>kode buku</th>
                      <th>judul buku</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($peminjaman as $pg)     
                      <tr> 
                         <td>{{$loop->iteration}}</td>
                         <td>{{$pg->id_peminjaman}}</td> 
                         <td>{{$pg->nis_nip}}</td>
                         <td>{{$pg->kode_buku}}</td>
                         <td>{{$pg->judul_buku}}</td>
                         <td><a href='/pengembalian/insertPengembalian/{{$pg->id_peminjaman}}/{{$pg->kode_buku}}/{{$pg->nis_nip}}'>
                               <button> kembalikan buku </button> 
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
