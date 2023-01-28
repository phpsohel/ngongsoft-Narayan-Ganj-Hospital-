<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Models\Container;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return view('role.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'name' => 'required|unique:roles',
        ]);
       $role = Role::create($request->all());
       $role->save;
       $notification = array(
            'message' => 'Role Added Successfully!',
            'alert-type' => 'success'
            );
        return redirect()->back()->with($notification);
    }
    public function roleupdate(Request $request, $id){
        $update = Role::find($id);
        $update->name = $request->name;
        $update->description = $request->description;
        $update->save();
        $notification = array(
            'message' => 'Role Updated  Successfully!',
            'alert-type' => 'success'
            );
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
        $update = Role::find($id);
        return $update;
       $update->save;
       $notification = array(
            'message' => 'Role Added Successfully!',
            'alert-type' => 'success'
            );
        return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $delete = Role::find($id);
        $delete->delete();
        $notification = array(
            'message' => 'Delete Successfully!',
            'alert-type' => 'success'
            );
        return redirect()->back()->with($notification);
    }
    public function permission( Request $request, $id){
       $role = Role::find($id);
       $rolePermissions = Permission::join("role_has_permissions","role_has_permissions.permission_id","=","permissions.id")
            ->where("role_has_permissions.role_id",$id)
            ->get();
       $permissions = Permission::get();

       return view('role.change_permission', compact('permissions','role','rolePermissions'));
    }
    public function PermissionUpdate(Request $request, $id)
    {
        $role = Role::find($id);
        $role->syncPermissions($request->permission_name);
        $notification = array(
                    'message' => 'Permission Updated  Successfully!',
                    'alert-type' => 'success'
                    );
        return redirect()->route('role.index')->with( $notification);
    }

}
