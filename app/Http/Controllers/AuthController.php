<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function getRegister(){
        return view('auth.register');
    }
    public function postRegister(Request $request){
        $check = $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:8|max:30',
            'repassword'=>'same:password'
        ],[
            'name.required'=>'Tên không thể đẻ trống',
            'email.required'=>'Email không thể để trống',
            'email.email'=>'Email Phải có @ . ',
            'password.required'=>'Mật khẩu không thể để trống',
            'password.min'=>'Mật khẩu chứa ít nhất 8 kí tự',
            'password.max'=>'Mật khẩu chứa nhiều nhất 30 kí tự',
            'repassword.same'=>'Xác nhận mật khẩu và mật khẩu phải giống nhau'
        ]);
        $user =  new User();
        $user->name=$check['name'];
        $user->email=$check['email'];
        $user->password = bcrypt($check['password']);
        $user->nickname = $check['name'];
        $user->avatar = "";
        $kq = $user->save();
        if($kq){
            return redirect()->route('login')->with('tb','Đăng ký thành công');
        }
        else{
            return redirect()->route('register')->with('tb','Đăng ký Không thành công');
        }
    }
    public function getLogin(){

        return view('auth.login');
    }
    public function postLogin(Request $request){
        $check = $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8|max:30',
        ],[
            'email.required'=>'Email không thể để trống',
            'email.email'=>'Email Phải có @ . ',
            'password.required'=>'Mật khẩu không thể để trống',
            'password.min'=>'Mật khẩu chứa ít nhất 8 kí tự',
            'password.max'=>'Mật khẩu chứa nhiều nhất 30 kí tự',
        ]);
        $email =$check['email'];
        $password = $check['password'];
        $user = User::where('email', $request->email)->first();
        if(!$user || !Hash::check($password, $user->password)){
            return redirect()->route('login')->with('tb','Tên tài khoản hoặc mật khẩu không chính xác');
        } else {
            Auth::login($user);
			return redirect()->route('dashboard');
        }
    }

    public function githubredirect(Request $request)
    {
        return Socialite::driver('github')->redirect();
    }

    public function githubcallback(Request $request)

    {
        $userdata = Socialite::driver('github')->user();
        $user = User::where('email', $userdata->email)->where('auth_type','github')->first();
        if($user)
        {
            // do login
            Auth::login($user);
        return redirect()->route('dashboard');
        }
        else
        {
            // do register
        $uuid = Str::uuid()->toString();

        $user =  new User();
        $user->nickname= $userdata->nickname;
        $user->name = $userdata->name;
        $user->email = $userdata->email;
        $user->avatar = $userdata->avatar;
        $user->password = Hash::make($uuid.now());
        $user->auth_type = 'github';
        $user->save();
        Auth::login($user);
        return redirect()->route('dashboard');
        }
    }


    // google
    public function googleredirect(Request $request)
    {
        return Socialite::driver('google')->redirect();
    }

    public function googlecallback(Request $request)

    {
        $userdata = Socialite::driver('google')->user();
        $user = User::where('email', $userdata->email)->where('auth_type','google')->first();
        if($user)
        {
            // do login
            Auth::login($user);
        return redirect()->route('dashboard');
        }
        else
        {
            // do register
        $uuid = Str::uuid()->toString();

        $user =  new User();
        $user->nickname= ($userdata->nickname == "")?$userdata->name:$userdata->nickname;
        $user->name = $userdata->name;
        $user->email = $userdata->email;
        $user->avatar = $userdata->avatar;
        $user->password = Hash::make($uuid.now());
        $user->auth_type = 'google';
        $user->save();
        Auth::login($user);
        return redirect()->route('dashboard');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
