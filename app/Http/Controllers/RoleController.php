<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->search;

        $roles = Role::query()
            ->when($search,function($q) use ($search){
                $q->where('name','like',"%{$search}%");
            })
            ->limit(10)
            ->get();

        return $roles->map(function($role){
            return [
                'id'=>$role->id,
                'text'=>$role->name
            ];
        });
    }
}
