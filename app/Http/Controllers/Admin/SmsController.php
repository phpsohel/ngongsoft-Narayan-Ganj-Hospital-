<?php

namespace App\Http\Controllers\Admin;

use App\Models\Worker;
use App\Models\Garments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['garments'] = Garments::all();
        $data['workers'] = Worker::all();
        return view('sms.sms', $data);
    }

    //Helper Function
    // ====================
     function SendSmsSetUp($number,$text)
     {
        $url = "http://66.45.237.70/api.php";
        $data= array(
        'username'=>"01619123746",
        'password'=>"sms@123",
        'number'=>"$number",
        'message'=>"$text"
        );
        $ch = curl_init(); // Initialize cURL
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $smsresult = curl_exec($ch);
        $p = explode("|",$smsresult);
        $sendstatus = $p[0];
     }

    public function send(Request $request)
    {
        $text = $request->message;
        if($request->garments_id)
        {
            $workers = Worker::where('garment_id',  $request->garments_id)->get();
            foreach($workers as $worker)
            {
               $number = $worker->phone;
               $this->SendSmsSetUp($number,$text);
            }
            return redirect()->back()->with('success', "Sending SMS Successfully");
        }else{
            $workers = Worker::where('status',1)->get();
            foreach($workers as $worker)
            {
               $number = $worker->phone;
               $this->SendSmsSetUp($number,$text);
            }
             return redirect()->back()->with('success', "Sending SMS Successfully");
        }
    }

    

}
