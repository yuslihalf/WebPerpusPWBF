@extends('layout.mainlayout')

@section('page_title','adminLTE 3 | ASAL')

@section('title','Asal')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('conten')
<div class="card">
        <div class="card-header">
          <h3 class="card-title"> Data Asal</h3>

          <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
        <a class="btn btn-primary btn-block" href="/asal/tambahAsal" method="GET">Tambah Data Asal</a>
        <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>ID</th>
                      <th>Nama </th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($asal as $jb)     
                      <tr> 
                         <td>{{$loop->iteration}}</td>
                         <td>{{$jb->id_asal}}</td> 
                         <td>{{$jb->asal}}</td>
                         
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
