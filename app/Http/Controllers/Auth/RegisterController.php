<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
    protected $redirectTo = '/home';

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
            'name' => ['bail', 'required', 'string', 'max:255'],
            'email' => ['bail', 'required', 'string', 'email:rfc,dns', 'max:255', 'unique:users'],
            'mobile' => ['bail', 'required', 'string', 'regex:/^[0-9]{10,12}$/', 'unique:users'],
            'password' => ['bail', 'required', 'string', 'min:8'],
        ]);
    }


    public function messages()
    {
        return [
            'mobile_number.required' => 'The mobile number is required.',
            'mobile_number.regex' => 'The mobile number must be 10 digits long.',
            'mobile_number.unique' => 'This mobile number is already registered.'
        ];
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
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
