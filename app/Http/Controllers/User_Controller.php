<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class User_Controller extends Controller
{

    //  kelola User
    public function index()
    {
        return view('adminView/user', [
            'tittle' => 'Kelola User',
            'users' => USer::all()
        ]);
    }
    public function create()
    {
        return view('adminView/userTambah', [
            'tittle' => 'Kelola User'
        ]);
    }

    public function blog()
    {
        return $this->hasMany(Blog::class);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'nama' => 'required|max:255',
                'role' => 'required',
                'email' => 'required',
                'username' => 'required|max:255|unique:users',
                'password' => 'required|min:6|max:255',
                'image' => 'image|file|max:1024'
            ]
        );

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('user-images');
        }

        $validatedData['password'] = Hash::make($validatedData['password']);

        user::create($validatedData);

        Session::flash('pesan', 'User berhasil ditambah');

        return redirect('/dashboard/user');
    }

    public function edit(User $user)
    {
        return view('adminView/userEdit', [
            'tittle' => 'Edit USer',
            'data' => $user
        ]);
    }

    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate(
            [
                'password' => 'required|min:6|max:255'
            ]
        );
        User::where('id', $user->id)
            ->update($validatedData);

        return redirect('/dashboard/user')->with('pesan', 'User berhasil di Update');
    }

    public function destroy(User $user)
    {
        User::destroy($user->id);

        return redirect('/dashboard/user')->with('pesan', 'User berhasil di hapus');
    }
}
