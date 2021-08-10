<?php
// Import data berita dan simpan dalam array
// Selengkapnya dijelaskan pada file terkait
include('resources/config/import-data-berita.php');

// Variabel id menampung id dari parameter url
$id = isset($_GET['id']) ? $_GET['id'] : null;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita - Lembaga Sertifikasi BPPTIK</title>

    <?php
    include('resources/config/config.php');
    ?>
    <link rel="stylesheet" href="css/component/article.css">
    <link rel="stylesheet" href="css/page/berita.css">
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
                    <li class="breadcrumb-item active" aria-current="page">Berita</li>
                </ol>
            </nav>
            <article>
                <h2 id="intro" class="text-bold"><?php print(is_numeric($id) ? ($id < count($dataBerita) ? $dataBerita[intval($id)]['title'] : "Berita") : "Berita"); ?></h2>
                <hr>
                <?php

                /**
                 * Fungsi ini akan menampilkan daftar berita pada halaman web Berita
                 **/
                function displayBerita(array $dataBerita)
                {
                    for ($i = 0; $i < count($dataBerita); $i++) {
                        new Card(
                            $dataBerita[$i]['title'],
                            $dataBerita[$i]['date'],
                            $dataBerita[$i]['image'],
                            "?id=" . $i,
                            "horizontal"
                        );
                    }
                }

                // Jika $id berbentuk angka (ada parameter id di url) lakukan peintah dibawah.
                // Jka tidak, tampilkan semua data berita.
                if (is_numeric($id)) {
                    // Jika $id lebih kecil daripada indeks data berita, tampilkan berita dengan $id yang telah ditentukan.
                    // Jka tidak, tampilkan semua data berita.
                    if ($id < count($dataBerita)) {
                        include('berita/' . $id . '.php');
                    } else {
                        displayBerita($dataBerita);
                    }
                } else {
                    displayBerita($dataBerita);
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