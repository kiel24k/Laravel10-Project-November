<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
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
    public function ItemList()
    {
        return view('admin.item.list');
    }

    public function ItemData()
    {
        $ItemData = DB::table('items')
            ->select('*')
            ->get();
        return view('admin.item.list', compact('ItemData'));
    }
    public function ItemAdd()
    {
        return view('admin.item.add_item');
    }
    //add item here
    public function ItemUpdate($id)
    {
        $item = Item::findOrFail($id);
        return view('admin.item.update_item', compact('item'));
    }
    public function ItemUpdateData(Request $req)
    {
        Item::findOrFail($req->id)->update([
            'name' => $req->name,
            'description' => $req->description,
            'price' => $req->price,
            'quantity' => $req->quantity,
            'image' => $req->image,
        ]);
        return redirect()->route('data.item');
    }
    public function ItemDelete($id)
    {
        Item::findOrFail($id)->delete();
        return redirect()->route('data.item');
    }
    public function AddItem (Request $req){
        Item::create([
            'name'=>$req->name,
            'description'=>$req->description,
            'price'=>$req->price,
            'quantity'=>$req->quantity,
            'image'=>$req->image
        ]);
        return redirect()->route('data.item');

    }
}
