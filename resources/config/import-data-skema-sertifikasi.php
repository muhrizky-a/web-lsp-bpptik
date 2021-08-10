<?php
// Variabel berisi nama berkas berisi data berita
$berkasSkema = "resources/data/skema-sertifikasi.json";

// Variabel berisi array kosong yang selanjutnya menampung data berita dari berkas.
$dataSkema = array();

// Mengambil data dari berkas dan mengkonversi data tersebut menjadi array PHP
// Variabel $dataJsonSkema berisi data dari berkas dalam bentuk array JSON.
// Variabel $dataSkema berisi data pada $dataJsonSkema yang telah dikonversi menjadi array PHP.
$dataJsonSkema = file_get_contents($berkasSkema);
$dataSkema = json_decode($dataJsonSkema, true);
?>