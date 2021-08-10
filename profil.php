<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil LSP - Lembaga Sertifikasi BPPTIK</title>
    <?php
    include('resources/config/config.php');
    ?>
    <link rel="stylesheet" href="css/component/article.css">
    <link rel="stylesheet" href="css/page/profil.css">
</head>

<body>
    <?php
    pageHeader();
    ?>
    <main>
        <div id="content">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb reset-padding-margin">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profil LSP</li>
                </ol>
            </nav>
            <div class="logo">
                <img src="img/content/lsp-bpptik.png" alt="LSP BPPTIK">
                <img src="img/content/logo-bnsp.png" alt="Badan Nasional Sertifikasi Profesi">
            </div>
            <article id="profil">
                <h2 class="text-bold">Profil LSP</h2>
                <hr>
                <p>LSP BPPTIK adalah lembaga pendukung BNSP yang bertanggung jawab untuk melaksanakan uji kompetensi dan sertifikasi kompetensi di bidang TIK. LSP BPPTIK didirikan oleh Badan Penelitian dan Pengembangan Sumber Daya Manusia (Balitbang SDM) Kementerian Komunikasi dan Informatika (Kominfo) melalui Surat Keputusan (SK) Kepala Balitbang SDM Nomor 13 Tahun 2018 tanggal 1 Februari 2018 tentang Pembentukan Lembaga Sertifikasi Profesi Pihak Kesatu Balai Pelatihan dan Pengembangan Teknologi Informasi dan Komunikasi.</p>
                <p>LSP BPPTIK memiliki fungsi melaksanakan sertifikasi kompetensi uji kompetensi, dan sertifikasi bidang TIK, dengan tugas:</p>
                <ol type="a">
                    <li>menyusun dan mengembangkan skema sertifikasi</li>
                    <li>membuat perangkat asesmen dan uji kompetensi</li>
                    <li>menyediakan tenaga penguji (asesor)</li>
                    <li>melaksanakan uji kompetensi dan sertifikasi</li>
                    <li>melaksanakan surveilan pemeliharaan sertifikasi</li>
                    <li>menetapkan persyaratan, memverifikasi dan menetapkan Tempat Uji Kompetensi (TUK)</li>
                    <li>memelihara kinerja asesor dan TUK dan</li>
                    <li>mengembangkan pelayanan uji kompetensi dan sertifikasi.</li>
                </ol>
                <p>Dalam melaksanakan fungsi dan tugasnya, LSP BPPTIK mengacu pada pedoman yang dikeluarkan oleh BNSP. Dalam pedoman tersebut ditetapkan persyaratan yang harus dipatuhi untuk menjamin agar lembaga sertifikasi menjalankan sistem sertifikasi secara konsisten dan profesional, sehingga dapat diterima pada tingkat nasional yang relevan demi kepentingan pengembangan sumber daya manusia dalam aspek peningkatan kualitas dan perlindungan tenaga kerja.</p>
                <hr>
            </article>
            <article id="visi-misi">
                <h2 class="text-bold">Visi & Misi</h2>
                <p><strong>A. Visi</strong></p>
                <p>Menjadi Lembaga Sertifikasi Profesi bidang Teknologi Informasi dan Komunikasi (TIK) terbaik di tingkat nasional, regional, dan internasional.</p>
                <br>
                <p><strong>B. Misi</strong></p>
                <p>Menjadi Lembaga Sertifikasi Profesi bidang Teknologi Informasi dan Komunikasi (TIK) terbaik di tingkat nasional, regional, dan internasional.</p>
                <ol>
                    <li>Melaksanakan sertifikasi kompetensi kerja di bidang TIK yang independen dan profesional;</li>
                    <li>Menjamin mutu pelaksanaan sertifikasi kompetensi kerja sesuai dengan standar yang berlaku.</li>
                </ol>
                <br>
                <p><strong>C.Sasaran Mutu</strong></p>
                <p>LSP BPPTIK menetapkan sasaran mutu setiap tahun dengan melakukan pemantauan (monitoring) setiap semester.</p>
                <p>Sasaran mutu tersebut mencakup:</p>
                <ol>
                    <li>jumlah pengguna layanan;</li>
                    <li>tingkat kepuasan layanan;</li>
                    <li>jumlah banding;</li>
                    <li>lumlah keluhan; dan</li>
                    <li>capaian standar waktu proses sertifikasi.</li>
                </ol>
                <hr>
            </article>
            <article id="struktur-organisasi">
                <h2 class="text-bold">Struktur Organisasi LSP BPPTIK</h2>
                <?php
                pageImage("#", "img/content/struktur-organisasi.jpg", "Struktur Organisasi LSP BPPTIK", "Struktur Organisasi LSP BPPTIK");
                ?>

                <hr>
            </article>
        </div>
        <aside>
            <?php
            renderCustomCard();
            include('resources/config/import-data-berita.php');
            echo '<br><h4>Berita Lainnya</h4>';
            echo '<hr>';
            $count = count($dataBerita) > 3 ? 3 : count($dataBerita);
            for ($i = 0; $i < $count; $i++) {
                new Card(
                    $dataBerita[$i]['title'],
                    $dataBerita[$i]['date'],
                    $dataBerita[$i]['image'],
                    "berita.php?id=" . $i,
                    "horizontal"
                );
            }
            ?>
        </aside>
    </main>

    <?php
    pageFooter();
    ?>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/profil.js"></script>
</body>
</html>