<?php 
// $_GET
$mahasiswa = [
	[	
		"nim" => "120140048",
		"nama" => "Fitra Ilyasa",
		"email" => "fitra.120140048@student.itera.ac.id",
		"jurusan" => "Teknik Informatika",
		"gambar" => "fitrailyasa.jpg"
	],
	[
		"nama" => "Joker", 
		"nim" => "123456",
		"email" => "ndejoker12@gmail.com",
		"jurusan" => "IT",
		"gambar" => "joker.jpg"
	]
];
?>
<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
	<li>
		<a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
	</li>
<?php endforeach; ?>
</ul>


</body>
</html>