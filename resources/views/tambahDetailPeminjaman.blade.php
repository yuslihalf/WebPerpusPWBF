@extends('layout.mainlayout')

@section('page_title','adminLTE 3 | Blank page')

@section('title','Tambah Jenis Buku')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('conten')
<div class="card">
        <div class="card-header">
          <h3 class="card-title">Jenis Buku</h3>

          <div class="card-tools">
              
          </div>
        </div>
        <div class="card-body">
        <form  action="/peminjaman/insertDetailPeminjaman" method="post">
        @csrf
                <div class="card-body">
                  
                    <label for="exampleInputEmail1">ID Peminjaman</label>
                        <input type="text" name="id_peminjaman" class="form-control" id="exampleInputEmail1" value="{{ $peminjaman[0]->id_peminjaman }}" placeholder="ID Peminjaman " readonly>

                    <label for="exampleInputEmail1">Kode Buku</label>
                        <input type="text" name="kode_buku" class="form-control" id="exampleInputEmail1" placeholder="Kode Buku ">

                    <label for="exampleInputEmail1">Denda Perbuku</label>
                        <input type="text" name="denda_perbuku" class="form-control" id="exampleInputEmail1" placeholder="Denda ">

                    
                    <div class="form-group">
                    <label for="exampleInputEmail1">Status Peminjaman</label>    
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value="1" name="radio1">
                          <label class="form-check-label">Lunas</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="radio1" value="0" checked>
                          <label class="form-check-label">belum lunas</label>
                        </div>
                        
                    </div>  
                    <div class="form-group">
                    <label for="exampleInputEmail1">Status Verifikasi</label>    
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value="1" name="radio2">
                          <label class="form-check-label">Sudah Verifikasi</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="radio2" value="0" checked>
                          <label class="form-check-label">Belum Verifikasi</label>
                        </div>
                        
                    </div>  

    

                    
                  
                    


                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="btn1" value="0" class="btn btn-danger">simpan dan keluar</button>
                  <button type="submit" name="btn1" value="1" class="btn btn-primary">simpan dan tambah lagi</button>
                </div>
        </form>
        
        
        <!-- /.card-footer-->
</div>
      <!-- /.card -->
@endsection
