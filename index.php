<?php
// Import data skema sertifikasi dan simpan dalam array
// Selengkapnya dijelaskan pada file terkait
include('resources/config/import-data-skema-sertifikasi.php');

// Import data berita dan simpan dalam array
// Selengkapnya dijelaskan pada file terkait
include('resources/config/import-data-berita.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lembaga Sertifikasi BPPTIK</title>

    <?php
    include('resources/config/config.php');
    ?>

    <link rel="stylesheet" href="css/page/homepage.css">
</head>

<body>
    <?php
    pageHeader();
    ?>
    <div id="banner">
        <img src="img/content/banner.png" width="100%" alt="LSP BPPTIK">
    </div>
    <main>
        <div id="content">
            <div id="skema">
                <hr>
                <h2>Daftar Skema Sertifikasi</h2>
                <div class="container-fluid">
                    <div class="row row-cols-auto">
                        <?php
                        for ($i = 0; $i < count($dataSkema); $i++) {
                            echo '<div class="col bg-blue">
                                <a href=skema-sertifikasi.php?id=' . $i . ' class="text-white text-bold">' . str_replace("Skema Sertifikasi Okupasi ", "", $dataSkema[$i]['skema']) . '</a>
                            </div>';
                        }
                        ?>

                    </div>
                </div>
            </div>

            <div id="news">
                <hr>
                <h2>Berita</h2>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    <?php
                    for ($i = 0; $i < count($dataBerita); $i++) {
                        new Card(
                            $dataBerita[$i]['title'],
                            $dataBerita[$i]['date'],
                            $dataBerita[$i]['image'],
                            "berita.php?id=".$i,
                            "grid"
                        );
                    }
                    ?>

                </div>
            </div>

        </div>
    </main>
    <?php
    pageFooter();
    ?>
</body>

</html>