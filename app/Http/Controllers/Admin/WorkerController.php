<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Worker;
use App\Models\Garments;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['garments'] = Garments::all();
        $data['workers']  = Worker::orderBy('id', 'DESC')->get();
        return view('worker.index', $data);
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

        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:workers',
            'phone' => 'required',
            'nid_no' => 'required',
        ]);
        $store = new Worker();
        $store->garment_id = $request->garment_id;
        $store->name = $request->name;
        $store->email = $request->email;
        $store->phone = $request->phone;
        $store->designation = $request->designation;
        $store->nid_no = $request->nid_no;
        $store->gender = $request->gender;
        $store->blood_group = $request->blood_group;
        $store->save();
        return redirect()->back()->with('success', 'Worker Add Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {

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
       $update = Worker::find($id);
        $update->garment_id = $request->garment_id;
        $update->name = $request->name;
        $update->email = $request->email;
        $update->phone = $request->phone;
        $update->designation = $request->designation;
        $update->nid_no = $request->nid_no;
        $update->gender = $request->gender;
        $update->blood_group = $request->blood_group;
        $update->save();
        return redirect()->back()->with('success', 'Worker Update Successfully');
    }

    public function detailsCustomer(Request $request,$id)
    {
        $data['show'] = Worker::find($id);
        return view('worker.details', $data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Worker::find($id);
        $delete->delete();
        return redirect()->back()->with('success', 'Worker Delete Successfully');
    }
    //Details

}
