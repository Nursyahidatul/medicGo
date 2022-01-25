<?php

namespace App\Http\Controllers;

use App\Models\qrcode;
use App\Models\Patient;
use App\Models\Prescriptions;
use Illuminate\Http\Request;

class qrcodeController extends Controller
{
  public function displayqrcode(Request $request)
  {
      $request->validate([
          'prescriptionID' => 'required',
      ]);

      $qrcode = new qrcode();
      $qrcode->prescriptionID = $request->prescriptionID;

      $res = $qrcode->save();
      if($res){
          return redirect('reviewqrcode');
      }else {
          return back()->with('fail', 'Something wrong');
      }
  }

      public function reviewqrcode()
    {
        $data = array();
        if ('Session'::has('LoginId')) {
            $data = Patient::where('id', '=', 'Session'::get('LoginId'))->first();
        }
        $prescriptions = Prescriptions::where('patientID', $data->id)->get();
        
        return view("qrcode.display-qrcode", compact(['data', 'prescriptions']));
    }

    
}
