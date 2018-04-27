<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
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
            'name' => 'required|string|max:255',
            'file' => 'required|mimes:jpeg,jpg,png|max:1000',
            'gender' => 'required|string|max:255',
            'identitycard' => 'required|string|max:255|unique:users,identitycard|regex:/^[A-Z]\d{9}$/',
            'birthday' => 'required|max:255',
            'phone' => 'required|numeric|min:10|unique:users,phone|regex:/^09\d{2}-?\d{3}-?\d{3}$/',
            'email' => 'required|string|email|max:255|unique:users,email',
            'address1' => 'required|string|max:255',
            'address2' => 'required|string|max:255',
            'address3' => 'required|string|max:255',
            'license' => 'required|string|max:255',
            'experience' => 'required|string|max:255',
            'selfintroduction' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $u = User::create([
            'name' => $data['name'],
            'file' => $data['file'],
            'gender' => $data['gender'],
            'identitycard' => $data['identitycard'],
            'birthday' => $data['birthday'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'address1' => $data['address1'],
            'address2' => $data['address2'],
            'address3' => $data['address3'],
            'license' => $data['license'],
            '高血壓' => $data['高血壓'],
            '中風' => $data['中風'],
            '植物人' => $data['植物人'],
            '失智' => $data['失智'],
            '自閉症' => $data['自閉症'],
            '智能障礙' => $data['智能障礙'],
            '精神病' => $data['精神病'],
            'experience' => $data['experience'],
            'selfintroduction' => $data['selfintroduction'],
            'password' => bcrypt($data['password']),
        ]);
        $path = $u->file->store('public');  
        $u->file=substr($path, strpos($path, '/')+1);
        $u->save();
        return $u;
    }
}
