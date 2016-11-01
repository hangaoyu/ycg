<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Overtrue\Socialite\SocialiteManager;

class UserController extends Controller
{
    //
    public function weibo()
    {
        $socialite = new SocialiteManager(config('services'));
        return $socialite->driver('weibo')->redirect();
    }

    public function weibo_back()
    {
        $socialite = new SocialiteManager(config('services'));
        $weibo = $socialite->driver('weibo')->user();
        $email = $weibo->getEmail() ? $weibo->getEmail() : bcrypt(str_random(16));
        $name = $weibo->getNickname();
        $token = md5($weibo->getId());
        $user = User::where('remember_token', $token)->first();
        if (!$user) {
            $user = User::create(
                [
                    'type'=>'user',
                    'name' => $name,
                    'email' => $email,
                    'password' => bcrypt(str_random(16)),
                    'remember_token'=>$token,
                ]
            );
            Auth::login($user);
            return redirect('/');
        } else {
            Auth::login($user);
            return redirect('/');
        }
    }

    public function qq()
    {
        $socialite = new SocialiteManager(config('services'));
        return $socialite->driver('qq')->redirect();
    }

    public function qq_back()
    {
        $socialite = new SocialiteManager(config('services'));
        $qq = $socialite->driver('qq')->user();
        dd($qq);
        $email = $qq->getEmail() ? $qq->getEmail() : bcrypt(str_random(16));
        $name = $qq->getNickname();
        $token = md5($qq->getId());
        $user = User::where('remember_token', $token)->first();
        if (!$user) {
            $user = User::create(
                [
                    'type'=>'user',
                    'name' => $name,
                    'email' => $email,
                    'password' => bcrypt(str_random(16)),
                    'remember_token'=>$token,
                ]
            );
            Auth::login($user);
            return redirect('/');
        } else {
            Auth::login($user);
            return redirect('/');
        }
    }
}
