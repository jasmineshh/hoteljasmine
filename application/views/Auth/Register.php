<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
</head>
<body>

	<form method="POST" action="<?= base_url('/Auth/addusers') ?>">
	<input type="text" name="username" 		placeholder="Masukan Username">
	<input type="text" name="Nama" 			placeholder="Masukan Nama Lengkap Anda">
	<input type="text" name="Jenis_Kelamin" placeholder="Masukan Jenis Kelamin">
	<input type="date" name="tgllahir" 		placeholder="Masukan Tanggal Lahir">
	<input type="text" name="nowa" 			placeholder="Masukan Kontak Whatsapp">
	<input type="password" name="password"	placeholder="Masukan Sandi">
	<button type="submit">register</button>
</form>
</body>
</html>