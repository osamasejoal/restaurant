<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'                      => ['required', 'string', 'max:50'],
            'email'                     => ['required', 'string', 'email', 'max:100', 'unique:users'],
            'password'                  => ['required', 'string', 'min:8', 'confirmed'],
            'gender'                    => ['required', 'string'],
            'password_confirmation'     => ['required'],
        ], [
            '*.required'            => 'This field is required.',
            'name.max'              => 'This field must not be greater than 50 characters.',
            'email.max'             => 'This field must not be greater than 100 characters.',
            'password.min'          => 'password must be at least 8 characters.',
            'password.confirmed'    => 'password confirmation does not match.',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name'      => $data['name'],
            'email'     => $data['email'],
            'gender'    => $data['gender'],
            'password'  => Hash::make($data['password']),
        ]);
    }
}
