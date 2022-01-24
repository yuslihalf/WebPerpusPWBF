<!DOCTYPE html> 
<head> 
    <title>Halaman Calon Konsumen</title> 
</head> 
<body> 
    <h1>Data Calon Konsumen</h1> 
    <br> 
    <br> 
    <br> 
    <table border="1" width="100%"> 
    <tr> 
        <th>nomor</th>
        <th>id calon konsumen</th> 
        <th>Nama</th>
        <th>Negara</th>
    </tr> 
    @foreach($calon_konsumen as $cln)     
        <tr> 
            <td>{{$loop->iteration}}</td>
            <td>{{$cln->id_calon_konsumen}}</td> 
            <td>{{$cln->nama_calon_konsumen}}</td> 
            <td>{{$cln->negara->nama_negara}}</td>
        </tr> 
    @endforeach 
    </table> 
</body> 
</html> 