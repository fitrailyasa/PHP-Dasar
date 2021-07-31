<?php 
// $mahasiswa = [
// ["Fitra Ilyasa", "120140048", "fitra.120140048@student.itera.ac.id", "Teknik Informatika"],
// ["123456", "Joker", "ndejoker12@gmail.com", "IT"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<?php foreach( $mahasiswa as $mhs ) : ?>
		<ul>
			<li>
				<img src="img/<?= $mhs["gambar"]; ?>">
			</li>
			<li>Nama : <?= $mhs["nama"]; ?></li>
			<li>NIM : <?= $mhs["nim"]; ?></li>
			<li>Jurusan : <?= $mhs["jurusan"]; ?></li>
			<li>Email : <?= $mhs["email"]; ?></li>
		</ul>
	<?php endforeach; ?>




</body>
</html>