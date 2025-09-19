<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilaiSiswa);

$nilaiTersisa = array_slice($nilaiSiswa, 2, count($nilaiSiswa) - 4);
$totalNilai = array_sum($nilaiTersisa);
$rataRata = $totalNilai / count($nilaiTersisa);

echo "Daftar nilai siswa: " . implode(", ", $nilaiSiswa) . "<br>";
echo "Nilai yang dihitung (setelah mengabaikan 2 tertinggi & 2 terendah): " . implode(", ", $nilaiTersisa) . "<br>";
echo "Total nilai setelah diabaikan: $totalNilai <br>";
echo "Rata-rata nilai: $rataRata <br>";
?>