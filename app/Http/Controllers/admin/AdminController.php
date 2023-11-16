<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\user;

class AdminController extends Controller
{
    //

    public function AdminAdd()
    {
        return view('admin.control.add');
    }
    public function List()
    {
        $types = DB::table('users')
            ->select('*')
            ->get();
        return view('admin.body.list', compact('types'));
    }
    public function profile()
    {
        return view('admin.body.profile');
    }
    public function AdminDelete($id)
    {
        user::findOrFail($id)->delete();
        return redirect()->route('admin.display');
    }


    public function EditType($id)
    {
        $types = user::findOrFail($id);
        return view('admin.control.update', compact('types'));
    }
    public function AdminUpdate(Request $request)
    {

        $id = $request->id;
        user::findOrFail($id)->update([
            'username' => $request->username,
            'email' => $request->email,
            'address' => $request->address
        ]);
        return redirect()->route('admin.display');
    }
    public function AdminAddData(Request $request)
    {

        user::insert([
            'name' => $request->name,
            'password' => $request->password,
            'email' => $request->email
        ]);
        return redirect()->route('admin.display');
    }
}
