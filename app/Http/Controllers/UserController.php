<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use Spatie\Permission\Models\Role;


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

        return view('users.index')->with(['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();

        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'area' => 'required',
            'employee_code' => [
                'required',
                Rule::unique('users', 'employee_code'),
            ],
            'password' => 'required',
            'roles' => 'required'
        ];

        $request->validate($rules);

        $newUser = new User;
        $newUser->name = $request->name;
        $newUser->area = $request->area;
        $newUser->employee_code = $request->employee_code;
        $newUser->assignRole($request->roles);
        $newUser->password = bcrypt($request->password);
        $newUser->save();

        return redirect()->route('admin.users.index')->with('info', 'Se ha registrado el usuario exitosamente');
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
    public function edit(User $user)
    {
        $roles = Role::all();

        return view('users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required',
            'area' => 'required',
            'employee_code' => [
                'required',
                Rule::unique('users', 'employee_code')->ignore($user->id),
            ],
            'password' => 'required',
            'roles' => 'required'
        ];

        $request->validate($rules);

        $user->roles()->sync($request->roles);
        $user->name = $request->name;
        $user->area = $request->area;
        $user->employee_code = $request->employee_code;
        $user->password = bcrypt($request->password);
        $user->update();

        return redirect()->route('admin.users.edit', $user)->with('info', 'Se actualizo correctamente el usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if($user->delete()){
            return redirect()->route('admin.users.index')->with('info', 'Se ha eliminado el usuario exitosamente.');
        } else {
            return redirect()->route('admin.users.index')->with('error', 'No se pudo eliminar el usuario.');
        }
    }
}
