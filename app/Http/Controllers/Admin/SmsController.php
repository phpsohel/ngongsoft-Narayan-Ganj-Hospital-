<?php

namespace App\Http\Controllers\Admin;

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
            $member = Garments::where('s',$request->garments_id)->first();
            $number = $member->phone;
            $this->SendSmsSetUp($number,$text);
            return "Sending SMS Successfully";
        }else{

              $members = Garments::where('status',1)->get();
            foreach($members as $member)
            {
               $number = $member->phone;
               $this->SendSmsSetUp($number,$text);
            }
             return "Sending SMS Successfully";
        }
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
