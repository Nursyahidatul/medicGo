<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrCodeGeneratorController extends Controller
{
    public function qrcode()
    {
        return view("qrcode.qr-code");
    }
}
