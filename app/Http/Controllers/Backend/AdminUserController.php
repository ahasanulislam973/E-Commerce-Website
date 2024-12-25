<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    public function AllUser()
    {
        $users = User::where('role','user')->get();
        return view('backend.user.user_all', compact('users'));
    } // End Method 


    public function AddUser()
    {
        return view('backend.user.user_add');
    } // End Method 


    public function StoreUser(Request $request)
    {

        $image = $request->file('photo');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(300, 300)->save('upload/user/' . $name_gen);
        $save_url = 'upload/user/' . $name_gen;

        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'password' => Hash::make($request->password),
            'photo' => $save_url,
        ]);

        $notification = array(
            'message' => 'Customer Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.user')->with($notification);
    } // End Method 


    public function EditUser($id)
    {
        $user = User::findOrFail($id);
        return view('backend.user.user_edit', compact('user'));
    } // End Method 


    public function UpdateUser(Request $request)
    {

        $user_id = $request->id;
        $old_img = $request->old_image;

        if ($request->file('photo')) {

            $image = $request->file('photo');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('upload/user/' . $name_gen);
            $save_url = 'upload/user/' . $name_gen;

            if (file_exists($old_img)) {
                unlink($old_img);
            }

            User::findOrFail($user_id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'photo' => $save_url,
            ]);

            $notification = array(
                'message' => 'Customer Updated with image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.user')->with($notification);
        } else {

            User::findOrFail($user_id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
            ]);

            $notification = array(
                'message' => 'Customer Updated without image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.user')->with($notification);
        } // end else
        

    } // End Method 


    public function DeleteUser($id)
    {
        $user = User::findOrFail($id);
        $img = $user->photo;
        if (file_exists($img)) {
            unlink($img);
        }
            
    
        User::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Customer Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } // End Method


}
