<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class loginController extends Controller
{
public function register(Request $request)
    {
        // Validar los datos

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        Auth::login($user);

        $request->user()->sendEmailVerificationNotification();

        return redirect(route('login'));
    }

    public function login(Request $request)
    {

        // Validacion
        $credentials = [
            "email" => $request->email,
            "password" => $request->password,
        ];

        $remember = ($request->has('remember') ? true : false);

        if (Auth::attempt($credentials, $remember)) {

            $request->session()->regenerate();

            return redirect()->route('home');
        } else {
            return redirect(route('loginFailed'));
        }
    }


    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function forgot_password(){
        return view('forgot-password');
    }

    public function sendEmail_password(Request $request) {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
                    ? back()->with(['status' => ($status)])
                    : back()->withErrors(['email' => ($status)]);
    }

    public function showResetForm($token)
    {
        return view('reset-password', ['token' => $token]);
    }

    public function reset_password(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->password = Hash::make($password);
                $user->save();
            }
        );

        return $status === Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', ($status))
                    : back()->withErrors(['email' => [($status)]]);
    }
}