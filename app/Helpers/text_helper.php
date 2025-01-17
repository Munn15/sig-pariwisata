<?php

function truncate($text, $length = 100, $suffix = '...')
{
    // Hapus semua elemen HTML menggunakan strip_tags
    $plainText = strip_tags($text);

    // Potong teks jika lebih panjang dari batas yang ditentukan
    if (strlen($plainText) > $length) {
        $plainText = substr($plainText, 0, $length) . $suffix;
    }

    return $plainText;
}
