<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserMail;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
     




    /*
    |--------------------------------------------------------------------------
    |                              VIEW METHOD
    |--------------------------------------------------------------------------
    */
    public function view($id)
    {
        if ($id == 1) {
            $users = User::where('role', '1')->paginate(10);
            return view('backend.user.view', compact('users', 'id'));
        }
        elseif ($id == 2)
        {
            $users = User::where('role', '2')->paginate(10);
            return view('backend.user.view', compact('users', 'id'));
        }
        elseif ($id == 3)
        {
            $users = User::where('role', '3')->paginate(10);
            return view('backend.user.view', compact('users', 'id'));
        }
    }
     




    /*
    |--------------------------------------------------------------------------
    |                              INDEX METHOD
    |--------------------------------------------------------------------------
    */
    public function index($id)
    {
        
    }





    /*
    |--------------------------------------------------------------------------
    |                            USER STATUS METHOD
    |--------------------------------------------------------------------------
    */
    public function userStatus(Request $request)
    {
        $user = User::find($request->user_id);
        $user->status = $request->status;
        $user->save();

        return response()->json(['success' => 'Status changed successfully.']);
    }
 




    /*
    |--------------------------------------------------------------------------
    |                              CREATE METHOD
    |--------------------------------------------------------------------------
    */
    public function create()
    {
        return view('backend.user.add');
    }
 




    /*
    |--------------------------------------------------------------------------
    |                              STORE METHOD
    |--------------------------------------------------------------------------
    */
    public function store(Request $request)
    {
        // Validation Portion
        $request->validate([
            'role'          => 'required|integer',
            'name'          => 'required|string|max:255',
            'email'         => 'required|email|string|max:255',
            'gender'        => 'required|integer',
        ], [
            '*.required' => 'This field is required',
            '*.integer' => "Please don't try to hack",
            '*.string' => 'Please input a string value',
            '*.max' => "This field shouldn't be more than 255 word",
            '*.email' => 'Please enter a valid email',
        ]);

        // Variables
        // $user_pass  = Str::random('8');
        $user_pass  = 12345678;
        $user_name  = $request->name;
        $user_email = $request->email;
        $user_role = $request->role;

        // Insert Portion
        User::insert([
            'name'          => $request->name,
            'email'         => $request->email,
            'gender'        => $request->gender,
            'role'          => $request->role,
            'image'         => 'default.png',
            'password'      => Hash::make($user_pass),
            'created_at'    => Carbon::now(),
        ]);

        // Mail::to($request->email)->send(new UserMail($user_pass, $user_name, $user_email, $user_role));

        return back()->with('success', "Successfully created user account");
    }
 




    /*
    |--------------------------------------------------------------------------
    |                              EDIT METHOD
    |--------------------------------------------------------------------------
    */
    public function edit($id)
    {
        //
    }
 




    /*
    |--------------------------------------------------------------------------
    |                              UPDATE METHOD
    |--------------------------------------------------------------------------
    */
    public function update(Request $request, $id)
    {
        //
    }
 




    /*
    |--------------------------------------------------------------------------
    |                              DESTROY METHOD
    |--------------------------------------------------------------------------
    */
    public function destroy($id)
    {
        $user = User::find($id);

        if ($user->image != 'default.png') {
            unlink(base_path('public/backend/assets/images/profile_pic/' . $user->image));
        }
        $user->delete();
        return back()->with('success', 'Successfully deleted your Food');
    }
}
