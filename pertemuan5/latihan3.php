<?php 
$mahasiswa = [
	["Fitra Ilyasa", "12014048", "Teknik Informatika", "fitra.120140048@student.itera.ac.id"],
	["Nde", "123456789", "OP Warnet", "fitra.ilyasa12@gmail.com"],
	["Joker", "123456", "IT", "ndejoker12@gmail.com"]
];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
	<li>Nama : <?= $mhs[0]; ?></li>
	<li>NIM : <?= $mhs[1]; ?></li>
	<li>Jurusan : <?= $mhs[2]; ?></li>
	<li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>





</body>
</html>