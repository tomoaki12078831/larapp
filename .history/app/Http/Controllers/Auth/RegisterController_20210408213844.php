<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'img_name' => ['sometimes', 'image', 'mimes:jpg,jpeg,bmp,svg,png', 'max:2000'],
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
        if(request()->has('img_name')){
            $saveImage = request()->file('img_name');
            $imgName = time() . '.' . $saveImage->getClientOriginalExtension() ;
            $imgpath = public_path('/avator/');
            $saveImage->move($imgpath, $imgName);
            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'self_introduction' => $data['self_introduction'],
                'sex' => $data['sex'],
                'area' => $data['area'],
                'age' => $data['age'],
                'want_talk' => $data['want_talk'],
                'can_talk' => $data['can_talk'],
                'occupation' => $data['occupation'],
                'img_name' => '/avator/' . $imgName,
            ]);
        }
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'self_introduction' => $data['self_introduction'],
            'sex' => $data['sex'],
            'area' => $data['area'],
            'age' => $data['age'],
            'want_talk' => $data['want_talk'],
            'can_talk' => $data['can_talk'],
            'occupation' => $data['occupation'],
            
        ]);
    }
}
