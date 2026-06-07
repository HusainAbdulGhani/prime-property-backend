<?php

// 1. SUNTIK CORS PAKSA DI LEVEL GERBANG PALING DEPAN VERCEL
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With, Accept, X-CSRF-TOKEN');

// FIX MUTLAK: Cek REQUEST_METHOD, bukan REQUEST_URI blay!
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    header('HTTP/1.1 200 OK');
    exit();
}

// 2. Oper sisanya ke index utama Laravel seperti biasa
require __DIR__ . '/../public/index.php';