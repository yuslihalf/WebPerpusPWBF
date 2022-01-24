@extends('layout.mainlayout')

@section('page_title','adminLTE 3 | Buku')

@section('title','Tambah buku')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('conten')
<div class="card">
        <div class="card-header">
          <h3 class="card-title">Buku</h3>

          
        </div>
        <div class="card-body">
        <form  action="/buku/insertData" method="post">
        @csrf
                <div class="card-body">
                  
                    <label for="exampleInputEmail1">No ISBN</label>
                    <input type="text" name="no_isbn" class="form-control" id="exampleInputEmail1" placeholder="NO ISBN">
                  
                    
                    <label>Judul Buku</label>
                    <textarea name = "judul" class="form-control" rows="3" maxlenght="100" placeholder="Judul Buku"></textarea>
                         
                    <label >Tahun Terbit</label>
                    <input type="text" name="tahun" class="form-control" maxlenght="4" id="exampleInputEmail1" placeholder="Tahun Terbit">
                  
                    <label>Penulis</label>
                    <textarea name = "penulis" class="form-control" rows="3" maxlenght="100" placeholder="Penulis"></textarea>
                     
                    <label >Cetakan ke</label>
                    <input type="text" name="cetakan" class="form-control" maxlenght="3" id="exampleInputEmail1" placeholder="Cetakan Ke">

                    <label >Harga</label>
                    <input type="text" name="harga" class="form-control" maxlenght="11" id="exampleInputEmail1" placeholder="Harga">

                    <label >Jumlah eksemplar</label>
                    <input type="text" name="jml_eksemplar" class="form-control" maxlenght="4" id="exampleInputEmail1" placeholder="Jumlah">
                  
                    <div class="form-group">
                    <label for="exampleInputEmail1">Kategori Buku</label>    
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value="1" name="radio1">
                          <label class="form-check-label">Fiksi</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="radio1" value="0" checked>
                          <label class="form-check-label">Non Fiksi</label>
                        </div>
                        
                    </div> 

                    <label>Jenis Buku</label>
                        <select class="form-control" name="id_jb">
                        @foreach($jb as $jb)     
                        <option value="{{$jb->id_jb}}">
                        
                         {{$jb->nama_jb}}
                         
                        </option>
                        @endforeach
                         
                        </select>

                    <label>Penerbit</label>
                        <select class="form-control" name="id_penerbit">
                        @foreach($pnb as $pnb)     
                        <option value="{{$pnb->id_penerbit}}">
                        
                         {{$pnb->nama_penerbit}}
                         
                        </option>
                        @endforeach
                         
                        </select>
                    
                    <label>Bahasa</label>
                        <select class="form-control" name="id_bhs">
                        @foreach($bhs as $bhs)     
                        <option value="{{$bhs->id_bhs}}">
                        
                         {{$bhs->nama_bhs}}
                         
                        </option>
                        @endforeach
                         
                        </select>
                    
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
