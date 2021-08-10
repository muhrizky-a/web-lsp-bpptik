//import "../vendor/components/jquery/jquery.js";

/**
Script dibawah akan menebalkan tulisan header dari halamam yang sedang dikunjungi, menandakan halaman yang sedang aktif.
Misalnya jika mengunjungi halaman berita, maka navigasi "Berita" pada header akan aktif.
**/

// Hapus class "active" di semua navigasi pada header
$(".nav-link").removeClass("active");

// Cek elemen navigasi satu-persatu
$(".nav-link").each(function() {

    // Jika url halaman yang dikunjungi sekarang sesuai dengan url tujuan navigasi (tanpa #), maka navigasi akan aktif.
    if ($(location).attr("href").includes($(this).attr("href").split("#").pop())) {
        $(this).addClass("active");
    }
});