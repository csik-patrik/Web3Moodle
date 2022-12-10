<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\http\Requests\Admin\UserStoreRequest;
use App\Http\Requests\Admin\UserUpdateRequest;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'asc')->get();

        return view('Admin.Users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::get();

        return View('Admin.Users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {
        if ($request->validated()) {
            $request['password'] = Hash::make($request['password']);

            User::create($request->all());

            return redirect()->route('admin.users.index', app()->getLocale())
                        ->with('success', __('Felhasználó hozzáadása sikeres!'));
        }
        abort(403);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $roles = Role::get();

        $user = User::where('id', $request->user)->first();

        return View('Admin.Users.edit', compact('roles', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request)
    {
        if($request->validated()){
            $affected = DB::table('users')
              ->where('id', $request->id)
              ->update(['name' => $request->name,
                        'email' => $request->email,
                        'role_id' => $request->role_id
                       ]);
            


            //$userForUpdate = User::where('id', $request->id);
            //$userForUpdate->name = $request->name;
            //$userForUpdate->email = $request->email;
            //$userForUpdate->role_id = $request->role_id;
            //$userForUpdate->save();
            return redirect()->route('admin.users.index')
                        ->with('success', __('Felhasználó adatainak frissítése sikeres!'));
        }
        return redirect()->route('admin.users.index')
                        ->with('failed', __('Felhasználó adatainak frissítése sikertelen!'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        User::where('id', $request->user)->delete();

        return redirect()->route('admin.users.index', app()->getLocale())
                        ->with('success', __('Felhasználó törlése sikeres!'));
    }
}
