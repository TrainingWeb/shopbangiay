<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('/contentadmin.users.index', compact('users'));
    }

    public function create()
    {
        return view('/contentadmin.users.create');
    }
    
    public function store(Request $Request)
    {
        $Request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ],[
            'name.required' => 'Bạn chưa nhập tên người dùng',
            'email.required' => 'Bạn chưa nhập email',
            'password.required' => 'Bạn chưa nhập password',
            'phone.required' => 'Bạn chưa nhập số điện thoại',
            'address.required' => 'Bạn chưa nhập địa chỉ',
        ]);
        $users = New User;
        $users->name = request()->input('name');
        $users->email = request()->input('email');
        $users->password = request()->input('password');
        $users->phone = request()->input('phone');
        $users->address = request()->input('address');
        $users->role = request()->input('role');

        $users->save();

        return redirect('/listusers')->with('thongbao','Just created '. $users->name. '');
    }

    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();

        return redirect('/listusers')->with('thongbao', 'Just deleted '. $users->name .'');
    }

    public function edit($id)
    {
        $users = User::find($id);
        return view('/contentadmin.users.edit', compact('users'));
    }

    public function update(Request $Request, $id)
    {
        $users = User::find($id);

        $Request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ],[
            'name.required' => 'Bạn chưa nhập tên người dùng',
            'email.required' => 'Bạn chưa nhập email',
            'password.required' => 'Bạn chưa nhập password',
            'phone.required' => 'Bạn chưa nhập số điện thoại',
            'address.required' => 'Bạn chưa nhập địa chỉ',
        ]);

        $users->name = request()->input('name');
        $users->email = request()->input('email');
        $users->password = request()->input('password');
        $users->phone = request()->input('phone');
        $users->address = request()->input('address');
        $users->role = request()->input('role');

        $users->update();

        return redirect('/listusers')->with('thongbao', 'Just edited '.$users->name. '');
    }
    
}
