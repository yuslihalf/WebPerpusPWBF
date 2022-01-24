@extends('layout.mainlayout')

@section('page_title','adminLTE 3 | Blank page')

@section('title','Tambah Penerimaan buku')

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
        <form  action="/penerimaan/insertData" method="post">
        @csrf
                <div class="card-body">
                  
                    <label for="exampleInputEmail1">ID Penerimaan</label>
                    <input type="text" name="id_penerimaan" class="form-control" id="exampleInputEmail1" placeholder="ID Penerimaan">
                  
                    
                    <label>Keterangan</label>
                    <textarea name = "keterangan" class="form-control" rows="3" maxlenght="100" placeholder="Enter ..."></textarea>
                         
                    

                    <label for="exampleInputEmail1">Jumlah Buku</label>
                    <input type="text" name="jml_buku_diterima" class="form-control" id="exampleInputEmail1" placeholder="Jumlah ">
                 
                    <label for="exampleInputEmail1">NIP Pegawai</label>
                    <input type="text" name="nip" class="form-control" id="exampleInputEmail1" value="{{ $pegawai->nip }}" placeholder="NIP" readonly>
                  
                    
                    <label>Asal</label>
                        <select class="form-control" name="id_asal">
                        @foreach($asal as $asl)     
                        <option value="{{$asl->id_asal}}">
                        
                        {{$asl->asal}}
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
