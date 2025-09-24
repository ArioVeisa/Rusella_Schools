<?php
// Script untuk mempersiapkan file upload ke Hostinger

echo "=== SCRIPT PERSIAPAN UPLOAD KE HOSTINGER ===\n\n";

// Daftar file/folder yang perlu diupload
$files_to_upload = [
    'application/',
    'assets/',
    'system/',
    'index.php',
    'composer.json',
    'composer.lock',
    'database/',
    'koneksi.php'
];

// Daftar file/folder yang TIDAK perlu diupload
$files_to_exclude = [
    '.git/',
    '.gitignore',
    'node_modules/',
    'vendor/',
    'test_*.php',
    '*.bat',
    '*.md',
    'DEPLOYMENT_GUIDE.md',
    'prepare_upload.php'
];

echo "📁 FILE YANG PERLU DIUPLOAD:\n";
foreach ($files_to_upload as $file) {
    if (file_exists($file)) {
        echo "✅ $file\n";
    } else {
        echo "❌ $file (TIDAK DITEMUKAN)\n";
    }
}

echo "\n📁 FILE YANG TIDAK PERLU DIUPLOAD:\n";
foreach ($files_to_exclude as $file) {
    if (file_exists($file)) {
        echo "⚠️  $file (SKIP)\n";
    } else {
        echo "✅ $file (TIDAK ADA)\n";
    }
}

echo "\n🔧 KONFIGURASI YANG PERLU DIUBAH:\n";
echo "1. application/config/database.php - Update database credentials\n";
echo "2. application/config/config.php - Update base_url dan encryption_key\n";
echo "3. index.php - Set ENVIRONMENT ke 'production'\n";

echo "\n📊 INFORMASI PROJECT:\n";
echo "Framework: CodeIgniter 3.x\n";
echo "Database: MySQL\n";
echo "PHP Version Required: 7.4+\n";
echo "Total Files: " . count($files_to_upload) . " folder/file utama\n";

echo "\n🚀 LANGKAH SELANJUTNYA:\n";
echo "1. Zip semua file yang perlu diupload\n";
echo "2. Login ke Hostinger hPanel\n";
echo "3. Upload ke public_html\n";
echo "4. Buat database di Hostinger\n";
echo "5. Import database learnify.sql\n";
echo "6. Update konfigurasi database\n";
echo "7. Test deployment\n";

echo "\n📋 CHECKLIST SEBELUM UPLOAD:\n";
echo "□ Backup database lokal\n";
echo "□ Test semua fitur di lokal\n";
echo "□ Siapkan credentials database hosting\n";
echo "□ Siapkan domain name\n";
echo "□ Baca DEPLOYMENT_GUIDE.md\n";

echo "\n✅ SIAP UNTUK UPLOAD!\n";
?>
