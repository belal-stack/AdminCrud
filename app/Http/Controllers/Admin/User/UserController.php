<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Gender;
use App\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $genders  = Gender::all();
        $roles     = Role::all();
        return view('admin.user.index', compact('users','genders','roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genders  = Gender::all();
        $roles     = Role::all();
        return view('admin.user.create', compact('genders','roles'));
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'gender' => ['required', 'string'],
            'phone' => ['required', 'numeric', 'unique:users'],
            'address' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'gender_id' => $request['gender'],
            'role_id' => $request['role'],
            'phone' => $request['phone'],
            'address' => $request['address'],
            'password' => Hash::make($request['password']),
        ]);

        return back()->with('message', "User Created Successfully");
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
        $user     = User::find($id);
        $genders  = Gender::all();
        $roles     = Role::all();
        return view('admin.user.edit',compact('user','genders','roles'));
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
            'name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string'],
            'phone' => ['required', 'numeric'],
            'address' => ['required', 'string'],
        ]);
        User::where('id', $id)->update([
            'name' => $request['name'],
            'gender_id' => $request['gender'],
            'role_id' => $request['role'],
            'phone' => $request['phone'],
            'address' => $request['address'],
        ]);

        return back()->with('message', "User Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);
        if($user) {
            $user->delete();
            return response()->json([
                'successed'=>true,
                'message'  =>'User Delete Successfully'
            ]);
        }
        else{
            return false;
        }
    }
}
