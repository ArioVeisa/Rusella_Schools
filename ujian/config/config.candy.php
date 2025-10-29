<?php
// Konstanta dasar aplikasi ujian
// Sesuaikan nilai jika diperlukan; minimal diperlukan oleh tampilan/footer
if (!defined('APLIKASI')) {
	define('APLIKASI', 'CBT');
}
if (!defined('VERSI')) {
	define('VERSI', '1.0');
}
if (!defined('REVISI')) {
	define('REVISI', '0');
}

// Versi skema database yang diharapkan aplikasi.
// Jika belum ada, samakan dengan versi yang ada di tabel setting agar tidak memunculkan modal peringatan.
if (!defined('VERSI_DB')) {
	define('VERSI_DB', isset($setting['db_versi']) ? $setting['db_versi'] : '1.0');
}

// Anda dapat menambahkan konstanta/konfigurasi lain di sini bila dibutuhkan
// misal: define('NAMA_SEKOLAH', 'Rusella Schools');