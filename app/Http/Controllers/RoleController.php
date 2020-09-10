<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    protected $index = 'role.index';
    public function index()
    {
        $role = Role::query()->get();
        $permission = Permission::query()->get();
        $pageTitle = 'Roles Index';

        return view('role.index', compact('role', 'permission', 'pageTitle'));
    }

    public function store(Request $request)
    {
        $role = Role::create(['name' => $request->name]);
        return redirect()->route($this->index)->with(['success' => 'Role' . $request->name . ' telah ditambahkan']);;
    }

    public function show(Role $role)
    {
        $permission = Permission::all()->pluck('name', 'id');
        $pageTitle = 'Show Roles';
        return view('role.show', compact('role', 'permission', 'pageTitle'));
    }

    public function delete(Role $role)
    {
        $role->delete();
        return redirect()->back()->with(['danger' => 'Role telah dihapus']);
    }

    public function hasPermission(Request $request)
    {
        $role = Role::find($request->id);
        $permission = $request->permission;
        if ($request->checked == "true") {
            $role->givePermissionTo($permission);
            $data = array(
                'massage' => 'Permission berhasil dipilih'
            );
        } else {
            $role->revokePermissionTo($permission);
            $data = array(
                'massage' => 'permission berhasil dihapus'
            );
        }
        return response()->json($data, 200);
    }
}
