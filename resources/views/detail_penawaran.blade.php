<!DOCTYPE html> 
<head> 
    <title>Halaman Detail Penawaran</title> 
</head> 
<body> 
    <h1>Data Detail Penawaran</h1> 
    <br> 
    <br> 
    <br> 
    <table border="1" width="100%"> 
    <tr> 
        <th>nomor</th>
        <th>id penawaran</th> 
        <th>Nama calon konsumen</th>
        <th>Status Penawaran</th>
    </tr> 
    @foreach($detail_penawaran as $dtl)     
        <tr> 
            <td>{{$loop->iteration}}</td>
            <td>{{$dtl->id_penawaran}}</td> 
            <td>{{$dtl->calon_konsumen->nama_calon_konsumen}}</td> 
            <td>{{$dtl->status_penawaran}}</td>
        </tr> 
    @endforeach 
    </table> 
</body> 
</html> 