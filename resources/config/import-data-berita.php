<?php
// Variabel berisi nama berkas berisi data berita
$berkasBerita = "resources/data/berita.json";

// Variabel berisi array kosong yang selanjutnya menampung data berita dari berkas.
$dataBerita = array();

// Mengambil data dari berkas dan mengkonversi data tersebut menjadi array PHP
// Variabel $dataJsonBerita berisi data dari berkas dalam bentuk array JSON.
// Variabel $dataBerita* berisi data pada $dataJsonBerita yang telah dikonversi menjadi array PHP.
$dataJsonBerita = file_get_contents($berkasBerita);
$dataBerita = json_decode($dataJsonBerita, true);
?>