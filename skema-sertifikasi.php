<?php
// Import data skema sertifikasi dan simpan dalam array
// Selengkapnya dijelaskan pada file terkait
include('resources/config/import-data-skema-sertifikasi.php');

// Variabel id menampung id dari parameter url
$id = isset($_GET['id']) ? $_GET['id'] : null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skema Sertifikasi - Lembaga Sertifikasi BPPTIK</title>

    <?php
    include('resources/config/config.php');
    ?>
    <link rel="stylesheet" href="css/component/article.css">
    <link rel="stylesheet" href="css/page/skema.css">
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
                    <li class="breadcrumb-item active" aria-current="page">Skema Sertifikasi</li>
                </ol>
            </nav>
            <article>
                <h2 id="intro" class="text-bold"><?php print(is_numeric($id) ? ($id < count($dataSkema) ? $dataSkema[intval($id)]['skema'] : "Skema Sertifikasi") : "Skema Sertifikasi"); ?></h2>
                <hr>

                <?php
                /**
                 * Fungsi ini akan menampilkan daftar berita pada halaman web Berita
                 **/

                function displaySemuaSkema(array $dataSkema)
                {
                    echo '
                        <table class="table table-striped table-bordered border-dark" border="2" cellpadding="10">
                            <tr class="table-dark">
                                <th>No.</th>
                                <th>Skema Sertifikasi</th>
                            </tr>';
                    $j = 1;
                    for ($i = 0; $i < count($dataSkema); $i++) {
                        echo '
                            <tr>
                                <td>' . $j++ . '</td>
                                <td><a href=skema-sertifikasi.php?id=' . $i . '>' . $dataSkema[$i]['skema'] . '</a></td>
                            </tr>';
                    }
                    echo '</table>';
                }

                /**
                 * Fungsi ini akan menampilkan daftar berita pada halaman web Berita
                 **/
                function displaySatuSkema(array $data)
                {
                    echo '<h3 class="text-bold">Kemasan Kompetensi</h2>';
                    echo '<h3 class="text-bold">Deskripsi</h2>';
                    echo '<p>' . $data['deskripsi'] . '</p>';
                    echo '<h3 class="text-bold">B. Rincian Unit Kompetensi</h2>';
                    echo '<p>Rincian Unit Kompetensi atau Uraian Tugas</p>';
                    echo '
                        <table class="table table-striped table-bordered border-dark" border="2" cellpadding="10">
                            <tr class="table-dark">
                                <th>No.</th>
                                <th>Kode Unit</th>
                                <th>Nama Unit</th>
                            </tr>';
                    $j = 1;
                    for ($i = 0; $i < count($data['rincian']); $i++) {
                        echo '
                            <tr>
                                <td>' . $j++ . '</td>
                                <td>' . $data['rincian'][$i]['kode-unit'] . '</td>
                                <td>' . $data['rincian'][$i]['judul-unit'] . '</td>
                            </tr>';
                    }
                    echo '</table>';
                    echo '<h3 class="text-bold">C. Persyaratan Dasar Pemohon Sertifikasi</h2>';
                    echo '<ol>
                            <li>Aparatur Sipil Negara (ASN) yang telah menyelesaikan Pelatihan Teknis yang ditetapkan oleh BPPTIK; atau</li>
                            <li>Masyarakat yang telah menyelesaikan Pelatihan Kerja yang ditetapkan oleh BPPTIK.</li>
                        </ol>';
                }
                // Jika $id berbentuk angka (ada parameter id di url) lakukan peintah dibawah.
                // Jka tidak, tampilkan semua data berita.
                if (is_numeric($id)) {
                    // Jika $id lebih kecil daripada indeks data berita, tampilkan berita dengan $id yang telah ditentukan.
                    // Jka tidak, tampilkan semua data berita.
                    if ($id < count($dataSkema)) {
                        displaySatuSkema($dataSkema[$id]);
                    } else {
                        displaySemuaSkema($dataSkema);
                    }
                } else {
                    displaySemuaSkema($dataSkema);
                }
                ?>
            </article>
        </div>
        <aside>
            <?php
            renderCustomCard();
            ?>
        </aside>
    </main>
    <?php
    pageFooter();
    ?>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>