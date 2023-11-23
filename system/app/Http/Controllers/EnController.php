<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class EnController extends Controller
{
    public function enkripsi()
    {
        // $encrypted = Crypt::encryptString('password');
        // $decrypted = Crypt::decryptString($encrypted);

        // echo "Hasil Enkripsi : " . $encrypted;
        echo "Halo";
        echo "<br/>";
        // echo "Hasil Dekripsi : " . $decrypted;
    }
}
