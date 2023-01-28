<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;
use Auth;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::where('application_status',1)->get();
        return view('member.index', compact('members'));
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
      // return $request->all();

        $request->validate([
                'member_name' => 'required',
                'father_name' => 'required',
                'mother_name' => 'required',
                'address' => 'required',
                'birth' => 'required',
                'photo' => 'required|image|mimes:png,jpg,jpeg|max:2048',
                'nid' => 'required|unique:members'
        ]);
        $store =  new Member();
        $cbc ="CBC-";
        $num   = '1000';
        $last_id  = Member::orderBy('id','DESC')->first();

        if(!empty($last_id))
        {
            $code_add =  ++$last_id->id;
        }else{
             $code_add = 1;
        }
        $code = $cbc.($num + $code_add) ;
        $store->cbc_sl =  $code;

        $store->member_name =  $request->member_name;
        $store->father_name =  $request->father_name;
        $store->mother_name =  $request->mother_name;
        $store->address =  $request->address;
        $store->permanent_address =  $request->permanent_address;
        $store->birth =  $request->birth;
        $store->education =  $request->education;
        $store->company_name =  $request->company_name;
        $store->designation =  $request->designation;
        $store->company_address =  $request->company_address;
        $store->phone =  $request->phone;
        $store->email =  $request->email;
        $store->blood =  $request->blood;
        $store->nid =  $request->nid;
        $store->payment_status =  $request->payment_status;
        $store->cbc_type =  $request->cbc_type;

        if($request->file('photo')){
            $file = $request->file('photo');
            $fileName = date('Y-m-d ').$file->getClientOriginalName();
            $file->move(public_path('member_image'),$fileName);
            $store->photo =  $fileName;
            $store->save();
            $notification = array(
            'message' => 'Member  Added Successfully!',
            'alert-type' => 'success'
            );
        }
        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Member::find($id);
        return view('member.show_member',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        $request->validate([
                'member_name' => 'required',
                'father_name' => 'required',
                'mother_name' => 'required',
                'address' => 'required',
                'permanent_address' => 'required',
                'birth' => 'required',
                'education' => 'required',
                'company_name' => 'required',
                'designation' => 'required',
                'company_address' => 'required',
                'phone' => 'required',
                'email' => 'required',
                // 'photo' => 'required|image|mimes:png,jpg,jpeg|max:2048',
                'nid' => 'required'
        ]);
        $update = Member::find($id);
        $update->member_name =  $request->member_name;
        $update->father_name =  $request->father_name;
        $update->mother_name =  $request->mother_name;
        $update->address =  $request->address;
        $update->permanent_address =  $request->permanent_address;
        $update->birth =  $request->birth;
        $update->education =  $request->education;
        $update->company_name =  $request->company_name;
        $update->designation =  $request->designation;
        $update->company_address =  $request->company_address;
        $update->phone =  $request->phone;
        $update->email =  $request->email;
        $update->blood =  $request->blood;
        $update->nid =  $request->nid;
        $update->payment_status =  $request->payment_status;
        $update->cbc_type =  $request->cbc_type;
        $update->application_status =  $request->application_status;

        if($request->file('photo')){
            $file = $request->file('photo');
            $fileName = date('Y-m-d').'-'.$file->getClientOriginalName();
            $file->move(public_path('member_image'),$fileName);
            $update->photo =  $fileName;
        }
        $update->save();
        $notification = array(
            'message' => 'Member  Data Updated Successfully!',
            'alert-type' => 'success'
        );
        return redirect('/member/index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Member::find($id);
        $delete->delete();
        $notification = array(
            'message' => 'Delete Successfully!',
            'alert-type' => 'success'
            );
        return redirect()->back()->with($notification);
    }
    public function request_list()
    {
        $members = Member::where('application_status',2)->get();
        return view('member.request_list', compact('members'));
    }
    public function reject_list()
    {
            $members = Member::where('application_status',3)->get();
            return view('member.rejected_list', compact('members'));

    }
    public function report(Request $request)
    {
        $reports = Member::get();
        return view('member.report', compact('reports'));
    }
    public function Ajaxreport(Request $request)
    {
        $cbc_type = $request->id; // ajax request id received
        if($cbc_type == '0')
        {
            $searchs = Member::get();
        }else{
          $searchs = Member::where('cbc_type',$cbc_type)->where('application_status', 1)
                    ->get();
        }
        return view('member.get_by_ajax_search', compact('searchs'));
    }
}
