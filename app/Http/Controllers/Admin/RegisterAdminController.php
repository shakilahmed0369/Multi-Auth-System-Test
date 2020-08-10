<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Gate;

class RegisterAdminController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $roles = User::where(['user_type' => 'Admin'])->orWhere('user_type', 'SuperAdmin')->get();
        return view('backend.register_admin.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('backend.register_admin.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //basic form validation
        $validatedData = $request->validate([
            'name' => 'required|max:20',
            'email' => 'required|unique:users|max:50|email',
            'password' => 'required|min:5',
            'user_type' => 'required',
            
        ]);
        //seving data to DB
        $registerAdmin = new User;
        $registerAdmin->name = $request->name;
        $registerAdmin->email = $request->email;
        $registerAdmin->password = Hash::make($request->password);
        $registerAdmin->user_type = $request->user_type;
        $registerAdmin->save();
        return redirect()->back();
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
        $roles = Role::all();
        $user = User::find($id);
        return view('backend.register_admin.edit', compact('roles', 'user'));
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
         //basic form validation
         $validatedData = $request->validate([
            'name' => 'required|max:20',
            'email' => 'required|max:50|email',
            'user_type' => 'required',
            
        ]);
        //seving data to DB
        $updateAdmin = User::find($id);
        $updateAdmin->name = $request->name;
        $updateAdmin->email = $request->email;
        if(isset($request->password)){
            $updateAdmin->password = Hash::make($request->password);
        }
        $updateAdmin->user_type = $request->user_type;
        $updateAdmin->save();
        return redirect()->back();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
