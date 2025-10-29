<?php
session_start();
// Production: sembunyikan warning/notices agar UI tidak terganggu
error_reporting(0);
ini_set('display_errors', '0');
(isset($_SESSION['id_user'])) ? $id_user = $_SESSION['id_user'] : $id_user = 0;

// Hitung base path dinamis agar tetap bekerja jika aplikasi dipasang
// di subfolder seperti /Rusella_Schools/ujian
$uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
$trimmedUri = trim($uri, '/');
$segments = $trimmedUri === '' ? [] : explode('/', $trimmedUri);

// Nama folder aplikasi ("ujian")
$appFolder = basename(dirname(__DIR__));

// Cari posisi folder aplikasi pada URL
$appIndex = array_search($appFolder, $segments, true);

if ($appIndex === false) {
	// Fallback: diasumsikan langsung di root domain
	$homeurl = "http://" . $_SERVER['HTTP_HOST'];
	$pg = isset($segments[0]) ? $segments[0] : '';
	$ac = isset($segments[1]) ? $segments[1] : '';
	$id = isset($segments[2]) ? $segments[2] : 0;
} else {
	$baseParts = array_slice($segments, 0, $appIndex + 1);
	$basePath = '/' . implode('/', $baseParts);
	$homeurl = "http://" . $_SERVER['HTTP_HOST'] . $basePath;

	$pg = isset($segments[$appIndex + 1]) ? $segments[$appIndex + 1] : '';
	$ac = isset($segments[$appIndex + 2]) ? $segments[$appIndex + 2] : '';
	$id = isset($segments[$appIndex + 3]) ? $segments[$appIndex + 3] : 0;
}

//JIKA DIINSTAL DISUBDOMAIN HOSTING HAPUS TANDA // BARIS DIBAWAH INI

//$uri = $_SERVER['REQUEST_URI'];
//$pageurl = explode("/",$uri);

//$homeurl = "http://".$_SERVER['HTTP_HOST'];
//(isset($pageurl[1])) ? $pg = $pageurl[1] : $pg = '';
//(isset($pageurl[2])) ? $ac = $pageurl[2] : $ac = '';
//(isset($pageurl[3])) ? $id = $pageurl[3] : $id = 0;

//HAPUS SAMPAI BARIS DIATAS INI

require "config.database.php";

$no = $jam = $mnt = $dtk = 0;
$info = '';
$waktu = date('H:i:s');
$tanggal = date('Y-m-d');
$datetime = date('Y-m-d H:i:s');

define("KEY", "76310EEFF2B5D3C887F238976A421B638CFEB0942AB8249CD0A29B125C91B3E5");
