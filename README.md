# APLIKASI DOKTER
PROJECT SIMRS BERBASIS WEB DENGAN  CODEIGNITER 3 DAN TERINTEGRASI DENGAN SIMRS KHANZA

Tambahan file ht.access

RewriteEngine On

# Aturan untuk mengirim semua permintaan ke file index.php
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php/$1 [L]
