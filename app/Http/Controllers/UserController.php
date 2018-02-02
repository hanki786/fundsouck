<?php

namespace App\Http\Controllers;

use App\Models\FundShells\FundAssetAttributes;
use App\Models\FundShells\FundBenchmarks;
use App\Models\FundShells\FundClassificationBenchmark;
use App\Models\FundShells\FundClassificationScheme;
use App\Models\FundShells\FundKeyAttributes;
use App\Models\FundShells\FundObjectiveStrategy;
use App\Models\FundShells\FundSalesDistribution;
use App\Models\FundShells\Redemption;
use App\Models\FundShells\Subscription;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\User\User;
use App\Models\FundShells\FundIdentity;

use Carbon\Carbon;
use DB;
use Auth;
use Hash;
use Validator;
use View;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    public function fund_overview(Request $request){

        $fund_identities = FundIdentity::all();

        $fi = FundIdentity::whereId($request['fund_identity_id'])->first();
        $fos = FundObjectiveStrategy::whereFundIdentityId($request['fund_identity_id'])->first();
        $faa = FundAssetAttributes::whereFundIdentityId($request['fund_identity_id'])->first();
        $fcb = FundClassificationScheme::whereFundIdentityId($request['fund_identity_id'])->first();
        $fcb1 = FundBenchmarks::whereFundIdentityId($request['fund_identity_id'])->first();
        $fka = FundKeyAttributes::whereFundIdentityId($request['fund_identity_id'])->first();
        $fsd = FundSalesDistribution::whereFundIdentityId($request['fund_identity_id'])->first();
        $s = Subscription::whereFundIdentityId($request['fund_identity_id'])->first();
        $r = Redemption::whereFundIdentityId($request['fund_identity_id'])->first();

        $data_array = [
            'fund_identity_id' => $request['fund_identity_id'],
            'fund_identities' => $fund_identities,
            'fi' => $fi,
            'fos' => $fos,
            'faa' => $faa,
            'fcb' => $fcb,
            'fcb1' => $fcb1,
            'fka' => $fka,
            'fsd' => $fsd,
            's' => $s,
            'r' => $r,
        ];
        return view('website.fund_overview',$data_array);
    }

    public function getAdminDashboard(){
        $fund_identities = FundIdentity::all();
        $fund_objective_strategies = FundObjectiveStrategy::all();

        $data_array = [
            'fund_identities' => $fund_identities,
            'fund_objective_strategies' => $fund_objective_strategies
        ];
        return view('admin.dashboard',$data_array);
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
