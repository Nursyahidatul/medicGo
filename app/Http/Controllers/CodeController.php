<?php

namespace App\Http\Controllers;

use App\Models\Code;
use App\Models\Prescriptions;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class CodeController extends Controller
{
    public function saveqrcode(Request $request) 
    {
        $request->validate([
            'prescriptionID' => 'required',
            'appointmentID' => 'required',
        ]);
  
        $qrcode = new  Code();
        $qrcode->prescriptionID = $request->prescriptionID;
        $qrcode->appointmentID = $request->appointmentID;
  
        $res = $qrcode->save();
        if($res){
            $prescriptions = Prescriptions::where('appointmentID', $qrcode->appointmentID)->get();
            $qrcode = QrCode::size(150)->generate(Prescriptions::where('appointmentID', $qrcode->appointmentID)->value('prescription'));
            return view("qrcode.display-qrcode", compact(['qrcode', 'prescriptions', 'qrcode']));
        }else {
            return back()->with('fail', 'Something wrong');
        }
    }
}

