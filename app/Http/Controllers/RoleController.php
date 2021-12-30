<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{

    public function index()
    {
        $title = "user Roles";
        $roles = Role::with('permissions')->get();
        $permissions = Permission::get();
        return view('roles.roles',compact(
            'title','roles','permissions'
        ));
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'role'=>'required|max:100',
            'permission'=>'required'
        ]);
        $role = Role::create(['name' => $request->role]);
        $permissions = $request->permission;
        $role->syncPermissions($permissions);
        $notification = array(
            'message'=>"Role Created Successfully!!",
            'alert-type'=>"success"
        );
        return back()->with($notification);
    }


    public function update(Request $request)
    {
        $this->validate($request,[
            'role'=>'required|max:100',
            'permission'=>'required'
        ]);
        $role = Role::find($request->id);
        $role->update([
            'name'=>$request->role,
        ]);
        $permissions = $request->permission;
        $role->syncPermissions($permissions);
        $notification = array(
            'message'=>"Role Updated Successfully!!",
            'alert-type'=>"success"
        );
        return back()->with($notification);
    }


    public function destroy(Request $request)
    {
        $role = Role::find($request->id);
        $role->delete();
        $notification = array(
            'message'=>"Role deleted successfully!!.",
            'alert-type'=>'success'
        );
        return back()->with($notification);
    }
}
