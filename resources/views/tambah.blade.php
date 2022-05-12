<!DOCTYPE html>
<html>
<head>
	<title>Tambah data</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h3>Data Siswa</h3>
 
	<a href="/"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/store" method="post">
		@csrf
		Nama <input type="text" name="nama" required="required"> <br/>
		Tanggal_lahir <input type="text" name="tanggal_lahir" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
		<button type="submit" name="Tambah">tambah data</button>
	</form>
 
</body>
</html>