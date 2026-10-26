<?php

use Illuminate\Support\Facades\Route;

Route::get('/mahasiswa/krs', function () {
    $mahasiswa = [
        'nama' => 'Naruto Uzumaki',
        'nim' => '2503192',
    ];

    $matkul = [
        ['kode' => 'MK101', 'nama' => 'Pemrograman Web Lanjut', 'sks' => 3],
        ['kode' => 'MK102', 'nama' => 'Struktur Data', 'sks' => 4],
        ['kode' => 'MK103', 'nama' => 'Basis Data', 'sks' => 4],
    ];

    $total = 0;
    foreach ($matkul as $m) {
        $total += $m['sks'];
    }

    return view('krs', compact('mahasiswa', 'matkul', 'total'));
});