<?php

namespace App\Http\Controllers\Auth;

use App\Farm;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

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
     * Where to redirect users after login / registration.
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:8|confirmed',
            'employee_no'=>'required|max:255',
            'mobile_no'=>'required|max:10|unique:users',
            'farm_name'=>'required|max:255|unique:farms',
            'farm_location'=>'required|max:255',
            'farm_address'=>'required|max:255|unique:farms'

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user=User::create([
            'name' => ucfirst($data['name']),
            'email' => $data['email'],
            'employee_no'=>$data['employee_no'],
            'mobile_no'=>$data['mobile_no'],
            'password' => bcrypt($data['password']),

        ]);

        $farm = Farm::create([
            'farm_name' => ucfirst($data['farm_name']),
            'farm_location' => $data['farm_location'],
            'farm_address' => $data['farm_address'],
        ]);
        $user->farms()->attach($farm->id);
        return $user;

    }


}
