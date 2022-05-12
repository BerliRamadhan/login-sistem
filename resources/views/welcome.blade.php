<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Berhasil Login</title>
</head>
<body>
    <div class="container-logout">
        
            <h1>Selamat Datang!</h1>
             
            <div class="input-group">
                <form action="/logout"method="post">
                    @csrf
                <button type="submit" class="btn">Logout</button>
                </form>
            </div>
        </form>
        <h3>Data Siswa</h3>
 
	
	<br/>
	<br/>
	<a href="/create"> + Tambah Siswa Baru</a>
 
	<table border="3">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Tanggal lahir</th>
			<th>Opsi</th>
		</tr>
		@foreach($siswas as $siswa)
		<tr>
			<td>{{ $siswa->nama }}</td>
			<td>{{ $siswa->alamat }}</td>
			<td>{{ $siswa->tanggal_lahir }}</td>
			<td>
				<a href="/edit/{{ $siswa->id}}">Edit</a>
				
				<a href="/hapus/{{ $siswa->id}}" onclick="return confirm('apakah kamu yakin?')">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
</body>
</html>