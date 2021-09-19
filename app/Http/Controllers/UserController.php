<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('roles')->paginate(20);
        $roles = Role::all();
        return view('user.index',compact('users','roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(auth()->user()->can('manage-organization')){
            $roles = Role::all();
        }
        elseif( auth()->user()->hasRole('manager') ) {
            $roles = Role::all()->except(['super-admin','admin']);
            //dd($roles);
        }
        elseif( auth()->user()->hasRole('admin') ) {
            $roles = Role::all()->except(['super-admin']);
            //dd($roles);
        }
        return view('user.createOrUpdate',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {   
        //dd($request->input('email'));
        $user = User::make($request->validated());
        //dd($user);
        $user->mobile = $request->input('mobile');
        $user->password = Hash::make($request->input('password'));
        $user->assignRole($request->input('role'));
        $user->save();
        return redirect(route('user.index'))->with('message','Employee added Successfully');
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
    public function destroy(User $user)
    {
        $user->delete();
        return redirect(route('user.index'))->with('message','Employee deleted Successfully');
    }
}
