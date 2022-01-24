<!DOCTYPE html>  
<head>  
    <title>Update Data Pegawai</title>  
</head>  
<body>  
    <h1>Update Data Pegawai</h1>  
     
    <form action="/pegawai/updatePegawai" method="post">  
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(
) ?>">  
        nip : <input type="text" name="nip"  
            value ="{{ $pegawai[0]->nip }}" readonly><br> 
        Nama Pegawai : <input type="text" name="nama_pegawai"  
            value="{{ $pegawai[0]->nama_pegawai }}"><br>
        Username  : <input type="text" name="username"  
            value="{{ $pegawai[0]->username }}"><br>
        Password  : <input type="text" name="password"  
            value="{{ $pegawai[0]->password }}"><br>     
        Status  : <input type="text" name="status"  
            value="{{ $pegawai[0]->status }}"><br>  
        <input type="submit" value="Update">  
    </form>  
      
</body>  
</html> 