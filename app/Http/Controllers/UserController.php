<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{

    public function index()
    {

        $users = User::latest()->paginate(10);

        return view('pages.users.index', compact('users'));

    }

    public function users_data(REQUEST $request)
    {
        $users = User::select(['id','name','email']);
        return DataTables::of($users)
            ->addColumn('name', function($user){
                return $user->name;
            })
            ->addColumn('email', function($user){
                return $user->email;
            })
            ->addColumn('actions', function($user){
                return '
                    <a href="" class="btn btn-sm btn-outline-primary">
                    <i class="bi bi-pencil"></i>
                    </a>

                    <form method="POST" action="/users/'.$user->id.'" style="display:inline">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="'.csrf_token().'">
                    <button class="btn btn-sm btn-outline-danger">
                    <i class="bi bi-trash"></i>
                    </button>
                    </form>
                    ';
            })
            ->rawColumns(['role','actions'])
            ->make(true);
    }

    public function create()
    {

        return view('pages.users.create');

    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','email','max:255','unique:users,email'],
            'password' => ['required','string','min:6']
        ]);

        $data['password'] = Hash::make($data['password']);

        User::create($data);

        return redirect()
            ->route('users.index')
            ->with('success','User created successfully');

    }

    public function edit(User $user)
    {

        return view('pages.users.edit', compact('user'));

    }

    public function update(Request $request, User $user)
    {

        $data = $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','email','max:255','unique:users,email,' . $user->id],
            'password' => ['nullable','string','min:6']
        ]);

        if(!empty($data['password'])){
            $data['password'] = Hash::make($data['password']);
        }else{
            unset($data['password']);
        }

        $user->update($data);

        return redirect()
            ->route('users.index')
            ->with('success','User updated successfully');

    }

    public function destroy(User $user)
    {

        $user->delete();

        return redirect()
            ->route('users.index')
            ->with('success','User deleted successfully');

    }

}
