# Web LSP BPPTIK

Web LSP BPPTIK adalah aplikasi web yang berfungsi sebagai wadah informasi terkait profil LSP BPPTIK, daftar pelatihan yang disediakan, daftar skema sertifikasi, dan berita yang berhubungan dengan LSP BPPTIK;

## Features
- Halaman Home
- Halaman Profil
- Halaman Pelatihan
- Halaman Skema Sertifikasi
- Halaman Berita

# Tech
Web ini dibangun dengan berikut:
* [PENCIL PROJECT](https://pencil.evolus.vn) - open-source GUI prototyping tool that's available for All platforms.
* [HTML](https://developer.mozilla.org/en-us/docs/web/HTML) - standard markup language for docuents designed to be developed in a web browser.
* [CSS](https://developer.mozilla.org/en-us/docs/Learn/CSS) - style sheet language used for describing the presentation of a document written in a markup language.
* [PHP](https://php.net) - popular general purpose scripting language that is especially suited to web development.
* [SUBLIME TEXT](https://sublimetext.com) - A sophisticated text editor for code, markup and prose.
* [XAMPP](https://apachefriends.org/index.html) - XAMPP is an easy to install Apache distribution containing MariaDB, PHP and Perl.
* [GOOGLE CHROME](https://www.google.com/intl/id_id/chrome/) - The browser built by Google.


## Requirement

* XAMPP 7.4.9 or later
* PHP 7.2 or later

## Structure
```
sertifikasi
└──berita
│   │    0.php
│   │    1.php
│   │    2.php
│
└──css
│   └──component
│   │   │     *.css
│   │   │     ...
│   │   
│   └──page
│       │     *.css
│       │     ...
│   
│   style.css
│   
└──img
│   └──content
│   │   │     *.jpg
│   │   │     *.png
│   │   │     *.webp
│   │   │     ...
│   │   │     
│   icon.webp
│   
└──js
│   │    pelatihan.js
│   │    profil.js
│   
└──resources
│   └──config
│   │   │     config.php
│   │   │     import-data-berita.php
│   │   │     import-data-skema-sertifikasi.php
│   │ 
│   └──data
│   │   │     *.json
│   │   │     ...
│   │ 
│   └──web-element
│       │     card.php
│       │     footer.php
│       │     header.php
│       │     image.php
│   
└──vendor
│   │    *
│   │    autoload.php
│
│   berita.php
│   composer.json
│   composer.lock
│   index.php
│   pelatihan.php
│   profil.php
│   README.md
│   skema-sertifikasi.php
```

## Installation

Pindahkan semua file ke dalam folder

    C:\xampp\htdocs\[your folder]
    
Start Apache pada xampp Control Panel
    
akses pada browser
    
    localhost/[your folder]
        
## Credits
 
* [Muhammad Rizky Amanullah](https://github.com/muhrizky-a)
