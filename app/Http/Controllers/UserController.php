<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\User\User;

use Carbon\Carbon;
use DB;
use Auth;
use Hash;
use Validator;
use View;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    public function fund_overview(){

        $fund_identities = FundIdentity::all();

        $data_array = [
            'fund_identities' => $fund_identities
        ];
        return view('website.fund_overview',$data_array);
    }

    public function getAdminDashboard(){
        return view('admin.dashboard');
    }

    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6|max:30'
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error]);
            }
        }
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
                return redirect('dashboard')->withErrors('Congrats! you have been logged into system successfully.');
        }

        return redirect()->back()->withErrors('Sorry your email/password is incorrect');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'confirm-password' => 'required|same:password',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                return redirect()->back()->withErrors([$error]);
            }
        }

        $user = User::create([
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'role_key' => 2
        ]);

        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return redirect('dashboard')->withErrors('Congrats! you have been registered system successfully.');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
