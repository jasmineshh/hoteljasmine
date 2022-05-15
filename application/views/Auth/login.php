<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
</head>
<body>

	<form method="POST" action="<?= base_url('/Auth/cekusers') ?>">
	<input type="text" name="username" placeholder="Masukan Username">
	<input type="password" name="password" placeholder="Masukan Password">
	<button type="submit">Login</button>
</body>
</html>