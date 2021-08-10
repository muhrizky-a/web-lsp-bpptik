<?php

/**
 * Fungsi ini berguna untuk menampilkan gambar beserta caption (jika ada).
 * Fungsi ini membutuhkan 3 - 4 parameter.
 * @param string $url berisi url ketika gambar diklik
 * @param string $imageUrl berisi url gambar yang ingin ditampilkan
 * @param string $alt berisi tulisan pengganti jika gambar tidak dapat ditampilkan
 * @param string $caption berisi caption sebuah gambar (opsional)
 */
function pageImage(
    string $url,
    string $imageUrl,
    string $alt,
    string $caption = ''
) {
    // Tampilkan navigation bar berisi link sosial media
    print('
        <div class="image-caption text-center">
            <a href="' . $url . '">
                <img src="' . $imageUrl . '" alt=' . $alt . '">                    
           </a>       
            <p class="text-center">' . $caption . '</p>
        </div>
        ');
}
