<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Generalsetting;
use Illuminate\Http\Request;

class GeneralSettingController extends Controller
{
    public function index()
    {
        $general_setting = Generalsetting::first(); 
        return view('setting.general_setting', compact('general_setting'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'site_title' => 'required',
            'address'    => 'required',
            'phone'      => 'required',
            'email'      => 'required',
            'site_logo'      => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);
       $setting = new Generalsetting();
       $setting->site_title = $request->site_title;
       $setting->address = $request->address;
       $setting->phone = $request->phone;
       $setting->email = $request->email;

        if($request->file('site_logo')){
            $file = $request->file('site_logo');
            $fileName = date('Y-m-d ').$file->getClientOriginalName();
            $file->move(public_path('image'),$fileName);
            $setting->site_logo =  $fileName; 
        }
       $setting->save();
       $notification = array(
            'message' => 'Setting Data Added Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification );
    }
    public function update(Request $request, $id){
        $request->validate([
            'site_title' => 'required',
            'address'    => 'required',
            'phone'      => 'required',
            'email'      => 'required',
            'site_logo'      => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);
         $updat_setting = Generalsetting::find($id);
         $updat_setting->site_title = $request->site_title;
        $updat_setting->address = $request->address;
        $updat_setting->phone = $request->phone;
        $updat_setting->email = $request->email;

        if($request->file('site_logo')){
            $file = $request->file('site_logo');
            $fileName = date('Y-m-d ').$file->getClientOriginalName();
            $file->move(public_path('image'),$fileName);
            $updat_setting->site_logo =  $fileName; 
        }
       $updat_setting->save();
       $notification = array(
            'message' => 'Setting Updated  Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification );
    }
}
