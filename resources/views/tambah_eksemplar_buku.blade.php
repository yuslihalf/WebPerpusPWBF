@extends('layout.mainlayout')

@section('page_title','adminLTE 3 | Eksemplar Buku')

@section('title','Tambah Eksemplar buku')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('conten')
<div class="card">
        <div class="card-header">
          <h3 class="card-title">Eksemplar Buku</h3>

          
        </div>
        <div class="card-body">
        <form  action="/eksemplar_buku/insertData" method="post">
        @csrf
                <div class="card-body">
                  
                    <label for="exampleInputEmail1">Kode Buku</label>
                    <input type="text" name="kode_buku" class="form-control" id="exampleInputEmail1" placeholder="Kode Buku">
                  
                    <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>    
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value="1" name="radio1">
                          <label class="form-check-label">aktif</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="radio1" value="0" checked>
                          <label class="form-check-label">tidak aktif</label>
                        </div>
                        
                    </div> 

                    <div class="form-group">
                    <label for="exampleInputEmail1">Kondisi</label>    
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value="1" name="radio2">
                          <label class="form-check-label">Bagus</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="radio2" value="0" checked>
                          <label class="form-check-label">Jelek</label>
                        </div>
                        
                    </div> 

                    <label>Buku</label>
                        <select class="form-control" name="no_isbn">
                        @foreach($bk as $bhs)     
                        <option value="{{$bhs->no_isbn}}">
                        
                         {{$bhs->judul_buku}}
                         
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
