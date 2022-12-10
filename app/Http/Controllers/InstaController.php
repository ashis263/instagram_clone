<?php

namespace App\Http\Controllers;

use App\Models\instagram_clone;
use App\Models\photos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class InstaController extends Controller
{
    public function index()
    {
        return view('/index')->with(["errorMessage"=>""]);
    }
    public function signup()
    {
        return view('/signup')->with('errorMessage', '')->with('successMessage', '');
    }
    public function login(Request $req)
    {
        $emailOrPhone = $req->emailorphone;
        $password = $req->password;
        $user=instagram_clone::where('emailOrPhone', $emailOrPhone)->first();
        if(!isset($user)) return view("/index")->with('errorMessage' , 'Incorrect phone number or email')->with('successMessage', '');
        $hashed= $user->password;
        $id=$user->id;
        $url="/home/".strval($id);
        if(Hash::check($password, $hashed)){
            $rememberToken=$this->generateRandomString(5);
            $user->rememberToken=$rememberToken;
            $user->save();
            $cookie = Cookie::make($emailOrPhone,$rememberToken);
            return redirect($url)->withCookie($cookie);
        }else{
            return view("/index")->with('errorMessage' , 'Incorrect Password')->with('successMessage', '');
        }
    }
    public function saveUser(Request $_request)
    {
        $emailOrPhone = $_request->input('emailOrPhone');
        $dupEmailOrPhone = DB::table('users')->where('emailOrPhone', $emailOrPhone)->first();
        if($dupEmailOrPhone){
            return view('/signup')->with('errorMessage', 'Already registered! Please login!')->with('successMessage', '');
        }
        $username = $_request->input('username');
        $dupUsername = DB::table('users')->where('username', $username)->first();
        if($dupUsername){
            return view('/signup')->with('errorMessage', 'Username already exists, choose another one!')->with('successMessage', '');
        }
        $fullname = $_request->input('fullname');
        $dp = $_request->file('dp');
        $dpname = $dp->getClientOriginalName();
        Storage::putFileAs('public/images/dp', $_request->file('dp'), $dpname);
        $password = Hash::make($_request->input('password'));

        $user = new instagram_clone();

        $user->emailOrPhone = $emailOrPhone;
        $user->username = $username;
        $user->fullname = $fullname;
        $user->password = $password;
        $user->dp = $dpname;
        $user->rememberToken = "";

        $user->save();

        return view('/signup')->with('errorMessage', '')->with('successMessage', 'Signup Successful, please login!');
    }
    public function home($id)
    {
        $user = instagram_clone::find($id);
        $photos = photos::all();
        $emailOrPhone = $user->emailOrPhone;
        $savedRememberToken=$user->rememberToken;
        $cookieRememberToken=Cookie::get($emailOrPhone);
        if($savedRememberToken==$cookieRememberToken){
            return view('/home', ['instagram_clone' => $user, 'photos' => $photos]);
        }else{
            return redirect('/');
        }
    }
    public function profile($id)
    {
        $user = instagram_clone::find($id);
        $photos = $user->photos;
        $emailOrPhone=$user->emailOrPhone;
        $savedRememberToken=$user->rememberToken;
        $cookieRememberToken=Cookie::get($emailOrPhone);
        if($savedRememberToken==$cookieRememberToken){
            return view('/profile', ['instagram_clone' => $user, 'photos' => $photos]);
        }else{
            return redirect('/');
        }
    }

    private function generateRandomString($length = 10) {
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }

    public function logout($id){
        $data= instagram_clone::find($id);

        Cookie::queue(Cookie::forget($data->emailOrPhone));

        return redirect('/');
    }

    public function upload(Request $req, $id){
        $filename=$req->file('photo')->getClientOriginalName();
        $photo= new photos();
        $photo->users_id=$id;
        $photo->filename=$filename;
        $photo->save();
        Storage::putFileAs('public/images/', $req->file('photo'), $filename);
        return back();
    }
}
