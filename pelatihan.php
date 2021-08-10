<?php
require 'vendor/autoload.php';

// Menggunakan Class
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Variabel berisi nama berkas berisi data pelatihan untuk dibaca 
$berkasPelatihanTeknis = "resources/data/pelatihan-teknis.json";
$berkasPelatihanKerja = "resources/data/pelatihan-kerja.json";

// Variabel berisi array kosong yang selanjutnya menampung data pelatihan dari berkas.
$dataPelatihanTeknis = array();
$dataPelatihanKerja = array();

// Mengambil data dari berkas dan mengkonversi data tersebut menjadi array PHP
// Variabel $dataJson* berisi data dari berkas dalam bentuk array JSON.
// Variabel $dataPelatihan* berisi data pada $dataJson* yang telah dikonversi menjadi array PHP.
$dataJsonPelatihanTeknis = file_get_contents($berkasPelatihanTeknis);
$dataJsonPelatihanKerja = file_get_contents($berkasPelatihanKerja);


$dataPelatihanTeknis = json_decode($dataJsonPelatihanTeknis, true);
$dataPelatihanKerja = json_decode($dataJsonPelatihanKerja, true);


/**
 * Fungsi ini akan melakukan export data pelatihan yang dimasukkan ke parameter dalam bentuk file excel / .xlsx
 * Fungsi ini membutuhkan 3 parameter: 
 * @param array $dataPelatihan berisi array data pelatihan
 * @param string $postAttr berisi atribut pada $_POST
 * @param string $excelName berisi nama output excel
 **/
function exportToXlsx(array $dataPelatihan, string $postAttr, string $excelName)
{
    // Export Daftar Pelatihan Teknis dalam bentuk .xlsx
    if (isset($_POST[$postAttr])) {
        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Nama Program Pelatihan');
        $sheet->setCellValue('C1', 'Kode');
        $sheet->setCellValue('D1', (str_contains($postAttr, 'Teknis')) ? 'Jenis' : 'Pengemasan');
        $sheet->setCellValue('E1', 'Jenjang');
        $sheet->setCellValue('F1', 'Durasi (JP)');

        $no = 1;
        $j = 2;
        for ($i = 0; $i < count($dataPelatihan); $i++) {
            $sheet->setCellValue('A' . $j, $no);
            $sheet->setCellValue('B' . $j, $dataPelatihan[$i]['pelatihan']);
            $sheet->setCellValue('C' . $j, $dataPelatihan[$i]['kode']);
            $sheet->setCellValue('D' . $j, $dataPelatihan[$i][ (str_contains($postAttr, 'teknis')) ? 'jenis' : 'pengemasan' ]);
            $sheet->setCellValue('E' . $j, $dataPelatihan[$i]['jenjang']);
            $sheet->setCellValue('F' . $j, $dataPelatihan[$i]['durasi']);
            $no++;
            $j++;
        }

        $writer = new Xlsx($spreadsheet);
        $writer->save($excelName);
        $loc = str_replace('index.php', $excelName, $actual_link);
        header('location:', $loc);
    }
}

exportToXlsx($dataPelatihanTeknis, 'export-pelatihan-teknis', 'Daftar-Pelatihan-Teknis-BPPTIK.xlsx');
exportToXlsx($dataPelatihanKerja, 'export-pelatihan-kerja', 'Daftar-Pelatihan-Kerja-BPPTIK.xlsx');


if (!isset($_SESSION)) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['postdata'] = $_POST;
    unset($_POST);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pelatihan - Lembaga Sertifikasi BPPTIK</title>

    <?php
    include('resources/config/config.php');
    ?>
    <link rel="stylesheet" href="css/component/article.css">
    <link rel="stylesheet" href="css/component/article-without-sidebar.css">
    <link rel="stylesheet" href="css/page/pelatihan.css">
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
                    <li class="breadcrumb-item active" aria-current="page">Pelatihan</li>
                </ol>
            </nav>
            <article>
                <h2>Pelatihan</h2>
                <hr>
                <p>Program Pelatihan yang tersedia di BPPTIK terbagi 2, yaitu Pelatihan Teknis dan Pelatihan Kerja. Pelatihan Teknis ditujukan untuk Aparatur Sipil Negara (ASN), yang mengacu kepada PP Nomor 11 Tahun 2017 tentang Manajemen PNS dan PP Nomor 49 Tahun 2018 tentang Manajemen PPPK. Sedangkan Pelatihan Kerja ditujukan untuk masyarakat umum, yang mengacu kepada PP Nomor 31 Tahun 2006 tentang Sistem Pelatihan Kerja Nasional. Daftar Program Pelatihan yang tersedia adalah sbb:</p>
                <div class="tabel-pelatihan">
                    <div class="info-pelatihan">
                        <h4>Pelatihan Teknis Bidang TIK:</h4>
                        <form id="exportPelatihanTeknis" method="POST">
                            <a target="blank" type="submit" class="export-pelatihan-teknis text-bold">
                                <i class="fa fa-file-excel-o" aria-hidden="true"></i>
                                Excel
                                <input type="hidden" name="export-pelatihan-teknis">
                            </a>
                        </form>
                    </div>

                    <table class="table table-striped table-bordered border-primary" border="2" cellpadding="10">
                        <tr class="table-danger">
                            <th>No.</th>
                            <th>Nama Program Pelatihan</th>
                            <th>Kode</th>
                            <th>Jenis</th>
                            <th>Jenjang</th>
                            <th>Durasi (JP)</th>
                        </tr>
                        <?php
                        $no = 1;
                        foreach ($dataPelatihanTeknis as $data) {
                            // Tampilkan semua data karyawan dari berkas
                            echo '<tr>
                                <td>' . $no++ . '</td>
                                <td>' . $data["pelatihan"] . '</td>
                                <td>' . $data["kode"] . '</td>
                                <td>' . $data["jenis"] . '</td>
                                <td>' . $data["jenjang"] . '</td>
                                <td>' . $data["durasi"] . '</td>
                            </tr>';
                        }
                        ?>
                    </table>
                </div>
                <div class="tabel-pelatihan">
                    <div class="info-pelatihan">
                        <h4>Pelatihan Kerja Bidang TIK:</h4>
                        <form id="exportPelatihanKerja" method="POST">
                            <a target="blank" type="submit" class="export-pelatihan-kerja text-bold">
                                <i class="fa fa-file-excel-o" aria-hidden="true"></i>
                                Excel
                                <input type="hidden" name="export-pelatihan-kerja">
                            </a>
                        </form>
                    </div>

                    <table class="table table-striped table-bordered border-dark" border="2" cellpadding="10">
                        <tr class="table-dark">
                            <th>No.</th>
                            <th>Nama Program Pelatihan</th>
                            <th>Kode</th>
                            <th>Pengemasan</th>
                            <th>Jenjang KKNI</th>
                            <th>Durasi (JP)</th>
                        </tr>
                        <?php
                        $no = 1;
                        foreach ($dataPelatihanKerja as $data) {
                            // Tampilkan semua data karyawan dari berkas
                            echo '<tr>
                                <td>' . $no++ . '</td>
                                <td>' . $data["pelatihan"] . '</td>
                                <td>' . $data["kode"] . '</td>
                                <td>' . $data["pengemasan"] . '</td>
                                <td>' . $data["jenjangKKNI"] . '</td>
                                <td>' . $data["durasi"] . '</td>
                            </tr>';
                        }
                        ?>
                    </table>
                </div>
                <hr>
            </article>
        </div>
    </main>

    <?php
    pageFooter();
    ?>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/pelatihan.js"></script>
</body>
</html>