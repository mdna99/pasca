<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Post;
use App\Setting;
use App\Slider;
use App\ExternalApp;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{

        public function index()
        {
                $encrypted = Hash::make('Podowingi');
                // $decrypted = Crypt::decryptString($encrypted);

                echo "Hasil Enkripsi : " . $encrypted;
                // echo "Halo";
                echo "<br/>";
                // echo "Hasil Dekripsi : " . $decrypted;
        }
}
