<?php

/**
 * Ini adalah class Card yang jika diinstansiasi akan membuat card yang secara visual 
 * menampilkan judul, subtitle, dan gambar dari sebuah berita atau artikel.
 * Class Card membutuhkan 4 parameter: 
 * @param string $title berisi judul berita pada card
 * @param string $date berisi tanggal berita diposting pada card
 * @param string $image berisi gambar yang mewakili berita pada card
 * @param string $url berisi link menuju halaman berita
 * @param string $cardType berisi tipe card ( grid / horizontal )
 * @return string yang mengembalikan elemen Card
 **/
class Card
{
    private $title;
    private $date;
    private $image;
    private $alt;
    private $url;
    private $cardType;

    public function __construct(
        string $title,
        string $date,
        string $image,
        string $url,
        string $cardType
    ) {
        $this->title = $title;
        $this->date = $date;
        $this->image = $image;
        $this->alt = $title;
        $this->url = $url;
        $this->cardType = $cardType;

        switch ($cardType) {
            case "grid":
                $this->renderGridCard();
                break;
            case "horizontal":
                $this->renderHorizontalCard();
                break;
        }
    }

    /**
     * Fungsi ini menampilkan card dalam bentuk grid dengan gambar di sisi atas dan keterangan di sisi bawah
     **/
    public function renderGridCard()
    {
        print('
            <div class="col">
                <div class="card h-100">
                    <a href="' . $this->url . '" title="' . $this->title . '">
                        <img src="' . $this->image . '" class="card-img-top featured-image" alt="' . $this->alt . '">
                    </a>
                    <div class="card-body bg-red">
                        <a href="' . $this->url . '" title="' . $this->title . '">
                            <h6 class="card-title">' . $this->title . '</h6>
                        </a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">' . $this->date . '</small>
                    </div>
                </div>
            </div>
        ');
    }

    /**
     * Fungsi ini menampilkan card dalam bentuk horizontal dengan gambar di sisi kiri dan keterangan di sisi kanan
     **/
    function renderHorizontalCard()
    {
        print('
            <div class="card mb-3 h-100">
                <div class="row g-0">
                    <div class="col-md-4">
                        <a href="' . $this->url . '" title="' . $this->title . '">
                            <img src="' . $this->image . '" class="card-img-top featured-image" alt="' . $this->alt . '">
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body bg-blue">
                            <a href="' . $this->url . '" title="' . $this->title . '">
                                <h6 class="card-title">' . $this->title . '</h6>
                            </a>
                            <p class="card-text">' . $this->date . '</p>
                        </div>
                    </div>
                </div>
            </div>
        ');
    }
}

/**
     * Fungsi ini menampilkan custom card berisi link menuju daftar pelatihan, situs pendaftaran pelatihan,  dan situs BNSP
     **/
    function renderCustomCard()
    {
        echo '
        <div id="news">
            <div id="#sidebar-news" class="row row-cols-1 row-cols-md-2 row-cols-lg-1 g-4">
                <div class="mb-3 sidebar-nav h-100">';
                pageImage("pelatihan.php", "img/content/pelatihan-teknis-bidang-TIK.webp", "Pelatihan Teknis Bidang TIK");
                echo '</div>';
                echo '<div class="mb-3 sidebar-nav h-100">';
                pageImage("http://202.89.117.140/", "img/content/pelatihan-dan-sertifikasi-SKKNI-gratis.webp", "Pelatihan dan Sertifikasi SKKNI Gratis");
                echo '</div>';
                echo '<div class="mb-3 sidebar-nav h-100">';
                pageImage("http://bnsp.go.id", "img/content/logo-bnsp.png", "BNSP");
                echo '</div>
            </div>
        </div>';
    }