<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\OtpSms;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    public function login(Request $request)
    {


        if ($request->method() == 'GET') {
            return view('home.login');
        }

        $request->validate([

            'cellphone' => 'required|iran_mobile'

        ]);



        $user = User::where('cellphone', $request->cellphone)->first();

        try {

            $otpCode = mt_rand(1000, 9999);
            $login_token = Hash::make('asd#!@#1daksd;ak*&ASDAs');

            if ($user) {

                $user->update([

                    'otp' => $otpCode,
                    'login_token' => $login_token

                ]);
            } else {

                $user = User::Create([

                    'cellphone' => $request->cellphone,
                    'otp' => $otpCode,
                    'login_token' => $login_token

                ]);
            }

            $user->notify(new OtpSms($otpCode));

            return response(['login_token' => $login_token], 200);
        } catch (Exception $e) {

            return response(['error' => $e->getMessage()], 422);
        }
    }

    public function check(Request $request)
    {

        $request->validate([

            'otp' => 'required|digits:4',
            'login_token' => 'required'

        ]);

        try {

            $user = User::where('login_token', $request->login_token)->firstOrFail();

            if ($user->otp == $request->otp) {
                auth()->login($user, $remember = true);

                return response(['login' => 'شما وارد شدید'], 200);
            } else {

                return response(['errors' => ['otp' => ['کد وارد شده مطابقت ندارد']]], 422);
            }
        } catch (Exception $e) {

            return response(['error' => $e->getMessage()], 422);
        }
    }

    public function resend(Request $request)
    {

        $request->validate([

            'login_token' => 'required'

        ]);



        $user = User::where('login_token', $request->login_token)->first();

        try {

            $otpCode = mt_rand(1000, 9999);
            $login_token = Hash::make('asd#!@#1daksd;ak*&ASDAs');

            $user->update([

                'otp' => $otpCode,
                'login_token' => $login_token

            ]);

            $user->notify(new OtpSms($otpCode));

            return response(['login_token' => $login_token], 200);
        } catch (Exception $e) {

            return response(['error' => $e->getMessage()], 422);
        }
    }

    public function editPhoneNumber(Request $request)
    {

        $request->validate([

            'login_token' => 'required'

        ]);



        $user = User::where('login_token', $request->login_token)->first();

        try {

            $otpCode = mt_rand(1000, 9999);
            $login_token = Hash::make('asd#!@#1daksd;ak*&ASDAs');


            $user->update([

                'otp' => $otpCode,
                'login_token' => $login_token

            ]);

            $user->notify(new OtpSms($otpCode));

            return response(['login_token' => $login_token], 200);
        } catch (Exception $e) {

            return response(['error' => $e->getMessage()], 422);
        }
    }

    public function checkeditNumber(Request $request)
    {

        $request->validate([

            'otp' => 'required|digits:4',
            'login_token' => 'required'

        ]);

        try {

            $user = User::where('login_token', $request->login_token)->firstOrFail();

            if ($user->otp == $request->otp) {
                $user->update([

                    'cellphone' => $request->cellphone

                ]);

                alert()->success('شماره با موفقیت ویرایش شد', '');
                return response(['login' => 'شماره موبایل ویرایش'], 200);

            } else {

                return response(['errors' => ['otp' => ['کد وارد شده مطابقت ندارد']]], 422);
            }
        } catch (Exception $e) {

            return response(['error' => $e->getMessage()], 422);
        }
    }
}
