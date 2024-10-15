KELOMPOK 5
Nurahmatika
Nurul hidayati
Lara pebria
Desmilda 
Alan kurniawan
Ahmad yusuf

<?php
function hitungDiskon($jumlahBayar) {
    // Periksa kondisi untuk mendapatkan diskon
    if ($jumlahBayar >= 500000) {
        return 0.5; // Diskon 50%
    } elseif ($jumlahBayar >= 100000) {
        return 0.1; // Diskon 10%
    } elseif ($jumlahBayar >= 50000) {
        return 0.05; // Diskon 5%
    } else {
        return 0; // Tidak ada diskon
    }
}

// Contoh penggunaan fungsi
$jumlahPembayaran = 600000; // Ganti dengan jumlah pembayaran yang ingin Anda hitung
$diskon = hitungDiskon($jumlahPembayaran);

// Hitung total pembayaran setelah diskon
$totalBayar = $jumlahPembayaran - ($jumlahPembayaran * $diskon);

// Tampilkan hasil
echo "Jumlah pembayaran: Rp" . number_format($jumlahPembayaran) . "<br>";
echo "Diskon: " . ($diskon * 100) . "%<br>";
echo "Total pembayaran setelah diskon: Rp" . number_format($totalBayar);

echo "<br><br>";

// Soal a) Menggunakan while
echo "Soal a) Menggunakan while:<br>";
$angka = 1;
while ($angka <= 16) {
    echo $angka . " ";
    $angka += 5; // Menambah 5 pada setiap iterasi
}
echo "<br>";

// Soal b) Menggunakan while
echo "Soal b) Menggunakan while:<br>";
for ($i = 10; $i >= 0; $i--) {
    echo $i . " ";
}
echo "<br>";

// Soal c) Menggunakan do-while
echo "Soal c) Menggunakan do-while:<br>";
$angka = 30;
do {
    echo $angka . " ";
    $angka -= 3;
} while ($angka >= 0);
echo "<br>";

// Soal d) Menggunakan do-while
echo "Soal d) Menggunakan do-while:<br>";
$angka = 10;
do {
    echo $angka . " ";
    $angka -= 2;
} while ($angka >= 0);

