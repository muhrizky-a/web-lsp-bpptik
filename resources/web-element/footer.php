<?php
    /**
		@desc Fungsi ini berguna untuk menampilkan navigation bar yang terletak pada bagian atas halaman web.
        Fungsi ini hanya perlu dipanggil sekali pada setiap halaman web.
		* Balikan dari Fungsi ini adalah sebuah footer
	*/
    function pageFooter() {
        // Tampilkan footer sebuah halaman web
        print('
            <footer class="text-white">
                <hr>
                <p>Copyright &#169; 2021 BPPTIK. All Rights Reserved</p>
            </footer>
        ');
    }
