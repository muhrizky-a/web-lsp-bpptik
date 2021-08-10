// Scroll ke bagian lain pada halaman dengan atribut id # dari halaman lain (beta)
jQuery(function() {
    let attr = $(location).attr("href");
    if (attr.includes("#")) {
        attr = "#" + attr.split("#").pop();

        const offset = $(attr).offset().top - 110;

        setTimeout(() => {
            scroll({
                top: offset
            });
        }, 100);

    }
});

// Scroll ke bagian lain pada halaman dengan atribut id # di halaman profil
$(".dropdown-item").slice(1).on("click", clickHandler);

function clickHandler(e) {
    e.preventDefault();
    const attr = this.getAttribute("href").replace("profil.php", "")
    scroll({
        top: $(attr).offset().top - 110
    });
}