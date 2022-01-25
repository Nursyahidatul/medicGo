<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use App\Models\Prescriptions;
//use App\Models\qrcode;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

use Illuminate\Http\Request;

class QrCodeGeneratorController extends Controller
{
    public function qrcode()
    {
        return view("qrcode.qr-code");
    }
}
