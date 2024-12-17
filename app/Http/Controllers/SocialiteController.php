<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use Illuminate\Support\Facades\Auth;

class SocialiteController extends Controller
{
    public function redirectFacebook(){
        return Socialite::driver('facebook')->redirect();
    }

    public function callbackFacebook(){
        try {
            $facebookUser = Socialite::driver('facebook')->user();
            $userExists = User::where ('external_id', $facebookUser->id)->where('external_auth','facebook')->first();

            if ($userExists){
                Auth::login($userExists);
                
            }else{
                $newUser = User::create([
                    'name' => $facebookUser->name,
                    'email' => $facebookUser->email,
                    'avatar'=> $facebookUser->avatar,
                    'external_id' => $facebookUser->id,
                    'external_auth'=> 'facebook'
                ]);
                Auth::login($newUser);
            }
            return redirect()->intended('/index');
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    public function redirectGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle(){
        try {
            $googleUser = Socialite::driver('google')->user();
            $userExists = User::where ('external_id', $googleUser->id)->where('external_auth','google')->first();

            if ($userExists){
                Auth::login($userExists);
                
            }else{
                $newUser = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'avatar'=> $googleUser->avatar,
                    'external_id' => $googleUser->id,
                    'external_auth'=> 'google'
                ]);
                Auth::login($newUser);
            }
            return redirect()->intended('/index');
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}