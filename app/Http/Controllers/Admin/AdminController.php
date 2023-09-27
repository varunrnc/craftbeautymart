<?php

namespace App\Http\Controllers\Admin;

use App\Helper\ApiRes;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::guard('admin')->user()) {
            return view('admin.dashboard');
        } else {
            return redirect()->intended('/admin/login');
        }
    }

    public function registerLoad()
    {
        if (Auth::guard('admin')->user()) {
            return redirect()->intended('/admin/dashboard');
        } else {
            return view('admin.auth.register');
        }
    }

    public function register(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:admins|max:255',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8'
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->first('name')) {
                return ApiRes::failed($errors->first('name'));
            } else if ($errors->first('email')) {
                return ApiRes::failed($errors->first('email'));
            } else if ($errors->first('password')) {
                return ApiRes::failed($errors->first('password'));
            } else if ($errors->first('password_confirmation')) {
                return ApiRes::failed($errors->first('password_confirmation'));
            }
        }

        $ad = new Admin();
        $ad->name =  $req->name;
        $ad->email =  $req->email;
        $ad->password =  $req->password;
        $status =  $ad->save();
        if ($status) {
            return redirect()->intended('/admin/login');
        } else {
            return ApiRes::error();
        }
    }
    public function loginLoad()
    {
        if (Auth::guard('admin')->user()) {
            return redirect()->intended('/admin/dashboard');
        } else {
            return view('admin.auth.login');
        }
    }
    public function login(Request $req)
    {
        $admin = Admin::Where('email', $req->only('email'))->Where('status', '1')->first();

        if ($admin == null) {
            return redirect()->back()->withErrors(['error' => 'Account not active']);
        }

        $credentials = $req->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials, $req->boolean('remember'))) {

            return redirect()->intended('/admin/dashboard');
        } else {
            return redirect()->back()->withErrors(['error' => 'Invalid credentials']);
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('./');
    }


}
