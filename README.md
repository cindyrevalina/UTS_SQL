## Eksperimen Login Tanpa Password (Simulasi Keamanan)

Project ini dibuat sebagai percobaan sederhana untuk melihat bagaimana sebuah sistem login bisa bermasalah jika input dari pengguna tidak ditangani dengan benar.

Dalam project ini, terdapat dua versi sistem login yang dibuat menggunakan PHP dan MySQL:

versi pertama dibuat tanpa pengamanan khusus
versi kedua menggunakan metode yang lebih aman dalam memproses input

Tujuan utama dari project ini adalah menunjukkan perbedaan hasil antara sistem yang rentan dan sistem yang sudah diperbaiki.


## Teknologi yang Digunakan
PHP
MySQL
XAMPP (Apache Server)
HTML & CSS sederhana


## Gambaran Pengujian

Project ini memperlihatkan dua kondisi:

1. Sistem tanpa pengamanan
Input dari user langsung digunakan dalam proses database.
Hasilnya, sistem bisa memberikan akses meskipun data tidak valid.

2. Sistem dengan pengamanan
Input diproses dengan cara yang lebih aman sehingga tidak mempengaruhi struktur query.
Hasilnya, sistem hanya mengizinkan login jika data benar.


## Tujuan Project
Menunjukkan pentingnya pengolahan input
Memberikan contoh sederhana perbedaan sistem rentan dan aman
Menjadi bahan pembelajaran dasar tentang keamanan aplikasi web

⚠️ Catatan

Project ini dibuat hanya untuk tujuan pembelajaran dan simulasi di lingkungan lokal. Tidak disarankan digunakan pada sistem nyata tanpa pengamanan tambahan.

## Screenshot
<img width="1180" height="556" alt="image" src="https://github.com/user-attachments/assets/4df1c679-ad42-46fd-8b84-99c9727ea2f7" />

<img width="1181" height="540" alt="image" src="https://github.com/user-attachments/assets/2fe66627-70a6-49a5-8c00-eb07d8545cf4" />


Cara Menjalankan
Jalankan XAMPP (Apache & MySQL)
Import database ke phpMyAdmin
Simpan project di folder htdocs
Buka di browser:
http://localhost/uts_sql/login_rentan.php 
http://localhost/uts_sql/login_aman.php
