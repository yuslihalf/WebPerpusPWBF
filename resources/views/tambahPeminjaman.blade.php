@extends('layout.mainlayout')

@section('page_title','adminLTE 3 | Blank page')

@section('title','Tambah Peminjaman')

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
        <form  action="/peminjaman/insertData" method="post">
        @csrf
                <div class="card-body">
                  
                    <label for="exampleInputEmail1">ID Peminjaman</label>
                        <input type="text" name="id_peminjaman" class="form-control" id="exampleInputEmail1" placeholder="ID Peminjaman ">

                    <label for="exampleInputEmail1">NIS NIP</label>
                    <input type="text" name="nis_nip" class="form-control" id="exampleInputEmail1" value="{{ $data[0]->nis_nip }}" placeholder="ID Jenis Buku" readonly>
                  
                    <label for="exampleInputEmail1">Nama Anggota</label>
                    <input type="text" name="nama_anggota" class="form-control" id="exampleInputEmail1" value="{{ $data[0]->nama_anggota }}" placeholder="Nama" readonly>
                 
                    <label for="exampleInputEmail1">NIP Pegawai</label>
                    <input type="text" name="nip" class="form-control" id="exampleInputEmail1" value="{{ $pegawai->nip }}" placeholder="NIP" readonly>
                  
                   
                    <label for="exampleInputEmail1">Jumlah Buku</label>
                        <input type="text" name="jml_buku" class="form-control" id="exampleInputEmail1" placeholder="Jumlah ">



                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
        </form>
        
        
        <!-- /.card-footer-->
</div>
      <!-- /.card -->
@endsection
