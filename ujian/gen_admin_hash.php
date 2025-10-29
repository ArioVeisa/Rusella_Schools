<?php
// Skrip kecil untuk membuat hash bcrypt dari password yang Anda inginkan
// Akses: http://localhost/Rusella_Schools/ujian/gen_admin_hash.php?pass=admin
$pass = isset($_GET['pass']) ? $_GET['pass'] : 'admin';
header('Content-Type: text/plain');
echo password_hash($pass, PASSWORD_BCRYPT);
echo "\n";


