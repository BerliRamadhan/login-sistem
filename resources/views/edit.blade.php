<!DOCTYPE html>
<html>
<head>
	<title>Edit data</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h3>Edit Siswa</h3>
 
	<a href="/siswa"> Kembali</a>
	
	<br/>
	<br/>
 
	
	<form action="/update" method="post">
		@csrf
		<input type="hidden" name="id" value="{{ $siswa->id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $siswa->nama }}"> <br/>
		tanggal_lahir <input type="text" required="required" name="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}"> <br/>
		Alamat <input type="text" required="required" name="alamat" value="{{ $siswa->alamat }}"> <br/>
		<button type="submit" name="Edit">simpan data</button>
	</form>

		
 
</body>
</html>


